<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    protected $table = 'permissions';

    use SoftDeletes; //Implementamos

    protected $dates = ['deleted_at'];

    protected $fillable = [

        'id', 'name', 'display_name', 'description', 'created_at',

    ];
}
