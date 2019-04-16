<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Element, App\ElementsShowRoom, App\Courier;
use Auth;
Use App;

class element_edit_controller extends Controller
{
    public function edit_element(Request $request){
        if (!(Auth::check() ) && Auth::user()->group != "Administrator" ) return abort(403, 'Azione non autorizzata!');
        else
            {
                $element = Element::where('id', "$request->element_idModal")->first();
                //dd('prezzo el:'.$element->price.'  prezzo Modale: '.$request->priceModal);
                //dd($element->price !== $request->priceModal);
                if($element->name != $request->nameModal) $element->update(['name' => $request->nameModal]);
                if($element->subcategories != $request->subcategoryModal) $element->update(['subcategories' => $request->subcategoryModal]);
                if($element->price !== $request->priceModal) $element->update(['price' => $request->priceModal]);
                if((int)$element->availability != (int)$request->quantityModal) $element::modAvailability($element->id,$request->quantityModal);
                if($element->description != $request->descriptionModal) $element->update(['description' => $request->descriptionModal]);
                if($element->brand != $request->brandModal) $element->update(['brand' => $request->brandModal]);
                if($element->weight != $request->weightModal) $element->update(['weight' => $request->weightModal]);

                $path = $request-> ref;
                $path = substr($path, 1, strlen($path));
                return redirect($path.'?openAlert=Dati%20inviati%20con%20successo!');
            }
    }

    public function edit_showroom_element(Request $request){
        if (!(Auth::check() ) && Auth::user()->group != "Administrator" ) return abort(403, 'Azione non autorizzata!');
        else
            {
                $element = ElementsShowRoom::where('id', "$request->element_idModal")->first();
                if($element->name != $request->nomeMod) $element->update(['name' => $request->nomeMod]);
                if($element->description != $request->descrizione) $element->update(['description' => $request->descrizione]);
                if($element->linkBuy != $request->link) $element->update(['linkBuy' => $request->link]);
                if($element->nameSubCategory != $request->catMod) $element->update(['nameSubCategory' => $request->catMod]);

                $path = $request-> ref;
                $path = substr($path, 1, strlen($path));
                return redirect($path.'?openAlert=Dati%20inviati%20con%20successo!');
            }
    }

    public function edit_courier(Request $request){
        if (!(Auth::check() ) && Auth::user()->group != "Administrator" ) return abort(403, 'Azione non autorizzata!');
        else
            {
                $courier = Courier::where('id', "$request->courier_idModal")->first();
                if($courier->courier_name != $request->brandModal) $courier->update(['courier_name' => $request->brandModal]);
                if($courier->pesomin !== $request->pesomin) $courier->update(['pesomin' => $request->pesomin]);
                if($courier->pesomax !== $request->pesomax) $courier->update(['pesomax' => $request->pesomax]);
                if($courier->stima_giorni != $request->stima_giorni) $courier->update(['stima_giorni' => $request->stima_giorni]);
                if($courier->price !== $request->price) $courier->update(['price' => $request->price]);
                if($courier->name_service != $request->name_service) $courier->update(['name_service' => $request->name_service]);

                $path = $request-> ref;
                $path = substr($path, 1, strlen($path));
                return redirect($path.'?openAlert=Dati%20inviati%20con%20successo!');
            }
    }

}
