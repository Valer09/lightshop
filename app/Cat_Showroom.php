<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_Showroom extends Model
{
    protected $fillable = ['name','description'];

    public function get_subcategories(){
        return $this->hasMany('App\Cat_Showroom','name');
    }

}
