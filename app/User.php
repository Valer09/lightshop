<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','surname', 'email', 'password','group'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /** This function allows to create a pivot table "Order" with users() function in Element model **/
    public function get_elements(){
        return $this->belongsToMany('App\Element');
    }

    public function get_address() {
        return $this->hasOne('App\Address');
    }

    public function get_orders(){
        return $this->hasMany('App\Order');
    }

}
