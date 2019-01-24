<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;
use App\Models\Category;
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

        return view('frond.products.index',['products'=>Product::orderBy('id','desc')->paginate('8')]);
    }

    public function show($id){

        return view('frond.products.show',['product'=>Product::find($id)]);

    }

    public function edit($id){
         
        return view('frond.products.edit',['product1'=>Product::findOrFail($id), 'categories' => Category::orderBy('name', 'ASC')->pluck('name', 'id') ]);

    }
       public function create()
        {
            
            $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
    
    
            return view('frond.products.create', ['category'=>Category::pluck('name','id')]);
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
  

             $product =  Product::create($request->all());
                

                 if($request->file('file')){

                     $photo = Storage::disk('public')->put('images', $request->file('file'));
                     $product->fill(['file'=>asset($photo)])->save();
                            return redirect()->route('products.index')
                             ->with('info','El producto fue regstrado  exitosamente.');

                    }else{
                       return redirect()->route('users.create')
                             ->with('danger','Error en el momento de enviar la imagen.');  
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

      

             $product= Product::find($id);        

                if($request->file('file')){
                    
                $photo = Storage::disk('public')->put('images', $request->file('file'));
                     $product->fill(['file'=>asset($photo)])->save();
                   
                    return redirect()->route('products.index')
                      ->with('info','El producto fue actualizado  exitosamente.');;
        
                    }else{
                        return redirect()->route('users.create')
                             ->with('danger','Error en el momento de enviar la imagen.');  
                    }
          
                
         

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
         return redirect()->route('products.index')
                             ->with('info','El producto fue actualizado exitosamente.');
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
