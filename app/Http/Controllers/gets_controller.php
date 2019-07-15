<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use DB;
use Auth;
use App\Http\Controllers\VerifiedPrivileged;
use App\Order, App\OrderDetail, App\User, App\Element, App\Address, App\Courier, App\SpecElement;

class gets_controller extends Controller
{
    public function get_user_cf(Request $request){

        $us=App\User::where('CF', $request->cf)->first();
        if(empty($us)){
            return view('Auth/passwords/email/reset', ['newEmail' => 'Email not found.']); 
        } else {
            $email = $us->email;
        }

        return view('Auth/passwords/email/reset',  compact('email'));

    }

    public function openElementShowroom($id_element){
         
        $element = DB::select('select * from elementsshowrooms where id = ?', [$id_element]);
        $photos = DB::select('select * from showroom_photo_table where element_id = ?', [$id_element]);
        //dd($photos);
        if(!empty($element))
            return view('showroom_element', ['Element' => $element], ['Photos' => $photos]);
        else
            return abort(404);
    }

    public function catalog_controller(Request $request, $id) {
        $name = null;
        $elementFin = array();
        
        if(isset($id) && $id != ''){
            $cate = DB::select('select name from subcategories where category = ?', [$id]);
            $catSUP = DB::select('select * from categories where name = ?', [$id]);
            
            empty($request->input('limit')) ? $limit = 40 : $limit = $request->input('limit');

            if(isset($cate) && $cate != null) {
                $arrai = array();
                foreach ($cate as $nameSubat) {
                    array_push($arrai, $nameSubat->name);
                }

                $elementFin = Element::whereIn('subcategories', $arrai);

                if($request->input('price') != null){
                    $str = explode('-', $request->input('price'));
                    $elementFin = $elementFin->whereBetween('price', [$str[0], $str[1]]);
                    //dd($elementFin);
                }

                switch ($request->input('sort')) {
                    case 'Low price':
                    $elementFin = $elementFin->orderBy('price', 'asc')->paginate($limit);
                        break;
                    case 'High price':
                    $elementFin = $elementFin->orderBy('price', 'desc')->paginate($limit);
                        break;
                    case 'Newest Arrivals':
                    $elementFin = $elementFin->orderBy('created_at', 'desc')->paginate($limit);
                        break;
                    default:
                    $elementFin = $elementFin->paginate($limit);
                }

            } else {
                $elementFin = Element::where('subcategories', [$id]);

                if($request->input('price') != null){
                    $str = explode('-', $request->input('price'));
                    $elementFin = $elementFin->whereBetween('price', [$str[0], $str[1]]);
                    //dd($elementFin);
                }

                switch ($request->input('sort')) {
                    case 'Low price':
                    $elementFin = $elementFin->orderBy('price', 'asc')->paginate($limit);
                        break;
                    case 'High price':
                    $elementFin = $elementFin->orderBy('price', 'desc')->paginate($limit);
                        break;
                    case 'Newest Arrivals':
                    $elementFin = $elementFin->orderBy('created_at', 'desc')->paginate($limit);
                        break;
                    default:
                    $elementFin = $elementFin->paginate($limit);
                }
                
            }

            $array[0] = $catSUP[0];
            $array[1] = null;
            $array[2] = $cate;
            return view('catalog', ['Elements' => $elementFin], ['Category' => $array, 'rangeFilter' => gets_controller::rangeFiter($arrai)]);
            
        } else {
            return view('/');
        }
    }

    public function catalog_sub_controller(Request $request, $id, $sub) {
        if(isset($sub) || $sub != '') {
            $cate = DB::select('select name from subcategories where category = ?', [$id]);
            $catSUP = DB::select('select * from categories where name = ?', [$id]);
            
            empty($request->input('limit')) ? $limit = 40 : $limit = $request->input('limit');

            $element = Element::where('subcategories', [$sub]);

            if($request->input('price') != null){
                $str = explode('-', $request->input('price'));
                $element = $element->whereBetween('price', [$str[0], $str[1]]);
            }

            switch ($request->input('sort')) {
                case 'Low price':
                $element = $element->orderBy('price', 'asc')->paginate($limit);
                    break;
                case 'High price':
                $element = $element->orderBy('price', 'desc')->paginate($limit);
                    break;
                case 'Newest Arrivals':
                $element = $element->orderBy('created_at', 'desc')->paginate($limit);
                    break;
                default:
                $element = $element->paginate($limit);
            }
            
            $array[0] = $catSUP[0];
            $array[1] = $sub;
            $array[2] = $cate;

            return view('catalog', ['Elements' => $element], ['Category' => $array, 'rangeFilter' => gets_controller::rangeFiter($sub)]);
        } else {
            return view('catalog');
        }
    }

    public function rangeFiter($cat){
        $elements = Element::whereIn('subcategories', [$cat])->orderBy('price', 'desc')->first();
        if(isset($elements)){
            $max = $elements->price;
        } else {
            $max = 120;
        }
        
        /*
        foreach($elements as $el) {
            if($el->price > $max){
                $max = $el->price;
            }
        }
        */

        return $max/6;
    }


    public static function photo_element_controller($id_element) {
        if(!empty($id_element) || $id_element != null){
            //
            $photos = DB::select('select * from photo_table where element_id = ?', [$id_element]);
            //dd($photos);
            return $photos;
        }
    }

    public function element_controller($id) {
        if(!empty($id) || $id != null){
            //$element = DB::select('select * from (select * from elements where id = ?) a left join photo_table b on a.id = b.element_id', [$id]);
            $element = DB::select('select * from elements where id = ?', [$id]);
            //dd($element);
            if(!empty($element))
                return view('element', ['Element' => $element]);
            else return abort(404);
        } else return abort(404);
    }

    public static function brand_controller($id) {
        if(!empty($id) || $id != null){
            //$element = DB::select('select * from (select * from elements where id = ?) a left join photo_table b on a.id = b.element_id', [$id]);
            $element = DB::select('select * from brands where name = ?', [$id]);
            //dd($element[0]);
            if(!empty($element))
                return $element[0];
            else return null;
        } else return null;
    }

    public static function controllerPageOrderDetails(Request $request, $id) {
        if ( !VerifiedPrivileged::verificaAdminAndPrivileged($request) ) return abort(403, 'Azione non autorizzata!');
        else {

            if(!empty($id) || $id != null){
                $order = Order::where('id', $id)->first();
                $orderElements = OrderDetail::where('orders_id', $id)->get();
                $user = User::where('id', $order->user_id)->first();
                $address = Address::where('id' , $order->address_id)->first();
                $courier = Courier::where('id', $order->courier_id)->first();
               
                return view('backAdmin.orderDetails', ['Order' => $order, 'OrderElements' => $orderElements, 'User' => $user, 'Address' => $address, 'Courier' => $courier]);

            } else abort(500, 'Ordine non trovato.');

        }
    }
}
