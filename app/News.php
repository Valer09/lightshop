<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class News extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'News';

    protected $fillable = ['id','name','description','startDate', 'stopDate', 'pathPhoto', 'linkBuy'

    ];
    public $timestamps = false;
}
