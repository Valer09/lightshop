<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class orderController extends Controller
{
       public function submit_order(Request $request){


    DB::table('orders')->insert(array([

            'user_id' => Auth::user()->id,
            'total' => $request->input('total'),
            'address_id' => Auth::user()->address_id,
            'courier_id' => '1',
            'shipping_cost' => '20',
            'tax' => '0.22',
            'tracking' => '1',
            'order_shipped' => '10',
            ]));
        return view('home');

    }
}
