<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\User, App\Element, App\News, App\Category, App\Subcategory, App\File, 
App\Address, App\ElementsShowRoom, App\PhotoShowroom, App\PhotoElement, App\Brand, 
App\Courier, App\NameCourier, App\Offert, App\SpecElement, App\Banner, App\Review;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
Use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VerifiedPrivileged;




/**
 * Nella documentazione di laravel ufficiale al link https://laravel.com/docs/5.7/eloquent
 * dovrebbe essere spiegato come ricavare i dati dal DB tramite eloquent e quindi logica a oggetti anzichè
 * fare query dirette.
 **/

class insertionController extends Controller
{
    public function insert_element(Request $request){
        if ( !VerifiedPrivileged::verificaAdminAndPrivileged($request) ) return abort(403, 'Azione non autorizzata!');
        else {
            $element = new Element;
            $element->name = $request->name;
            $element->subcategories = $request->subcategory;
            $element->price = $request->price;
            $element->availability = $request-> quantity;
            $element->description = $request->description;
            $element->brand = $request->brand;
            $element->weight = $request->weight;
            $element->product_code = $request->product_code;
            $element->save();

            $el_id = $element->id;
            insertionController::insert_principal_photo($request,$el_id);
            
            if($request->hasFile('photos')){
                insertionController::insert_other_photos($request,$el_id);
            }

            if(isset($request->key_spec)){
                InsertionController::insert_spec_element($request, $el_id);
            }

            $path = $request-> ref;
            $path = substr($path, 1, strlen($path));
            return redirect($path.'?openAlert=Dati%20inviati%20con%20successo!');
        }
    }

    public static function insert_principal_photo(Request $request, $idElement){
        $name=$request->file_name->getClientOriginalName();
        $request->file('file_name')->storeAs('/images/catalogo',$name ,'public');

        $element = Element::where('id', $idElement)->first();
        $element->update(['pathPhoto' => "/images/catalogo/$name"]);
    }

    public static function new_banner(Request $request){
        $banner = new Banner;
        $banner->description = $request->description;
        $banner->link = $request->link;

        $banner->save();

        $path = $request-> ref;
        $path = substr($path, 1, strlen($path));
        return redirect($path.'?openAlert=Dati%20inviati%20con%20successo!');
    }

    public static function insert_other_photos(Request $request, $idElement){
        $files = $request->file('photos');
        foreach ($files as $file) {
            $n = $file->getClientOriginalName();
            $file->storeAs('/images/catalogo',$n ,'public');
            $photo = new PhotoElement;
            $photo-> element_id = $idElement;
            $photo-> path = "/images/catalogo/$n";
            $photo-> name = $n;
            $photo->save();
        }
    }


