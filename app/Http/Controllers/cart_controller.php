<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cart_controller extends Controller
{
    public function carrello(){
        Cart::add('293ad', 'Product 1', 1, 9.99);
        return back();
    }
}
