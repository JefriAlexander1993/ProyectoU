<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Models\Product;

class PurchaseController extends Controller
  {
     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('frond.purchases.index');
    }

    public function create(){

          $products = Product::pluck('name','code'); 

         return  view('frond.purchases.create',compact('products'));

    }

    public function show($id){

          $purchase =Purchase::find($id);
              return  view('frond.purchases.show', compact("purchase"));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if($request->ajax()){
       $purchase =  Purchase::create($request->all());
       $purchase->save();
              return response()->json([
                "mensaje"=>"Fue creado."
              ]);
      }
    }

    public function edit($id){


          $purchase =Purchase::find($id);
              return  view('frond.purchases.edit', compact("purchase"));

    }  




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      $purchase= Permission::find($id);
      $purchase->fill($request->all())->save();
      return response()->json(["mensaje"=>"Actualizar"]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $purchase= Purchase::findOrFail($id)->delete();
      return response()->json(["mensaje"=>"Borrado"]);
    }
}
