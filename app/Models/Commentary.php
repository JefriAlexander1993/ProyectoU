<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commentary extends Model
{

   protected $table = 'comments';
    use SoftDeletes; //Implementamos

    protected $dates = ['deleted_at'];

         protected $fillable = [
       		 'id','name','affair','email', 'body','users_id',
    ];

    public function user() {
	  return $this->belongsToMany('App\User');
	}

//   return $this->hasMany('App\Comment');
}
