<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App;

class Subcategory extends Model
{

    protected $fillable = [
        'name'
    ];

    public function get_categories(){
        return $this->hasOne('App\Category','name');
    }

    public function get_elements(){
        return $this->belongsToMany('App\Element');
    }
    public $timestamps = false;
}
