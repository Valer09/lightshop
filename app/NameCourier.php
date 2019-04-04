<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NameCourier extends Model
{
    protected $fillable = ['name'];


    public function get_subcategories(){
        return $this->hasMany('App\Courier','courier_name','name');
    }

    public $timestamps = false;
}
