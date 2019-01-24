<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Sale;
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
    public function index(){

        return view('frond.sales.index',['sales'=>Sale::orderBy('id','desc')->paginate('8')]);
    }

    public function create(){

        return view('frond.sales.create');

    }

    public function edit($id){

        return view('frond.sales.edit',['sale'=>Sale::findOrFail($id)]);

    }
    public function show($id){

        return view('frond.sales.show',['sale'=>Sale::findOrFail($id)]);

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

       $sale =  Sale::create($request->all())->save();
         return redirect()->route('sales.index')
                                 ->with('info','El venta fue registrada  exitosamente.');  
      
      }
    



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

         $sale= Sale::find($id)->update($request->all());
               return redirect()->route('sales.index')
                             ->with('info','La venta fue actualizado exitosamente.');  
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
          return redirect()->route('sales.index')
                           ->with('danger','La venta fue eliminada exitosamente.');  
      
    }
}
