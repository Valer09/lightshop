<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offert extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'offerts';

    protected $fillable = ['id','name','description','pathPhoto', 'linkBuy', 'duration_day'
    ];


    public static function allWithKey() {
        $offerts = Offert::all();
        $array = array();
        foreach($offerts as $offert) {
            $array[$offert->id_element] = $offert;
        }
        return $array;
    }
}
