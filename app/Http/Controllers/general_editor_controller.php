<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class general_editor_controller extends Controller
{
    public function address_star(Request $request){
        $uid=Auth::user()->id;


        DB::table('users')->where('id', $uid)->update(['address_id' => 1]);

        return view('test');

    }
}
