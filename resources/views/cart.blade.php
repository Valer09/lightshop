@extends('layout.defaultLayout')
@section('content')

<!-- PAGE CONTENT -->
<div class="w3-padding" style="margin-top:49px; max-width: 1200px;">
    <div class="w3-container w3-twothird">
        <!--ELEmento carrello-->
        <div class="w3-card">
            <div class="w3-black w3-center"><h2>CARRELLO</h2></div>

        </div>
        <div class="w3-card">
            <div class="w3-padding">
                <img style="height: 120px" src="https://images.pexels.com/photos/1036936/pexels-photo-1036936.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
            </div>
        </div>
    </div>
    <!--TOTALE-->
    <div class="w3-container w3-third w3-black">   
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
            <span class="w3-right"><b>202.73 €</b></span>
        </div>
    </div>
</div><!-- End PAGE CONTENT -->

@stop