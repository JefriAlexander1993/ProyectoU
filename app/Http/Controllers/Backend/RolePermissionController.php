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
      $id_role1 = Role::pluck('name','id');
      $id_permission = Permission::pluck('name','id');
          return view('frond.users_permissions.index',compact('id_role1','id_permission'));
    }

    public function store(Request $request)
        {

          if($request->ajax()){
           $permission_role = new Permission_role;
           $permission_role ->permission_id= $request->permission_id;
           $permission_role ->role_id= $request->role_id;
           $permission_role ->save();
                  return response()->json([
                    "mensaje"=>"Fue creado."
                  ]);
          }

        }
    public function update($id, Request $request)
        {
            $permission_role= Permission_role::find($id);
            $permission_role->fill($request->all())->save();
            return response()->json(["mensaje"=>"Actualizar"]);

        }

    public function destroy($id)
        {
          $permission_role= Permission_role::findOrFail($id)->delete();
          return response()->json(["mensaje"=>"Borrado"]);

        }

}
