<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use DB;
use Auth;

class gets_controller extends Controller
{
    public function get_user_cf(Request $request){

        $email=App\User::where('CF', $request->cf)->select('email')->first()->email;

        return view('auth/passwords/email/emailRecovered',  compact('email'));

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

    public function catalog_controller($id) {
        $name = null;
        $elementFin = array();
        if(isset($id) && $id != ''){
            $cate = DB::select('select name from subcategories where category = ?', [$id]);
            $catSUP = DB::select('select * from categories where name = ?', [$id]);
            //dd($cate);
            if(isset($cate) && $cate != null) {
                //dd('1');
                foreach ($cate as $nameSubat) {
                    $element = DB::select('select * from elements where subcategories = ?', [$nameSubat->name]);
                    $elementFin = array_merge($elementFin, $element);
                    //dd($elementFin);
                }
            } else {
                //dd('2');
                $elementFin = DB::select('select * from elements where subcategories = ?', [$id]);

            }
            $array[0] = $catSUP[0];
            $array[1] = null;
            $array[2] = $cate;
            return view('catalog', ['Elements' => $elementFin], ['Category' => $array]);
            
        } else {
            return view('catalog_navigation');
        }
    }

    public function catalog_sub_controller($id, $sub) {
        if(isset($sub) || $sub != '') {
            $cate = DB::select('select name from subcategories where category = ?', [$id]);
            $catSUP = DB::select('select * from categories where name = ?', [$id]);
            $element = DB::select('select * from elements where subcategories = ?', [$sub]);
            $array[0] = $catSUP[0];
            $array[1] = $sub;
            $array[2] = $cate;
            return view('catalog', ['Elements' => $element], ['Category' => $array]);
        } else {
            return view('catalog_navigation');
        }
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
}
