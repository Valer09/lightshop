<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecElement extends Model
{
    public $timestamps = false;

    public static function allKeySpec() {
        $spec = SpecElement::all()->key_spec;
        return $spec;
    }
}
