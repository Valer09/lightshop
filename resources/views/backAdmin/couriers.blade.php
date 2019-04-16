@extends('layout.defaultLayoutAdmin')
@section('title', 'Visca s.n.c.')

@section('head')
  
@endsection

@section('content')

<div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <!--TITOLO DELLA PAGINE-->
    <div class="w3-container w3-blue-grey">
        <h1>Aggiungi un nuova spedizione </h1>
        <p>Utilizza questa form per aggingere un nuova spedizione.</p>
        <form class="w3-container" method="post" action="{{URL::to('/add_new_sped')}}?ref={{$_SERVER['REQUEST_URI']}}" enctype="multipart/form-data" >
            @csrf
            <div class="w3-row w3-container">
                <div class="w3-col m6 w3-light-grey w3-center">
                    <p style="margin-top: 12px;margin-bottom:12px">Dati nuova spedizione. <button onclick="modaleSottocategoria('nuovoCorriere', '')">Nuovo Corriere</button></p>
                    <select class="w3-select" name="courier" type="text" placeholder="Marca">
                        <option disabled selected>Seleziona il Corriere</option>
                        @php
                        $couriers = \App\NameCourier::all()
                        @endphp
                        @foreach ($couriers as $courier)
                            <option>{{ $courier->name}}</option>
                        @endforeach
                            <option onclick="modaleSottocategoria('nuovoCorriere', '')">Nuovo Corriere</option>
                    </select>

                    <input class="w3-input" id="name_service" name="name_service" type="string" placeholder="Nome servizio" required>
                    <input class="w3-input" name="price" type="text" placeholder="Prezzo di spedizione" required>
                </div>


                <div class="w3-col m6 w3-light-grey w3-center">
                    <p>Altre info</p>
                    <input class="w3-input" name="min_weidth" type="text" placeholder="Peso minimo per collo (kg)" required>
                    <input class="w3-input" name="max_weidth" type="text" placeholder="Peso massimo per collo (kg)" required>
                    <input class="w3-input" name="time" type="number" placeholder="Giorni stimati di consegna" required>
                </div>
            </div>
        
            <div class="w3-margin-top w3-margin-bottom w3-col m6 w3-center">
                <button class="w3-button w3-ripple w3-green" type="submit" value="inserimentoProdotto" name="actionAd" style="width:50%">Salva</button>
            </div>
            <div class="w3-margin-top w3-margin-bottom w3-col m6 w3-center">
                <button class="w3-button w3-ripple w3-red" style="width:50%">Annulla</button>
            </div>
        </form>
    </div>

    <hr>
    <!--TITOLO DELLA PAGINE-->
    <div class="w3-container w3-blue-grey" style="padding-bottom: 16px;">
        <h1>Lista dei Corrieri.</h1>
        <p>Clicca su un elemento della lista per visualizzare più informazioni o modificarle.</p>
        <hr>
        <input class="w3-input w3-border w3-padding" type="text" placeholder="Cerca un utente per Nome o Cognome" id="myInput" onkeyup="finderElement()">

        <div class="w3-white" id="divLocationMain" style="margin-top: 2%;">
            <table class="w3-table-all w3-margin-top" id="myTable">
                <tr>
                    <th style="width:0%;"></th>
                    <th style="width:40%;">Corriere</th>
                    <th style="width:20%;">Peso collo</th>
                    <th style="width:20%;">Prezzo</th>
                    <th style="width:20%;">Tempi di consegna</th>
                </tr>

                <!--LISTA DEI PRODOTTI blade-->
                @php
                $speds = \App\Courier::all()
                @endphp
                @foreach($speds as $sped)
                <tr onclick="openModalAdmin('modaleEditCourier', null, null, null, {{$sped}}, null);">
                    <td></td>
                    <td><b>{{ $sped->courier_name }}</b><br>{{$sped->name_service}}</td>
                    <td>{{ $sped->pesomin }} - {{ $sped->pesomax }} kg</td>
                    <td>{{ number_format($sped->price, 2, ',', '.') }} €</td>
                    <td>{{ $sped->stima_giorni }} gg</td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>

