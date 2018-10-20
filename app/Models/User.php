<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Builder;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    protected $table = 'users';

    use EntrustUserTrait;
    //Implementamos

    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','commentary_id','purchase_id','sale_id','quotation_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function commentary() {
        return $this->belongsToMany('App\Models\Commentary');
    }
     public function purchase() {
        return $this->belongsToMany('App\Models\Purchase');
    }
    public function sale() {
        return $this->belongsToMany('App\Models\Sale');
    }
    public function quotation() {
        return $this->belongsToMany('App\Models\Quotation');
    }

    public function role() {
          return $this->belongsToMany('App\Role');
    }


}
