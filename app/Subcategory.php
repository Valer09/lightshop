<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Subcategory extends Model
{

    protected $fillable = [
        'name'
    ];

    public function get_categories(){
        return $this->hasOne('App\Category','category');
    }

    public function get_elements(){
        return $this->belongsToMany('App\Element');
    }
    public $timestamps = false;
}
