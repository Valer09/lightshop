<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderState extends Model
{
    protected $fillable = ['name'];

    public $timestamps = false;
}
