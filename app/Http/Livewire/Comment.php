<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Comment extends Component
{
    public $prd_id;
    public $cmt;

    protected $rules = [
        'cmt'=> 'required|max:300'
    ];

    public function updated($cmt)
    {
        $this->validateOnly($cmt);
    }

    public function addCmt(){
        $validatedData = $this->validate();
        if (Auth::guard("customer")->check()){
            $userId = Auth::guard("customer")->id();
            $checkcmt = DB::table('comments')
                ->where('itemsid', $this->prd_id)
                ->where('cus_id', $userId)
                ->first();
            $checkitem = DB::table('invoice')
                ->join('detail_invoice', 'invoice.invoice_id','=', 'detail_invoice.invoice_id')
                ->select('detail_invoice.itemsid','invoice.cusid')
                ->where('detail_invoice.itemsid', $this->prd_id)
                ->where('invoice.cusid', $userId)
                ->first();
            if ($checkcmt != null){
                $this->addError('noacc', 'You have commented on this product.');
            }
            if ($checkitem == null){
                $this->addError('noacc', 'You have never purchased this product.');
            }
            if ($checkitem != null && $checkcmt == null){
                $cmtin = \App\Models\Comment::create([
                    'itemsid' => $this->prd_id,
                    'cus_id' => $userId,
                    'comment' => $this->cmt
                ]);
                $this->cmt == null;
            }
        }else{
            $this->addError('noacc', 'You do not have account.');
        }

    }

    public function render()
    {
        return view('livewire.client.comment');
    }
}
