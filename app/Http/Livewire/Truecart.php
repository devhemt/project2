<?php

namespace App\Http\Livewire;

use App\Models\Detail_invoice;
use App\Models\Invoice;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\DB;

class Truecart extends Component
{
    protected $listeners = ['loadtruecart'];
    public $resultCode;
    public $cart;
    public $totalquantity = 0;
    public $total;
    public $checked = [];
    public $deliverymethod = 'Default delivery $5';
    public $options = ['Default delivery $5','Fast delivery $5','Super fast delivery $25'];


    public function loadtruecart(){}

    public function deleteCartItem($itemsid){
        if (Auth::guard("customer")->check()){
            $userId = Auth::guard("customer")->id();
            Cart::session($userId);
        }else{
            $userId = Session::getId();
        }
        Cart::remove($itemsid);
        $this->emit('loadsmallcart');
    }

    public function checkInvoice($prd_id){
        $product = DB::table('detail_invoice')
            ->join('invoice', 'detail_invoice.invoice_id','=', 'invoice.invoice_id')
            ->join('status', 'invoice.invoice_id','=', 'status.invoice_id')
            ->select('detail_invoice.*','status.status')
            ->where('detail_invoice.itemsid','=', $prd_id)
            ->get();

        $totalamount = 0;
        foreach ($product as $c){
            $totalamount += $c->amount;
        }

        return $totalamount;
    }

    public function checkBatch($prd_id,$batch){
        $prdbatch = DB::table('batch_price')
                ->where('prdid','=',$prd_id)
                ->where('batch','=',$batch)
                ->get();

        $totalamount = $prdbatch[0]->batch_amount;


        return $totalamount;
    }

    public function register(){
        if (Auth::guard("customer")->check()){
            $userId = Auth::guard("customer")->id();
            Cart::session($userId);
            $this->total = Cart::getTotal();
            if (Cart::isEmpty()){
                dd("mua hang di dm");
            }else{
                $cartin = Cart::getContent()->toArray();
                $flagcountcheck = false;
                foreach ($cartin as $c){
                    $detail = DB::table('properties')
                        ->where('itemsid','=',$c['id'])
                        ->where('size','=',$c['attributes'][0]['size'])
                        ->where('color','=',$c['attributes'][0]['color'])
                        ->get();

                    $totalamount = 0;
                    foreach ($detail as $d){
                        $totalamount += $d->amount;
                    }
                    if ($c['quantity']>$totalamount){
                        $this->checked[$c['id']] = 'The product in the order has exceeded the number of products left in stock';
                        $flagcountcheck = true;
                    }
                }
                if ($flagcountcheck){
                    $this->redirect('cart');
                }
                $items = Invoice::create([
                    'cusid' => $userId,
                    'pay' => $this->total,
                    'payment' => 'cash',
                    'delivery' => $this->deliverymethod
                ]);
                $idinvoice = DB::table('invoice')->latest('created_at')->first();
                $status = Status::create([
                    'invoice_id'=> $idinvoice->invoice_id,
                    'status'=> 1,
                ]);

                foreach ($cartin as $c){
                    $prdbatch = DB::table('batch_price')
                        ->where('prdid','=',$c['id'])
                        ->get();
                    $length = count($prdbatch);
                    $check = 0;
                    $start;
                    $end;
                    $input1;
                    for ($i=1;$i<=$length;$i++){
                        $check += $this->checkBatch($c['id'],$i);
                        if ($this->checkInvoice($c['id'])<$check){
                            $start = $i;
                            $input1 = $check - $this->checkInvoice($c['id']);
                        }
                        if (($this->checkInvoice($c['id'])+$c['quantity'])<=$check){
                            $end = $i;
                            if ($start == $end){
                                $batch1 = DB::table('batch_price')
                                    ->where('prdid','=',$c['id'])
                                    ->where('batch','=',$start)
                                    ->get();

                                $cost1 = $batch1['0']->cost;
                                $detail1 = Detail_invoice::create([
                                    'itemsid'=> $c['id'],
                                    'invoice_id'=> $idinvoice->invoice_id,
                                    'size'=> $c['attributes'][0]['size'],
                                    'color'=> $c['attributes'][0]['color'],
                                    'amount'=> $c['quantity'],
                                    'price_one'=> $c['price'],
                                    'cost_one'=> $cost1,
                                ]);
                                $change = DB::table('properties')
                                    ->where('size','=', $c['attributes'][0]['size'])
                                    ->where('color','=', $c['attributes'][0]['color'])
                                    ->where('batch','=', $start )
                                    ->decrement('amount', $c['quantity']);
                            }else{
                                $input2 = $c['quantity'] - $input1;
                                $batch1 = DB::table('batch_price')
                                    ->where('prdid','=',$c['id'])
                                    ->where('batch','=',$start)
                                    ->get();
                                $cost1 = $batch1['0']->cost;
                                $batch2 = DB::table('batch_price')
                                    ->where('prdid','=',$c['id'])
                                    ->where('batch','=',$end)
                                    ->get();
                                $cost2 = $batch2['0']->cost;
                                $detail1 = Detail_invoice::create([
                                    'itemsid'=> $c['id'],
                                    'invoice_id'=> $idinvoice->invoice_id,
                                    'size'=> $c['attributes'][0]['size'],
                                    'color'=> $c['attributes'][0]['color'],
                                    'amount'=> $input1,
                                    'price_one'=> $c['price'],
                                    'cost_one'=> $cost1,
                                ]);
                                $detail2 = Detail_invoice::create([
                                    'itemsid'=> $c['id'],
                                    'invoice_id'=> $idinvoice->invoice_id,
                                    'size'=> $c['attributes'][0]['size'],
                                    'color'=> $c['attributes'][0]['color'],
                                    'amount'=> $input2,
                                    'price_one'=> $c['price'],
                                    'cost_one'=> $cost2,
                                ]);
                                $change1 = DB::table('properties')
                                    ->where('size','=', $c['attributes'][0]['size'])
                                    ->where('color','=', $c['attributes'][0]['color'])
                                    ->where('batch','=', $start )
                                    ->decrement('amount', $input1);
                                $change2 = DB::table('properties')
                                    ->where('size','=', $c['attributes'][0]['size'])
                                    ->where('color','=', $c['attributes'][0]['color'])
                                    ->where('batch','=', $end )
                                    ->decrement('amount', $input2);
                            }
                            Cart::clear();
                            $this->emit('loadsmallcart');
                            break;
                        }
                    }

                }

            }
        }else{
            $this->emit('showTakeInfor');
        }
    }

