<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    protected $table = 'products';
    use SoftDeletes; //Implementamos 

    protected $dates = ['deleted_at']; 

    protected $fillable = [
        'id', 'code', 'date','name','size','brand','quantity','iva','unit_price','sale_price','stockmin',
    ];


	public function provider()
    {
        return $this->belongsToMany('App\Provider');
    }
    public function sale()
    {
        return $this->belongsToMany('App\Sale');
    }
    public function purchase()
    {
        return $this->belongsToMany('App\Purchase');
    }


}
