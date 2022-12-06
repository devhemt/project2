<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $product;

    public function showQuickView($id) {
        $this->emit('idView', $id);
    }

    public function render()
    {
        $this->product = DB::table('items')
        ->join('category', 'items.prd_id','=', 'category.prdid')
        ->select('items.*','category.categories')
        ->orderBy('items.prd_id')
        ->limit(8)
        ->get();
        return view('livewire.client.index');
    }
}
