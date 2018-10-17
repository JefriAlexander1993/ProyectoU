<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role_user extends Model
{
     protected $table = 'role_user';

     use SoftDeletes; //Implementamos

     protected $dates = ['deleted_at'];

     protected $fillable = [
          'user_id','role_id',
        ];

        public function user() {
              return $this->belongsToMany('App\Models\User');
        }
}
