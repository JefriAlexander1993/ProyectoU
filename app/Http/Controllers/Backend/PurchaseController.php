<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Purchase_product;

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

        return  view('frond.purchases.index',['purchases'=>Purchase::orderBy('id','desc')->paginate('8')]);
    }

    public function create(){


         return  view('frond.purchases.create',['products'=>Product::pluck('name','code')]);

    }

    public function show($id){

              return  view('frond.purchases.show',['purchase'=>Purchase::find($id)]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     

       $id = Auth::id();  
       $totalPurchase=$request->totalPurchase;
       $purchase =  new Purchase;
       $purchase->users_id=$id;
       $purchase->totalpurchase = $totalPurchase;
       $purchase->save();

        for($x = 0; $x < $request->quantityproduct; $x++) {   // Ciclo el cual almacena todos los articulos entrantes en la compra
         
              $purchase_product= new Purchase_product;     
              
              $purchase_product->quantity=$request->quantity[$x];
              $purchase_product->subtotal=$request->subtotal[$x];
              $purchase_product->purchase_id= $purchase->id;

             
              $product =Product::where('code',$request->codeproduct[$x])->first();
          
              $product->quantity += $request->quantity[$x];
              $purchase_product->product_id=$product->id;
              $product->save();  
            
              $purchase_product->save();
        }

     return redirect()->route('purchases.index')
                             ->with('info','El cliente fue regstrado  exitosamente.');  
    }

    public function edit($id){

              return  view('frond.purchases.edit', ['purchase'=>Purchase::find($id)]);

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
      $purchase= Permission::find($id)->update($request->all());
    
      return redirect()->route('purchases.index')
                             ->with('info','La compra fue registrado  exitosamente.');  
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
       return redirect()->route('purchases.index')
                             ->with('info','La compra fue eliminada exitosamente.');  
    }
}
