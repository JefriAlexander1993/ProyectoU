<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Size extends Model
{

   protected $table = 'zises';

    use SoftDeletes; //Implementamos 

    protected $dates = ['deleted_at']; 

         protected $fillable = ['id','name','product_id',
    ];

    public function product() {
	  return $this->hasOne('App\Product');
	}
}
