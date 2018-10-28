<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase_product extends Model
{
	protected $table = 'purchase_product';
    use SoftDeletes; //Implementamos 

    protected $dates = ['deleted_at']; 

         protected $fillable = [
       		 'id','quantity','unit_price','subtotal','purchase_id','product_id',
    ];
}
