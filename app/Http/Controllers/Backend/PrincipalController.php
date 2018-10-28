<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class PrincipalController extends Controller
{
    //
    public function index()
    {
    	$products=Product::all();
    	return view('frond.pagePrincipal.index',compact('products'));
    }

    
}
