@extends('layout.defaultCheckout')
@section('title', 'Checkout')

@section('head')
  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/navbarColor.css')}}" />
  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/cart.css')}}" />
  <script src="{{url('/js/checkout.js')}}"></script>
@endsection

@section('content')
@if(Session::has('cart'))
<div class="w3-padding" style="margin-top: 70px; width: 1000px; margin-left:auto; margin-right:auto;">
    <form action="{{ url('order_submit') }}" method="post">
    @csrf
        <!--INDIRIZZO DI SPEDIIONE-->
        <div class="w3-row">
            <div class="w3-col l4">
                <span><b>1. Indirizzo di spedizione</b></span>
            </div>
            <div class="w3-col l4">
            @if($address != null)
                <p>A: {{ $address->NomeCognome }}</p>
                <p>{{ $address->street }}, {{ $address->street_number }}</p>
                <p>{{ $address->city }}, {{ $address->Provincia }} {{ $address->CAP }}</p>
                <p>{{ $address->country }}</p>
            @else
            <button class="buttonRed" type="button" onclick="document.getElementById('nuovoIndirizzo').style.display='block'">Nuovo indirizzo di spedizione</button>
            <input style="display:none" required>
            @endif
            </div>
            @if($address != null)
            <div class="w3-col l4">
                <a href="{{ url('profile#spedizione') }}"><p>Seleziona un altro indirizzo preferito</p></a>
            </div>
            @endif
        </div>
        <hr>
        <!--MODALITA DI Spedizione-->
        <div class="w3-row">
            <div class="w3-col l4">
                <span><b>3. Selezione il corriere che preferisci</b></span>
            </div>
            <div class="w3-col l6">
                @if(isset($Spedizioni))       
                @foreach ($Spedizioni as $sped)
                <p>
                    <input class="w3-radio radioCourier {{ number_format($sped->price, 2, ',', '.')  }}" type="radio" name="courier" value="{{ $sped->id }}" required>
                    <label>{{ $sped->stima_giorni }}gg stimati per la consegna. {{ $sped->courier_name }} - {{ number_format($sped->price, 2, ',', '.')  }} €</label>
                </p>
                @endforeach
                @else
                <input style="display:none" required>
                @endif
            </div>
        </div>
        <hr>
        <!--MODALITA DI PAGAMENTO-->
        <div class="w3-row">
            <div class="w3-col l4">
                <span><b>3. Modalità di pagamento</b></span>
            </div>
            <div class="w3-col l6">
                <p>PayPal <i class="fa fa-paypal"></i></p>
            </div>
        </div>
        <hr>
        <!--RIVEDI ARTICOLI-->
        <div class="w3-row">
            <div class="w3-col l4">
                <span><b>4. Rivedi articoli</b></span>
            </div>
            <div class="w3-col l6">
                <table class="w3-table w3-bordered">
                    <tr>
                        <th>Nome</td>
                        <th>Pezzi</td>
                        <th>Prezzo unitario</td>
                    </tr>
                @foreach($elements as $el)
                    <tr>
                        <td>{{$el['item']->name}}</td>
                        <td>{{$el['qty']}} pz.</td>
                        <td>{{ number_format($el['item']->price, 2, ',', '.')  }} €</td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
        <hr>
        <!--TOTALE-->
        <div class="w3-row w3-light-grey">
            <div class="w3-col l4">
                <span><b>5. Totale</b></span>
            </div>
            <div class="w3-col l6">
                <p>Subtotale: <label id="subtotale">{{ number_format($totalPrice, 2, '.', '') }}</label> €</p>
                <p>Spedizione e gestione: <label id="costoSped"></label> €</p>
                <p><b>TOTALE: <label id="totaleCheckout"></label> €</b></p>
            </div>
        </div>
        <hr>

        <div class="w3-row w3-center">
            <button class="w3-round-xxlarge w3-large" type="submit" style="line-height: 3.5; width: 250px; background-color: #ffc439; border: none; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"><i class="fa fa-paypal"></i><b> Paga ora</b></button>
        </div>
    </form>
</div>


@else
    <h1>Nessun elemento nel carrello</h1>
@endif

<!--Modale Nuovo indirizzo-->
<div id="nuovoIndirizzo" class="w3-modal">
            <div class="w3-modal-content w3-animate-top w3-card-4">
                <header class="w3-container w3-teal">
                    <span onclick="document.getElementById('nuovoIndirizzo').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <h2>Nuovo indirizzo di spedizione</h2>
                </header>
                <form type="submit" method="post" action="{{URL::to('/address_insertion_submit')}}?ref={{$_SERVER['REQUEST_URI']}}">
                    @csrf
                    <div class="w3-padding">
                        <div class="w3-row">
                            <label>Nome e cognome del Destinatario</label>
                            <input placeholder="Nome e cognome" type="text" name="NomeCognome" required>
                        </div>
                        <div class="w3-row">
                            <label>Indirizzo</label>
                            <input placeholder="Indirizzo" type="text" name="street" required>
                            <label>Civico</label>
                            <input placeholder="Civico" type="text" name="street_number">
                        </div>

                        <div class="w3-row">
                            <label>Citta</label>
                            <input placeholder="Città" type="text" name="city" id="newComune" onkeyup="trovaCap('newComune', 'newCap', 'newProvincia');" required>
                            <label>CAP</label>
                            <input placeholder="CAP" type="text" name="CAP" id="newCap" required>
                        </div>
                        <div class="w3-row">
                            <label>Provincia</label>
                            <input placeholder="Provincia" type="text" name="Provincia" id="newProvincia" required>
                        </div>
                        <div class="w3-row">
                            <label>Stato</label>
                            <input placeholder="Stato" type="text" name="country" required>
                            <button class="w3-right" type="submit">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection