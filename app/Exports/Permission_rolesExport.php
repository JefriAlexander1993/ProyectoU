<?php

namespace App\Exports;

use App\Models\Permission_role;
use Maatwebsite\Excel\Concerns\FromCollection;

class Permission_rolesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Permission_role::all();
    }
}
