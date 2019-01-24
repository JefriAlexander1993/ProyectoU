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
        return view('frond.permissions.index',['permissions'=>Permission::orderBy('id','desc')->paginate('8')]);
    }

    public function create(){

        return view('frond.permissions.create');

    }
    public function show($id){

        return view('frond.permissions.show',['permission'=>Permission::findOrFail($id)]);

    }
    public function edit($id){

            return view('frond.permissions.edit',['permission'=>Permission::findOrFail($id)]);

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
  
       $permission =  Permission::create($request->all())->save();
            return redirect()->route('permissions.index')
                             ->with('info','El permiso fue registrado  exitosamente.');  
  
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
        $permission= Permission::find($id)->update($request->all());
         return redirect()->route('permissions.index')
                             ->with('info','El permiso fue actualizado exitosamente.');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $permission= Permission::find($id)->delete();
       return redirect()->route('permissions.index')
                             ->with('danger','El cliente fue eliminado  exitosamente.');  
    }
}
