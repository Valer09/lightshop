<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderState extends Model
{
    protected $fillable = ['name'];

    public function get_order(){
        return $this->hasMany('App\Order','state','id');
    }

    public $timestamps = false;
}
