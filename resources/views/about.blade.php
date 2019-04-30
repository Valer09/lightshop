@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')

  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/navbarTrasp.css')}}" />
@endsection

@section('content')

<div class="w3-row">
        <div class=" w3-display-container">

             <div class="w3-display-container Myslides w3-animate-opacity"  style="display: block">
                <img class="mySlides" src="{{asset('storage')}}/images/about/team2.jpg" style="width: 100%;height: auto" >
             </div>

            <div class="w3-display-container Myslides w3-animate-opacity"  style="display: block">
                <img class="mySlides" src="{{asset('storage')}}/images/about/team.jpg"  style="width: 100%;height: auto">
            </div>

            <div class="w3-display-container Myslides w3-animate-opacity"  style="display: block">
                <img class="mySlides" src="{{asset('storage')}}/images/about/team2.jpg" style="width: 100%;height: auto" >
            </div>

            <button class="w3-button w3-display-left"  onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
            <script src = "{{url('/js/about.js')}}" ></script>
    </div>
</div>

<div class="container">
    <div class="w3-padding-24">
        <h1 class="h">Perche Visca?</h1>
    </div>
</div>

<div class="w3-row">
    <div class="column row:after" >
        <div>
            <i>
                <img src="{{asset('storage')}}/images/about/support.png" class="icon">
            </i>
        </div>
        <div>
            <h3 class="h">ASSISTENZA</h3>
            <p>Ogni desiderio è un ordine</p>
        </div>

    </div>

    <div class="column .row:after middle">
        <div>
            <i>
                <img src="{{asset('storage')}}/images/about/reliability.png" class="icon">
            </i>
        </div>
        <div>
            <h3 class="h">AFFIDABILITÀ</h3>
            <p>Dal 1987 svolgiamo attivita professionale blabla. Nasce con l'obbiettivo di blublublu.</p>
            <p>UniCredit è e rimarrà un Gruppo paneuropeo semplice e di successo, con un modello commerciale lineare e un segmento Corporate & Investment Banking
                    perfettamente integrato che mette a disposizione dei 26 milioni di clienti un'unica rete in Europa Occidentale, Centrale e Orientale.</p>

            <p>UniCredit risponde ai bisogni di clienti sempre più esigenti  grazie a un'offerta commerciale completa, che sfrutta le forti sinergie tra le
                diverse divisioni di business, tra cui CIB, Commercial Banking e Wealth Management.
            </p>

        </div>
    </div>

    <div class="column row:after">
        <div>
            <i>
                <img src="{{asset('storage')}}/images/about/supply.png" class="icon">
            </i>
        </div>
        <div>
            <h3 class="h">FORNITURA</h3>
            <p>Un ampia scelta per arredare, sistemare, pulire distruggere la tua casa dei sogni. </p>
        </div>
    </div>
</div>



<style>

    /* Create three equal columns that floats next to each other */
    .column {
        float: left; !important;
        width: 25%; !important;
        padding: 65px; !important;
        text-align:center; !important;
    }
    .middle {

        width: 50%; !important;
    }
    /* Clear floats after the columns */
    .row:after {
        content: ""; !important;
        display: table; !important;
        clear: both; !important;
    }

    /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
    @media screen and (max-width:600px) {
        .column {
            width: 100%; !important;
        }
    }
    .h{
        font-family: "Lucida Sans"; !important;
        text-align: center; !important;
    }
    .icon{
        width: 80px !important;
        height: 80px !important;
    }

    .description{

        font-family: 'Lucida Sans' !important;
        font-size: 19px;

    }

</style>

@endsection
