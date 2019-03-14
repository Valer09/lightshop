<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Address extends Model
{
    protected $table = 'Addresses';

    protected $fillable = [
        'country','street','city','municipality','street_number','user_id','NomeCognome','Provincia','CAP'
    ];
    public function get_user(){
        return $this->belongsTo('App\User');
    }
    public function get_orders(){
        return $this->hasMany('App\Order');
    }

    public $timestamps = false;
}
