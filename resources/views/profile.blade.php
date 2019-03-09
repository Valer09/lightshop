@extends('layout.defaultLayout')
@section('content')

<div class="w3-container" style="margin: 49px">
  <h2>Impostazioni profilo</h2>
  <p>To highlight the current tab/page the user is on, add a color class, and use JavaScript to update the active link.</p>

  <div class="w3-bar">
    <button class="w3-bar-item w3-button tablink w3-green" onclick="openTab(event,'dati')">Dati personali</button>
    <button class="w3-bar-item w3-button tablink" onclick="openTab(event,'spedizione')">Spedizioni</button>
    <button class="w3-bar-item w3-button tablink" onclick="openTab(event,'pagamento')">Pagamento</button>
    <button class="w3-bar-item w3-button tablink" onclick="openTab(event,'password')">Password</button>
  </div>
  
  <div id="dati" class="w3-container w3-border city">
    <h2>Dati personali</h2>
    <p>Modifica i tuoi dati di pagamento.</p>
  </div>

  <div id="spedizione" class="w3-container w3-border city" style="display:none">
    <h2>Spedizioni</h2>
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
