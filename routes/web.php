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
    if ( Auth::user()->group != "Administrator" )
        return view('profile');
    else
        return view('profile');

})->middleware('verified');

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
Route::get('/cart', function () {
    return view('cart');
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


Route::get('/star_address{id}', 'general_edit_controller@address_star');
Route::get('/delete_user_address{id}', 'general_edit_controller@delete_user_address');
Route::post('/email_recovery', 'gets_controller@get_user_cf');


//--End Home--//

//--Showroom--//
Route::group(['prefix' => 'showroom'], function () {
    Route::get('/bagni', function () {
        return view('showroom_navigation');
    });

    Route::get('/pavimenti', function () {
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

    Route::get('/element', function () {
        return view('showroom_element');
    });

});

//End showroom--/






//--INSIDE--//
Route::get('/element', function () {
    return view('element');
});
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



//---------SHOPPING CART------------//

//Route ::get('/add-to-cart/{id}',[
//'uses'=> 'ElementsController@getaddtocart',
  //  'as'=>'Element.addtocart',]
//);

//Route ::get('/',[
   // 'uses'=>'ElementsController@getindex',
   // 'as'=>'Elements.pagina dove sono i prodotti'
  //  ]);

 //Route:: get('/shopping-cart',[
   // 'uses'=> 'ElementsController@getcart',
    //'as'=>'Element.shoppingcart'
// ]);

//------END SHOPPING CART SESSION-------//


//-------CHECK OUT SESSION-----------//

//Route::get('/checkout',[
//'uses'=>'elementscontroller@getcheckout',
//'as'=>'checkout'
//]);

//Route::post('/checkout',[
//  'uses'=>'elementscontroller@postcheckout',
//    'as'=>'checkout'
//]);






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

//--post-get--//



//--post-get--/

//---INSERTIONS---/
Route::post('/order_submit', 'orderController@submit_order');
Route::post('/user_insertion_submit', 'insertionController@insert_user' );
Route::post('/element_insertion_submit', 'insertionController@insert_element' );
Route::post('/address_insertion_submit', 'insertionController@insert_address' );
Route::post('/article_showroom_insert', 'insertionController@insert_art_showroom' );


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






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
