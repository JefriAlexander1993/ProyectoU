<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;


class Role extends EntrustRole

{
			protected $table = 'roles';

			use SoftDeletes; //Implementamos

      protected $dates = ['deleted_at'];

       protected $fillable = [
        'name','display_name','descripcion','created_at'
    ];
		public function user() {
					return $this->belongsToMany('App\Models\User');
		}
}
