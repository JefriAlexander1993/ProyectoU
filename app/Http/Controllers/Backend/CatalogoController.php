<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class CatalogoController extends Controller
{
     public function index()
    {
    	$products=Product::all();

    	return view('frond.catalogues.index',compact('products'));//['productoslist'=>$productoslist]); //->with('catalogo',$productoslist);
    }

    public function show($id){

    	$products=Product::where('id',$id)->first();
    	
    	return view('frond.catalogues.index',['products'=>$products] );
    }
}
