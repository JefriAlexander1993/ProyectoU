<?php

namespace App\Http\Controllers\Backend;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\Exports\RolesExport;
use Maatwebsite\Excel\Facades\Excel;

class RoleController extends Controller
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
        return view('frond.roles.index');
    }

    
    public function pdfRole()
    {        
       
        $roles = Role::all(); 

        $pdf = PDF::loadView('informe.roles_list',compact('roles'));

        return $pdf->download('lists_roles.pdf');

    }
       
    public function excelRole()
    {        

        return Excel::download(new RolesExport, 'lists_roles.xlsx');

    
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
        $role = new Role;
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->description = $request->description;

        $role->save();

              return response()->json([
                "mensaje"=>"Fue creado."
              ]);
      }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $role= Role::find($id);
        $role->fill($request->all())->save();
        return response()->json(["mensaje"=>"Actualizar"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $role= Role::findOrFail($id)->delete();
      return response()->json(["mensaje"=>"Borrado"]);
    }
}
