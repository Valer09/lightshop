<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class deletionsController extends Controller
{
    public function delete_element(Request $request){

        App\Element::where('name', $request->element)->delete();
        return view('test');

}

    public function delete_user(Request $request){

        App\User::where('email', $request->email)->delete();
        return view('test');

        }

    public function delete_news(Request $request){

        App\News::where('name', $request->name)->delete();
        return view('test');

    }

    public function delete_category(Request $request){

        App\Category::where('email', $request->Category)->delete();
        return view('test');
    }

    public function delete_subcategory(Request $request){

        App\Subcategory::where('email', $request->Subcategory)->delete();
        return view('test');
    }
}
