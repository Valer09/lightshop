<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NameCourier extends Model
{
    protected $table = 'couriers_name';
    protected $fillable = ['name'];


    public function get_subcategories(){
        return $this->hasMany('App\Courier','courier_name','name');
    }

    public $timestamps = false;
}
