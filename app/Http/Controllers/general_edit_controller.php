<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Auth;
use DB;

class general_edit_controller extends Controller
{
    public static function address_star($id){
        if(Auth::check()) {
            $uid=Auth::user()->id;
        DB::table('users')->where('id', $uid)->update(['address_id' => $id]);

        return redirect('/profile#spedizione');
        } else redirect('login');
    }

    public function delete_user_address($id){
        if(Auth::check()) {
            Address::destroy($id);
            return redirect('/profile#spedizione');
        } else redirect('login');
    }
}
