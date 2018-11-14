<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::redirect('welcome',"/");

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth/login');
});
//Route::post('/login', function(){
//    return view('admin');
//});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('register', function () {
    return view('auth/register');
});

Route::get('form', function () {
    return view('register');
});

Route::group(['prefix' => 'admin'], function () {
   Route::get('', 'AccessController@adminAccess');
    Route::get('board', 'AccessController@adminAccess');
});

//Route::group(['middleware' => 'Admin'], function () {
   //  Route::get('/admin', 'Auth\LoginController@AdminAccess');
   //  Route::get('admin', 'Auth\LoginController');
   //  Route::resource('book', 'BookController');
//});


Route::get('/home', function () {
    return view('home');
});


Route::group(['prefix' => 'elements'], function () {
    Route::get('all', 'ElementsController@showElements');
    Route::get('cat', 'ElementsController@showCategories');
    Route::get('sub', 'ElementsController@showSubCategories');
});

