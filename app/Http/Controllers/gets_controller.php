<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Auth;

class gets_controller extends Controller
{
    public function get_user_cf(Request $request){

        $email=App\User::where('CF', $request->cf)->select('email')->first()->email;

        return view('auth/passwords/email/emailRecovered',  compact('email'));

    }
}
