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

Route::redirect('welcome',"/");


Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth/login');
});


Route::group(['prefix' => 'elements'], function () {
    Route::get('all', 'ElementsController@showElements');
    Route::get('cat', 'ElementsController@showCategories');
    Route::get('sub', 'ElementsController@showSubCategories');
});

Route::get('register', function () {
    return view('auth/register');
});

Route::get('form', function () {
    return view('register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


