<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class StoreController extends Controller
{
    //
    public function index(){
    	$productoslist=Product::all();
    	return view('frond.store.index',compact('productoslist'));
    }

    public function show($id){

    	$productos=Product::where('id',$id)->first();
    	return view('frond.store.show',compact('productos'));



    }
}
