@extends('layout.defaultLayout')
@section('content')

<!-- PAGE CONTENT -->
<div class="w3-content w3-padding" style="max-width:1564px">
        <div class="w3-container w3-margin-top w3-padding-64" id="showroom">

            <h2 class="w3-border-bottom w3-border-light-grey w3-wide w3-center"><b>Showroom</b></h2>
            <div class="w3-row-padding" style="margin-top:40px">
                <div class="w3-col l4 m4 w3-margin-bottom">
                    <div class="w3-display-container">
                        <div class="w3-display-topleft w3-black w3-padding">Pavimenti e rivestimenti</div>
                        <img class="img-showroom" onclick="openImage(this);" src="{{asset('/public/ceramiche/ceramiche (5).jpg')}}"
                            alt="Ceramiche" style="width:100%">
                    </div>
                </div>
                <div class="w3-col l4 m4 w3-margin-bottom">
                    <div class="w3-display-container">
                        <div class="w3-display-topleft w3-black w3-padding">Cucine</div>
                        <img class="img-showroom" onclick="openImage(this);" src="./public/cucine/cucina (1).jpg" alt="Le Cucine"
                            style="width:99%">
                    </div>
                </div>
                <div class="w3-col l4 m4 w3-margin-bottom">
                    <div class="w3-display-container">
                        <div class="w3-display-topleft w3-black w3-padding">Bagni</div>
                        <img class="img-showroom" onclick="openImage(this);" src="./public/bagno/bagno (2).jpg" alt="I Bagni"
                            style="width:100%">
                    </div>
                </div>
            </div>

            <div class="w3-row-padding">
                <div class="w3-col l4 m4 w3-margin-bottom">
                    <div class="w3-display-container">
                        <div class="w3-display-topleft w3-black w3-padding">Porte</div>
                        <img class="img-showroom" onclick="openImage(this);" src="./public/ferramenta/ferramenta (6).jpg"
                            alt="Il Negozio" style="width:100%">
                    </div>
                </div>

                <div class="w3-col l4 m4 w3-margin-bottom">
                    <div class="w3-display-container">
                        <div class="w3-display-topleft w3-black w3-padding">Caminetti</div>
                        <img class="img-showroom" onclick="openImage(this);" src="./public/caminetti/caminetto (2).jpg"
                            alt="I Caminetti" style="width:99%">
                    </div>
                </div>
                <div class="w3-col l4 m4 w3-margin-bottom">
                    <div class="w3-display-container">
                        <div class="w3-display-topleft w3-black w3-padding">Porticati</div>
                        <img class="img-showroom" onclick="openImage(this);" src="./public/porticati/porticati (1).jpg"
                            alt="I Porticati" style="width:99%">
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End PAGE CONTENT -->

@stop