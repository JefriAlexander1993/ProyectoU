<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Commentary;
use Illuminate\Http\Request;

class CommentaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('frond.commentaries.index');
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
       $commentary =  Commentary::create($request->all());
       $commentary->save();
              return response()->json([
                "mensaje"=>"Fue creado."
              ]);
      }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Commentary  $commentary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $commentary= Permission::find($id);
      $commentary->fill($request->all())->save();
      return response()->json(["mensaje"=>"Actualizar"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Commentary  $commentary
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $commentary= Commentary::findOrFail($id)->delete();
      return response()->json(["mensaje"=>"Borrado"]);
    }
}
