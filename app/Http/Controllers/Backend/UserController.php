<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use PDF;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
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
        return view('frond.users.index');
    }


    public function pdfUser()
    {        
       

        $users = User::all(); 

        $pdf = PDF::loadView('informe.users_list',compact('users'));

        return $pdf->download('lists_users.pdf');

    }
       
    public function excelUser()
    {        

        return Excel::download(new UsersExport, 'lists_users.xlsx');

    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //$user = User::create($request->all());
      if($request->ajax()){
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
              return response()->json([
                "mensaje"=>"El usuario fue creado."
              ]);
      }

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $user= User::find($id);
          $user->fill($request->all())->save();
            return response()->json(["mensaje"=>"Actualizar"]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::findOrFail($id)->delete();
        return response()->json(["mensaje"=>"Borrado"]);
    }
}
