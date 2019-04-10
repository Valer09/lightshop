<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App;

class Category extends Model
{

    protected $fillable = ['name', 'pathPhoto'];


    public function get_subcategories(){
        return $this->hasMany('App\Subcategory','category','name');
    }

    public $timestamps = false;
}
