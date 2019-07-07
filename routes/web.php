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
    if ( Auth::check() )
        return view('profile');
    else
        return redirect('login');

})->middleware('verified');

Route::get('/homes', function () {
    if ( Auth::check() && Auth::user()->group == "Administrator" )
        return redirect ('admin/home');
    else
        return redirect('home');
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('register', function () {
    return view('auth/register');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/verified', function () {
    return view('verified');
});

Route::get('/password/reset', function () {
    return view('password/reset');
});
Route::get('/password/email', function () {
    return view('Auth/passwords/email/reset');
});

Route::get('recovered', function () {
    return view('/recovered');
});

Route::get('/search', 'search_controller@searchContr');

Route::get('/star_address{id}', 'general_edit_controller@address_star');
Route::get('/delete_user_address{id}', 'general_edit_controller@delete_user_address');
Route::post('/email_recovery', 'gets_controller@get_user_cf');

Route::get('/order_details-{id}', 'gets_controller@controllerPageOrderDetails');


//--End Home--//

//--Showroom--//
Route::get('/showroom', function () {
    return view('showroom');
});

Route::get('/bagni', function () {
    return view('showroom_navigation');
});

Route::get('/pavimenti_rivestimenti', function () {
    return view('showroom_navigation');
});

Route::get('/porte', function () {
    return view('showroom_navigation');
});

Route::get('/caminetti', function () {
    return view('showroom_navigation');
});

Route::get('/falegnameria', function () {
    return view('showroom_navigation');
});

Route::get('/cucine', function () {
    return view('showroom_navigation');
});

Route::get('/giardini_esterni', function () {
    return view('showroom_navigation');
});

Route::get('/el_showroom-{id_element}', 'gets_controller@openElementShowroom');


//End showroom--/

//CataLog /

Route::get('/catalog', function () {
    return view('catalog_navigation');
});

Route::get('/catalog-{id}', 'gets_controller@catalog_controller');

Route::get('/catalog-{id}/{sub}', 'gets_controller@catalog_sub_controller');

//EndCatalag/




//--INSIDE--//
Route::get('/element{id}', 'gets_controller@element_controller');
//--End Inside--//

Auth::routes(['verify' => true]);
// Authentication Routes...



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
    Route::get('/news', function(){
        return view('backAdmin/news');
    });
    Route::get('/showroomAdmin', function(){
        return view('backAdmin/showroomAdmin');
    });
    Route::get('/users', function(){
        return view('backAdmin/users');
    });

    Route::get('/couriers', function(){
        return view('backAdmin/couriers');
    });

    Route::get('/offers', function(){
        return view('backAdmin/offers');
    });
    Route::get('/settings', function(){
        return view('backAdmin/settings');
    });
});

//---------END ADMIN PAGES----------//



//---------SHOPPING CART------------//

Route ::post('/add-to-cart/{id}',[
'uses'=> 'ElementsController@getAddToCart',
   'as'=>'Element.addToCart',]
);

Route ::get('/del-to-cart/{id}',[
    'uses'=> 'ElementsController@delToCart',
       'as'=>'Element.delToCart',]
);

 Route:: get('/shopping-cart',[
    'uses'=> 'ElementsController@getCart',
    'as'=>'Element.shoppingCart'
]);

 Route :: get('/get-increased/{id}',[
     'uses'=> 'ElementsController@getincreased',
     'as'=>'Element.getincreased'
 ]);

Route :: get('get-decreased/{id}',[
    'uses'=> 'ElementsController@getdecreased',
    'as'=>'Element.getdecreased'
]);

//------END SHOPPING CART SESSION-------//


//-------CHECK OUT SESSION-----------//


Route::get('/checkout',[
'uses'=>'ElementsController@getCheckout',
'as'=>'checkout'
]);



//----------POST Methods---------------------//

//---INSERTIONS---/
Route::post('/order_submit', 'orderController@submit_order');
Route::post('/element_insertion_submit', 'insertionController@insert_element' );
Route::post('/address_insertion_submit', 'insertionController@insert_address' );
Route::post('/article_showroom_insert', 'insertionController@insert_art_showroom' );
Route::post('/insert_new_brand', 'insertionController@insert_brand' );
Route::post('/insert_courier', 'insertionController@insert_courier' );
Route::post('/add_new_sped', 'insertionController@insert_spedition' );
Route::post('/add_photo_category-{name}', 'insertionController@insert_photo_category' );
Route::post('/add_offert', 'insertionController@insert_offert' );

Route::post('/category_insertion_submit', 'insertionController@insert_category' );
Route::post('/news_insertion_submit', 'insertionController@insert_news' );
Route::post('/subcategory_insertion_submit', 'insertionController@insert_subcategory' );

//---DELETIONS---/
Route::post('/element_deletion_submit', 'deletionsController@delete_element' );
Route::post('/user_deletion_submit', 'deletionsController@delete_user' );
Route::post('/news_deletion_submit', 'deletionsController@delete_news' );
Route::post('/category_deletion_submit', 'deletionsController@delete_category' );
Route::post('/subcategory_deletion_submit', 'deletionsController@delete_subcategory' );
Route::post('/elementshowroom_deletion_submit', 'deletionsController@delete_element_showroom' );
Route::post('/courier_deletion', 'deletionsController@delete_courier' );
Route::post('/order_deletion_submit', 'deletionsController@delete_order' );
Route::get('/offert_delete-{id}', 'deletionsController@offert_delete' );

//---INCREMENT-DECREMENT---//
Route::post('/element_decrease_submit', 'deletionsController@decrease_element' );
Route::post('/element_decrease_of_submit', 'deletionsController@decrease_element_of' );


//---EDITS---//
Route::post('/email_edit_submit', 'user_edit_controller@edit_email' );
Route::post('/password_edit_submit', 'user_edit_controller@edit_password' );
Route::post('/name_edit_submit', 'user_edit_controller@edit_name' );
Route::post('/surname_edit_submit', 'user_edit_controller@edit_surname' );
Route::post('/element_edit_submit', 'element_edit_controller@edit_element' );
Route::post('/showroom_edit_submit', 'element_edit_controller@edit_showroom_element' );
Route::post('/user_edit', 'user_edit_controller@general_edit' );
Route::post('/courier_edit', 'element_edit_controller@edit_courier' );
Route::post('/order_edit', 'element_edit_controller@order_edit' );
Route::post('/user_admin_edit', 'user_edit_controller@user_admin_edit' );

/**---DELETED---

 * Route::get('/single', function () {
 *    return view('layout/app');
 * });

 **/






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

