<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class User extends Authenticatable implements MustVerifyEmail
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

    public function get_group(){

        return $this-> hasOne('App\group');
    }

   // public function get_user_by_email($email){
   //     return  $users = DB::table('users')->get()->where('email', $email)->first();
   // }

}
