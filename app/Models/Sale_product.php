<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale_product extends Model
{
    use SoftDeletes; //Implementamos 

    protected $dates = ['deleted_at']; 


         protected $fillable = [
       		 'id','quantity','unit_price','subtotal','total','sale_id','product_id',
    ];
}
