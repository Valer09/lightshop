@extends('layout.defaultLayout')
@section('content')

<div class="w3-container" style="margin: 49px">
  <h2>Il mio profilo</h2>
  <p>To highlight the current tab/page the user is on, add a color class, and use JavaScript to update the active link.</p>

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

@stop
