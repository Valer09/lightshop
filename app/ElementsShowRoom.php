<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElementsShowRoom extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'ElementsShowRoom';

    protected $fillable = ['id','name','description', 'pathPhoto', 'linkBuy', 'nameSubCategory'

    ];
}
