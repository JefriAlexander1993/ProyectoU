<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Producto;
class StoreController extends Controller
{
    //
    public function index(){
    	$productoslist=Producto::all();
    	return view('frond.store.index',compact('productoslist'));
    }

    public function show($id){

    	$productos=Producto::where('id',$id)->first();
    	return view('frond.store.show',compact('productos'));



    }
}
