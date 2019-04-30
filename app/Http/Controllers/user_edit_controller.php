<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;
use Hash;
use App\User;
class user_edit_controller extends Controller
{
    public function edit_email(Request $request){

        if (! (Auth::check())  )
            return abort(403, 'Devi loggarti!');
        else
            if ( ($request->user_email) != ($request->control_email) ) {
                echo 'c\'è stato un errore. Le email devono coincidere';
                echo ' '.$request->user_email.' '.$request->control_email;

            }


            else{
                 $userID=Auth::user()->id;
                 $user=User::find($userID);
                 $user->email=$request->control_email;
                 $user->save();
                 return view('test');


        }

    }

    public function edit_password(Request $request){

    //Check if user is authenticated
        if (! (Auth::check())  )
            return abort(403, 'Devi loggarti!');
        else{

            $compare=$request->old_password;
            $userID=Auth::user()->id;
            $old=User::find($userID)->password;

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
                     $user=User::find($userID);
                     $user->password=Hash::make($request->password);
                     $user->save();

                     return view('test');
                    }
            }



        }


    }

    public function edit_name(Request $request){

        if ( !(Auth::check()) ) return abort(403, 'Devi loggarti!');
        else{

        $user=Auth::user();
        $user->name=$request->name;
        $user->save();

        return view('test');
        }

    }

    public function edit_surname(Request $request){

        if ( !(Auth::check()) ) return abort(403, 'Devi loggarti!');
        else{

            $user=Auth::user();
            $user->surname=$request->surname;
            $user->save();

            return view('test');
        }

    }

    public function general_edit(Request $request){
        if (!(Auth::check() ) ) return abort(403, 'Devi loggarti');
        else {
            $validatedData = $request->validate([
                'name' => 'required|string|max:191',
                'surname' => 'required|string|max:191',
                'CF' => 'required|string|max:191',
                'PIVA' => 'nullable|string|max:191',
                'email' => 'required|email|max:191',
                'pec' => 'nullable|email|max:191',
            ]);


            $user=Auth::user();
            if($user->name != $validatedData['name'])
                $user->name=$validatedData['name'];
            if($user->suername != $validatedData['surname'])
                $user->surname=$validatedData['surname'];
            if($user->CF != $validatedData['CF'])
                $user->CF=$validatedData['CF'];
            if($user->PIVA != $validatedData['PIVA'])
                $user->IVA=$validatedData['PIVA'];
            if($user->email != $validatedData['email'])
                $user->email=$validatedData['email'];
            if($user->PEC != $validatedData['pec'])
                $user->PEC=$validatedData['pec'];

            $user->save();
            return redirect('/profile#dati');
        }
    }

    public function user_admin_edit(Request $request){
        if (!VerifiedPrivileged::verificaAdminAndPrivileged($request) ) return abort(403, 'Azione non autorizzata!');
        else
            {
                $user = User::where('id', "$request->element_idModal")->first();

                if($user->name != $request->nomeMod) $user->update(['name' => $request->nomeMod]);
                if($user->surname != $request->cognomeMod) $user->update(['surname' => $request->cognomeMod]);
                if($user->email != $request->emailMod) $user->update(['email' => $request->emailMod]);
                if($user->PEC != $request->pecMod) $user->update(['PEC' => $request->pecMod]);
                if($user->IVA != $request->ivaMod) $user->update(['IVA' => $request->ivaMod]);
                if($user->CF != $request->cfMod) $user->update(['CF' => $request->cfMod]);

                if(($user->group != $request->catMod)) {
                    if(VerifiedPrivileged::verificaAdmin($request)) $user->update(['group' => $request->catMod]);
                    else {
                        $path = $request-> ref;
                        $path = substr($path, 1, strlen($path));
                        return redirect($path.'?openAlert=Non%20sei%20autorizzato%20a%20modificare%20il%20tipo%20di%20utente!');
                    }
                }

                $path = $request-> ref;
                $path = substr($path, 1, strlen($path));
                return redirect($path.'?openAlert=Dati%20inviati%20con%20successo!');
            }
    }

}
