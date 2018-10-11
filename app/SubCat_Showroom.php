<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCat_Showroom extends Model
{
    protected $fillable = ['name','description','cat'];

    public function get_category()
    {
        return $this->belongsTo('App\Cat_Showroom');
    }

    public function get_elements()
    {
        return $this->belongsToMany('App\ElementsShowRoom', 'ElPivotSubShowRoon', 'name', 'id');
    }
}
