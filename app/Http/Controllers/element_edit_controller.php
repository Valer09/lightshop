<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use App;

class element_edit_controller extends Controller
{
    public function edit_name(Request $request){
        if (! (Auth::check() ) ) echo 'Devi loggarti';
        else
            {
                $elementID=App\Element::where('name', "$request->name")->first()->id;
                $element=App\Element::find($elementID);

                $element->name = $request->new_name;
                $element->save();

                return view('test');

            }
    }

    public function edit_subcategories(Request $request){
        if (! (Auth::check() ) ) echo 'Devi loggarti';
        else
        {
            $elementID=App\Element::where('name', "$request->name")->first()->id;

            $element=App\Element::find($elementID);

            $element->subcategories = $request->subcategories;
            $element->save();

            return view('test');

        }
    }

    public function edit_price(Request $request){
        if (! (Auth::check() ) ) echo 'Devi loggarti';
        else
        {
            $elementID=App\Element::where('name', "$request->name")->first()->id;

            $element=App\Element::find($elementID);

            $element->price = $request->price;
            $element->save();

            return view('test');

        }
    }

    public function edit_description(Request $request){
        if (! (Auth::check() ) ) echo 'Devi loggarti';
        else
        {
            $elementID=App\Element::where('name', "$request->name")->first()->id;

            $element=App\Element::find($elementID);

            $element->description = $request->description;
            $element->save();

            return view('test');

        }
    }
}
