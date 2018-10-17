<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
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
        return view('frond.sales.index');
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
       $sale =  Sale::create($request->all());
       $sale->save();
              return response()->json([
                "mensaje"=>"Fue creado."
              ]);
      }
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $sale= Sale::find($id);
      $sale->fill($request->all())->save();
      return response()->json(["mensaje"=>"Actualizar"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $sale= Sale::findOrFail($id)->delete();
      return response()->json(["mensaje"=>"Borrado"]);
    }
}
