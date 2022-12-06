<?php

namespace App\Http\Livewire;

use App\Models\Items;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Showproduct extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $test = [];
    public $prd;
    public $stockfirst = [],$percentfirst = [];
    public $stocklast = [],$percentlast = [];


    public function render()
    {
        $this->prd = Items::all();
        foreach ($this->prd as $p){
            $batchall = DB::table('batch_price')
                ->where('prdid',$p->prd_id)
                ->latest('created_at')->first();
            $batchlast = $batchall->batch;
            $batchfirst = $batchlast - 1 ;

            $batchfirstamount = DB::table('batch_price')
                ->where('prdid',$p->prd_id)
                ->where('batch','=',$batchfirst)
                ->first();
            $batchlastamount = DB::table('batch_price')
                ->where('prdid',$p->prd_id)
                ->where('batch','=',$batchlast)
                ->first();

            $countlast = DB::table('properties')
                ->where('itemsid', $p->prd_id)
                ->where('batch' , $batchlast)
                ->get();
            $countlastout = 0;
            foreach ($countlast as $c){
                $countlastout += $c->amount;
            }
            $this->stocklast[$p->prd_id] = $countlastout;
            $this->percentlast[$p->prd_id] = ($countlastout/$batchlastamount->batch_amount)*100;


            if ($batchfirstamount != null ){
                $countfirst = DB::table('properties')
                    ->where('itemsid', $p->prd_id)
                    ->where('batch' , $batchfirst)
                    ->get();
                $countfirstout = 0;
                foreach ($countfirst as $c){
                    $countfirstout += $c->amount;
                }
                $this->stockfirst[$p->prd_id] = $countfirstout;
                $this->percentfirst[$p->prd_id] = ($countfirstout/$batchfirstamount->batch_amount)*100;
            }

        }

        return view('livewire.admin.showproduct',[
            'products' => Items::latest()->paginate(10),
        ]);
    }
}
