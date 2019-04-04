@extends('layout.defaultLayoutAdmin')
@section('content')

<div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <!--TITOLO DELLA PAGINE-->
    <div class="w3-container w3-blue-grey">
        <h1>Aggiungi un nuovo Corriere</h1>
        <p>Utilizza questa form per aggingere un nuovo corriere.</p>
        <form class="w3-container" method="post" action="{{URL::to('###')}}?ref={{$_SERVER['REQUEST_URI']}}" enctype="multipart/form-data" >
            @csrf
            <div class="w3-row w3-container">
                <div class="w3-col m6 w3-light-grey w3-center">
                    <p>Dati nuovo corriere</p>
                    <select class="w3-select" name="brand" type="text" placeholder="Marca">
                        <option disabled selected>Selezione il Corriere</option>
                        @php
                        $couriers = \App\Courier::all()
                        @endphp
                        @foreach ($couriers as $courier)
                            <option>{{ $courier->courier_name}}</option>
                        @endforeach
                            <option onclick="modaleSottocategoria('nuovoCorriere', '')">Nuovo Corriere</option>
                    </select>
                    <input class="w3-input" name="min_weidth" type="text" placeholder="Peso minimo per collo" required>
                    <input class="w3-input" name="max_weidth" type="text" placeholder="Peso massimo per collo" required>
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
        <input class="w3-input w3-border w3-padding" type="text" placeholder="Cerca un utente per Nome o Cognome" id="myInput" onkeyup="myFunction()">

        <div class="w3-white" id="divLocationMain" style="margin-top: 2%;">
            <table class="w3-table-all w3-margin-top" id="myTable">
                <tr>
                    <th style="width:20%;">Corriere</th>
                    <th style="width:20%;">Peso collo</th>
                    <th style="width:20%;">Prezzo</th>
                    <th style="width:20%;">Tempi di consegna</th>
                    <th style="width:20%;">Link tracking</th>
                </tr>

                <!--LISTA DEI PRODOTTI blade-->
                @foreach($couriers as $courier)
                <tr onclick="document.getElementById('id01').style.display='block'">
                    <td><b>{{ $courier->courier_name }}</b></td>
                    <td>{{ $courier->courier_name }}</td>
                    <td>{{ $courier->courier_name }}</td>
                    <td>{{ $courier->courier_name }}</td>
                    <td>{{ $courier->link }}</td>
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
        <form type="submit" method="post" action="{{URL::to('/insert_new_brand')}}?ref={{$_SERVER['REQUEST_URI']}}">
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