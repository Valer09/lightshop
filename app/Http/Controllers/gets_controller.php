<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Auth;

class gets_controller extends Controller
{
    public function get_user_cf(Request $request){

        $user=App\User::where('CF', $request->cf)->get();
        $email=$user->email;


        return view('auth/password/email/reset', $email);

    }
}
