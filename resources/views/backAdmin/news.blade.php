@extends('layout.defaultLayoutAdmin')
@section('title', 'Visca s.n.c.')

@section('head')
  
@endsection

@section('content')

@php
    $users=\App\NewsReader::all();
    $list = $users;
@endphp

<div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <!--TITOLO DELLA PAGINE-->
    <div class="w3-container w3-blue-grey" style="padding-bottom: 16px;">
        <h1>Lista delle email di registrazione alla Newsletter.</h1>
        <hr>
        <p>Copia la lista delle email.</p>
        <div class="w3-white" id="divLocationMain" style="margin-top: 2%;">
            <p>
            @foreach($list as $li)
                {{$li->email.', '}}
            @endforeach
            </p>
        </div>
    </div>
</div>

<div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <div class="w3-container w3-blue-grey" style="padding-bottom: 16px;">
        <h1>Lista delle email di registrazione alla Newsletter.</h1>
        <hr>
        <input class="w3-input w3-border w3-padding" type="text" placeholder="Cerca un utente per Nome o Cognome" id="myInput" onkeyup="finderElement()">
        <div class="w3-white" id="divLocationMain" style="margin-top: 2%;">
            <table class="w3-table-all w3-margin-top" id="myTable">
                <tr>
                    <th style="width:0%;"></th>
                    <th style="width:45%;">Email</th>
                    <th style="width:45%;">Data registrazione</th>
                    <th style="width:10%;"></th>
                </tr>

                <!--LISTA DEI PRODOTTI blade-->

                @foreach($users as $user)
                <tr >
                    <td></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <button class="w3-btn w3-dark-grey w3-block" onclick="location.href='{{url('delete_newsletter-').$user->id}}'">Elimina</button>
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>

@endsection