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
        'id','name','characteristics','product_id'
    ];


    public function product() {
		  return $this->hasMany('App\Product');
	}
}
