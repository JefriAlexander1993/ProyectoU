<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quotation extends Model
{

	 protected $table = 'users';

    use SoftDeletes; //Implementamos 

    protected $dates = ['deleted_at']; 

         protected $fillable = [
       		 'id','nit','nameprovider','namerepresentative','address','phone','email','observation',
    ];

    public function user() {
	  return $this->hasOne('App\User');
	}
}
