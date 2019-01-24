<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;
use App\Exports\ClientsExport;
use Maatwebsite\Excel\Facades\Excel;


class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
   
        return view('frond.clients.index',['clients'=>User::orderBy('id','desc')->paginate('8')]);
    }

    public function create(){

        return view('frond.clients.create');

    }

    public function show($id){

        return view('frond.clients.show',['client'=>User::findOrFail($id)]);

    }

    public function edit($id){

        return view('frond.clients.edit',['client'=>User::findOrFail($id)]);

    }
    
    public function pdfClient() /*Debe haber una consulta teniendo en cuenta el rol*/
    {        
        $pdf = PDF::loadView('informe.clients_list',['clients' => User::all()]);

        return $pdf->download('lists_clients.pdf');

    }
       
    public function excelClient()
    {        

        return Excel::download(new ClientsExport, 'lists_clients.xlsx');

    
    }
        
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                        
          $client =  User::create($request->all())->save();   

            if($request->file('file')){

                $photo = Storage::disk('public')->put('images', $request->file('file'));
                $client->fill(['file'=>asset($photo)])->save();

                            return redirect()->route('clients.index')
                             ->with('info','El usuario fue registrado exitosamente.');  

            }else{
                        return redirect()->route('clients.create')
                             ->with('danger','Error en el momento de enviar la imagen.');  
                           
            }  
               
        
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client= User::find($id)->update($request->all());
            
            if($request->file('file')){
                    
                $photo = Storage::disk('public')->put('images', $request->file('file'));
                     $client->fill(['file'=>asset($photo)])->save();
                   
                      return redirect()->route('clients.index')
                             ->with('info','El usuario fue actualizado exitosamente.');  
            }else{
                        return redirect()->route('clients.create')
                             ->with('danger','Error en el momento de enviar la imagen.');  
                     
                    }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $client= User::findOrFail($id)->delete();
            return redirect()->route('clients.index')
                             ->with('info','El cliente fue eliminado exitosamente.');
     
    }
}
