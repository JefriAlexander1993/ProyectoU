<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Producto;
class CatalogoController extends Controller
{
     public function index()
    {
    	$productoslist=Producto::all();
    	return view('frond.catalogo.index',compact('productoslist'));//['productoslist'=>$productoslist]); //->with('catalogo',$productoslist);
    }

    public function show($id){

    	$productos=Producto::where('id',$id)->first();
    	
    	return view('frond.catalogo.index',['productos'=>$productos] );
    }
}
