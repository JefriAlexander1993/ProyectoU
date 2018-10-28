<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('frond.products.index');
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
         if(Product::codeUnique($request->code)){ 
          
           $product =  Product::create($request->all());

         }if($file = $request->file('file')){
           $photo = $file->getClientOriginalName();
           //$photo =Storage::disk('public')->put('image', $request->file('file'));
              \Storage::disk('local')->put($phono,  \File::get($file));
          //$product->fill(['file'=>asset($photo)])->save();

        }
              return response()->json([
                "mensaje"=>"Fue creado."
              ]);
      }

  }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
      $product= Product::find($id);
      $product->fill($request->all())->save();
      return response()->json(["mensaje"=>"Actualizar"]);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product=Product::findOrFail($id)->delete();
      return response()->json(["mensaje"=>"Borrado"]);
    }


  public function getProductByCode($code) //Funcion que obtiene un articulo por medio de su codigo
    {
             
        $product=Product::where('code', $code)->get(['id','code', 'name',
             'sale_price']);
     
        if(count($product)>0){
            $answer=array(
                "datos" => $product,
                "code" => 200
            ); 
        }else{
        $answer=array(
            "error" => 'No existen datos con ese codigo.',
            "code" => 600
        ); 
    }
         return response()->json($answer);
        
    }    




}