    public function minus($id){
        if (Auth::guard("customer")->check()){
            $userId = Auth::guard("customer")->id();
            Cart::session($userId);
        }else{
            $userId = Session::getId();
        }
        $thiscartquantity = Cart::get($id);
        $minus = $thiscartquantity['quantity'];
        $minus--;

        if ($minus == 0){
            Cart::update($id, array(
                'quantity' => array(
                    'relative' => false,
                    'value' => 1
                ),
            ));
        }else{
            $detail = DB::table('properties')
                ->where('itemsid','=',$id)
                ->where('size','=',$thiscartquantity['attributes'][0]['size'])
                ->where('color','=',$thiscartquantity['attributes'][0]['color'])
                ->get();

            $totalamount = 0;
            foreach ($detail as $d){
                $totalamount += $d->amount;
            }

            if ($minus >= $totalamount){
                $this->checked[$id] = 'Sold out';
                Cart::update($id, array(
                    'quantity' => array(
                        'relative' => false,
                        'value' => $totalamount
                    ),
                ));
            }
            if ($minus < $totalamount){
                $this->checked[$id] = 'Stock';
                Cart::update($id, array(
                    'quantity' => -1,
                ));
            }

        }
        $this->emit('loadsmallcart');
    }

    public function plus($id){
        if (Auth::guard("customer")->check()){
            $userId = Auth::guard("customer")->id();
            Cart::session($userId);
        }else{
            $userId = Session::getId();
        }
        $thiscartquantity = Cart::get($id);
        $plus = $thiscartquantity['quantity'];
        $plus++;

        $detail = DB::table('properties')
            ->where('itemsid','=',$id)
            ->where('size','=',$thiscartquantity['attributes'][0]['size'])
            ->where('color','=',$thiscartquantity['attributes'][0]['color'])
            ->get();

        $totalamount = 0;
        foreach ($detail as $d){
            $totalamount += $d->amount;
        }

        if ($plus > $totalamount){
            $this->checked[$id] = 'Sold out';
        }
        if ($plus <= $totalamount){
            $this->checked[$id] = 'Stock';
            Cart::update($id, array(
                'quantity' => 1,
            ));
            $this->emit('loadsmallcart');
        }

    }

    public function render()
    {
        if (Auth::guard("customer")->check()){
            $userId = Auth::guard("customer")->id();
            Cart::session($userId);
        }else{
            $userId = Session::getId();
        }
        $this->cart = Cart::getContent()->toArray();
        $this->total = Cart::getTotal();

        $this->totalquantity = 0;
        foreach ($this->cart as $c){
            $this->totalquantity++ ;
        }


        return view('livewire.client.truecart');
    }
}
