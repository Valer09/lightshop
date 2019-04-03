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
        return redirect(request()->headers->get('referer').'?openAlert=La%20categoria%20'.$request->category.'%20contiene%20delle%20sottocategorie!');
        else{
            App\Category::where('name', $request->category)->delete();
        }
        return redirect(request()->headers->get('referer'));
    }

    public function delete_subcategory(Request $request){

        $elements=App\Element::where('subcategories', $request->subcategory)->get();
        if (  $elements != '[]' )
            return redirect(request()->headers->get('referer').'?openAlert=La%20sottocategoria%20'.$request->subcategory.'%20contiene%20degli%20elementi!');
        else{ 
            App\Subcategory::where('name', $request->subcategory)->delete();
        }
        return redirect(request()->headers->get('referer'));
    }
}
