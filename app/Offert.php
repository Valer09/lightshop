<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offert extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'offerts';

    protected $fillable = ['id','name','description','pathPhoto', 'linkBuy', 'duration_day'
    ];
}
