<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Role;
use App\Permission;
use App\Models\Permission_role;


use Illuminate\Http\Request;

class RolePermissionController extends Controller
{
    public function index()
    {    
          return view('frond.permissions_role.index',['permissions_roles'=>Permission_role::orderBy('id','desc')->paginate()]);
    }

    public function create(){

        return view('frond.permissions_role.create',['id_role1'=>Role::pluck('name','id'),'id_permission'=>Permission::pluck('name','id')]);

    }

    public function edit($id){

        return view('frond.permissions_role.edit',['permissions_role'=>Permission_role::findOrFail($id),'id_role1'=>Role::pluck('name','id'),'id_permission'=>Permission::pluck('name','id')]);

    }

    public function show($id){

        return view('frond.permissions_role.edit',['permissions_role'=>Permission_role::findOrFail($id)]);

    }

    public function store(Request $request){

       $permission_role=  Permission_role::create($request->all())->save();
               return redirect()->route('permissions_roles.index')
                                 ->with('info','El permiso asignado a un rol fue registrada  exitosamente.');  

      
    }
    public function update($id, Request $request){
            $permission_role= Permission_role::find($id)->update($request->all());
           
            return redirect()->route('permissions_roles.index')
                                 ->with('info','El permiso asignado a un rol fue actualizado exitosamente.');  

    }

    public function destroy($id)
        {
          $permission_role= Permission_role::findOrFail($id)->delete();
            return redirect()->route('permissions_roles.index')
                                 ->with('danger','El permiso asignado a un rol fue eliminadado  exitosamente.');  

        }

}
