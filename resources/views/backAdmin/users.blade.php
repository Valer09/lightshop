@extends('layout.defaultLayoutAdmin')
@section('content')

<div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <!--TITOLO DELLA PAGINE-->
    <div class="w3-container w3-blue-grey">
        <h1>Aggiungi un nuovo Utente</h1>
        <p>Utilizza questa form per aggingere un nuovo utente.</p>
        <form class="w3-container" method="post" action="{{URL::to('/element_insertion_submit')}}?ref={{$_SERVER['REQUEST_URI']}}" enctype="multipart/form-data" >
            @csrf
            <div class="w3-row w3-container">
                <div class="w3-col m6 w3-light-grey w3-center">
                    <p>Dati nuovo utente</p>
                    <select class="w3-select" name="brand" type="text" placeholder="Marca">
                        <option disabled selected>Selezione il Brand</option>
                        {{$Brand = \App\Brand::all()}}
                        @foreach ($Brand as $Brand)
                            <option>{{ $Brand->name}}</option>
                        @endforeach
                            <option onclick="modaleSottocategoria('nuovoBrand', '')">Nuovo Brand</option>
                    </select>
                    <input class="w3-input" name="name" type="text" placeholder="Nome prodotto" required>
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
                    <textarea class="w3-input" name="description" type="text" placeholder="Descrizione"></textarea>
                    <input class="w3-input" name="price" type="text" placeholder="Prezzo unitario" required>
                    <input class="w3-input" name="quantity" type="number" placeholder="Quantità disponibile" required>
                </div>
            </div>
            
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
        <h1>Lista degli Utenti.</h1>
        <p>Clicca su un utente della lista per visualizzare più informazioni o modificarle.</p>
        <hr>
        <input class="w3-input w3-border w3-padding" type="text" placeholder="Cerca un utente per Nome o Cognome" id="myInput" onkeyup="finderElement()">

        <div class="w3-white" id="divLocationMain" style="margin-top: 2%;">
            <table class="w3-table-all w3-margin-top" id="myTable">
                <tr>
                    <th style="width:0%;"></th>
                    <th style="width:20%;">Nome e cognome</th>
                    <th style="width:20%;">Email</th>
                    <th style="width:20%;">C.F. e P.IVA</th>
                    <th style="width:20%;">Data verifica</th>
                    <th style="width:20%;">Data registrazione</th>
                </tr>

                <!--LISTA DEI PRODOTTI blade-->
                @php
                    $users=\App\User::all();
                @endphp

                @foreach($users as $user)
                <tr onclick="openModalAdmin('modaleEditProduct', null, null, null);">
                    <td></td>
                    <td><b>{{ $user->name }} {{ $user->surname }}</b></td>
                    <td>{{ $user->email }}
                        @if($user->PEC)
                        <br>{{ $user->PEC }}
                        @endif
                    </td>
                    <td>{{ $user->CF }}
                        @if($user->IVA)
                        <br>{{ $user->IVA }}
                        @endif
                    </td>
                    <td>{{ $user->email_verified_at }}</td>
                    <td>{{ $user->created_at }}</td>
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
            <form method="post" class="w3-container" action="##">
                @csrf
                <fieldset id="provola" style="border: none">
                    <div class="w3-row w3-container">
                        <div class="w3-col m6 w3-light-grey w3-center">
                            <p>Dati prodotto</p>
                            <select class="w3-select" id="brandModal" name="brandModal" type="text" placeholder="Marca">
                                <option disabled selected>Selezione il Brand</option>
                                {{$Brand = \App\Brand::all()}}
                                @foreach ($Brand as $Brand)
                                    <option>{{ $Brand->name}}</option>
                                @endforeach
                                    <option onclick="modaleSottocategoria('nuovoBrand', '')">Nuovo Brand</option>
                            </select>
                            <input class="w3-input" id="nameModal" name="nameModal" type="text" placeholder="Nome prodotto" required>
                            <input class="w3-input" id="descriptionModal" name="descriptionModal" type="text" placeholder="Descrizione">

                            <select class="w3-select" id="subcategoryModal" name="subcategoryModal" required >
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

                            <input class="w3-input" id="priceModal" name="priceModal" type="text" placeholder="Prezzo unitario" required>

                            <input class="w3-input" id="quantityModal" name="quantityModal" type="number" placeholder="Quantità disponibile" required>
                            
                        </div>
                    </div>
                    
                    <div id="" class="w3-margin-top labelFoto"><b>Foto principale: </b>
                        <input type="file" id="file" name="file_nameModal"></div>
                    <div id="" class="w3-margin-bottom labelFoto"><b>Altre foto: </b>
                        <input type="file" class="form-control" name="photosModal[]" multiple></div>
                        
                </fieldset>
                <div class="w3-row">
                    <div class="w3-col l4 s4 w3-center">
                        <button class="w3-button w3-ripple w3-green" style="width:80%" onclick="enableField()">Modifica</button>
                    </div>
                    <div class="w3-col l4 s4 w3-center">
                        <button id="save" class="w3-button w3-ripple w3-red" style="width:80%; visibility: hidden">Salva</button>
                    </div>
            </form>
                    <form id="formDeleteProduct" method="post" action="{{ url('/element_deletion_submit') }}?ref={{$_SERVER['REQUEST_URI']}}">
                    @csrf
                    <div class="w3-col l4 s4 w3-center">
                        <input style="display: none" id="element_idModal" name="element_idModal">
                        <button class="w3-button w3-ripple w3-red w3-block w3-hover-red" style="width:80%;"
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
