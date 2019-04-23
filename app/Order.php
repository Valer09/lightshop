<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App;

class Order extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'Orders';

    protected $fillable = ['user_id','total','tracking','courier_id', 'state',

    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [

    ];

    public function get_user(){
        return $this->belongsTo('App\User');
    }

    public function get_address(){
        return $this->belongsTo('App\Address');
    }

    public function state(){
        return $this->hasOne('App\OrderState', 'id');
    }

}

