<?php

namespace App\Exports;

use App\Models\Role_user;
use Maatwebsite\Excel\Concerns\FromCollection;

class Role_usersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Role_user::all();
    }
}
