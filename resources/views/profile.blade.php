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
            <button id="but#ordini" class="w3-bar-item w3-button tablink w3-green" onclick="openTab(event,'#ordini'); location.href='#ordini'">Ordini</button>
            <button id="but#dati" class="w3-bar-item w3-button tablink" onclick="openTab(event,'#dati'); location.href='#dati'">Dati personali</button>
            <button id="but#spedizione" class="w3-bar-item w3-button tablink" onclick="openTab(event,'#spedizione'); location.href='#spedizione'">Indirizzi</button>
            <button id="but#pagamento" class="w3-bar-item w3-button tablink" onclick="openTab(event,'#pagamento'); location.href='#pagamento'">Pagamento</button>
            <button id="but#password" class="w3-bar-item w3-button tablink" onclick="openTab(event,'#password'); location.href='#password'">Password</button>
        </div>

        <div id="#ordini" class="w3-container w3-border city">
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
            <div class="w3-container">
                <ul class="w3-ul w3-card">
                    <li class="w3-padding">
                        <div class="w3-bar-item">
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
                            <button onclick="document.getElementById('modificaDati').style.display='block'" >Modifica dati</button>
                        </div>
                    </li>
                </ul>
            </div>  
        </div> 

        <div id="#spedizione" class="w3-container w3-border city" style="display:none">
            <h2>Indirizzi di spedizione</h2>
            <div class="w3-container">
                <ul class="w3-ul w3-card">
                    <li class="w3-bar w3-button" onclick="document.getElementById('nuovoIndirizzo').style.display='block'">
                        <div class="w3-bar-item">
                            <span class="w3-middle"><i class="fa fa-plus"></i><b> Nuovo indirizzo di spedizione</b></span><br>
                        </div>
                    </li>
                    <!--CARD PER GLI INDIRIZZI DI SPEDIZIONE-->
                    {{!$id=Auth::user()->id, !$addresses=get_addresses($id)}}
                    @foreach($addresses as $address)
                        <li class="w3-bar">
                            <form id="cancellasped{{$address->id}}" action="{{ URL::to('/delete_user_address') }}{{$address->id}}?ref={{$_SERVER['REQUEST_URI']}}"><button type="button" class="pulsanteDxProfile w3-bar-item w3-button w3-white w3-right" onclick="conferma('Intendi eliminare questo indirizzo?', 'cancellasped{{$address->id}}')">Elimina<br><i class="fa fa-close"></i></button></form>
                            @if( $address->id == Auth::user()->address_id )
                            <span class="pulsanteDxProfile w3-bar-item w3-button w3-white w3-right">Preferito<br><i class="fa fa-star"></i></span>
                            @else

                            <a href="{{ URL::to('/star_address') }}{{$address->id}} "><span class="pulsanteDxProfile w3-bar-item w3-button w3-white w3-right">Preferito<br><i class="fa fa-star-o"></i></span></a>
                            @endif
                            <div class="w3-bar-item">

                                <span class="w3-middle"><b>{{$address->NomeCognome}}</b></span><br>
                                <span>
                                {{$address->street}}, {{$address->street_number}}
                                <br>{{$address->city}} ({{$address->Provincia}}) - {{$address->CAP}}
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
            <form method="post" type="submit" action="{{ URL::to('/password_edit_submit') }}?ref={{$_SERVER['REQUEST_URI']}}" >
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

    <!--Modale Modifica dati-->
    <div id="modificaDati" class="w3-modal">
                <div class="w3-modal-content w3-animate-top w3-card-4">
                    <header class="w3-container w3-teal">
                        <span onclick="document.getElementById('modificaDati').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                        <h2>Modifica i tuoi dati.</h2>
                    </header>
                    <form type="submit" method="post" action="{{URL::to('/user_edit')}}?ref={{$_SERVER['REQUEST_URI']}}">
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
        
    <!--end CONTENT PAGE-->

    <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
    <script>paypal.Buttons().render('#pulsantePaypal');</script>
    <script>
        setTimeout(() => {
            document.getElementById('but'+window.location.hash).click();


        }, 300);


        /** ----------METODO per COMPILAZIONEE COMUNE-----------*/
var myObj
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        //console.log(myObj);

    }
};
xmlhttp.open("GET", "https://raw.githubusercontent.com/matteocontrini/comuni-json/master/comuni.json", true);
xmlhttp.send();

function trovaCap(idComune, idCap, idProvincia) {
    if (document.getElementById(idComune) != null) {
        var nomeComune = document.getElementById(idComune).value.toLowerCase();
        for (ii = 0; ii < myObj.length; ii++) {
            if (myObj[ii]["nome"].toLowerCase() === nomeComune) {
                if (myObj[ii]["cap"].length === 1) {
                    document.getElementById(idCap).value = myObj[ii]["cap"][0].toString();
                } else {
                    var iii = 1;
                    var capp = myObj[ii]["cap"][0];
                    while (myObj[ii]["cap"][iii] != null) {
                        capp = capp + ", " + myObj[ii]["cap"][iii]
                        iii++;
                    }
                    document.getElementById(idCap).value = capp;
                }
                document.getElementById(idProvincia).value = myObj[ii]["sigla"];
            }
        }
    }
}
/** ---------- FINE METODO per COMPILAZIONEE COMUNE-----------*/
    </script>
    

@stop
