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
                    <li class="w3-bar">
                        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
                        <div class="w3-bar-item">
                            <span class="w3-large">SPEDITI</span><br><br>
                            {{!$orders= get_order()}}

                            @foreach($orders as $order)
                                @if ($order->order_shipped==1)

                                    <span>Ordine N.: {{ $order->id }}</span><br>
                                    <span>Oggetti:</span><br>

                                    {{!$elements=get_el($order->id)}}

                                    @foreach($elements as $element)
                                        <span>{{$element->element_name}}   </span>Q.ta: {{$element->quantity}}<br>

                                    @endforeach
                                @endif
                            @endforeach

                        </div>
                    </li>

                    <li class="w3-bar">
                        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
                        <div class="w3-bar-item">
                            <span class="w3-large">IN CORSO</span><br><br>
                            {{!$orders= get_order()}}

                            @foreach($orders as $order)
                                @if ($order->order_shipped==2)

                                    <span>Ordine N.: {{ $order->id }}</span> <br>

                                    {{!$elements=get_el($order->id)}}
                                    <span>Oggetti:</span><br>

                                    @foreach($elements as $element)
                                        <span>{{$element->element_name}}</span> Q.ta: {{$element->quantity}}<br>
                                    @endforeach
                                @endif
                            @endforeach

                        </div>
                    </li>

                    <li class="w3-bar">
                        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
                        <div class="w3-bar-item">
                                <span class="w3-large">COMPLETATI</span><br><br>
                            {{!$orders= get_order()}}

                            @foreach($orders as $order)
                                @if ($order->order_shipped==3)
                                    <span>Ordine N.: {{ $order->id }}</span><br>
                                        {{!$elements=get_el($order->id)}}
                                        <span>Oggetti:</span><br>

                                            @foreach($elements as $element)
                                                <span>{{$element->element_name}}</span> Q.ta: {{$element->quantity}}<br>
                                            @endforeach

                                @endif
                            @endforeach

                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div id="dati" class="w3-container w3-border city" style="display:none">
            <h2>Dati personali</h2>
            <p>Modifica i tuoi dati di pagamento.</p>
        </div>

        <div id="spedizione" class="w3-container w3-border city" style="display:none">
            <h2>Indirizzi di spedizione</h2>
            <p>Gestisci i tuoi indirizzi di spedizione.</p>
        </div>

        <div id="pagamento" class="w3-container w3-border city" style="display:none">
            <h2>Pagamenti</h2>
            <p>Qui puoi cambiare le tue impostazioni di pagamento.</p>
        </div>

        <div id="password" class="w3-container w3-border city" style="display:none">
            <h2>Password</h2>
            <p>Qui puoi cambiare la tua password.</p>
        </div>
    </div>
    <!--end CONTENT PAGE-->

@stop
