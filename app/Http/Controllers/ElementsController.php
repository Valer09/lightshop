<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use phpDocumentor\Reflection\Element;
use Gloudemans\Shoppingcart\Facades\Cart;
use session;


class ElementsController extends Controller{

//public function getindex(){
  //  $elements=element::all();
    //return view('shop.index',['elements'=>$elements]);
//}


    public function showElements(){
        $menus=\App\Element::all();
        return view('elements',['elementlist' => $menus]);
    }

    public function showCategories(){

        $categories=\App\Category::all();
        return view('elements',['categorylist' => $categories]);
    }

    public function showSubCategories(){

        $subcategories=\App\Subcategory::all();
        $category=new Category();

        return view('elements', ['subcategorylist'=> $subcategories], ['categorylist' => $category::all()]);
    }
}

//public function getaddtocart(request $request,$id){
   //     $elements =elements ::find($id);
    //    $oldcart =Session ::has ('cart') ? Session:: get('cart'):null;
      //  $cart=new cart($oldcart);
        //$cart->add($elements,$elements->id);
        //$request->session()->put('cart',$cart);
        //dd($request->session()->get('cart'));
        //return redirect()->route('element.index');
        //}}
