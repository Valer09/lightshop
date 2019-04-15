<?php

namespace App\Http\Controllers;

use App\User, App\Order, App\OrderDetail, App\Courier, App\Cart, App\Element;
use Illuminate\Http\Request;
use DB, Auth, Session;

class orderController extends Controller
{
    public function submit_order(Request $request){
        if (!(Auth::check()) ) return abort(403, 'Devi loggarti!');
        else {
            if(empty(Auth::user()->email_verified_at) || Auth::user()->email_verified_at == '0000-00-00 00:00:00') return abort(403, 'Non puoi ordinare. Devi prima verificare la tua e-mail.');
            else {
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $total = 0;
                $idCourier = $request->courier;
                $courierObj = Courier::where('id', $idCourier)->first();

                //Calcolo totale
                foreach($cart->items as $item) {
                    $el = Element::where('id', $item['item']->id)->first();
                    $total += $item['qty'] * $el->price;
                }

                $order = new Order;
                $order->user_id = Auth::user()->id;
                $order->total = $total;
                $order->address_id = Auth::user()->address_id;
                $order->shipping_cost = $courierObj->price;
                $order->tax = 0.22;
                $order->order_shipped = null;
                $order->tracking = null;
                $order->courier_id = $idCourier;
                $order->save();

                foreach($cart->items as $item) {
                    $el = Element::where('id', $item['item']->id)->first();
                    $orderDetail = new OrderDetail;
                    $orderDetail->orders_id = $order->id;
                    $orderDetail->element_id = $item['item']->id;
                    $orderDetail->element_name = $item['item']->name;
                    $orderDetail->price = $el->price;
                    $orderDetail->details = '';
                    $orderDetail->quantity = $item['qty'];
                    $orderDetail->save();

                    $el::modAvailability($el->id,($el->availability - $item['qty']));
                }

                Session::forget('cart');

                return view('home');
            }
            
        }
    }

}
