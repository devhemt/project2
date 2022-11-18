<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Quickview extends Component
{
    protected $listeners = ['idView'];
    public $prdQV;
    public $name;

    public function idView($id)
    {
        $this->prdQV = DB::table('items')->where('prd_id', $id)->get();
    }
    
    public function render()
    {    
        return view('livewire.quickview',['prdQV' => $this->prdQV,]);
    }
}
