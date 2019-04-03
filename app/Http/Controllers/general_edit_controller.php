<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Auth;
use DB;

class general_edit_controller extends Controller
{
    public static function address_star($id){
        $uid=Auth::user()->id;
        DB::table('users')->where('id', $uid)->update(['address_id' => $id]);

        return redirect('/profile#spedizione');


    }

    public function delete_user_address($id){
        Address::destroy($id);

        return redirect('/profile#spedizione');


    }
}
