@extends('layout.defaultLayoutAdmin')
@section('title', 'Visca s.n.c.')

@section('head')
  
@endsection

@section('content')

<div class="w3-main" style="margin-left:300px;margin-top:43px;">
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
                <tr onclick="openModalAdmin('modaleEditUser', null, null, null, null, {{$user}});">
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
<div id="modaleEditUser" class="w3-modal">
    <div id="modaleAdmin" class="w3-modal-content">

        <div id="modalModUser" class="w3-container w3-blue-grey">
            <span onclick="closeModal('modaleEditUser');" class="w3-button w3-display-topright">&times;</span>
            <h1>Stai modificando <!--INSERIRE DATI DB--></h1>
            <p>Utilizza questa form per modificare i dati di un Prodotto.</p>
            <form id="modificaUser" method="post" class="w3-container" action="{{ url('user_admin_edit') }}?ref={{$_SERVER['REQUEST_URI']}}">
                @csrf
                <fieldset id="fieldsetModale" style="border: none">
                    <div class="w3-row-padding w3-container">
                        <div class="w3-col m6">
                            <input style="display: none" id="element_idModal" name="element_idModal">

                            <span class="w3-block w3-blue-grey" style="margin: none">Nome:</span>
                            <input id="nomeMod" class="w3-input" name="nomeMod" type="text" placeholder="Nome" required>

                            <span class="w3-block w3-blue-grey" style="margin: none">Cognome:</span>
                            <input id="cognomeMod" class="w3-input" name="cognomeMod" type="text" placeholder="Cognome" required>
                            
                            <span class="w3-block w3-blue-grey" style="margin: none">E-mail:</span>
                            <input id="emailMod" class="w3-input" name="emailMod" type="text" placeholder="Email" required>

                        </div>
                        <div class="w3-col m6">
                            <span class="w3-block w3-blue-grey" style="margin: none">Categoria:</span>
                            <select id="catMod" class="w3-select" name="catMod" onchange="change(this.value)" required>
                                {{!$cats=\App\Group::all()}}
                                @foreach($cats as $cat)
                                <option value="{{ $cat->name }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>

                            <span class="w3-block w3-blue-grey" style="margin: none">Codice fiscale:</span>
                            <input id="cfMod" class="w3-input" name="cfMod" type="text" placeholder="Codice Fiscale" required>
                            
                            <span class="w3-block w3-blue-grey" style="margin: none">PEC:</span>
                            <input id="pecMod" class="w3-input" name="pecMod" type="text" placeholder="PEC">
                    
                            <span class="w3-block w3-blue-grey" style="margin: none">Partita iva:</span>
                            <input id="ivaMod" class="w3-input" name="ivaMod" type="text" placeholder="Partita iva">

                        </div>
                    </div>
                </fieldset>
                <div class="w3-row">
                    <div class="w3-col m4 w3-center">
                        <button class="w3-button w3-ripple w3-yellow" type="button" style="width:80%" onclick="enableField()">Modifica</button>
                    </div>
                    <div class="w3-col m4 w3-center">
                        <button id="save" class="w3-button w3-ripple w3-green" type="button" style="width:80%; visibility: hidden"
                        onclick="conferma('Vuoi modificare '+ document.getElementById('nomeMod').value +' '+ document.getElementById('cognomeMod').value +'?', 'modificaUser')">Salva</button>
                    </div>
            </form>
                    <form id="formDeleteUser" method="post" action="{{ url('user_deletion_submit') }}?ref={{$_SERVER['REQUEST_URI']}}">
                    @csrf
                    <div class="w3-col l4 s4 w3-center">
                        <input style="display: none" id="element_idModal1" name="element_idModal">
                        <button class="w3-button w3-ripple w3-red w3-block w3-hover-red" style="width:80%;"
                            onclick="conferma('Vuoi eliminare '+ document.getElementById('nomeMod').value +' '+ document.getElementById('cognomeMod').value +'?', 'formDeleteUser')"
                            type="button">Elimina Prodotto</button>
                    </div>
                    </form>
                </div>
            
        </div>
    </div>
</div>
<!--MODALE CHIUSURA-->

@endsection
