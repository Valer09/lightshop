<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Order extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'Orders';

    protected $fillable = [
        'name'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'created at', 'updated at'
    ];

    public function elements_list(){
        return $this->hasMany('Element','id');
    }

    public function user(){
        return $this->belongsTo('User','id');
    }
}

