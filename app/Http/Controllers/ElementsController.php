<?php

namespace App\Http\Controllers;

use App\Category, App\Subcategory, App\Element, App\Cart, App\Address, App\Courier;
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

        return view('cart', ['elements' => $cart->items, 'totalPrice' => $cart->totalPrice, 'totalWeight' => $cart->totalWeight]);
    }

    public function getCheckout(){
        if(Auth::check()) {
            if(empty(Auth::user()->email_verified_at) || Auth::user()->email_verified_at == '0000-00-00 00:00:00') return abort(403, 'Non puoi ordinare. Devi prima verificare la tua e-mail.');
            else {
                if(!Session::has('cart')){
                    return view('cart');
                }
                $oldCart=Session::get('cart');
                $cart= new Cart($oldCart);
                $total=$cart->totalPrice;

                $id=Auth::user()->address_id;
                $address = Address::find($id);

                //calcolo costo spedizione
                $spedizioni = Courier::where('pesomax', '>=', $cart->totalWeight)
                ->where('pesomin', '<=', $cart->totalWeight)->get(); 

                return view('checkout',['elements' => $cart->items, 'totalPrice'=>$total, 'address' => $address, 'totalWeight' => $cart->totalWeight, 'Spedizioni' => $spedizioni]);
            }
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

    public function getincreased(request $request,$id){
        $element = Element::find($id);
        $oldCart = Session::has('cart') ? Session:: get('cart') : null;
        $cart = new Cart($oldCart);

        if($cart->increase($element, $element->id)){
            $request->session()->put('cart', $cart);
            return redirect('shopping-cart');
        }
        else return redirect('shopping-cart?openAlert=Non puoi aggiugere altre quantita di questo articolo. Ci dispiace, Contatta l\'assistenza se ne hai bisogno.');
    }

    public function getdecreased(request $request,$id){
        $element = Element::find($id);
        $oldCart = Session::has('cart') ? Session:: get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->decrease($element, $element->id);

        $request->session()->put('cart', $cart);

        return redirect('shopping-cart');
    }
}








