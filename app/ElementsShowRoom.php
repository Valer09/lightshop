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

    public function get_photo_shoroom(){
        return $this->hasMany('App\PhotoShowroom','element_id','id');
    }

    public $timestamps = false;
}
