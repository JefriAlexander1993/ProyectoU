<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
      protected $fillable = [
        'id','nuip_nit','names','surnames','type_document','company','address','phone','cell_phone','fax','email','city','departament',
    ];
}
