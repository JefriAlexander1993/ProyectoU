<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;

use Validator;
use Illuminate\Support\Facades\Input;

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

        /*$validator = Validator::make($request->all(), [
            'code'=>'required|unique:products',
            'date'=>'required',
            'name' => 'required',
            'description' => 'required',
            'unit_price' =>'required',
            'sale_price'=>'required',
            'stockmin'=>'required',
            'file'=>'image|mimes:jpg.jpeg,png',
        ]);*/
        try{

             $product =  Product::create($request->all());
                

                 if($request->file('file')){

                     $photo = Storage::disk('public')->put('images', $request->file('file'));
                     $product->fill(['file'=>asset($photo)])->save();
                     $message    = array(

                        'datos'  => $request->all(),
                        'code'   => 200,
                        'status' => 200,
                        
                                     );
        

                    }else{
                     $message    = array(

                        'datos'  =>'Error al intentar guardar el producto.',
                        'code'   => 600,
                        'status' => 500,
                        
                                     );
                
                        }
                return $message;
        
        }catch(Exception $e){

                     $error =$e; 
                     $message    =  array(
                        'error'  => $error,
                        'code'   => 600,
                        'status' => 500,
                                         );
                return $message;        

            }            

        }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

return $request->all();
            $product= Product::find($id)->update($request->all());        

                    if($request->file('file')){
                          dd($product);
     
              
                     $photo = Storage::disk('public')->put('images', $request->file('file'));
                     $product->fill(['file'=>asset($photo)])->save();
                   
                            
                     return response()->json([
                                    'data' =>$request->all(),
                                    'code'=>200,
                                    'status' => 200,
                                    'message' => 'Producto actualizado exitosamente.',
   
                            ], 200);

        
                    }
                        
                      return response()->json([
                                    'data' =>$request->all(),
                                    'code'=>200,
                                    'status' => 200,
                                    'message' => 'Producto actualizado exitosamente, sin imagen.',
                                
                            ], 200);
          

    

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
