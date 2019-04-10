<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB, Auth, Session;

class orderController extends Controller
{
    public function submit_order(Request $request){
        if (!(Auth::check()) && (Auth::user()->email_verified_at == null || Auth::user()->email_verified_at == "") ) return abort(403, 'Devi loggarti!');
        else {

            $cart = Session::get('cart');
            $total = $cart->totalPrice;

            DB::table('orders')->insert(array([
                'user_id' => Auth::user()->id,
                'total' => $total,
                'address_id' => Auth::user()->address_id,
                'courier_id' => '1',
                'shipping_cost' => '12.50',
                'tax' => '0.22',
                'tracking' => '0',
                'order_shipped' => '0',
            ]));
            
            return view('home');
        }
    }

}
