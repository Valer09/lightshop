<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

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

    public static function keyOfferts($items) {
        $offerts = array();
        foreach($items as $item){
            $off = Offert::where([
                ['id_element', $item['item']->id],
                ['date_end', '>', date('Y-m-d h:i:sa')],
            ])->first();
            if(!empty($off)){
                $offerts = Arr::add($offerts, $item['item']->id, $off);
            }
        }
        return $offerts;
    }

    public static function totalDiscount($elements, $offerts) {
        $totalDiscount = 0;
        foreach($elements as $el) {
            if(array_key_exists($el['item']->id, $offerts)) {
                $totalDiscount = $totalDiscount +  ($el['qty'] * (($el['item']->price)/100*$offerts[$el['item']->id]->discount_perc));
            }
        }

        return $totalDiscount;
    }

    public static function totalDiscountNotOff($elements) {
        $totalDiscount = 0;

        $offerts = Offert::keyOfferts($elements);

        foreach($elements as $el) {
            if(array_key_exists($el['item']->id, $offerts)) {
                $totalDiscount = $totalDiscount +  ($el['qty'] * (($el['item']->price)/100*$offerts[$el['item']->id]->discount_perc));
            }
        }

        return $totalDiscount;
    }

}
