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
                    <p>Dati nuova spedizione. <button onclick="modaleSottocategoria('nuovoCorriere', '')">Nuovo Corriere</button></p>
                    <select class="w3-select" name="courier" type="text" placeholder="Marca">
                        <option disabled selected>Selezione il Corriere</option>
                        @php
                        $couriers = \App\NameCourier::all()
                        @endphp
                        @foreach ($couriers as $courier)
                            <option>{{ $courier->name}}</option>
                        @endforeach
                            <option onclick="modaleSottocategoria('nuovoCorriere', '')">Nuovo Corriere</option>
                    </select>
                    <input class="w3-input" name="min_weidth" type="text" placeholder="Peso minimo per collo (kg)" required>
                    <input class="w3-input" name="max_weidth" type="text" placeholder="Peso massimo per collo (kg)" required>
                </div>


                <div class="w3-col m6 w3-light-grey w3-center">
                    <p>Prezzi</p>
                    <input class="w3-input" name="time" type="number" placeholder="Giorni stimati di consegna" required>
                    <input class="w3-input" name="price" type="text" placeholder="Prezzo di spedizione" required>
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
                <tr onclick="document.getElementById('id01').style.display='block'">
                    <td></td>
                    <td><b>{{ $sped->courier_name }}</b></td>
                    <td>{{ $sped->pesomin }} - {{ $sped->pesomax }} kg</td>
                    <td>{{ number_format($sped->price, 2, ',', '.') }} €</td>
                    <td>{{ $sped->stima_giorni }} gg</td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>

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