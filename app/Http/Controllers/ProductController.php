<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Nature;
use App\Models\Nature1;
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
        return view('backend.product.showproduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'prd_name' => 'required|unique:items,name|size:200',
            'prd_cost_price' => 'required',
            'prd_price' => 'required',
            'prd_category' => 'required',
            'prd_tag' => 'required',
            'prd_size' => 'required',
            'prd_color' => 'required',
            'prd_amount' => 'required',
            'prd_description' => 'required'
        ]);

        $images = "";
        foreach ($request->prd_image as $i){
            $images.=$i->getClientOriginalName();
            $images.=" ";
        }
        
        $items = Items::create([
            'images' => $images,
            'name' => $request->get('prd_name'),
            'description' => $request->get('prd_description'),
            'price' => $request->get('prd_price'),
            'tag' => $request->get('prd_tag')
        ]);

        $file = $request->prd_image;
        foreach ($file as $f) {
            $f->move('images', $f->getClientOriginalName());
        }
        

        $id = DB::table('items')->latest('created_at')->first();
        $size = $request->get('prd_size');
        $color = $request->get('prd_color');
        $amount = $request->get('prd_amount');
        $flag = 0;

        foreach ($size as $p){
            $nature = Nature::create([
                'itemsid'=> $id->prd_id,
                'size' => strtoupper($p),
                'color' => $color[$flag],
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

        $nature = Nature1::create([
            'itemsid'=> $id->prd_id,
            'size' => $sizecolap,
            'color' => $colorcolap
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
        return view('backend.product.editproduct');
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
