<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Provideds;
use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Properties;
use App\Models\Totalproperty;
use App\Models\Category;
use App\Models\Batchprice;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.showproduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.addproduct');
    }

    public function batch()
    {
        return view('admin.product.addbatch');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'prd_name' => 'required|unique:items,name|max:200',
            'prd_cost_price' => 'required',
            'prd_price' => 'required',
            'prd_category' => 'required',
            'prd_tag' => 'required',
            'prd_brand'=> 'required|max:200',
            'provided_name'=> 'required',
            'provided_phone'=> 'required',
            'provided_address'=> 'required',
            'prd_size' => 'required|max:20',
            'prd_color' => 'required|max:20',
            'prd_amount' => 'required',
            'prd_description' => 'required'
        ]);

        $provided = DB::table('provideds')
            ->where('provided_phone','=',$request->get('provided_phone'))
            ->first();
        if ($provided == null){
            Provideds::create([
                'provided_name'=> $request->get('provided_name'),
                'provided_phone'=> $request->get('provided_phone'),
                'provided_address'=> $request->get('provided_address')
            ]);
        }

        $provided = DB::table('provideds')
            ->where('provided_phone','=',$request->get('provided_phone'))
            ->first();
//        dd($provided->id);
        $items = Items::create([
            'demoimage'=> $request->prd_image[0]->getClientOriginalName(),
            'name' => $request->get('prd_name'),
            'description' => $request->get('prd_description'),
            'price' => $request->get('prd_price'),
            'tag' => $request->get('prd_tag'),
            'brand' => $request->get('prd_brand'),
            'provided' => $provided->id
        ]);
        $id = DB::table('items')->latest('created_at')->first();


        foreach ($request->prd_image as $i){
            $images = Images::create([
                'itemsid'=> $id->prd_id,
                'url'=> $i->getClientOriginalName()
            ]);
        }
        $file = $request->prd_image;
        foreach ($file as $f) {
            $f->move('images', $f->getClientOriginalName());
        }



        $size = $request->get('prd_size');
        $color = $request->get('prd_color');
        $amount = $request->get('prd_amount');
        $flag = 0;

        foreach ($size as $p){
            $Properties = Properties::create([
                'itemsid'=> $id->prd_id,
                'size' => strtoupper($p),
                'color' => $color[$flag],
                'batch'=> 1,
                'amount' => $amount[$flag]
            ]);
            $flag++;
        }

        $sizeonly = array_unique($size);
        $sizecolap = "";
        foreach ($sizeonly as $i){
            $sizecolap.=strtoupper($i);
            $sizecolap.=" ";
        }
        $coloronly = array_unique($color);
        $colorcolap = "";
        foreach ($coloronly as $i){
            $colorcolap.=$i;
            $colorcolap.=" ";
        }

        $Totalproperty = Totalproperty::create([
            'itemsid'=> $id->prd_id,
            'sizes' => $sizecolap,
            'colors' => $colorcolap
        ]);

        // categories(1=men,2=women,3=kid,4=accessories)
        $category = Category::create([
            'prdid' => $id->prd_id,
            'categories' => $request->get('prd_category')
        ]);

        $batch_amuont = 0;
        $amount = $request->get('prd_amount');
        foreach ($amount as $i) {
            $batch_amuont+= $i;
        }
        $batchprice = Batchprice::create([
            'prdid' => $id->prd_id,
            'batch' => 1,
            'batch_amount' => $batch_amuont,
            'cost' => $request->get('prd_cost_price')
        ]);

        return redirect('/admin');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.product.editproduct');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
