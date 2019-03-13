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


//----------GET Methods-------------//

//---Home---//
Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/home', function () {
        return view('home');
});
Route::get('/profile', function(){
    return view('profile');
});
Route::get('/catalog', function(){
    return view('catalog');
});
Route::get('/homes', function () {
    if ( Auth::user()->group == "Administrator" )
        return redirect ('admin/home');
    else
        return redirect('home');
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('register', function () {
    return view('auth/register');
});
Route::get('form', function () {
    return view('register');
});
Route::get('about', function () {
    return view('about');
});

//--End Home--//


//--INSIDE--//
Route::get('/element', function () {
    return view('element');
});
//--End Inside--//

Auth::routes();




//---------ADMIN PAGES----------//

//---Access Control---//
Route::group(['prefix' => 'admin', 'middleware' => 'Admin'], function () {
   Route::get('', 'AccessController@adminAccess');
   Route::get('home', 'AccessController@adminAccess');
   Route::get('orders', function () {
       return view('backAdmin/orders');
   });
    Route::get('categories', function () {
        return view('backAdmin/categories');
    });
    Route::get('products', function () {
        return view('backAdmin/products');
    });
    Route::get('orderscompleted', function () {
        return view('backAdmin/orderscompleted');
    });

});
//---End Control---//


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


Route::group(['prefix' => 'admin'], function(){

    Route::get('/categories', function(){
        return view('backAdmin/categories');
    });

    Route::get('/products', function(){
        return view('backAdmin/products');
    });

    Route::get('/news', function(){
        return view('backAdmin/news');
    });
    Route::get('/orders', function(){
        return view('backAdmin/orders');
    });

    Route::get('/orderscompleted', function(){
        return view('backAdmin/orderscompleted');
    });

    Route::get('/settings', function(){
        return view('backAdmin/settings');
    });

    Route::get('/showroomAdmin', function(){
        return view('backAdmin/showroomAdmin');
    });

    Route::get('/users', function(){
        return view('backAdmin/users');
    });

});

//---------END ADMIN PAGES----------//



//----------OPERATIONS TEST VIEWS------------//

Route::get('order', function(){
  return view('OrderFormTest'); });

Route::get('deletions', function(){
    return view('DeleteFormTest'); });

Route::get('edits', function(){
    return view('EditFormTest'); });

Route::get('/showroom', function () {
    return view('showroom'); });

Route::get('/inside', function () {
    return view('inside'); });

//-----------END OPERATIONS------------//






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


//---EDITS---//
Route::post('/email_edit_submit', 'user_edit_controller@edit_email' );
Route::post('/password_edit_submit', 'user_edit_controller@edit_password' );
Route::post('/name_edit_submit', 'user_edit_controller@edit_name' );
Route::post('/surname_edit_submit', 'user_edit_controller@edit_surname' );
Route::post('/element_name_edit_submit', 'element_edit_controller@edit_name' );
Route::post('/element_subcategories_edit_submit', 'element_edit_controller@edit_subcategories' );
Route::post('/element_subcategories_edit_price', 'element_edit_controller@edit_price' );
Route::post('/element_subcategories_edit_description', 'element_edit_controller@edit_description' );
Route::post('/user_edit', 'user_edit_controller@general_edit' );

/**---DELETED---

 * Route::get('/single', function () {
 *    return view('layout/app');
 * });

 **/





