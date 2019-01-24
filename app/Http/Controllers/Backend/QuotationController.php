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
      
       $quotation=  Quotation::create($request->all())->save();
           return redirect()->route('quotations.index')
                             ->with('info','La cotización fue registrada  exitosamente.');  
    
    }

    public function create(){

        return view('frond.quotations.create');

    }

    public function edit($id){

        return view('frond.quotations.edit',['quotation'=>Quotation::findOrFail($id)]);

    }
    public function show($id){

       return view('frond.quotations.show',['quotation'=>Quotation::findOrFail($id)]);

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
      $quotation= Quotation::find($id)->update($request->all());
      return redirect()->route('quotations.index')
                             ->with('info','La cotización fue actualizada exitosamente.');  
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
      return redirect()->route('quotations.index')
                             ->with('danger','La cotización fue eliminada exitosamente.');  
    }
}
