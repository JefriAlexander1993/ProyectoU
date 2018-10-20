<?php

namespace App\Exports;

use App\Models\Commentary;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class CommentariesExport implements FromView
 {
    /**
    * @return \Illuminate\Support\Collection
    */
	

 	public function view(): View
    {
        return view('informe.commentaries_list', [
            'commentaries' => Commentary::all()
        ]);
    }
}
