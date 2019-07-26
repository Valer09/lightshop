<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Element;

class search_controller extends Controller
{
    public function searchContr(Request $request){
        $validatedData = $request->validate([
            'search' => 'required|string|max:255',
        ]);

        $search = $validatedData['search'];

        $elements = Element::where('name', 'LIKE', '%' . $search . '%')->orWhere('subcategories', 'LIKE', '%' . $search . '%')->paginate(30);

        return view('catalog', ['Elements' => $elements], ['Category' => null, 'search' => $search]);
    }
}
