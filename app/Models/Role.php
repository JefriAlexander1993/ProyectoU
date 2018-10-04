<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;


class Role extends EntrustRole

{
	  use SoftDeletes; //Implementamos 

      protected $dates = ['deleted_at']; 

       protected $fillable = [
        'id','name','display_name','descripcion','created_at'
    ];
}


