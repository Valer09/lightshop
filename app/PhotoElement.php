<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoElement extends Model
{
    protected $fillable = ['name', 'path'];

    protected $table = 'photo_table';
    
    public function get_element_showroom(){
        return $this->hasOne('App\Element','element_id');
    }
}
