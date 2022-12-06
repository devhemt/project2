<?php

namespace App\Http\Controllers;


use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function apiproduct(){
        $product = Items::all();
        return json_decode($product);
    }

    public function apiimage($id){
        $images = DB::table('images')
            ->where('itemsid','=',$id)
            ->get();
        $image = 'images/'.$images[0]->url;
        return $image;
    }

}
