@extends('layout.defaultCheckout')
@section('content')
@if(Session::has('cart'))
<div class="w3-padding-64" style="width: 1000px; margin-left:auto; margin-right:auto;">
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
        @endif
        </div>
        <div class="w3-col l4">
            <a href="{{ url('profile#spedizione') }}"><p>Seleziona un altro indirizzo preferito</p></a>
        </div>
    </div>
    <hr>
    <!--MODALITA DI PAGAMENTO-->
    <div class="w3-row">
        <div class="w3-col l4">
            <span><b>2. Modalità di pagamento</b></span>
        </div>
        <div class="w3-col l6">
            <p>PayPal <i class="fa fa-paypal"></i></p>
        </div>
    </div>
    <hr>
    <!--RIVEDI ARTICOLI-->
    <div class="w3-row">
        <div class="w3-col l4">
            <span><b>3. Rivedi articoli</b></span>
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
                    <td>{{$el['item']->price}} €</td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
    <hr>
    <!--TOTALE-->
    <div class="w3-row w3-light-grey">
        <div class="w3-col l4">
            <span><b>4. Totale</b></span>
        </div>
        <div class="w3-col l6">
            <p>Subtotale: {{ number_format($totalPrice, 2, ',', '.') }} €</p>
            <p>Spedizione e gestione: {{ number_format('12.50', 2, ',', '.') }} €</p>
            <p><b>TOTALE: {{ number_format(($totalPrice + 12.50), 2, ',', '.')  }} €</b></p>
        </div>
    </div>
    <hr>
    <div class="w3-row w3-center">
        <button class="w3-button w3-green" style="width: 250px">completa</button>
    </div>
</div>


@else
    <h1>Nessun elemento nel carrello</h1>
@endif
@endsection