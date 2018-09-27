<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;


class Role extends EntrustRole

{

       protected $fillable = [
        'id','name','display_name','descripcion','created_at'
    ];
}


