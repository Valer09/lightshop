<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offerts extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'Offerts';

    protected $fillable = ['id','name','description','pathPhoto', 'linkBuy'

    ];
}
