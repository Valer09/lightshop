<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use phpDocumentor\Reflection\Element;
use Gloudemans\Shoppingcart\Facades\Cart;

class ElementsController extends Controller{



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
