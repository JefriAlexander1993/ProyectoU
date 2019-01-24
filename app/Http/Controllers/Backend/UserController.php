<?php

namespace App\Http\Controllers\Backend;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

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
        return view('frond.users.index', ['users' => User::orderBy('id', 'desc')->paginate('8')]);
    }

    public function create()
    {

        return view('frond.users.create');

    }
    public function edit($id)
    {

        return view('frond.users.edit', ['user' => User::findOrFail($id)]);

    }
    public function show($id)
    {

        return view('frond.users.show', ['user' => User::findOrFail($id)]);

    }

    public function pdfUser()
    {

        $pdf = PDF::loadView('informe.users_list', ['users' => User::all()]);

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
        $user           = new User;
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        $user->file     = $request->file;
        $user->save();

        if ($request->file('file')) {

            $photo = Storage::disk('public')->put('images', $request->file('file'));
            $user->fill(['file' => asset($photo)])->save();

            return redirect()->route('users.index')
                ->with('info', 'El usuario fue registrado exitosamente.');

        } else {
            return redirect()->route('users.create')
                ->with('danger', 'Error en el momento de enviar la imagen.');

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
        $user           = User::find($id);
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        $user->file     = $request->file;
        $user->save();

        if ($request->file('file')) {

            $photo = Storage::disk('public')->put('images', $request->file('file'));
            $user->fill(['file' => asset($photo)])->save();

            return redirect()->route('users.index')
                ->with('info', 'El usuario fue actualizado exitosamente.');
        } else {
            return redirect()->route('users.edit')
                ->with('danger', 'Error en el momento de enviar la imagen.');

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id)->delete();
        return redirect()->route('frond.users.index')
            ->with('info', 'El usuario fue eliminado exitosamente.');
    }
}
