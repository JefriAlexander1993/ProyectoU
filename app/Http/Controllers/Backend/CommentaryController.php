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
      return view('frond.commentaries.index',['commentaries'=>Commentary::orderBy('id','desc')->paginate('8')]);
    }

    public function create(){

        return view('frond.commentaries.create');


    }

    public function edit($id){
        return view('frond.commentaries.edit',['commentary'=>Commentary::findOrFail($id)]);


    }
    public function show($id){

        return view('frond.commentaries.show',['commentary'=>Commentary::findOrFail($id)]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $commentary =  Commentary::create($request->all())->save();
             return redirect()->route('commentaries.index')
                             ->with('info','El comentario fue registrado  exitosamente.');
       
    }


    public function pdfCommentary()
    {        

        $pdf = PDF::loadView('informe.commentaries_list',['commentaries'=>Commentary::all()]);

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
      $commentary= Permission::find($id)->update($request->all());
       return redirect()->route('commentaries.index')
                             ->with('info','El comentario fue actualizado  exitosamente.');
      
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
           return redirect()->route('commentaries.index')
                             ->with('info','El comentario fue eliminado  exitosamente.');
    }
}
