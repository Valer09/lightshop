<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App, DB, Storage;

use App\Http\Controllers\VerifiedPrivileged;
use App\Element, App\PhotoElement, App\ElementsShowRoom, App\PhotoShowroom, App\Courier, App\Order, App\OrderDetail;

class deletionsController extends Controller
{
    //------ELEMENTS_ACTIONS-------//
    
    public function delete_element(Request $request){
        if ( VerifiedPrivileged::verificaAdmin($request) ) {
            $id_element = $request->element_idModal;
            $arrayPhoto = App\PhotoElement::where('element_id', $id_element)->get();
            $ell = Element::where('id', $id_element)->first();

            PhotoElement::deleteAll($id_element);
            Element::deleteAll($ell);
        

            $path = $request-> ref;
            $path = substr($path, 1, strlen($path));
            return redirect($path);
        } else {
            return abort(403, 'Azione non autorizzata!');
        }
    }


    public function delete_element_subcategory(Request $request){
        if ( VerifiedPrivileged::verificaAdminAndPrivileged($request) ){
            $id_element = $request->element_idModal;
            $arrayPhoto = App\PhotoShowroom::where('element_id', $id_element)->get();
            $ell = ElementsShowRoom::where('id', $id_element)->first();
    
            PhotoElement::deleteAll($id_element);
            Element::deleteAll($ell);
           
    
            $path = $request-> ref;
            $path = substr($path, 1, strlen($path));
            return redirect($path);
    
        } else {
            return abort(403, 'Azione non autorizzata!');
        }
    }

    public function decrease_element(Request $request){
        if ( VerifiedPrivileged::verificaAdminAndPrivileged($request) ){
            Element::where('id', $request->id_decrease)->decrement('availability');

            $path = $request-> ref;
            $path = substr($path, 1, strlen($path));
            return redirect($path);
        } else {
            return abort(403, 'Azione non autorizzata!');
        }
    }

    public function decrease_element_of(Request $request){
        if ( VerifiedPrivileged::verificaAdminAndPrivileged($request) ){
            Element::where('id', $request->id_decrease)->decrement('availability',$request->quantity);

            $path = $request-> ref;
            $path = substr($path, 1, strlen($path));
            return redirect($path);
        } else {
            return abort(403, 'Azione non autorizzata!');
        }
    }

//------ELEMENT-ACTIONS-END--------//

    public function delete_user(Request $request){
        if ( VerifiedPrivileged::verificaAdmin($request) ){
            App\User::where('email', $request->email)->delete();
            return view('test');
        } else {
            return abort(403, 'Azione non autorizzata!');
        }
    }

    public function delete_news(Request $request){
        App\News::where('name', $request->news)->delete();
        return view('test');
    }

    public function delete_category(Request $request){
        if ( VerifiedPrivileged::verificaAdmin($request) ){
            $subcat=App\Subcategory::where('category', $request->category)->get();

            if (  $subcat != '[]' )
            return redirect(request()->headers->get('referer').'?openAlert=La%20categoria%20'.$request->category.'%20contiene%20delle%20sottocategorie!');
            else{
                App\Category::where('name', $request->category)->delete();
            }
            return redirect(request()->headers->get('referer'));

        } else {
            return abort(403, 'Azione non autorizzata!');
        }
    }

    public function delete_subcategory(Request $request){
        if ( VerifiedPrivileged::verificaAdmin($request) ){
            $elements=App\Element::where('subcategories', $request->subcategory)->get();
            if (  $elements != '[]' )
                return redirect(request()->headers->get('referer').'?openAlert=La%20sottocategoria%20'.$request->subcategory.'%20contiene%20degli%20elementi!');
            else{ 
                App\Subcategory::where('name', $request->subcategory)->delete();
            }
            return redirect(request()->headers->get('referer'));

        } else {
            return abort(403, 'Azione non autorizzata!');
        }

    }

    public function delete_element_showroom(Request $request){
        if ( VerifiedPrivileged::verificaAdmin($request) ) {
            $id_element = $request->element_idModal;
            $arrayPhoto = PhotoShowroom::where('element_id', $id_element)->get();
            $ell = ElementsShowRoom::where('id', $id_element)->first();

            PhotoShowroom::deleteAll($id_element);
            ElementsShowRoom::deleteAll($ell);
 

            $path = $request-> ref;
            $path = substr($path, 1, strlen($path));
            return redirect($path);
        } else {
            return abort(403, 'Azione non autorizzata!');
        }
    }
    
    public function delete_courier(Request $request){
        if ( VerifiedPrivileged::verificaAdmin($request) ){
            Courier::where('id', $request->element_idModal)->delete();
            
            $path = $request-> ref;
            $path = substr($path, 1, strlen($path));
            return redirect($path);
        } else {
            return abort(403, 'Azione non autorizzata!');
        }
    }

    public function delete_order(Request $request){
        if ( VerifiedPrivileged::verificaAdmin($request) ){
            $order = Order::where('id', $request->element_idModal)->first();
            $detais = OrderDetail::where('orders_id', $order->id)->get();

            //Reincrementare i pezzi
            foreach($detais as $det) {
                $el = Element::where('id', $det->element_id)->first();
                $el::modAvailability($el->id,($el->availability + $det->quantity));
            }

            $order->delete();

            $path = $request-> ref;
            $path = substr($path, 1, strlen($path));
            return redirect($path);
        } else {
            return abort(403, 'Azione non autorizzata!');
        }
    }
}
