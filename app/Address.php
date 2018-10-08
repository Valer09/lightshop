<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App;

class Address extends Model
{
    protected $table = 'Addresses';

    protected $fillable = [
        'country','street', 'city', 'municipality', 'street number',
    ];
    public function user(){
        return $this->belongsTo('User','id');
    }


}
