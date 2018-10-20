<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Commentary;
use Illuminate\Http\Request;
use App\Exports\CommentariesExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;


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


    public function pdfCommentary()
    {        
       

        $commentaries = Commentary::all(); 


        $pdf = PDF::loadView('informe.commentaries_list',['commentaries'=>$commentaries]);

        return $pdf->download('lists_commentaries.pdf');

    }
       
    public function excelCommentary()
    {        

        return Excel::download(new CommentariesExport, 'lists_commentaries.xlsx');

    
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
