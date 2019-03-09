@extends('layout.defaultLayout')
@section('content')

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
                            <span class="w3-large">23 Ott 2019 - Spedito</span><br>
                            <p>x2 gitaviti</p>
                            <p>x24 casette per puffi</p>
                        </div>
                    </li>

                    <li class="w3-bar">
                        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
                        <div class="w3-bar-item">
                                <span class="w3-large">23 Ott 2019 - Completato</span><br>
                                <p>x4 viti</p>
                                <p>x37 alberi di fata</p>
                                <p>x37 alberi di topo</p>
                                <p>x37 alberi di faggio</p>
                                <p>x37 alberi di torta</p>
                        </div>
                    </li>

                    <li class="w3-bar">
                        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
                        <div class="w3-bar-item">
                                <span class="w3-large">23 Ott 2019 - Completato</span><br>
                                <p>x567 maniglie di formaggio</p>
                                <p>x1 rata del mutuo</p>
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
