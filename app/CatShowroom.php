<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatShowroom extends Model
{
    protected $fillable = ['name','description'];

    public function get_subcategories(){
        return $this->hasMany('App\CatShowroom','name');
    }

}
