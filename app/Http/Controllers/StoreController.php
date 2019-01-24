<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class StoreController extends Controller
{
    //
    public function index(){

    	return view('frond.store.index',['productoslist'=>Product::all()]);
    }

    public function show($id){
    	
    	return view('frond.store.show',['product'=>Product::find($id)]);



    }
}
