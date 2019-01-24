<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;


class Product extends Model
{

    protected $table = 'products';
    use SoftDeletes; //Implementamos

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 'code', 'name','description', 'file','unit_price','sale_price','stockmin',
        'category_id'
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
       public static function codeUnique($code){ //Verifica que el nuip sea unico en la base de datos, en caso de no ser unico devuelve falso (false)
        
        $codigU = Product::where('code', '=', $code)->count();
        if($codigU == 0){
            return true;

        }else{
            return false;
        }
    }



}
