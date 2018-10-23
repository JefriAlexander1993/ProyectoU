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
        'id', 'code', 'date','name','description','quantity', 'file','size','brand','iva','unit_price','sale_price','stockmin','sale_id','purchase_id',
        'quotation_id'
    ];

 
    public function sale()
    {
        return $this->belongsToMany('App\Sale');
    }
    public function purchase()
    {
        return $this->belongsToMany('App\Purchase');
    }
    public function zise()
    {
        return $this->hasOne('App\Zise');
    }
    public function type()
    {
        return $this->hasOne('App\Type');
    }
    public function quotation()
    {
        return $this->belongsToMany('App\Quotation');
    }
    public function brand()
    {
        return $this->hasOne('App\Brand');
    }


}
