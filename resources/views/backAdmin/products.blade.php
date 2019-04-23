@extends('layout.defaultLayoutAdmin')
@section('title', 'Visca s.n.c.')

@section('head')
  
@endsection

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
                            <option onclick="modaleSottocategoria('nuovoBrand', '')">Nuovo Brand</option>
                    </select>
                    <input class="w3-input" name="product_code" type="text" placeholder="Codice prodotto">
                    <input class="w3-input" name="name" type="text" placeholder="Nome prodotto" required>
                    <textarea class="w3-input" name="description" type="text" placeholder="Descrizione"></textarea>

                </div>


                <div class="w3-col m6 w3-light-grey w3-center">
                    <p>Prezzi</p>

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
                    <input class="w3-input" name="price" type="text" placeholder="Prezzo unitario" required>
                    <input class="w3-input" name="weight" min="1" type="number" placeholder="Peso singolo prodotto (kg)">
                    <input class="w3-input" name="quantity" min="1" type="number" placeholder="Quantità disponibile (pz)" required>
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
        <input class="w3-input w3-border w3-padding" type="text" placeholder="Cerca un utente per Nome o Cognome" id="myInput" onkeyup="finderElement()">

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
                <tr onclick="openModalAdmin('modaleEditProduct', {{$el}}, null, null, null, null);">
                    <td><img src="{{ asset('storage') }}{{ $el->pathPhoto }}" style="width: 100px"></td>
                    <td><b>{{ $el->name }}</b></td>
                    <td>{{ $el->brand }}</td>
                    @if(strlen($el->description) > 190)
                    <td>{{ substr($el->description, 0, 190).'...' }}</td>
                    @else                    
                    <td>{{ $el->description }}</td>
                    @endif
                    <td>{{ $el->subcategories }}</td>
                    <td>{{ $el->availability }} unit/g</td>
                    <td>€ {{ $el->price }}</td>
                    
                </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>

