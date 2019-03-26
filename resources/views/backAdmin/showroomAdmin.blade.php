@extends('layout.defaultLayoutAdmin')
@section('content')

    <div class="w3-main" style="margin-left:300px;margin-top:43px;">
        <!--TITOLO DELLA PAGINE-->
        <div class="w3-container w3-blue-grey">
            <h1>Aggiungi un nuovo Articolo nello Showroom</h1>
            <p>Utilizza questa form per aggingere un nuovo articolo.</p>
            <form class="w3-container" method="post" action="{{URL::to('/article_showroom_insert')}}?ref={{$_SERVER['REQUEST_URI']}}" enctype="multipart/form-data" >
                @csrf
                <div class="w3-row w3-container">
                    <div class="w3-col m6 w3-light-grey w3-center">
                        <p>Dati nuovo articolo</p>

                        <input class="w3-input" name="name" type="text" placeholder="Nome prodotto" required>
                        <input class="w3-input" name="description" type="text" placeholder="Descrizione">

                        <select class="w3-select" name="subcategory" onchange="change(this.value)" required>
                                <option disabled selected>Seleziona la categoria</option>
                                <option value="showroom/pavimenti">Pavimenti e Rivestimenti</option>
                                <option value="showroom/cucine">Cucine</option>
                                <option value="showroom/bagni">Bagni</option>
                                <option value="showroom/porte">Porte</option>
                                <option value="showroom/caminetti">Caminetti</option>
                                <option value="showroom/falegnameria">Falegnameria</option>
                        </select>

                    </div>
                    <div class="w3-col m6 w3-light-grey w3-center">
                        <p>Foto nuovo articolo</p>
                        <input class="w3-input" name="link" type="text" placeholder="Link acquisto">
                        <div id="" class="labelFoto w3-left w3-input" style="border-bottom: 1px solid #ccc;"><b>Foto copertina: </b>
                            <input type="file" id="file" name="file_name"></div>
                        <div id="" class="labelFoto w3-left w3-input"><b>Altre foto: </b>
                            <input type="file" name="myFile" multiple></div>
                    </div>
                </div>
                <hr>
                <div class="w3-col m6 w3-center">
                    <button class="w3-button w3-ripple w3-green" type="submit" value="inserimentoProdotto" name="actionAd" style="width:50%">Salva</button>
                </div>
                <div class="w3-col m6 w3-center">
                    <button class="w3-button w3-ripple w3-red" style="width:50%">Annulla</button>
                </div>
            </form>
        </div>
    </div>

@stop