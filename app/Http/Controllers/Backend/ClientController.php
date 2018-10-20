<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Client;
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
   
        return view('frond.clients.index');
    }

    public function pdfClient()
    {        
       

        $clients = Client::all(); 

        $pdf = PDF::loadView('informe.clients_list',compact('clients'));

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
      if($request->ajax()){
       $client =  Client::create($request->all());
       $client->save();
              return response()->json([
                "mensaje"=>"Fue creado."
              ]);
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
      $client= Client::find($id);
      $client->fill($request->all())->save();
      return response()->json(["mensaje"=>"Actualizar"]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $client= Client::findOrFail($id)->delete();
      return response()->json(["mensaje"=>"Borrado"]);
    }
}
