<?php

namespace App\Http\Controllers;

use App\Category, App\Subcategory, App\Element, App\Cart, App\Address;
use Illuminate\Http\Request;


use Session;
use Auth;


class ElementsController extends Controller
{
    public function showElements()
    {
        $menus = Element::all();
        return view('elements', ['elementlist' => $menus]);
    }

    public function showCategories()
    {

        $categories = Category::all();
        return view('elements', ['categorylist' => $categories]);
    }

    public function showSubCategories()
    {

        $subcategories = Subcategory::all();
        $category = new Category();

        return view('elements', ['subcategorylist' => $subcategories], ['categorylist' => $category::all()]);
    }

    public function getAddToCart(request $request, $id)
    {
        $element = Element::find($id);
        $oldCart = Session::has('cart') ? Session:: get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($element, $element->id, $request->quantity);

        $request->session()->put('cart', $cart);

        return redirect('catalog');
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart', ['elements' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout(){
        if(Auth::check()) {
            if(!Session::has('cart')){
                return view('cart');
            }
            $oldCart=Session::get('cart');
            $cart= new Cart($oldCart);
            $total=$cart->totalPrice;

            $id=Auth::user()->address_id;
            $address = Address::find($id);

            return view('checkout',['elements' => $cart->items, 'totalPrice'=>$total, 'address' => $address]);
        } else {
            return redirect('login');
        }
        
    }

    public function delToCart(request $request, $id) {
        $oldCart = Session::has('cart') ? Session:: get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->del($id);

        $request->session()->put('cart', $cart);
        return redirect('shopping-cart');
    }

  //  public function getincreased($id,$quantity)

    //{

    //    $element = Element::find($id);
      //  $oldCart = Session::has('cart') ? Session:: get('cart') : null;
        //$cart = new Cart($oldCart);
        //$cart->add($element, $element->id);
        //$quantity->add(++$quantity);
    //}

    //public function getdecreased($id,$quantity)

    //{

      //  $element = Element::find($id);
       // $oldCart = Session::has('cart') ? Session:: get('cart') : null;
        //$cart = new Cart($oldCart);
        //$cart->add($element, $element->id);
        //$quantity->add(--$quantity);

    //}
}








