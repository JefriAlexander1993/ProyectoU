<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{

	protected $table = 'types';

	use SoftDeletes; //Implementamos 

    protected $dates = ['deleted_at']; 


    protected $fillable = [
        'name', 'email', 'password',
    ];


    public function product() {
		  return $this->hasOne('App\Product');
	}
}
