<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cart_controller extends Controller
{
    public function carrello(){
        Cart::add('293ad', 'Product 1', 1, 9.99);
        return back();
    }
    public function cartupdate(){
        $rowId = null;
        Cart::update($rowId,0);
        Cart::update($rowId, ['name' => 'Product 1']);
        Cart::update($rowId,$Product);
    }
    public function remove(){
        $rowId = null;
        Cart::remove($rowId);
    }
    public function get(){
        $rowId = null;
        Cart::get($rowId);
    }

     public function destroy(){
     Cart::destroy();
    }
    public function totatl(){
        Cart::total();
        Cart::total($cart->total);
    }
    public function count(){
        Cart::count();
    }
    public function search(){
        $cart->search(function($cartItem,$rowId) {
            return $cartItem->id === 1;
        });
    }
    public function store(){
        Cart::store('username');
    }
    public function restore(){

        Cart::restore('username');

    }
}

