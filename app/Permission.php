<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustPermission;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends EntrustPermission
{
    protected $table = 'permissions';

		use SoftDeletes; //Implementamos

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id','name','display_name','description','created_at'

    ];
}
