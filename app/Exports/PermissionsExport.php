<?php

namespace App\Exports;

use App\Permission;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class PermissionsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
	public function view(): View
    {
        return view('informe.permissions_list', [
            'permissions' => Permission::all()
        ]);
    }
}
