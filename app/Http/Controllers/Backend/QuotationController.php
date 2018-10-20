<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Quotation;
use Illuminate\Http\Request;

class QuotationController extends Controller
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
        return view('frond.quotations.index');
    }


    public function store(Request $request)
    {
      if($request->ajax()){
       $permission =  Quotation::create($request->all());
       $permission->save();
              return response()->json([
                "mensaje"=>"Fue creado."
              ]);
      }
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $quotation= Quotation::find($id);
      $quotation->fill($request->all())->save();
      return response()->json(["mensaje"=>"Actualizar"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quotation $quotation)
    {
      $quotation= Quotation::findOrFail($id)->delete();
      return response()->json(["mensaje"=>"Borrado"]);
    }
}
