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


      return view('frond.users_roles.index',['users_roles'=>Role_user::orderBy('id','desc')->paginate('8')]);
    }

    public function create(){

        return view('frond.users_roles.create',['id_user'=>User::pluck('name','id'),'id_role'=>Role::pluck('name','id')]);

    }
    
    public function edit($id){

        return view('frond.users_roles.edit',['users_role'=>Role_user::findOrFail($id),'id_user'=>User::pluck('name','id'),'id_role'=>Role::pluck('name','id')]);

    }

    public function show($id){

        return view('frond.users_roles.show',['users_role'=>Role_user::findOrFail($id)]);

    }

    public function store(Request $request)
      {

           $role_user = Role_user::create($request->all());

             return redirect()->route('frond.users_roles.index')
                             ->with('info','El rol fue asignado a un usuario fue exitosamente registrado.'); 
        
        
      }
    public function update($id, Request $request)
        {
            $role_user= Role_user::find($id)->update($request->all());
               return redirect()->route('frond.users_roles.index')
                             ->with('info','El rol fue asignado a un usuario exitosamente actualizado.'); 
         
        

        }

    public function destroy($id)
        {
          $role= Role_user::findOrFail($id)->delete();
             return redirect()->route('frond.users_roles.index')
                             ->with('info','El rol fue asignado a un usuario exitosamente eliminado.'); 

        }



}
