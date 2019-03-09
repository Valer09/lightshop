@extends('layout.defaultLayoutAdmin')

@section('content')
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

        <!--TITOLO DELLA PAGINE-->
        <div class="w3-container w3-blue-grey" style="padding-bottom: 16px;">
            <h1>Lista ordini completati.</h1>
            <p>Questa è una lista degli ordini che sono stati evasi.</p>
            <p>Clicca su un ordine della lista per visualizzare più informazioni.</p>
            <hr>
            <input class="w3-input w3-border w3-padding" type="text" placeholder="Cerca un utente per Nome o Cognome" id="myInput" onkeyup="myFunction()">

            <div class="w3-white" id="divLocationMain" style="margin-top: 2%;">
                <table class="w3-table-all w3-margin-top" id="myTable" style="text-decoration-color: black">
                    <tr>
                        <th style="width:10%;">ID</th>
                        <th style="width:30%;">User ID</th>
                        <th style="width:30%;">Name</th>
                        <th style="width:6%;">Prezzo Poste</th>
                        <th style="width:6%;">TOTAL</th>


                    </tr>

                    <!--ESEMPIO DA CANCELLARE-->
                    {{!$Orders=\App\Order::all()}}
                    @foreach($Orders as $Orders)
                        @if( ($Orders->order_shipped) > 1 )
                            <tr>

                                <td name="id" ><a href="">{{$Orders->id}}</a></td>
                                <td name="user_id">{{$Orders->user_id}}</td>
                                <td name="user">
                                    {{
                                        DB::table('users')->where('id', $Orders->user_id)->value('surname')
                                    }}
                                </td>
                                <td name="shipping_cost">{{$Orders->shipping_cost}}</td>
                                <td name="total">{{$Orders->total}}</td>
                            </tr>
                    @endif
                @endforeach

                    <!--
                    LISTA DEI PRODOTTI

                    <list prodotti as prodotto>
                    <tr onclick="document.getElementById('id01').style.display='block'">
                        <td class="nomeProdotto">${prodotto.nome?capitalize}</td>
                        <td>${prodotto.categoria}</td>
                        <td>${prodotto.scaglioni} unit/g</td>
                        <td>€ ${prodotto.prezzoUni}</td>
                        <td>€ ${prodotto.prezzoPoste}</td>
                        <td>€ ${prodotto.prezzoServAgg}</td>
                        <td><div location="button-${prodotto.id}" /></td>
                    </tr>
                </list>

                -->
                </table>
                <!--MODALE CREAZIONE-->
                <div id="id01" class="w3-modal">
                    <div class="w3-modal-content">

                        <div id="modalModUser" class="w3-container w3-blue-grey">
                            <span onclick="closeModal()" class="w3-button w3-display-topright">&times;</span>
                            <h1>Stai modificando <!--INSERIRE DATI DB--></h1>
                            <p>Utilizza questa form per modificare i dati di un Prodotto.</p>
                            <form class="w3-container">
                                <fieldset id="provola" style="border: none">
                                    <div class="w3-row">
                                        <div class="w3-col m6 w3-light-grey w3-center">
                                            <p>Dati nuovo prodotto</p>
                                            <input class="w3-input" type="text" placeholder="Nome prodotto" required>
                                            <input class="w3-input" type="text" placeholder="Descrizione">
                                            <input class="w3-input" type="text" placeholder="Nota">
                                            <select class="w3-select" name="categoria" required>
                                                <option value="" disabled selected>Selezione una categoria</option>
                                                <option value="PRIORITARIA">Prioritaria</option>
                                                <option value="RACCOMANDATA">Raccomandata</option>
                                                <option value="RACCOMANDATA_A/R">Raccomandata A/R</option>
                                                <option value="ASSICURATA">Assicurata</option>
                                                <option value="TELEGRAMMA">Telegramma</option>
                                                <option value="SERVIZI">Servizi</option>
                                            </select>
                                        </div>
                                        <div class="w3-col m6 w3-light-grey w3-center">
                                            <p>Prezzi</p>
                                            <input class="w3-input" type="text" placeholder="Scaglioni pesi(g)" required>
                                            <input class="w3-input" type="text" placeholder="Prezzo unitario" required>
                                            <input class="w3-input" type="text" placeholder="Prezzo Poste Italiane" >
                                            <input class="w3-input" type="text" placeholder="P.U. servizio aggiuntivo" >
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
