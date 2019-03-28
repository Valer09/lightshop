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
                        <select class="w3-select" name="subcategory" required>
                                <option disabled selected>Seleziona la categoria</option>
                                <option value="showroom/pavimenti">Pavimenti e Rivestimenti</option>
                                <option value="showroom/cucine">Cucine</option>
                                <option value="showroom/bagni">Bagni</option>
                                <option value="showroom/porte">Porte</option>
                                <option value="showroom/caminetti">Caminetti</option>
                                <option value="showroom/falegnameria">Falegnameria</option>
                        </select>
                        <input class="w3-input" name="link" type="text" placeholder="Link acquisto">

                    </div>
                    <div class="w3-col m6 w3-light-grey w3-center">
                        <p>Altre info</p>
                        <textarea class="w3-input" name="description" type="text" placeholder="Descrizione"></textarea>

                    </div>
                </div>
                
                <div id="" class="labelFoto w3-margin-top" style="border-bottom: 1px solid #ccc;"><b>Foto copertina: </b>
                    <input type="file" id="file" name="file_name"></div>
                <div id="" class="labelFoto w3-margin-bottom"><b>Altre foto: </b>
                    <input type="file" class="form-control" name="photos[]" multiple></div>
                <hr>
                <div class="w3-col m6 w3-center">
                    <button class="w3-button w3-ripple w3-green" type="submit" style="width:50%">Salva</button>
                </div>
                <div class="w3-col m6 w3-center">
                    <button class="w3-button w3-ripple w3-red" style="width:50%">Annulla</button>
                </div>
            </form>
        </div>

        <hr>

        <!--TITOLO DELLA PAGINE-->
        <div class="w3-container w3-blue-grey" style="padding-bottom: 16px;">
            <h1>Lista degli articoli in showroom.</h1>
            <p>Questa è una lista degli articoli attualmente visibili in showroom.</p>
            <p>Clicca su un elemento della lista per visualizzare più informazioni o modificarle.</p>
            <hr>
            <input class="w3-input w3-border w3-padding" type="text" placeholder="Cerca un utente per Nome o Cognome" id="myInput" onkeyup="myFunction()">

            <div class="w3-white" id="divLocationMain" style="margin-top: 2%;">
                <table class="w3-table-all w3-margin-top" id="myTable">

                   
                    <tr>
                        <th style="width:10%;">Immagine</th>
                        <th style="width:15%;">Nome</th>
                        <th style="width:65%;">Descrizione</th>
                        <th style="width:10%;">Categoria</th>
                    </tr>

                    <!--LISTA DEI PRODOTTI blade-->
                    {{!$ElementsShowRoom=\App\ElementsShowRoom::all()}}
                    @foreach($ElementsShowRoom as $el)
                        <tr onclick="openModal('modaleShowroomAdmin', '{{ $el->id }}', '{{ $el->name }}', '{{ $el->description }}', '{{ $el->nameSubCategory }}');">
                            <td><img src="{{asset('storage'.$el->pathPhoto)}}" style="width: 100px;"></td>
                            <td><b>{{ $el->name }}</b></td>
                            <td>{{ $el->description }}</td>
                            <td>{{ $el->nameSubCategory }}</td>
                        </tr>
                    @endforeach

                </table>

                
            </div>
        </div>

    </div>

    <!--MODALE CREAZIONE-->
    <div id="modaleShowroomAdmin" class="w3-modal">
        <div id="modaleAdmin" class="w3-modal-content">

            <div id="modalModUser" class="w3-container w3-blue-grey">
                <span onclick="closeModal('modaleShowroomAdmin');" class="w3-button w3-display-topright">&times;</span>
                <h1>Stai modificando <!--INSERIRE DATI DB--></h1>
                <p>Utilizza questa form per modificare i dati di un Prodotto.</p>
                <form class="w3-container" >
                    @csrf
                    <fieldset id="provola" style="border: none">
                        <div class="w3-row">
                            <img id="imgModale">
                            <div class="w3-col m6 w3-light-grey w3-center">
                                <p>Dati Articolo</p>
                                <input id="idMod" class="w3-input w3-hide" name="id" type="text">
                                <input id="nomeMod" class="w3-input" name="nome" type="text" placeholder="Nome">
                                <input id="descrMod" class="w3-input" name="descrizione" type="text" placeholder="Descrizione">
                                <select id="catMod" class="w3-select" name="categoria" onchange="change(this.value)" required>
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
                                <p>Immagini</p>
                                <div id="labelFoto" class="w3-left" style="border-bottom: 1px solid #ccc;"><b>Foto principale: </b><input type="file" name="myFile"></div>
                                <div id="labelFoto" class="w3-left"><b>Altre foto: </b><input type="file" name="fil_n" multiple></div>
                            </div>

                        </div>
                        <hr>
                    </fieldset>
                    <div class="w3-row">

                        <div class="w3-col m4  w3-center">
                            <button class="w3-button w3-ripple w3-green" style="width:80%" onclick="enableField()">Modifica</button>
                        </div>
                        <div class="w3-col m4  w3-center">
                            <button id="save" class="w3-button w3-ripple w3-red" style="width:80%; visibility: hidden">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--MODALE CHIUSURA-->
@stop