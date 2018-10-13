<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name', 'link', 'description'];


    public function get_elements(){
        return $this->hasMany('App\Element');
    }

    public $timestamps = false;
}
