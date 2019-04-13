@extends('layout.defaultLayoutAdmin')


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

                    <!--ESEMPIO DA CANCELLARE-->
                    {{!$orders=\App\Order::where('order_shipped', null)->orderBy('created_at','asc')->get()}}
                    @foreach($orders as $order)
                    @php
                        $user = \App\User::where('id', $order->user_id)->first();
                        $address = \App\Address::where('id', $order->address_id)->first();
                    @endphp
                        <tr onclick="openModalAdmin('modaleOrder', null, null, {{$order}});">
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


<!--MODALE CREAZIONE-->
<div id="modaleOrder" class="w3-modal">
    <div class="w3-modal-content">

        <div id="modalModUser" class="w3-container w3-blue-grey">
            <span onclick="closeModal('modaleOrder')" class="w3-button w3-display-topright">&times;</span>
            <h1>Stai modificando <!--INSERIRE DATI DB--></h1>
            <p>Utilizza questa form per modificare i dati di un Prodotto.</p>
            <form class="w3-container">
                <fieldset id="fieldsetModale" style="border: none">
                    <div class="w3-row">
                        <div class="w3-col m6 w3-light-grey w3-center">
                            <p>Dati nuovo prodotto</p>
                            <label class="w3-input" type="text" placeholder="Nome destinatario" required>
                            <label class="w3-input" type="text" placeholder="Via">
                            <input class="w3-input" type="text" placeholder="Nota">
                            <select class="w3-select" name="categoria" required>
                                <option value="" disabled selected>Selezione una categoria</option>
                                <option value="PRIORITARIA">Prioritaria</option>
                                <option value="RACCOMANDATA">Raccomandata</option>
                                <option value="RACCOMANDATA_A/R">Raccomandata A/R</option>
                                <option value="ASSICURATA">Assicurata</option>
                                <option value="TELEGRAMMA">Telegramma</option>
                                <option value="SERVIZI">Servizi</option>
                            </select>
                        </div>
                        <div class="w3-col m6 w3-light-grey w3-center">
                            <p>Prezzi</p>
                            <input class="w3-input" type="text" placeholder="Scaglioni pesi(g)" required>
                            <input class="w3-input" type="text" placeholder="Prezzo unitario" required>
                            <input class="w3-input" type="text" placeholder="Prezzo Poste Italiane" >
                            <input class="w3-input" type="text" placeholder="P.U. servizio aggiuntivo" >
                        </div>

                    </div>
                    <hr>
                </fieldset>
                <div class="w3-row">

                    <div class="w3-col m4  w3-center">
                        <button class="w3-button w3-ripple w3-green" style="width:80%" onclick="enableField()">Modifica</button>
                    </div>
                    <div class="w3-col m4  w3-center">
                        <button id="save" class="w3-button w3-ripple w3-red" style="width:80%; visibility: hidden">Salva</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--MODALE CHIUSURA-->

@endsection
