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

    protected $fillable = ['name','description', 'pathPhoto', 'nameSubCategory', 'linkBuy'

    ];

    public function get_photo_shoroom(){
        return $this->hasMany('App\PhotoShowroom','element_id','id');
    }

    public $timestamps = false;

    public static function deleteAll($el){
        $path =  $el->pathPhoto;
        if(file_exists('storage'.$path)){
            unlink(public_path('storage'.$path));
        }
        ElementsShowRoom::where('id', $el->id)->delete();
    }
}
