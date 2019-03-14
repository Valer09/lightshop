<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cartmodel extends Model
{
    public function addtocart(){
        $cartitem= Cart::add('293ad', 'Product 1', 1, 9.99);

        Cart::associate($cartitem->rowId, 'Product');

    }
//devo vedere un po di cose, magari mi erve crare un array con tutte le associazioni


    //
}