<!--MODALE edit courier-->
<div id="modaleEditCourier" class="w3-modal">
    <div id="modaleAdmin" class="w3-modal-content">

        <div id="modalModUser" class="w3-container w3-blue-grey">
            <span onclick="closeModal('modaleEditCourier');" class="w3-button w3-display-topright">&times;</span>
            <h1>Stai modificando <!--INSERIRE DATI DB--></h1>
            <p>Utilizza questa form per modificare i dati della spedizione.</p>
            <form id="formModEl" method="post" class="w3-container" action="{{ url('courier_edit') }}?ref={{$_SERVER['REQUEST_URI']}}">
                @csrf
                <fieldset id="fieldsetModale" style="border: none">
                    <div class="w3-row-padding w3-container">
                        <div class="w3-col m6">
                            <input style="display: none" id="courier_idModal" name="courier_idModal">

                            <span class="w3-block w3-blue-grey" style="margin: none">Corriere:</span>
                            <select class="w3-select" id="brandModal" name="brandModal" type="text" placeholder="Marca">
                                <option disabled selected>Seleziona il Corriere</option>
                                {{$nameCouriers = \App\NameCourier::all()}}
                                @foreach ($nameCouriers as $nameCourier)
                                    <option value="{{ $nameCourier->name}}">{{ $nameCourier->name}}</option>
                                @endforeach
                                    <option onclick="modaleSottocategoria('nuovoCorriere', '');">Nuovo Corriere</option>
                            </select>

                            <span class="w3-block w3-blue-grey" style="margin: none">Nome servizio:</span>
                            <input class="w3-input" id="name_serviceModal" name="name_service" type="string" placeholder="Pacco celere 2" required>
                            
                            <span class="w3-block w3-blue-grey" style="margin: none">Prezzo spedizione:</span>
                            <input class="w3-input" id="priceModal" name="price" type="text" placeholder="Costo spedizione" required>
                        </div>


                        <div class="w3-col m6">
                            <span class="w3-block w3-blue-grey" style="margin: none">Peso collo minimo (kg):</span>
                            <input class="w3-input" id="pesominModal" name="pesomin" type="number" placeholder="Peso minimo" required>

                            <span class="w3-block w3-blue-grey" style="margin: none">Peso collo massimo (kg):</span>
                            <input class="w3-input" id="pesomaxModal" name="pesomax" type="number" placeholder="Peso massimo">
                            
                            <span class="w3-block w3-blue-grey" style="margin: none">Stima giorni:</span>
                            <input class="w3-input" id="stima_giorniModal" name="stima_giorni" type="number" placeholder="Giorni stimati dal corriere per la spedizione" required>
                        </div>
                    </div>
                    
                </fieldset>
                <div class="w3-row">
                    <div class="w3-col l4 s4 w3-center">
                        <button type="button" class="w3-button w3-ripple w3-yellow" style="width:80%" onclick="enableField()">Modifica</button>
                    </div>
                    <div class="w3-col l4 s4 w3-center">
                        <button id="save" type="button" class="w3-button w3-ripple w3-green" style="width:80%; visibility: hidden"
                        onclick="conferma('Vuoi modificare '+ document.getElementById('name_serviceModal').value +'?', 'formModEl')">Salva</button>
                    </div>
            </form>
                    <form id="formDeleteProduct" method="post" action="{{ url('courier_deletion') }}?ref={{$_SERVER['REQUEST_URI']}}">
                    @csrf
                    <div class="w3-col l4 s4 w3-center">
                        <input style="display: none" id="courier_idModal1" name="element_idModal">
                        <button class="w3-button w3-ripple w3-red" style="width:80%;"
                            onclick="conferma('Vuoi eliminare la spedizione: '+ document.getElementById('name_service').value +'?', 'formDeleteProduct')"
                            type="button">Elimina Prodotto</button>
                    </div>
                    </form>
                </div>
            
        </div>
    </div>
</div>
<!--MODALE CHIUSURA-->

<!--Modale Nuovo Cirrere-->
<div id="nuovoCorriere" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" style="max-width: 700px">
        <header class="w3-container w3-teal">
            <span onclick="closeModal('nuovoCorriere');" class="w3-button w3-display-topright">&times;</span>
            <h2>Nuovo Corriere</h2>
        </header>
        <form type="submit" method="post" action="{{URL::to('/insert_courier')}}?ref={{$_SERVER['REQUEST_URI']}}">
            @csrf
            <div class="w3-padding">
                <div class="w3-row">
                    <label>Corriere: </label>
                    <input class="inputModale" placeholder="Nome corriere" type="text" name="name" required>
                </div>
                <div class="w3-row">
                    <label>Link: </label>
                    <input class="inputModale" placeholder="Link del sito di tracking corriere" type="text" name="link">
                </div>
                <div class="w3-row">
                    <button class="w3-right" type="submit">Salva</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection