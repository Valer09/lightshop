<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AccessController extends Controller
{
    public function adminAccess()
    {
        if (Auth::check()) {

            if ( Auth::user()->group == 'Administrator' || Auth::user()->group == 'Privileged' )
                return view('admin');
            else
                return abort('Unauthorized.', 403);

        }
        else return redirect('login');

    }
}
