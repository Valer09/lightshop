<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class VerifiedPrivileged
{
    //------ELEMENTS_ACTIONS-------//
    public static function verificaAdmin(Request $request) {
        return Auth::check() && Auth::user()->group == "Administrator";
    }
    public static function verificaAdminAndPrivileged(Request $request) {
        return Auth::check() && (Auth::user()->group == "Administrator" || Auth::user()->group == "Privileged");
    }  
}