<?php

namespace App\Http\Controllers\Backend;

use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\Exports\PermissionsExport;
use Maatwebsite\Excel\Facades\Excel;

class PermissionController extends Controller
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
        return view('frond.permissions.index');
    }

        public function pdfPermission()
    {        
       

        $permissions = Permission::all(); 

        $pdf = PDF::loadView('informe.permissions_list',compact('permissions'));

        return $pdf->download('lists_permissions.pdf');

    }
       
    public function excelPermission()
    {        

        return Excel::download(new PermissionsExport, 'lists_permissions.xlsx');

    
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
       $permission =  Permission::create($request->all());
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
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $permission= Permission::find($id);
        $permission->fill($request->all())->save();
        return response()->json(["mensaje"=>"Actualizar"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $permission= Permission::findOrFail($id)->delete();
      return response()->json(["mensaje"=>"Borrado"]);
    }
}
