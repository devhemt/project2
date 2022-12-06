<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Quickview extends Component
{
    protected $listeners = ['idView'];
    public $prdQV;
    public $getid,$thisid;
    public $name,$price,$imagein;
    public $sizes,$colors,$colorclass = null;
    public $getsize;
    public $color;
    public $quantity = 1;
    public $checked = 'Stock';
    public $open = null;

    public function updated($quantity)
    {
        if($this->getsize == null){
            $trim = trim($this->sizes);
            $size = explode(" ",$trim);
            $this->getsize = $size[0];
        }
        if($this->color == null){
            $trim = trim($this->colors);
            $colorch = explode(" ",$trim);
            $this->color = $colorch[0];
        }
        $detail = DB::table('properties')
            ->where('itemsid','=',$this->thisid)
            ->where('size','=',$this->getsize)
            ->where('color','=',$this->color)
            ->get();
        $totalamount = 0;
        foreach ($detail as $d){
            $totalamount += $d->amount;
        }
        if ($this->quantity >= $totalamount){
            $this->checked = 'Sold out';
            $this->quantity = $totalamount;
        }
        if ($this->quantity < $totalamount){
            $this->checked = 'Stock';
        }
    }

    public function getColor($input){
        $this->color = $input;
        $this->colorclass = "active";
    }

    public function addcart(){
        if($this->getsize == null){
            $trim = trim($this->sizes);
            $size = explode(" ",$trim);
            $this->getsize = $size[0];
        }
        if($this->color == null){
            $trim = trim($this->colors);
            $colorch = explode(" ",$trim);
            $this->color = $colorch[0];
        }
        // issue the same prd but not the same color and size will be solved by checkall

//        $sessionId = Session::getId();
//        dd($sessionId);
        if (Auth::guard("customer")->check()){
            $userId = Auth::guard("customer")->id();
            Cart::session($userId);
        }else{
            $userId = Session::getId();
        }
        Cart::add([
            'id' => $this->thisid,
            'name' => $this->name,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'attributes' => array(
                0 => array(
                    'color' => $this->color,
                    'size' => $this->getsize,
                    'image' => $this->imagein,
                )
            )
        ]);
        $this->emit('loadsmallcart');
    }

    public function idView($id)
    {
        $this->getid = $id;
        $this->open = "open";
    }

    public function render()
    {
        $this->prdQV = DB::table('items')
            ->join('total_property', 'items.prd_id','=', 'total_property.itemsid')
            ->select('items.*','total_property.sizes','total_property.colors')
            ->where('prd_id', $this->getid)->get();
        foreach ($this->prdQV as $p){
            $this->thisid = $p->prd_id;
            $this->sizes = $p->sizes;
            $this->colors = $p->colors;
            $this->name = $p->name;
            $this->price = $p->price;
            $this->imagein = $p->demoimage;
        }

        return view('livewire.client.quickview',['prdQV' => $this->prdQV,'showchose'=>$this->color,'thisid'=>$this->thisid]);
    }
}
