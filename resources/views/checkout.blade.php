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
            <p>A: {{ $address->NomeCognome }}</p>
            <p>{{ $address->street }}, {{ $address->street_number }}</p>
            <p>{{ $address->city }}, {{ $address->Provincia }} {{ $address->CAP }}</p>
            <p>{{ $address->country }}</p>
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