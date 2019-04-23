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
                        <th style="width:25%;">Data ordine</th>
                        <th style="width:25%;">Utente</th>
                        <th style="width:25%;">Indirizzo</th>
                        <th style="width:25%;">Totale</th>
                    </tr>

                    {{!$orders=\App\Order::where('order_shipped', null)->orderBy('created_at','asc')->get()}}
                    @foreach($orders as $order)
                    @php
                        $user = \App\User::where('id', $order->user_id)->first();
                        $address = \App\Address::where('id', $order->address_id)->first();
                    @endphp
                        <tr onclick="window.open('{{url('order_details-').$order->id}}')">
                            <td></td>
                            <td>{{ date($order->created_at) }}</td>
                            <td>{{$user->surname}} {{$user->name}}<br><a href='mailto:{{$user->email}}'>{{$user->email}}</a></td>
                            <td>{{$address->street}}, {{$address->street_number}}<br>
                            {{$address->city}} ({{$address->Provincia}}) {{$address->CAP}}</td>
                            <td>€ {{ number_format($order->total, 2, ',', '.')  }}</td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>

@endsection
