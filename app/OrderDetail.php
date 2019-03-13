<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class OrderDetail extends Model

{
    protected $table='OrderDetails';
    protected $fillable = ['price','details','quantity'];

    public function get_order(){
        return $this->belongsTo('App\Order');

    }

    public function get_elements(){
        return $this->belongsTo('App\Element');
    }
}
