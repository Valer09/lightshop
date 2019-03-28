<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoShowroom extends Model
{
    protected $fillable = ['name', 'path'];

    protected $table = 'showroom_photo_table';

    public function get_element_showroom(){
        return $this->hasOne('App\ElementsShowRoom','element_id');
    }

}
