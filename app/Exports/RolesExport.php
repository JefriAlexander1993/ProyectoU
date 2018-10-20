<?php

namespace App\Exports;

use App\Role;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RolesExport implements FromView
{

    /**
    * @return \Illuminate\Support\Collection
    */
  	public function view(): View
    {
        return view('informe.roles_excel', [
            'roles' => Role::all()
        ]);
    }
}
