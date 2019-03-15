@extends('layout.defaultLayout')
@section('content')

<!-- PAGE CONTENT -->
<div style="margin-top:49px; max-width: 1200px;">
    <div class="w3-container w3-twothird">
        <!--ELEmento carrello-->
        <div class="w3-card">
            Elemento carrello
        </div>
    </div>
    <!--TOTALE-->
    <div class="w3-padding-32 w3-container w3-third w3-black">
        <h1>Riepilogo</h1>
        <div class="boxTotale w3-row">
            <span class="w3-left">Subtotale:</span>
            <span class="w3-right">190.23 €</span>
        </div>
        <div class="boxTotale w3-row">
            <span class="w3-left">Costi di spedizione e gestione:</span>
            <span class="w3-right">12.50 €</span>
        </div>
        <div class="boxTotale w3-row">
            <span class="w3-left"><b>TOTALE</b></span>
            <span class="w3-right">212.70 €</span>
        </div>
        
    </div>
</div><!-- End PAGE CONTENT -->

@stop