<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

    	return view('frond.categories.index',['categories'=>Category::orderBy('id','desc')->paginate('8')]);
    		
    }

     public function create(){

    	return view('frond.categories.create');
    }

    public function store(Request $request){
    	$category = Category::create($request->all())->save();
    	 return redirect()->route('categories.index')
                             ->with('info','La categoria fue registrada  exitosamente.'); 

    }

     public function edit($id){
    	# code...
    }

     public function show($id){
    	# code...
    }

    public function update(Request $require, $id){
    	# code...
    }

    public function destroy($id){
    	# code...
    }
}
