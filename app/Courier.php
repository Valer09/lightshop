<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    protected $fillable = [
        'courier_name','tracking_link', 'name_service'
    ];

    public function get_categories(){
        return $this->hasOne('App\NameCourier','name');
    }

    public $timestamps = false;
}
