<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sortlist extends Component
{
    public $options = ['default sort','best selling'];
    public $status;
    public function render()
    {
        if($this->status != null && $this->status =='best selling'){
            $this->emit('bestSell');
        }

        if($this->status != null && $this->status =='default sort'){
            $this->emit('default');
        }

        return view('livewire.client.sortlist');
    }
}
