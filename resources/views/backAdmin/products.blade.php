@extends('layout.defaultLayoutAdmin')


@section('content')

    <div class="w3-main" style="margin-left:300px;margin-top:43px;">
        <!--TITOLO DELLA PAGINE-->
        <div class="w3-container w3-blue-grey">
            <h1>Aggiungi un nuovo Prodotto</h1>
            <p>Utilizza questa form per aggingere un nuovo prodotto.</p>
            <form class="w3-container" method="post" action="{{URL::to('/element_insertion_submit')}}?ref={{$_SERVER['REQUEST_URI']}}" enctype="multipart/form-data" >
                @csrf
                <div class="w3-row w3-container">
                    <div class="w3-col m6 w3-light-grey w3-center">
                        <p>Dati nuovo prodotto</p>
                        <select class="w3-select" name="brand" type="text" placeholder="Marca">
                            <option disabled selected>Selezione il Brand</option>
                            {{$Brand = \App\Brand::all()}}
                            @foreach ($Brand as $Brand)
                                <option>{{ $Brand->name}}</option>
                            @endforeach

                        </select>
                        <input class="w3-input" name="name" type="text" placeholder="Nome prodotto" required>
                        <input class="w3-input" name="description" type="text" placeholder="Descrizione">

                        <select class="w3-select" name="subcategory" required >
                            <option disabled selected>Selezione una Sottocategoria</option>
                            {{$Category = \App\Category::all()}}
                            @foreach ($Category as $Category)
                                <option disabled><b>{{ strtoupper($Category->name) }}</b></option>
                                {{$Subcategory = \App\Subcategory::all()}}
                                @foreach ($Subcategory as $Subcategory)
                                @if($Category->name===$Subcategory->category)
                                <option value="{{ $Subcategory->name }}">{{ $Subcategory->name }}</option>
                                @endif
                                @endforeach
                            @endforeach
                        </select>

                    </div>


                    <div class="w3-col m6 w3-light-grey w3-center">
                        <p>Prezzi</p>

                        <input class="w3-input" name="price" type="text" placeholder="Prezzo unitario" required>

                        <input class="w3-input" name="quantity" type="number" placeholder="Quantità disponibile" required>
                        
                    </div>
                </div>
                
                <div id="" class="w3-margin-top labelFoto"><b>Foto principale: </b>
                    <input type="file" id="file" name="file_name"></div>
                <div id="" class="w3-margin-bottom labelFoto"><b>Altre foto: </b>
                    <input type="file" class="form-control" name="photos[]" multiple></div>

                <div class="w3-col m6 w3-center">
                    <button class="w3-button w3-ripple w3-green" type="submit" value="inserimentoProdotto" name="actionAd" style="width:50%">Salva</button>
                </div>
                <div class="w3-col m6 w3-center">
                    <button class="w3-button w3-ripple w3-red" style="width:50%">Annulla</button>
                </div>
            </form>
        </div>

        <hr>
        <!--TITOLO DELLA PAGINE-->
        <div class="w3-container w3-blue-grey" style="padding-bottom: 16px;">
            <h1>Lista dei Prodotti.</h1>
            <p>Questa è una lista dei prodotti forniti.</p>
            <p>Clicca su un elemento della lista per visualizzare più informazioni o modificarle.</p>
            <hr>
            <input class="w3-input w3-border w3-padding" type="text" placeholder="Cerca un utente per Nome o Cognome" id="myInput" onkeyup="myFunction()">

            <div class="w3-white" id="divLocationMain" style="margin-top: 2%;">
                <table class="w3-table-all w3-margin-top" id="myTable">
                    <tr>
                        <th style="width:9%;">Immagine</th>
                        <th style="width:15%;">Nome</th>
                        <th style="width:9%;">Brand</th>
                        <th style="width:40%;">Descrizione</th>
                        <th style="width:10%;">Categoria</th>
                        <th style="width:9%;">Disponibilità</th>
                        <th style="width:8%;">Prezzo</th>
                    </tr>

                    <!--LISTA DEI PRODOTTI blade-->
                    {{!$Elements=\App\Element::all()}}
                    @foreach($Elements as $el)
                    <tr onclick="document.getElementById('id01').style.display='block'">
                        <td><img src="{{ asset('storage') }}{{ $el->pathPhoto }}" style="width: 100px"></td>
                        <td><b>{{ $el->name }}</b></td>
                        <td>{{ $el->brand }}</td>
                        <td>{{ $el->description }}</td>
                        <td>{{ $el->subcategories }}</td>
                        <td>{{ $el->availability }} unit/g</td>
                        <td>€ {{ $el->price }}</td>
                        
                    </tr>
                    @endforeach

                </table>
                <!--MODALE CREAZIONE-->
                <div id="id01" class="w3-modal">
                    <div id="modaleAdmin" class="w3-modal-content">

                        <div id="modalModUser" class="w3-container w3-blue-grey">
                            <span onclick="closeModal('id01');" class="w3-button w3-display-topright">&times;</span>
                            <h1>Stai modificando <!--INSERIRE DATI DB--></h1>
                            <p>Utilizza questa form per modificare i dati di un Prodotto.</p>
                            <form class="w3-container" >
                                @csrf
                                <fieldset id="provola" style="border: none">
                                    <div class="w3-row">
                                        <div class="w3-col m6 w3-light-grey w3-center">
                                            <p>Dati nuovo prodotto</p>
                                            <input class="w3-input" name="brand" type="text" placeholder="Marca">
                                            <input class="w3-input" name="nomeProdotto" type="text" placeholder="Nome prodotto" required>
                                            <input class="w3-input" name="descrizione" type="text" placeholder="Descrizione">
                                            <input class="w3-input" name="nota" type="text" placeholder="Nota">
                                            <select class="w3-select" name="categoria" onchange="change(this.value)" required>
                                                <option value="" disabled selected>Selezione una categoria</option>
                                                <option value="MATERIALE EDILE">Materiale Edile</option>
                                                <option value="CERAMICHE">Ceramiche</option>
                                                <option value="ARREDO BAGNO">Arredo bagno</option>
                                                <option value="CAMINETTI">Caminetti</option>
                                                <option value="TERMOIDRAULICA">Termoidraulica</option>
                                                <option value="FERRAMENTA">Ferramenta</option>
                                            </select>
                                            <select class="w3-select" name="sottocategoria" id="selectSottocategoria" required>
                                            </select>
                                        </div>
                                        <div class="w3-col m6 w3-light-grey w3-center">
                                            <p>Prezzi</p>
                                            <input class="w3-input" name="peso" type="text" placeholder="Peso unitario" required>
                                            <input class="w3-input" name="prezzoUnita" type="text" placeholder="Prezzo unitario" required>
                                            <input class="w3-input" name="prezzoSped" type="text" placeholder="Prezzo spedizione">
                                            <input class="w3-input" name="quantita" type="number" placeholder="Quantità disponibile" required>
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
            </div>
        </div>
    </div>

@stop
