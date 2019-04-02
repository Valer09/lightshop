@extends('layout.defaultLayout')
@section('content')

<!-- PAGE CONTENT -->
<div class="w3-padding" style="margin-top:49px;width: 1200px; margin-left:auto; margin-right: auto;">
    <div class="w3-container w3-twothird">
        <!--ELEmento carrello-->
        <div class="w3-card">
            <div class="w3-black w3-center"><h2>CARRELLO</h2></div>
        </div>

        <div class="w3-card">
            <!--ELEMENTO 1 DEL CARRELLO-->
            @if(Session::has('cart'))
            @foreach($elements as $el)
            <div class="w3-padding w3-row">
                <div class="fotoCarrello w3-container w3-quarter" style="max-width: 150px">
                    <img style="max-width: 150px" src="{{ asset('storage').$el['item']->pathPhoto }}">
                </div> 
                <div class="w3-container w3-rest">
                    <h5><b>{{ $el['item']->name }}</b></h5>
                    <P>{{ $el['item']->description }}</P>
                    <P>Quantità: {{ $el['qty'] }} pz</P>
                </div>
            </div>
            @endforeach
            <!--fine ELEMENTO 1 DEL CARRELLO-->
            @else
            <div class="w3-padding w3-row w3-center">
                <span>Non ci sono articoli disponibili nel carrello.</span>
            </div>
            @endif
        </div>
        
    </div>
    <!--TOTALE-->
    @if(Session::has('cart'))
    <div class="w3-container w3-third w3-black">   
    <h1>Riepilogo</h1>
        <div class="boxTotale w3-row">
            <span class="tot w3-left">Subtotale:</span>
            <span class="tot w3-right">{{ number_format($totalPrice, 2, ',', '.') }} €</span>
        </div>
        <div class="boxTotale w3-row">
            <span class="tot w3-left">Costi di spedizione e gestione:</span>
            <span class="tot w3-right">{{ number_format('12.50', 2, ',', '.') }} €</span>
        </div>
        <div class="boxTotale w3-row">
            <span class="tot w3-left"><b>TOTALE</b></span>
            <span class="tot w3-right"><b>{{ number_format(($totalPrice + 12.50), 2, ',', '.')  }} €</b></span>
        </div>
        <div class="w3-center w3-margin-bottom" >
            <a href="{{ route('checkout') }}" type="button" class="w3-button w3-center">Checkout</a>
        </div>
    </div>
    @endif
</div><!-- End PAGE CONTENT -->

@endsection