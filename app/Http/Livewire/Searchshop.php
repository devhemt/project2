<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Searchshop extends Component
{
    public $searching = "";
    public $autoSearch;

    public function search(){
        $this->emit('searchResult', $this->autoSearch);
    }

    public function find($category){
        switch ($category) {
            case 1:
                $this->searching = "Man clothing";
                break;
            case 2:
                $this->searching = "Women clothing";
                break;
            case 3:
                $this->searching = "Kid clothing";
                break;
            case 4:
                $this->searching = "Accessories clothing";
                break;
            case 5:
                $this->searching = "Others clothing";
                break;
        }
        $this->emit('CategorySearch', $category);
    }

    public function render()
    {
        return view('livewire.searchshop');
    }
}
