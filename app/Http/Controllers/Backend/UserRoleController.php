<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role_user;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Role;

class UserRoleController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index()
    {

      $id_user = User::pluck('name','id');
      $id_role = Role::pluck('name','id');

      return view('frond.users_roles.index',compact('id_user','id_role'));
    }

    public function store(Request $request)
      {

          if($request->ajax()){
           $role_user = new Role_user;
           $role_user->user_id= $request->user_id;
           $role_user->role_id= $request->role_id;
           $role_user->save();
                  return response()->json([
                    "mensaje"=>"Fue creado."
                  ]);
          }

      }
    public function update($id, Request $request)
        {
            $role_user= Role_user::find($id);
            $role_user->fill($request->all())->save();
            return response()->json(["mensaje"=>"Actualizar"]);

        }

    public function destroy($id)
        {
          $role= Role_user::findOrFail($id)->delete();
          return response()->json(["mensaje"=>"Borrado"]);

        }



}
