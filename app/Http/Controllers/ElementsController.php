<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use phpDocumentor\Reflection\Element;
use Gloudemans\Shoppingcart\Facades\Cart;
use session;


class ElementsController extends Controller
{

    public function getindex()
    {
        $Elements = \App\Element::all();
        return view('catalog', ['Elements' => $Elements]);
    }


    public function showElements()
    {
        $menus = \App\Element::all();
        return view('elements', ['elementlist' => $menus]);
    }

    public function showCategories()
    {

        $categories = \App\Category::all();
        return view('elements', ['categorylist' => $categories]);
    }

    public function showSubCategories()
    {

        $subcategories = \App\Subcategory::all();
        $category = new Category();

        return view('elements', ['subcategorylist' => $subcategories], ['categorylist' => $category::all()]);
    }


    public function getaddtocart(request $request, $id)
    {
        $elements = elements::find($id);
        $oldcart = Session::has('cart') ? Session:: get('cart') : null;
        $cart = new cart($oldcart);
        $cart->add($elements, $elements->id);
        $request->session()->put('cart', $cart);
        return redirect()->route('Element.catalog');
    }


    public function getCart()
    {
        if (!session::has('cart')) {

            return view('cart');

        }

        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        return view('cart', ['elements' => $cart->items, 'totalprice' => $cart->totalprice]);
    }
}


//public function getcheckout(){
  //  if(!session::has('cart')){
    //    return view('views.cart');
    //}
    //$oldcart=Session::get('cart');
    //$cart= new Cart($oldcart);
    //$total=$cart->totalprice;
   // return view('views.checkout',['total'=>$total]);
//}





