@extends('layout.defaultLayoutAdmin')
@section('title', 'Visca s.n.c.')

@section('head')
  
@endsection

@section('content')

{{!$Offerts = \App\Offert::allWithKey()}}

<div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <!--TITOLO DELLA PAGINE-->
    <div class="w3-container w3-blue-grey" style="padding-bottom: 16px;">
        <h1>Lista dei Prodotti in offerta.</h1>
        <hr>
        <input class="w3-input w3-border w3-padding" type="text" placeholder="Cerca un utente per Nome o Cognome" id="myInput" onkeyup="finderElement()">

        <div class="w3-white" id="divLocationMain" style="margin-top: 2%;">
            <table class="w3-table-all w3-margin-top" id="myTable">
                <tr>
                    <th style="width:15%;">Immagine</th>
                    <th style="width:20%;">Nome</th>
                    <th style="width:10%;">Brand</th>
                    <th style="width:15%;">Categoria</th>
                    <th style="width:12%;">Disponibilità</th>
                    <th style="width:8%;">Prezzo</th>
                    <th style="width:10%;">In Offerta</th>
                    <th style="width:10%;"></th>
                </tr>

                <!--LISTA DEI PRODOTTI blade-->
                @foreach($Offerts as $of)
                {{!$el =\App\Element::find($of->id_element)}}
                <tr>
                    <td><img src="{{ asset('storage') }}{{ $el->pathPhoto }}" style="width: 100px"></td>
                    <td><b>{{ $el->name }}</b></td>
                    <td>{{ $el->brand }}</td>
                    <td>{{ $el->subcategories }}</td>
                    <td>{{ $el->availability }} unit/pz</td>
                    <td>€ {{ $el->price }}</td>
                    @if(isset($Offerts[$el->id]) && $Offerts[$el->id]->date_end >= date('Y-m-d'))
                    <td class="">-{{$Offerts[$el->id]->discount_perc}}%<br><b>€ {{ $el->price - (($el->price)/100*$Offerts[$el->id]->discount_perc) }}</b></td>
                    @else
                    <td></td>
                    @endif
                    <td>
                        @if($of->date_end > date('Y-m-d h:i:sa'))
                        <button class="w3-btn w3-red w3-block" onclick="location.href='{{url('offert_delete-').$of->id}}'">Elimina offerta<br>scade il: {{$Offerts[$el->id]->date_end}}</button>
                        @else
                        <button class="w3-btn w3-dark-grey w3-block" onclick="location.href='{{url('offert_delete-').$of->id}}'">Elimina offerta<br>scaduta il: {{$Offerts[$el->id]->date_end}}</button>
                        @endif
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>

@endsection