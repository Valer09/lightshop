<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AccessController extends Controller
{
    public function adminAccess()
    {
        if (Auth::check()) {

            if ( Auth::user()->group == 'Administrator' )
                return view('admin');
            else
                return response('Unauthorized.', 401);

        }
        else return redirect('login');

    }
}
