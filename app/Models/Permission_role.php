<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission_role extends Model
{
  protected $table = 'permission_role';

  use SoftDeletes; //Implementamos

  protected $dates = ['deleted_at'];

  protected $fillable = [
       'permission_id','role_id',
     ];

     public function role() {
           return $this->belongsToMany('App\Models\Role');
     }
}
