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
        return view('frond.roles.index',['roles'=>Role::orderBy('id','desc')->paginate('8')]);
    }

    public function create(){

        return view('frond.roles.edit');

    }
    public function edit($id){

        return view('frond.roles.edit',['role'=>Role::findOrFail($id)]);

    }

    public function show($id){

        return view('frond.roles.show',['role'=>Role::findOrFail($id)]);

    }

    
    public function pdfRole()
    {        
       

        $pdf = PDF::loadView('informe.roles_list',['roles'=>Role::all()]);

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

        $role=  Role::create($request->all())->save();
           return redirect()->route('roless.index')
                             ->with('info','El rol fue registrada  exitosamente.');  
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
      $role= Role::find($id)->update($request->all());
           return redirect()->route('quotations.index')
                             ->with('info','El rol fue actualizado exitosamente.');  
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
      return redirect()->route('quotations.index')
                             ->with('danger','El rol fue eliminado exitosamente.'); 
    }
}