<!--MODALE CREAZIONE-->
<div id="modaleEditProduct" class="w3-modal">
    <div id="modaleAdmin" class="w3-modal-content">

        <div id="modalModUser" class="w3-container w3-blue-grey">
            <span onclick="closeModal('modaleEditProduct');" class="w3-button w3-display-topright">&times;</span>
            <h1>Stai modificando <!--INSERIRE DATI DB--></h1>
            <p>Utilizza questa form per modificare i dati di un Prodotto.</p>
            <form id="formModEl" method="post" class="w3-container" action="{{ url('element_edit_submit') }}?ref={{$_SERVER['REQUEST_URI']}}">
                @csrf
                <fieldset id="fieldsetModale" style="border: none">
                    <div class="w3-row-padding w3-container">
                        <div class="w3-col m6">
                            <input style="display: none" id="element_idModal" name="element_idModal">

                            <span class="w3-block w3-blue-grey" style="margin: none">Marca:</span>
                            <select class="w3-select" id="brandModal" name="brandModal" type="text" placeholder="Marca">
                                <option disabled selected>Selezione il Brand</option>
                                {{!$Brand = \App\Brand::all()}}
                                @foreach ($Brand as $Brand)
                                    <option value="{{ $Brand->name}}">{{ $Brand->name}}</option>
                                @endforeach
                                    <option onclick="modaleSottocategoria('nuovoBrand', '')">Nuovo Brand</option>
                            </select>

                            <span class="w3-block w3-blue-grey" style="margin: none">Codice prodotto:</span>
                            <input class="w3-input" id="product_codeModal" name="product_codeModal" type="text" placeholder="Codice">

                            <span class="w3-block w3-blue-grey" style="margin: none">Nome:</span>
                            <input class="w3-input" id="nameModal" name="nameModal" type="text" placeholder="Nome prodotto" required>

                            <span class="w3-block w3-blue-grey" style="margin: none">Descrizione:</span>
                            <textarea class="w3-input" id="descriptionModal" name="descriptionModal" type="text" placeholder="Descrizione"></textarea>

                        </div>


                        <div class="w3-col m6">
                            <span class="w3-block w3-blue-grey" style="margin: none">Categoria:</span>
                            <select class="w3-select" id="subcategoryModal" name="subcategoryModal" required >
                                <option disabled selected>Selezione una Sottocategoria</option>
                                {{!$Category = \App\Category::all()}}
                                {{!$Subcategory = \App\Subcategory::all()}}
                                @foreach ($Category as $Category)
                                    <option disabled><b>{{ strtoupper($Category->name) }}</b></option>
                                    @foreach ($Subcategory as $Subcategory)
                                    @if($Category->name===$Subcategory->category)
                                    <option value="{{ $Subcategory->name }}">{{ $Subcategory->name }}</option>
                                    @endif
                                    @endforeach
                                @endforeach
                            </select>

                            <span class="w3-block w3-blue-grey" style="margin: none">Prezzo unitario:</span>
                            <input class="w3-input" id="priceModal" name="priceModal" type="text" placeholder="Prezzo unitario" required>

                            <span class="w3-block w3-blue-grey" style="margin: none">Quantità disponibile:</span>
                            <input class="w3-input" id="quantityModal" name="quantityModal" type="number" placeholder="Quantità disponibile" required>
                            
                            <span class="w3-block w3-blue-grey" style="margin: none">Peso singola unità (kg):</span>
                            <input class="w3-input" id="weightModal" name="weightModal" type="number" placeholder="Peso prodotto (kg)" required>
                        </div>
                    </div>
                    
                    <div id="" class="w3-margin-top labelFoto"><b>Foto principale: </b>
                        <input type="file" id="file" name="file_nameModal"></div>
                    <div id="" class="w3-margin-bottom labelFoto"><b>Altre foto: </b>
                        <input type="file" class="form-control" name="photosModal[]" multiple></div>
                        
                </fieldset>
                <div class="w3-row">
                    <div class="w3-col l4 s4 w3-center">
                        <button type="button" class="w3-button w3-ripple w3-yellow" style="width:80%" onclick="enableField()">Modifica</button>
                    </div>
                    <div class="w3-col l4 s4 w3-center">
                        <button id="save" type="button" class="w3-button w3-ripple w3-green" style="width:80%; visibility: hidden"
                        onclick="conferma('Vuoi modificare '+ document.getElementById('nameModal').value +'?', 'formModEl')">Salva</button>
                    </div>
            </form>
                    <form id="formDeleteProduct" method="post" action="{{ url('/element_deletion_submit') }}?ref={{$_SERVER['REQUEST_URI']}}">
                    @csrf
                    <div class="w3-col l4 s4 w3-center">
                        <input style="display: none" id="element_idModal1" name="element_idModal">
                        <button class="w3-button w3-ripple w3-red" style="width:80%;"
                            onclick="conferma('Vuoi eliminare '+ document.getElementById('nameModal').value +' dal catalogo?', 'formDeleteProduct')"
                            type="button">Elimina Prodotto</button>
                    </div>
                    </form>
                </div>
            
        </div>
    </div>
</div>
<!--MODALE CHIUSURA-->


<!--Modale Nuova categoria-->
<div id="nuovoBrand" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" style="max-width: 700px">
        <header class="w3-container w3-teal">
            <span onclick="closeModal('nuovoBrand');" class="w3-button w3-display-topright">&times;</span>
            <h2>Nuovo Brand</h2>
        </header>
        <form type="submit" method="post" action="{{URL::to('/insert_new_brand')}}?ref={{$_SERVER['REQUEST_URI']}}">
            @csrf
            <div class="w3-padding">
                <div class="w3-row">
                    <label>Brand: </label>
                    <input class="inputModale" placeholder="Brand" type="text" name="name" required>
                </div>
                <div class="w3-row">
                    <label>Link: </label>
                    <input class="inputModale" placeholder="link del sito del brand" type="text" name="link">
                </div>
                <div class="w3-row">
                    <label>Descrizione: </label>
                    <input class="inputModale" placeholder="descrizione" type="text" name="description">
                </div>
                <div class="w3-row">
                    <button class="w3-right" type="submit">Salva</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
