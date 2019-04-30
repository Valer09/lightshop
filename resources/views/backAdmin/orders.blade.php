@extends('layout.defaultLayoutAdmin')
@section('title', 'Visca s.n.c.')

@section('head')
  
@endsection

@section('content')
<!-- !PAGE CONTENT!-->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <!--TITOLO DELLA PAGINE-->
    <div class="w3-container w3-blue-grey" style="padding-bottom: 16px;">
        <h1>Lista nuovi ordini.</h1>
        <p>Questa è una lista dei nuovi ordini.</p>
        <hr>
        <input class="w3-input w3-border w3-padding" type="text" placeholder="Cerca un utente per Nome o Cognome" id="myInput" onkeyup="finderElement()">

        <div class="w3-white" id="divLocationMain" style="margin-top: 2%;">
            <table class="w3-table-all w3-margin-top" id="myTable" style="text-decoration-color: black">
                <tr>
                    <th style="width:0%;"></th>
                    <th style="width:22%;">Data ordine</th>
                    <th style="width:22%;">Utente</th>
                    <th style="width:22%;">Indirizzo spedizione</th>
                    <th style="width:22%;">Totale</th>
                    <th style="width:12%;"></th>
                </tr>

                {{!$orders=\App\Order::where('order_shipped', null)->orderBy('created_at','asc')->get()}}
                @foreach($orders as $order)
                @php
                    $user = \App\User::where('id', $order->user_id)->first();
                    $address = \App\Address::where('id', $order->address_id)->first();
                @endphp
                    <tr>
                        <td></td>
                        <td>{{ date($order->created_at) }}</td>
                        <td>{{$user->surname}} {{$user->name}}<br><a href='mailto:{{$user->email}}'>{{$user->email}}</a></td>
                        <td>A: <b>{{$address->NomeCognome}}</b><br>
                        {{$address->street}}, {{$address->street_number}}<br>
                        {{$address->city}} ({{$address->Provincia}}) {{$address->CAP}}</td>
                        <td>€ {{ number_format($order->total, 2, ',', '.')  }}</td>
                        <td>
                            <button class="w3-btn w3-yellow" onclick="window.open('{{url('order_details-').$order->id}}')">Dettagli ordine</button>
                            <button class="w3-btn w3-green" onclick="openModalAdmin('modaleEditProduct', null, null, {{$order}}, null, null);">Completa ordine</button>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>

<!--MODALE CREAZIONE-->
<div id="modaleEditProduct" class="w3-modal">
    <div id="modaleAdmin" class="w3-modal-content">

        <div id="modalModUser" class="w3-container w3-blue-grey">
            <span onclick="closeModal('modaleEditProduct');" class="w3-button w3-display-topright">&times;</span>
            <h1>Stai modificando <!--INSERIRE DATI DB--></h1>
            <p>Utilizza questa form per modificare i dati di un Prodotto.</p>
            <form id="formModEl" method="post" class="w3-container" action="{{ url('order_edit') }}?ref={{$_SERVER['REQUEST_URI']}}">
                @csrf
                <fieldset id="fieldsetModale" style="border: none">
                    <div class="w3-row-padding w3-container">
                        <div class="w3-col m6">
                            <input style="display: none" id="element_idModal" name="element_idModal">

                            <span class="w3-block w3-blue-grey" style="margin: none">Stato ordine:</span>
                            <select class="w3-select" id="stateModal" name="stateModal" type="text">
                                <option value="0" selected>Selezione lo stato dell'ordine</option>
                                {{!$states = \App\OrderState::all()}}
                                @foreach ($states as $state)
                                <option value="{{$state->id}}">{{ $state->name}}</option>
                                @endforeach
                            </select>

                            <span class="w3-block w3-blue-grey" style="margin: none">Tracking corriere:</span>
                            <input class="w3-input" id="trackingModal" name="trackingModal" type="text" placeholder="Codice">

                        </div>


                        <div class="w3-col m6">
                            <span class="w3-block w3-blue-grey" style="margin: none">Tipo di spedizione:</span>
                            <select class="w3-select" id="spedModal" name="spedModal" required >
                                <option disabled selected>Selezione la spedizione</option>
                                {{!$nameCouriers = \App\NameCourier::all()}}
                                {{!$couriers = \App\Courier::all()}}
                                @foreach ($nameCouriers as $nameCourier)
                                    <option disabled><b>{{ strtoupper($nameCourier->name) }}</b></option>
                                    @foreach ($couriers as $courier)
                                    @if($nameCourier->name===$courier->courier_name)
                                    <option value="{{ $courier->id }}">{{ $courier->name_service }}. Peso max: {{$courier->pesomax}}kg ({{$courier->price}} €)</option>
                                    @endif
                                    @endforeach
                                @endforeach
                            </select>

                        </div>
                    </div>
                        
                </fieldset>
                <div class="w3-row">
                    <div class="w3-col l4 s4 w3-center">
                        <button type="button" class="w3-button w3-ripple w3-yellow" style="width:80%" onclick="enableField()">Modifica</button>
                    </div>
                    <div class="w3-col l4 s4 w3-center">
                        <button id="save" type="button" class="w3-button w3-ripple w3-green" style="width:80%; visibility: hidden"
                        onclick="conferma('Vuoi modificare l\'ordine?', 'formModEl')">Salva</button>
                    </div>
            </form>
                    <form id="formDeleteProduct" method="post" action="{{ url('order_deletion_submit') }}?ref={{$_SERVER['REQUEST_URI']}}">
                    @csrf
                    <div class="w3-col l4 s4 w3-center">
                        <input style="display: none" id="element_idModal1" name="element_idModal">
                        <button class="w3-button w3-ripple w3-red" style="width:80%;"
                            onclick="conferma('Vuoi eliminare questo ordine? (Le quantità degli articoli contenuti in questo ordine saranno reincrementate).', 'formDeleteProduct')"
                            type="button">Annulla ordine</button>
                    </div>
                    </form>
                </div>
            
        </div>
    </div>
</div>
<!--MODALE CHIUSURA-->
@endsection
