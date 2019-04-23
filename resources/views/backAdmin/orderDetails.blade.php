@extends('layout.defaultCheckout')
@section('title', 'Dettagli Ordine')

@section('head')
  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/navbarColor.css')}}" />
  <script src="{{url('/js/checkout.js')}}"></script>
@endsection

@section('content')
<div id="main" class="w3-container w3-border" style="margin-top: 49px">
    <div class="w3-row">
        <div class="w3-left">
            <h4>Ordine n. {{$Order->id}}.</h4>
        </div>
        <div class="w3-right">
            <h4>Ordine creato il: {{$Order->created_at}}</h4>
        </div>
    </div>
    <div class="w3-row">
        <div class="w3-third">
            <h3 class="w3-amber">Destinatario Spedizione</h3>
        </div>
        <div class="w3-third">
            <h3 class="w3-amber">Corriere</h3>
        </div>
        <div class="w3-third">
            <h3 class="w3-amber">Dati fatturazione</h3>
        </div>
    </div>
    <div class="w3-row">
        <div class="w3-third">
            <p>Nome: {{$Address->NomeCognome}}</p>
            <p>indirizzo: {{$Address->street}}, {{$Address->street_number}}</p>
            <p>Città: {{$Address->CAP}} - {{$Address->city}} ({{$Address->Provincia}})</p>
            <p>Stato: {{$Address->country}}</p>
        </div>
        <div class="w3-third">
            <p>Corriere: {{$Courier->courier_name}}</p>
            <p>Servizio: {{$Courier->name_service}}</p>
            <p>Prezzo: {{number_format($Courier->price, 2, ',', '.')}} €</p>
            <p>Peso max: {{$Courier->pesomax}} Kg</p>
        </div>
        <div class="w3-third">
            <p>Acquirente: {{$User->surname}} {{$User->name}}</p>
            <p>Email: <a href="mailto:{{$User->email}}">{{$User->email}}</a></p>
            <p>Codice fiscale: {{$User->CF}}</p>
            @if(isset($User->PEC))
            <p>PEC: <a href="mailto:{{$User->PEC}}">{{$User->PEC}}</a></p>
            @endif
            @if(isset($User->IVA))
            <p>Partita IVA: {{$User->IVA}}</p>
            @endif
        </div>
    </div>
    <hr>

    <table class="w3-table w3-bordered">
        <!--Table Head-->
        <tr>
            <th>Codice</th>
            <th>Prodotto</th>
            <th>Q.ta</th>
            <th>Prezzo unitario</th>
            <th>Subtotale</th>
        </tr>
        @foreach($OrderElements as $el)
        <tr>
            <td>{{$el->details}}</td>
            <td><a href="{{url('element').$el->element_id}}" target="_blank">{{$el->element_name}}</a></td>
            <td>{{$el->quantity}}</td>
            <td>{{ number_format($el->price, 2, ',', '.') }} €</td>
            <td>{{ number_format(($el->price * $el->quantity), 2, ',', '.') }} €</td>
        </tr>
        @endforeach

    </table>
    <div class="w3-row">
        <div class="w3-col l6">
            <!--<p>N. Pezzi: </p>-->
        </div>
        <div class="w3-col l6">
            <p>Totale Prodotti: {{ number_format($Order->total, 2, ',', '.') }} €</p>
            <p>Iva (22%): {{ number_format(($Order->total*0.22), 2, ',', '.') }} €</p>
            <p><b>Totale: {{ number_format(($Order->total + $Courier->price), 2, ',', '.') }} €</b></p>
        </div>
    </div>
</div>

@endsection