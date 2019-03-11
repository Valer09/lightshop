@extends('layout.defaultLayout')
@section('content')
<?php use App\Order; ?>

<?php
function get_order(){
        $temp=\App\Order::where('user_id', Auth::user()->id)->get();
    return $temp;
}
function get_el($id){
    $temp=\App\OrderDetail::where('orders_id', $id)->get();
    return $temp;
}
?>

<!--CONTENT PAGE-->
<div class="w3-container" style="margin: 49px">
        <h2>Il mio profilo</h2>
        <p>To highlight the current tab/page the user is on, add a color class, and use JavaScript to update the active
            link.</p>

        <div class="w3-bar">
            <button class="w3-bar-item w3-button tablink w3-green" onclick="openTab(event,'ordini')">Ordini</button>
            <button class="w3-bar-item w3-button tablink" onclick="openTab(event,'dati')">Dati personali</button>
            <button class="w3-bar-item w3-button tablink" onclick="openTab(event,'spedizione')">Indirizzi</button>
            <button class="w3-bar-item w3-button tablink" onclick="openTab(event,'pagamento')">Pagamento</button>
            <button class="w3-bar-item w3-button tablink" onclick="openTab(event,'password')">Password</button>
        </div>

        <div id="ordini" class="w3-container w3-border city">
            <h2>Ordini effettuati</h2>
            <p>Visualizza i tuoi ordini.</p>

            <!--lista ordini-->
            <div class="w3-container">
                <ul class="w3-ul w3-card-4">

                    <!--CARD PER GLI ORDINI IN CORSO DI ELABORAZIONE-->
                    {{!$orders= get_order()}}
                    @foreach($orders as $order)
                        @if ($order->order_shipped==2)
                        <li class="w3-bar">
                            <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
                            <div class="w3-bar-item">
                                <span class="w3-large">Effettuato il: {{ $order->added_on }} - <b>In elaborazione</b></span><br><br>
                                <span>Numero ordine: {{ $order->id }}</span><br>
                                <span>Oggetti:</span><br>

                                {{!$elements=get_el($order->id)}}
                                @foreach($elements as $element)
                                    <span>{{$element->element_name}}</span>Q.ta: {{$element->quantity}}<br>
                                @endforeach

                            </div>
                        </li>
                        @endif
                    @endforeach

                    <!--CARD PER GLI ORDINI SPEDITI-->
                    {{!$orders= get_order()}}
                    @foreach($orders as $order)
                        @if ($order->order_shipped==1)
                        <li class="w3-bar">
                            <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
                            <div class="w3-bar-item">
                                <span class="w3-large">Effettuato il: {{ $order->added_on }} - <b>Spedito</b></span><br><br>
                                <span>Numero ordine: {{ $order->id }}</span><br>
                                <span>Oggetti:</span><br>

                                {{!$elements=get_el($order->id)}}
                                @foreach($elements as $element)
                                    <span>{{$element->element_name}}</span>Q.ta: {{$element->quantity}}<br>
                                @endforeach

                            </div>
                        </li>
                        @endif
                    @endforeach

                    <!--CARD PER GLI ORDINI COMPLETATI-->
                    {{!$orders= get_order()}}
                    @foreach($orders as $order)
                        @if ($order->order_shipped==3)
                        <li class="w3-bar">
                            <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
                            <div class="w3-bar-item">
                                <span class="w3-large">Effettuato il: {{ $order->added_on }} - <b>Completato</b></span><br><br>
                                <span>Numero ordine: {{ $order->id }}</span><br>
                                <span>Oggetti:</span><br>

                                {{!$elements=get_el($order->id)}}
                                @foreach($elements as $element)
                                    <span>{{$element->element_name}}</span>Q.ta: {{$element->quantity}}<br>
                                @endforeach

                            </div>
                        </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>

        <div id="dati" class="w3-container w3-border city" style="display:none">
            <h2>Dati personali</h2>

            <div class="w3-padding">
                <div class="w3-row">
                    <label>Nome e cognome: <b>Mario Rotolo</b></label>
                </div>
                <div class="w3-row">
                    <label>Codice fiscale: <b>FWER45ERT345RTeR</b></label>
                </div>
                <div class="w3-row">
                    <label>Partita IVA: <b>12345678</b></label>
                </div>
                <div class="w3-row">
                    <label>E-mail: <b>mario.rotolo@live.it</b></label>
                </div>
                <div class="w3-row">
                    <label>PEC: <b>mariorotolo@pec.it</b></label>
                </div>
            </div>
            <button onclick="document.getElementById('modificaDati').style.display = 'block';">Modifica dati</button>

            <div id="modificaDati" class="w3-modal">
                <div class="w3-modal-content w3-animate-top w3-card-4">
                    <header class="w3-container w3-teal">
                        <span onclick="document.getElementById('modificaDati').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                        <h2>Modifica i tuoi dati.</h2>
                    </header>
                    <div class="w3-padding">
                        <div class="w3-row">
                            <label>Nome e cognome:</label>
                            <input placeholder="Nome">
                            <input placeholder="Cognome">
                        </div>
                        <div class="w3-row">
                            <label>Codice fiscale:</label>
                            <input placeholder="Codice fiscale">
                        </div>
                        <div class="w3-row">
                            <label>Partita IVA:</label>
                            <input placeholder="Partita IVA">
                        </div>
                        <div class="w3-row">
                            <label>E-mail:</label>
                            <input placeholder="E-mail">
                        </div>
                        <div class="w3-row">
                            <label>PEC: </label>
                            <input placeholder="PEC">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="spedizione" class="w3-container w3-border city" style="display:none">
            <h2>Indirizzi di spedizione</h2>
            <div class="w3-container">
                <ul class="w3-ul w3-card-4">
                    <!--CARD PER GLI INDIRIZZI DI SPEDIZIONE-->
                    <li class="w3-bar">
                        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
                        <div class="w3-bar-item">
                            <span class="w3-middle"><b>Mario Rotolo</b></span><br>
                            <span>
                                Via Collepretara, 432
                                <br>L'aquila, italy 67100
                                <br>tel. 2345435345
                                <br>Note: interno A
                            </span>   
                        </div>
                    </li>

                    <li class="w3-bar">
                        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
                        <div class="w3-bar-item">
                            <span class="w3-middle"><b>Federico Rotolo</b></span><br>
                            <span>
                                Via valle, 4
                                <br>L'aquila, italy 67100
                                <br>tel. 2876543
                                <br>Note: scala 3
                            </span>   
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div id="pagamento" class="w3-container w3-border city" style="display:none">
            <h2>Pagamenti</h2>
            <p>Qui puoi cambiare le tue impostazioni di pagamento.</p>
            <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
            <script>paypal.Buttons().render('body');</script>
            
        </div>

        <div id="password" class="w3-container w3-border city" style="display:none">
            <h2>Password</h2>
            <p>Qui puoi cambiare la tua password.</p>
        </div>
    </div>
    <!--end CONTENT PAGE-->

@stop
