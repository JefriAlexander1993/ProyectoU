<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
		protected $table = 'clients';

		use SoftDeletes; //Implementamos

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nuip','name','phone','address','email',
    ];
}
