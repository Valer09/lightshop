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

use Illuminate\Support\Facades\Auth;
use \xampp\htdocs\WebTechProject\app\Http\Controllers;

Route::redirect('welcome',"/");

//-----------------------------------//
//----------GET Methods-------------//

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/home', function () {
    if ( Auth::user()->group == "Administrator" )
        return redirect ('admin');
    else
        return view('home');
});

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


//Route::group(['prefix' => 'elements'], function () {
//    Route::get('all', 'ElementsController@showElements');
//    Route::get('cat', 'ElementsController@showCategories');
//    Route::get('sub', 'ElementsController@showSubCategories');
//});
Auth::routes();

Route::get('order', function(){
  return view('OrderFormTest');

});
Route::get('deletions', function(){
    return view('DeleteFormTest');

});


//--------------------------------------------//
//----------POST Methods---------------------//

//---INSERTIONS---/
Route::post('/order_submit', 'orderController@submit_order');
Route::post('/user_insertion_submit', 'insertionController@insert_user' );
Route::post('/element_insertion_submit', 'insertionController@insert_element' );
Route::post('/category_insertion_submit', 'insertionController@insert_category' );
Route::post('/news_insertion_submit', 'insertionController@insert_news' );
Route::post('/subcategory_insertion_submit', 'insertionController@insert_subcategory' );

//---DELETIONS---/
Route::post('/element_deletion_submit', 'deletionsController@delete_element' );
Route::post('/user_deletion_submit', 'deletionsController@delete_user' );
Route::post('/news_deletion_submit', 'deletionsController@delete_news' );
Route::post('/category_deletion_submit', 'deletionsController@delete_category' );
Route::post('/subcategory_deletion_submit', 'deletionsController@delete_subcategory' );



//---INCREMENT-DECREMENT---//
Route::post('/element_increase_submit', 'insertionController@increase_element' ); //increment 1
Route::post('/element_increase_of_submit', 'insertionController@increase_element_of' ); //increment x
Route::post('/element_decrease_submit', 'deletionsController@decrease_element' );
Route::post('/element_decrease_of_submit', 'deletionsController@decrease_element_of' );






