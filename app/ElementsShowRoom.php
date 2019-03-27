<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElementsShowRoom extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'elementsshowrooms';

    protected $fillable = ['id','name','description', 'pathPhoto', 'linkBuy', 'nameSubCategory'

    ];

    public $timestamps = false;
}
