<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Noprocessorder extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {

        return view('livewire.admin.noprocessorder',[
            'order'=> DB::table('invoice')
                ->join('status', 'invoice.invoice_id','=', 'status.invoice_id')
                ->join('customer', 'invoice.cusid','=', 'customer.cus_id')
                ->select('invoice.*','status.status','customer.name','customer.phone','customer.email','customer.address')
                ->where('status.status', 1)
                ->paginate(1),
        ]);
    }
}
