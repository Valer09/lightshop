<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;
use Hash;

class user_edit_controller extends Controller
{
    public function edit_email(Request $request){

        if (! (Auth::check())  )
            echo 'devi loggarti';
        else
            if ( ($request->user_email) != ($request->control_email) ) {
                echo 'c\'è stato un errore. Le email devono coincidere';
                echo ' '.$request->user_email.' '.$request->control_email;

            }


            else{
                 $userID=Auth::user()->id;
                 $user=App\User::find($userID);
                 $user->email=$request->control_email;
                 $user->save();
                 return view('test');


        }

    }

    public function edit_password(Request $request){

    //Check if user is authenticated
        if (! (Auth::check())  )
            echo 'devi loggarti';
        else{

            $compare=$request->old_password;
            $userID=Auth::user()->id;
            $old=App\User::find($userID)->password;

        //Check if old password is equal with old password input form
            if (!  (Hash::check($compare, $old ))  ){
                echo 'la vecchia password non è corretta';
            }
            else
                {
            //Check if password is equal to control-password
                if ($request->password != $request->control_password){
                    echo 'le 2 password devono coincidere';
                }
                else
                    {
                     $user=App\User::find($userID);
                     $user->password=Hash::make($request->password);
                     $user->save();

                     return view('test');
                    }
            }



        }


    }

    public function edit_name(Request $request){

        if ( !(Auth::check()) ) echo 'Devi loggarti';
        else{

        $user=Auth::user();
        $user->name=$request->name;
        $user->save();

        return view('test');
        }

    }

    public function edit_surname(Request $request){

        if ( !(Auth::check()) ) echo 'Devi loggarti';
        else{

            $user=Auth::user();
            $user->surname=$request->surname;
            $user->save();

            return view('test');
        }

    }



}
