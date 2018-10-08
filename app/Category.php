<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App;

class Category extends Model
{
    public function subcategories(){
        return $this->hasMany('App\Subcategory','name');
    }

    protected $fillable = [
        'name', 'subcategories',
    ];
    public $timestamps = false;
}
