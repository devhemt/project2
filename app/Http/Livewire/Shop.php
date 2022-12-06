<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class Shop extends Component
{
    protected $listeners = ['bestSell','default','CategorySearch','searchResult'];

    public $product;
    public $bestsell = false;
    public $categorysearch = false;
    public $cateId;
    public $searchflag = false;
    public $search;

    public function searchResult($autoSearch)
    {
        $this->searchflag = true;
        $this->categorysearch = false;
        $this->search = $autoSearch;
    }

    public function showQuickView($id) {
        $this->emit('idView', $id);
    }

    public function CategorySearch($category){
        $this->categorysearch = true;
        $this->cateId = $category;
        $this->searchflag = false;
    }

    public function bestSell(){
        $this->bestsell = true;
    }

    public function default(){
        $this->bestsell = false;
    }

    public function render()
    {
        if ($this->bestsell == false && $this->categorysearch == false && $this->searchflag == true) {
            $this->product = DB::table('items')
            ->join('category', 'items.prd_id','=', 'category.prdid')
            ->select('items.*','category.categories')
            ->where('items.name','like','%'.str_replace(' ', '',$this->search).'%')
            ->orderByDesc('items.prd_id')
            ->limit(20)
            ->get();
        }

        if ($this->bestsell && $this->categorysearch == false && $this->searchflag == true) {
            $this->product = DB::table('items')
            ->join('category', 'items.prd_id','=', 'category.prdid')
            ->select('items.*','category.categories')
            ->where('items.name','like', '%'.str_replace(' ', '',$this->search).'%')
            ->limit(20)
            ->get()
            ->sortBy('prd_id')
            ;
        }

        if ($this->bestsell == false && $this->categorysearch == true && $this->searchflag == false) {
            $this->product = DB::table('items')
            ->join('category', 'items.prd_id','=', 'category.prdid')
            ->select('items.*','category.categories')
            ->where('category.categories', $this->cateId)
            ->orderByDesc('items.prd_id')
            ->limit(20)
            ->get();
        }

        if ($this->bestsell && $this->categorysearch == true && $this->searchflag == false) {
            $this->product = DB::table('items')
            ->join('category', 'items.prd_id','=', 'category.prdid')
            ->select('items.*','category.categories')
            ->where('category.categories', $this->cateId)
            ->limit(20)
            ->get()
            ->sortBy('prd_id')
            ;
        }

        if ($this->bestsell == false && $this->categorysearch == false && $this->searchflag == false) {
            $this->product = DB::table('items')
            ->join('category', 'items.prd_id','=', 'category.prdid')
            ->select('items.*','category.categories')
            ->orderByDesc('items.prd_id')
            ->limit(20)
            ->get();
        }


        if ($this->bestsell && $this->categorysearch == false && $this->searchflag == false) {
            $this->product = DB::table('items')
            ->join('category', 'items.prd_id','=', 'category.prdid')
            ->select('items.*','category.categories')
            ->limit(20)
            ->get()
            ->sortBy('prd_id')
            ;
        }

        foreach ($this->product as $p){
            $now = Carbon::now();
            if ($now->diffInDays(Carbon::parse((date("Y-m-d g:i:s", strtotime($p->created_at)))))<30) {
                $p->created_at = 'true';
            };
        }

        $this->bestsell;
        return view('livewire.client.shop',['product'=>$this->product]);
    }


}
