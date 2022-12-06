<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Takeinfor extends Component
{
    protected $listeners = ['showTakeInfor'];
    public $top = null;

    public function showTakeInfor(){
        $this->top = 0;
    }

    public function close(){
        $this->top = null;
    }

    public function render()
    {
        return view('livewire.client.takeinfor');
    }
}
