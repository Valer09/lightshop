<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App;

class Groups extends Model
{
    protected $fillable = [
        'name'
    ];

    public function get_users(){
        return $this->belongsToMany('App\User');
    }

    public $timestamps = false;
}