    public function insert_news(Request $request){
        if ( !VerifiedPrivileged::verificaAdminAndPrivileged($request) ) return abort(403, 'Azione non autorizzata!');
        else {
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
    }

    public function insert_category(Request $request){
        if ( !VerifiedPrivileged::verificaAdminAndPrivileged($request) ) return abort(403, 'Azione non autorizzata!');
        else {
            $category =  new Category;
            $category->name = $request->name;
            $category->save();

            $path = $request-> ref;
            $path = substr($path, 1, strlen($path));
            return redirect($path.'?openAlert=Dati%20inviati%20con%20successo!');
        }
    }

    public function insert_photo_category(Request $request, $nameCat){
        if ( !VerifiedPrivileged::verificaAdminAndPrivileged($request) ) return abort(403, 'Azione non autorizzata!');
        else {
            $name=$request->file_name->getClientOriginalName();
            $request->file('file_name')->storeAs('/images/siteImg',$name ,'public');
            $pathPhoto = "/images/siteImg/$name";

            Category::where('name', $nameCat)->update(array('pathPhoto' => $pathPhoto));

            $path = $request-> ref;
            $path = substr($path, 1, strlen($path));
            return redirect($path.'?openAlert=Dati%20inviati%20con%20successo!');
        }
    }

    public function insert_subcategory(Request $request){
        if ( !VerifiedPrivileged::verificaAdminAndPrivileged($request) ) return abort(403, 'Azione non autorizzata!');
        else {
            $subcategory = new Subcategory;
            $subcategory-> name = $request -> name;
            $subcategory-> category = $request -> category;
            $subcategory->save();

            $path = $request-> ref;
            $path = substr($path, 1, strlen($path));
            return redirect($path.'?openAlert=Dati%20inviati%20con%20successo!');
        }
    }

    public function insert_address(Request $request){
        if (!(Auth::check() ) ) return abort(403, 'Azione non autorizzata!');
        else {
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
            
            //stellina preferito
            general_edit_controller::address_star($address->id);

            $path = $request-> ref;
            $path = substr($path, 1, strlen($path));
            return redirect($path.'?openAlert=Dati%20inviati%20con%20successo!');
        }
    }

    public function insert_art_showroom(Request $request){
        if ( !VerifiedPrivileged::verificaAdminAndPrivileged($request) ) return abort(403, 'Azione non autorizzata!');
        else {
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
    }

    public function insert_brand(Request $request){
        if ( !VerifiedPrivileged::verificaAdminAndPrivileged($request) ) return abort(403, 'Azione non autorizzata!');
        else {
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

    public function insert_courier(Request $request){
        if ( !VerifiedPrivileged::verificaAdminAndPrivileged($request) ) return abort(403, 'Azione non autorizzata!');
        else {
            $courier = new NameCourier;

            //controllo link
            $link = $request -> link;
            if(substr($link, 0, 3) != "http")
                $link = "http://".$link;

            $courier-> name = $request -> name;
            $courier-> tracking_link = $link;
            $courier->save();

            $path = $request-> ref;
            $path = substr($path, 1, strlen($path));
            return redirect($path);
        }
    }

    public function insert_spedition(Request $request){
        if ( !VerifiedPrivileged::verificaAdminAndPrivileged($request) ) return abort(403, 'Azione non autorizzata!');
        else {
            $courier = new Courier;

            $courier-> courier_name = $request -> courier;
            $courier-> pesomin = $request -> min_weidth;
            $courier-> pesomax = $request -> max_weidth;
            $courier-> stima_giorni = $request -> time;
            $courier-> price = $request -> price;
            $courier-> name_service = $request -> name_service;
            $courier-> destination_country = $request -> destination_country;

            $courier->save();

            $path = $request-> ref;
            $path = substr($path, 1, strlen($path));
            return redirect($path);
        }
    }

    public function insert_offert(Request $request){
        if ( !VerifiedPrivileged::verificaAdmin($request) ) return abort(403, 'Azione non autorizzata!');
        else {
            $offert = new Offert;

            $offert-> id_element = $request -> id_element;
            $offert-> discount_perc = $request -> discount_perc;
            $offert-> date_start = $request -> date_start;
            $dur = $request -> duration_day;
            $offert-> date_end = date('Y-m-d', strtotime($request -> date_start."+$dur days"));
            $offert-> duration_day = $dur;

            $offert->save();

            $path = $request-> ref;
            $path = substr($path, 1, strlen($path));
            return redirect($path);
        }
    }

    public function insert_spec_element(Request $request, $el_id){
        for($i = 0; $i < count($request->key_spec); $i++){
            $spec = new SpecElement;

            $spec-> id_element = $el_id;
            $spec-> key_spec = $request->key_spec[$i];
            $spec-> value_spec = $request->value_spec[$i];
            $spec->save();
        }
        return 0;
    }

    public function review_product(Request $request, $id){

        $review = new Review;
        $review->id_element = $id;
        $review->name = $request->name;
        $review->rate = $request->rate;
        $review->message = $request->message;
        $review->email = $request->email;
        $review->save();

        $path = $request->ref;
        $path = substr($path, 1, strlen($path));
        return redirect($path);

        return 0;
    }
}
