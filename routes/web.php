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
Route::redirect('home',"/");

Route::get('/', function () {
    return view('home');
});

Route::group(['prefix' => 'elements'], function () {
    Route::get('all', 'ElementsController@showElements');
    Route::get('cat', 'ElementsController@showCategories');
    Route::get('sub', 'ElementsController@showSubCategories');
});

