<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class CatalogoController extends Controller
{
     public function index()
    {
    	
    	return view('frond.catalogues.index',['products'=>Product::all()]);//['productoslist'=>$productoslist]); //->with('catalogo',$productoslist);
    }

    public function show($id){

    	
    	return view('frond.catalogues.index',['products'=>Product::where('id',$id)->first()]);
    }

    
}
