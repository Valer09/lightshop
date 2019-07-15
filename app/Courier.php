<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    protected $fillable = [
        'courier_name','stima_giorni', 'name_service', 'price', 'pesomin', 'pesomax', 'destination_country'
    ];

    public function get_categories(){
        return $this->hasOne('App\NameCourier','name');
    }

    public $timestamps = false;
}
