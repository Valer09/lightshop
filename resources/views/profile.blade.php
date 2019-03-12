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

    function get_addresses($id){
        $temp=\App\Address::where('user_id', $id)->get();
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
            <button id="but#dati" class="w3-bar-item w3-button tablink" onclick="openTab(event,'#dati')">Dati personali</button>
            <button id="but#spedizione" class="w3-bar-item w3-button tablink" onclick="openTab(event,'#spedizione')">Indirizzi</button>
            <button id="but#pagamento" class="w3-bar-item w3-button tablink" onclick="openTab(event,'#pagamento')">Pagamento</button>
            <button id="but#password" class="w3-bar-item w3-button tablink" onclick="openTab(event,'#password')">Password</button>
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
                                    <span>Numero ordine: {{! printf($order->id) }}</span><br>
                                    <span>Oggetti:</span><br>

                                    {{!$elements=get_el($order->id)}}
                                    @foreach($elements as $element)
                                        <span>{{$element->element_name }}</span>   Q.ta: {{$element->quantity}}<br>
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
                                        <span>{{$element->element_name }}</span>  Q.ta: {{$element->quantity}}<br>
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
                                        <span>{{$element->element_name }}</span>  Q.ta: {{$element->quantity}}<br>
                                    @endforeach

                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>

        <div id="#dati" class="w3-container w3-border city" style="display:none">
            <h2>Dati personali</h2>

            <div class="w3-padding">
                <div class="w3-row">
                    <label>Nome e cognome: <b>{{Auth::user()->name}}  {{Auth::user()->surname}}</b></label>
                </div>
                <div class="w3-row">
                    {{!$CF=Auth::user()->CF, !$CFUP=strtoupper($CF)}}
                    <label>Codice fiscale: <b>{{$CFUP}}</b></label>
                </div>
                <div class="w3-row">
                    {{!$IVA=Auth::user()->IVA , !$IVAUP=strtoupper($IVA)}}
                    <label>Partita IVA: <b>{{$IVAUP}}</b></label>
                </div>
                <div class="w3-row">

                    <label>E-mail: <b>{{Auth::user()->email}}</b></label>
                </div>
                <div class="w3-row">
                    <label>PEC: <b>{{Auth::user()->PEC}}</b></label>
                </div>
            </div>
            <button onclick="document.getElementById('modificaDati').style.display='block'" >Modifica dati</button>
            <div id="modal_success" class="w3-modal">
                <h1>ADfnoiaDH:FIULH</h1>
            </div>
            <div id="modificaDati" class="w3-modal">
                <div class="w3-modal-content w3-animate-top w3-card-4">
                    <header class="w3-container w3-teal">
                        <span onclick="document.getElementById('modificaDati').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                        <h2>Modifica i tuoi dati.</h2>
                    </header>
                    <form type="submit" method="post" action="{{URL::to('/user_edit')}}">
                        @csrf
                        <div class="w3-padding">
                            <div class="w3-row">
                                <label>Nome e cognome:</label>
                                <input value="{{Auth::user()->name}}" placeholder="Nome" name="name">
                                <input value="{{Auth::user()->surname}}" placeholder="Cognome" name="surname">
                            </div>
                            <div class="w3-row">
                                <label>Codice fiscale:</label>
                                <input value="{{$CFUP}}" placeholder="Codice fiscale" name="CF">
                            </div>
                            <div class="w3-row">
                                <label>Partita IVA:</label>
                                <input value="{{$IVAUP}}" placeholder="Partita IVA" name="PIVA">
                            </div>
                            <div class="w3-row">
                                <label>E-mail:</label>
                                <input value="{{Auth::user()->email}}" placeholder="E-mail" name="email">
                            </div>
                            <div class="w3-row">
                                <label>PEC: </label>
                                <input value="{{Auth::user()->PEC}}" placeholder="PEC" name="pec">
                                <button class="w3-right" type="submit">Salva</button>
                            </div>


                        </div>


                    </form>


                    
                </div>
            </div>
        </div>

        <div id="#spedizione" class="w3-container w3-border city" style="display:none">
            <h2>Indirizzi di spedizione</h2>
            <div class="w3-container">
                <ul class="w3-ul w3-card-4">
                    <!--CARD PER GLI INDIRIZZI DI SPEDIZIONE-->
                    {{!$id=Auth::user()->id, !$addresses=get_addresses($id)}}
                    @foreach($addresses as $address)
                    <li class="w3-bar">
                        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
                        <div class="w3-bar-item">

                            <span class="w3-middle"><b>{{Auth::User()->name}}</b></span><br>
                            <span>
                                {{$address->street}}
                                <br>{{$address->city}}, {{$address->municipality}},
                                <br>{{$address->country}}
                            </span>

                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div id="#pagamento" class="w3-container w3-border city" style="display:none">
            <h2>Pagamenti</h2>
            <p>Qui puoi cambiare le tue impostazioni di pagamento.</p>
            <div id="pulsantePaypal"></div>
        </div>
        <p>Qui puoi cambiare la tua password.</p>
        <div id="#password" class="w3-container w3-border city" style="display:none">
            <form method="post" type="submit" action="{{ URL::to('/password_edit_submit') }}" >
                @csrf
                <div>
                    <label>Vecchia Password: </label>
                    <input value="Inserisci la vecchia password" placeholder="Old_password" name="old_password" type="password" required>
                </div>
                <div>
                    <label>Nuova Password: </label>
                    <input value="Inserisci la nuova password" placeholder="Password" name="password" type="password" required>
                </div>
                <div>
                    <label>Ripeti Password: </label>
                    <input value="Inserisci la nuova password" placeholder="Control_password" name="control_password" type="password" required>
                </div>

                    <button class="w3-left" type="submit">Salva</button>

            </form>
        </div>

    </div>
    <!--end CONTENT PAGE-->

    <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
    <script>paypal.Buttons().render('#pulsantePaypal');</script>
    <script>
        setTimeout(() => {
            document.getElementById('but'+window.location.hash).click();


        }, 300);
    </script>
    <script>
        document.getElementById('modal_success').style.display='none';
    </script>

@stop
