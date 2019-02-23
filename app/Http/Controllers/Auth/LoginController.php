<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\AccessController;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Admin;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\HttpKernel\Tests\controller_func;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

   protected $redirectTo = '/homes';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('guest')->except('logout');


    }


    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }

    public function showName(){

         return Auth::user()->name;
    }



  /**  public function check_group($email){
        $user= DB::table('users')->get()->where('email', $email)->first();

    }**/
}
