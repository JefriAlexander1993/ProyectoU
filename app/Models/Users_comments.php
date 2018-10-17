<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users_comments extends Model
{

   protected $table = 'users_comments';

   use SoftDeletes; //Implementamos

    protected $dates = ['deleted_at'];

         protected $fillable = [
       		 'id','email','body','users_id','comment_id',
    ];


 /*    public function user()
    {
        return $this->belongsToMany('App\User');
    }
     public function comment()
    {
        return $this->belongsToMany('App\Commentary');
    }


*/


}
