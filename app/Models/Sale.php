<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{

	protected $table = 'sale';
    use SoftDeletes; //Implementamos 

    protected $dates = ['deleted_at']; 

         protected $fillable = [
       		 'id','totalsale','users_id',
    ];

       public function user() {
		  return $this->hasOne('App\User');
	}
}
