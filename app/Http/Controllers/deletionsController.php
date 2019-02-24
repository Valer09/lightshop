<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use DB;

class deletionsController extends Controller
{
    //------ELEMENTS_ACTIONS-------//

    public function delete_element(Request $request){

        App\Element::where('name', $request->element)->delete();
        return view('test');

}
    public function decrease_element(Request $request){

        DB::table('elements')->where('name', $request->decrease)->decrement('availability');
        return view('test');

    }
    public function decrease_element_of(Request $request){

        $quantity=$request->quantity;
        DB::table('elements')->where('name', $request->decrease)->decrement('availability',$quantity);
        return view('test');

    }

//------ELEMENT-ACTIONS-END--------//

    public function delete_user(Request $request){

        App\User::where('email', $request->email)->delete();
        return view('test');

        }

    public function delete_news(Request $request){

        App\News::where('name', $request->news)->delete();
        return view('test');
    }

    public function delete_category(Request $request){

        $subcat=App\Subcategory::where('category', $request->category)->get();

        if (  $subcat != '[]' )
            echo "Attenzione, ci sono delle sottocategorie appartenenti";
        else{
        App\Category::where('name', $request->category)->delete();
        return view('test');
        }
    }

    public function delete_subcategory(Request $request){

      /**  $elements=App\Element::where('subcategories', $request->subcategory)->get();
        if (  $elements != '[]' )
            echo "Attenzione, ci sono degli elementi appartenenti";
        else{**/
            App\Subcategory::where('name', $request->subcategory)->delete();
            return view('test');

    }
}
