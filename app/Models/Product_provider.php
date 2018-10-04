<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product_provider extends Model
{
	protected $table = 'product_provider';

    use SoftDeletes; //Implementamos 

    protected $dates = ['deleted_at']; 

         protected $fillable = [
       		 'id','product_id','provider_id',
    ];


/*     public function product()
    {
        return $this->belongsToMany('App\Product');
    }

     public function provider()
    {
        return $this->belongsToMany('App\Provider');
    }
*/
}
