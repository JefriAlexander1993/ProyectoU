<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{

	protected $table = 'brands';
    
    use SoftDeletes; //Implementamos 

    protected $dates = ['deleted_at']; 

     protected $fillable = [
        'id', 'name', 'product_id',
    ];


    public function product() {
	  return $this->hasOne('App\Product');
	}

}
