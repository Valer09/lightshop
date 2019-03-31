<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\User, App\Element, App\News, App\Category, App\Subcategory, App\File, App\Address, App\ElementsShowRoom, App\PhotoShowroom, App\PhotoElement, App\Brand;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
Use Illuminate\Support\Facades\Auth;




/**
 * Nella documentazione di laravel ufficiale al link https://laravel.com/docs/5.7/eloquent
 * dovrebbe essere spiegato come ricavare i dati dal DB tramite eloquent e quindi logica a oggetti anzichè
 * fare query dirette.
 **/

class insertionController extends Controller
{

//--DB methods--//
    /**public function insert_user(request $request){

    DB::table('users')->insert(array([

    'name' => $request->input('name'),
    'surname' => $request->input('surname'),
    'email' => $request->input('email'),
    'password' => $request->input('password'),
    'group' => $request->input('group'), // FORM CON LISTA DA RICAVARE CON QUERY SU GROUP

    ]));
    return view('test');


    }

    public function insert_element(request $request){

    DB::table('elements')->insert(array([

    'name' => $request->input('name'),
    'subcategories' => $request->input('subcategories'),
    'price' => $request->input('price'),
    'availability' => $request->input('quantity'),
    'brand' => $request->input('brand'), // FORM CON LISTA DA RICAVARE CON QUERY SU BRAND
    'description' => $request->input('brand'),

    ]));
    return view('test');


    }

    public function insert_news(request $request){

    DB::table('news')->insert(array([

    'name' => $request->input('name'),
    'description' => $request->input('description'),
    'startDate' => $request->input('start_date'),
    'stopDate' => $request->input('stop_date'),
    'pathPhoto' => $request->input('path'),
    'linkBuy' => $request->input('link'),

    ]));
    return view('test');


    }

    public function insert_category(request $request){

    DB::table('categories')->insert(array([

    'name' => $request->input('name')

    ]));
    return view('test');


    }

    public function insert_subcategory(request $request){

    DB::table('subcategories')->insert(array([

    'name' => $request->input('name'),
    'category' => $request->input('category'), // FORM CON LISTA DA RICAVARE CON QUERY SU categories

    ]));
    return view('test');


    } **/


    public function insert_user(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = Hash::make ($request->password);
        $user->group = $request->group;
        $user->save();

        return view('test');

    }


    public function increase_element(Request $request){

        DB::table('elements')->where('name', $request->increase)->increment('availability',1);
        return view('test');

    }

    public function increase_element_of(Request $request){

        $quantity=$request->quantity;
        DB::table('elements')->where('name', $request->increase)->increment('availability',$quantity);
        return view('test');

    }

    public function insert_element(Request $request)
    {
        $element = new Element;

        $element->name = $request->name;
        $element->subcategories = $request->subcategory;
        $element->price = $request->price;
        $element->availability = $request-> quantity;
        $element->description = $request->description;
        $element->brand = $request->brand;

        $name=$request->file_name->getClientOriginalName();
        $request->file('file_name')->storeAs('/images/catalogo',$name ,'public');
        $element-> pathPhoto = "/images/catalogo/$name";
        $element->save();
        
        $el_id = $element->id;
        
        if($request->hasFile('photos')){
            $files = $request->file('photos');
            foreach ($files as $file) {
                $n = $file->getClientOriginalName();
                $file->storeAs('/images/catalogo',$n ,'public');
                $photo = new PhotoElement;
                $photo-> element_id = $el_id;
                $photo-> path = "/images/catalogo/$n";
                $photo-> name = $n;
                $photo->save();
            }
        }

            $path = $request-> ref;
            $path = substr($path, 1, strlen($path));
            return redirect($path.'?openAlert=Dati%20inviati%20con%20successo!');
        }

    public function insert_news(Request $request){

        $news =  new News;

        $news->name = $request->name;
        $news->description = $request->description;
        $news->startDate = $request->startDate;
        $news->stopDate = $request->stopDate;
        $news->pathPhoto = $request->path;
        $news->linkBuy = $request->link;
        $news->save();

        return view('test');
    }
    public function insert_category(Request $request){

        $category =  new Category;
        $category->name = $request->name;
        $category->save();

        $path = $request-> ref;
        $path = substr($path, 1, strlen($path));
        return redirect($path.'?openAlert=Dati%20inviati%20con%20successo!');
    }

    public function insert_subcategory(Request $request){

        $subcategory = new Subcategory;

        $subcategory-> name = $request -> name;
        $subcategory-> category = $request -> category;
        $subcategory->save();

        $path = $request-> ref;
        $path = substr($path, 1, strlen($path));
        return redirect($path.'?openAlert=Dati%20inviati%20con%20successo!');
    }

    public function insert_address(Request $request){

        $address = new Address;

        $address-> country = $request -> country;
        $address-> street = $request -> street;
        $address-> city = $request -> city;
        $address-> CAP = $request -> CAP;
        $address-> street_number = $request -> street_number;
        $address-> user_id = $request -> user_id;
        $address-> NomeCognome = $request -> NomeCognome;
        $address-> Provincia = $request -> Provincia;
        $address-> user_id = Auth::user()->id;
        
        $address->save();

        $path = $request-> ref;
        $path = substr($path, 1, strlen($path));
        return redirect($path.'?openAlert=Dati%20inviati%20con%20successo!');
        }

    public function insert_art_showroom(Request $request){

        $element =  new ElementsShowRoom;

        $element-> name = $request->name;
        $element-> description = $request->description;
        //$element-> pathPhoto = $request->path;
        $element-> linkBuy = $request->link;
        $element-> nameSubCategory = $request->subcategory;
        
        $name=$request->file_name->getClientOriginalName();
        $request->file('file_name')->storeAs('/images/showroom',$name ,'public');
        $element-> pathPhoto = "/images/showroom/$name";
        $element->save();

        $el_id = $element->id;
        
        if($request->hasFile('photos')){
            $files = $request->file('photos');
            foreach ($files as $file) {
                $n = $file->getClientOriginalName();
                $file->storeAs('/images/showroom',$n ,'public');
                $photo = new PhotoShowroom;
                $photo-> element_id = $el_id;
                $photo-> path = "/images/showroom/$n";
                $photo-> name = $n;
                $photo->save();
            }
        }

        $path = $request-> ref;
        $path = substr($path, 1, strlen($path));
        return redirect($path.'?openAlert=Dati%20inviati%20con%20successo!');
    }

    public function insert_brand(Request $request){

        $brand = new Brand;

        //controllo link
        $link = $request -> link;
        if(substr($link, 0, 3) != "http")
            $link = "http://".$link;

        $brand-> name = $request -> name;
        $brand-> link = $link;
        $brand-> description = $request -> description;
        $brand->save();

        $path = $request-> ref;
        $path = substr($path, 1, strlen($path));
        return redirect($path);
    }
}
