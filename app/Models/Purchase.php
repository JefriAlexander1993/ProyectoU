<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
	protected $table = 'purchase';

    use SoftDeletes; //Implementamos

    protected $dates = ['deleted_at'];

         protected $fillable = [
       		 'id','totalPurchase','users_id','product_id'
    ];

     public function user() {
		  return $this->belongsToMany('App\User');
		 }
		 public function product() {
		 return $this->belongsToMany('App\Product');
		}

}
