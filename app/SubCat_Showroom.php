<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCat_Showroom extends Model
{
    protected $fillable = ['name','description','cat'];

    public function belongsTo()
    {
        return $this->belongsTo('App\Cat_Showroom');
    }
}
