@extends('layout.defaultLayout')


@section('content')

    <!-- PAGE CONTENT -->

    <header class="w3-display-container w3-wide" id="principalDiv">
        <div class="w3-display-topmiddle w3-margin-top w3-margin">
            <h1 class="w3-xxlarge w3-center w3-text-white"><span class="w3-padding w3-green w3-opacity-min"><b>V</b></span> <span class="w3-hide-small w3-text-light-grey">Showroom</span></h1>
        </div>
    </header>

    <div id="boxShow" class="w3-row w3-white w3-container">
        <div id="show1" class="show w3-col l2  w3-hover-opacity">
            <div class="w3-twothird w3-right w3-white w3-opacity-min" style="height:200px">Pavimenti e Rivestimenti</div>
        </div>

        <div id="show2" class="show w3-col l2  w3-hover-opacity">
            <div class="w3-twothird w3-right w3-white w3-opacity-min" style="height:200px">Cucine</div>
        </div>

        <div id="show3" class="show w3-col l2  w3-hover-opacity">
            <div class="w3-twothird w3-right w3-white w3-opacity-min" style="height:200px">Bagni</div>
        </div>

        <div id="show4" class="show w3-col l2 w3-hover-opacity">
            <div class="w3-twothird w3-right w3-white w3-opacity-min" style="height:200px">Porte</div>
        </div>

        <div id="show5" class="show w3-col l2 w3-hover-opacity">
            <div class="w3-twothird w3-right w3-white w3-opacity-min" style="height:200px">Caminetti</div>
        </div>

        <div id="show6" class="show w3-col l2 w3-hover-opacity">
            <div class="w3-twothird w3-right w3-white w3-opacity-min" style="height:200px">Falegnameria</div>
        </div>
    </div>

   


    <!--
<div id="principalDiv" class="w3-display-container w3-animate-opacity w3-text-white">
    <div  class="w3-row w3-display-right">
        <section id="container">
            <div class="w3-col imgshow l2">
                <figure>
                    <img src="./images/ceramiche/ceramiche (5).jpg" alt="Pavimenti e Rivestimenti">
                    <figcaption>Pavimenti e Rivestimenti</figcaption>
                </figure>
            </div>
            <div class="w3-col imgshow l2">
                <figure>
                    <img src="./images/cucine/cucina (1).jpg" alt="Cucine">
                    <figcaption>Cucine</figcaption>
                </figure>
            </div>
            <div class="w3-col imgshow l2">
                <figure>
                    <img src="./images/bagno/bagno (2).jpg" alt="Bagni">
                    <figcaption>Bagni</figcaption>
                </figure>
            </div>
            <div class="w3-col imgshow l2">
                <figure>
                    <img src="./images/ferramenta/ferramenta (6).jpg" alt="Porte">
                    <figcaption>Porte</figcaption>
                </figure>
            </div>
            <div class="w3-col imgshow l2">
                <figure>
                    <img src="./images/caminetti/caminetto (2).jpg" alt="Caminetti">
                    <figcaption>Caminetti</figcaption>
                </figure>
            </div>
            <div class="w3-col imgshow l2">
                <figure>
                    <img src="./images/porticati/porticati (1).jpg" alt="Falegnameria">
                    <figcaption>Falegnameria</figcaption>
                </figure>
            </div>
        </section>
    </div>
</div>-->
    <!-- End PAGE CONTENT -->

@stop