@extends('layout.defaultLayoutAdmin')

@section('content')

    <div class="w3-main" style="margin-left:300px;margin-top:43px;">
        <!--TITOLO DELLA PAGINE-->
        <div class="w3-container w3-blue-grey" style="padding: 16px;">
            <h1>Categorie negozio online</h1>
            <p>Utilizza questa pagina per modificare categorie e sottocategorie presenti nel negozio online</p>
            <!-- Accordion -->
            <div class="w3-card w3-round">
                <div class="w3-white">
                    <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> Materiale Edile</button>
                    <div id="Demo1" class="w3-hide w3-container">
                        <div id="cardCategorie">
                            <p>Some other text..</p>
                            <p><button class="w3-button w3-block w3-theme-l1 w3-left-align">Aggiungi nuova sottoclasse</button></p>
                        </div>
                    </div>
                    <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Ceramiche</button>
                    <div id="Demo2" class="w3-hide w3-container">
                        <div id="cardCategorie">
                            <p>Some other text..</p>
                            <p><button class="w3-button w3-block w3-theme-l1 w3-left-align">Aggiungi nuova sottoclasse</button></p>
                        </div>
                    </div>
                    <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> Arredo Bagno</button>
                    <div id="Demo3" class="w3-hide w3-container">
                        <div id="cardCategorie">
                            <p>Some other text..</p>
                            <p><button class="w3-button w3-block w3-theme-l1 w3-left-align">Aggiungi nuova sottoclasse</button></p>
                        </div>
                    </div>
                    <button onclick="myFunction('Demo4')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> Caminetti</button>
                    <div id="Demo4" class="w3-hide w3-container">
                        <div id="cardCategorie">
                            <p>Some other text..</p>
                            <p><button class="w3-button w3-block w3-theme-l1 w3-left-align">Aggiungi nuova sottoclasse</button></p>
                        </div>
                    </div>
                    <button onclick="myFunction('Demo5')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> Termoidraulica</button>
                    <div id="Demo5" class="w3-hide w3-container">
                        <div id="cardCategorie">
                            <p>Some other text..</p>
                            <p><button class="w3-button w3-block w3-theme-l1 w3-left-align">Aggiungi nuova sottoclasse</button></p>
                        </div>
                    </div>
                    <button onclick="myFunction('Demo6')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> Ferramenta</button>
                    <div id="Demo6" class="w3-hide w3-container">
                        <div id="cardCategorie">
                            <p>Some other text..</p>
                            <p><button class="w3-button w3-block w3-theme-l1 w3-left-align">Aggiungi nuova sottoclasse</button></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


@stop