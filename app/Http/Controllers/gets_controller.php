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
        return view('showroom_element', ['Element' => $element], ['Photos' => $photos]);
    }
}
