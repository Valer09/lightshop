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
        if(!empty($id) || $id != null){
            $cate = DB::select('select name from subcategories where category = ?', [$id]);
            
            $name = $cate[0]->name;
            if($cate != null)
                $element = DB::select('select * from elements where subcategories = ?', [$name]);
            
                return view('catalog', ['Elements' => $element], ['Category' => $id]);
        } else {
            return view('catalog_navigation');
        }
    }
}
