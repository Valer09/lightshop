@extends('layout.defaultLayoutAdmin')
@section('title', 'Visca s.n.c.')

@section('head')
  
@endsection

@section('content')

<div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <!--TITOLO DELLA PAGINE-->
    <div class="w3-container w3-blue-grey">
        <h1>Aggiungi un nuova spedizione </h1>
        <p>Utilizza questa form per aggingere un nuova spedizione.</p>
        <form class="w3-container" method="post" action="{{URL::to('/add_new_sped')}}?ref={{$_SERVER['REQUEST_URI']}}" enctype="multipart/form-data" >
            @csrf
            <div class="w3-row w3-container">
                <div class="w3-col m6 w3-light-grey w3-center">
                    <p style="margin-top: 12px;margin-bottom:12px">Dati nuova spedizione. <button onclick="modaleSottocategoria('nuovoCorriere', '')">Nuovo Corriere</button></p>
                    <select class="w3-select" name="courier" type="text" placeholder="Marca">
                        <option disabled selected>Seleziona il Corriere</option>
                        @php
                        $couriers = \App\NameCourier::all()
                        @endphp
                        @foreach ($couriers as $courier)
                            <option>{{ $courier->name}}</option>
                        @endforeach
                            <option onclick="modaleSottocategoria('nuovoCorriere', '')">Nuovo Corriere</option>
                    </select>

                    <input class="w3-input" id="name_service" name="name_service" type="string" placeholder="Nome servizio" required>
                    <input class="w3-input" name="price" type="text" placeholder="Prezzo di spedizione" required>
                    <select title="Stato di destinazione" class="w3-select" name="destination_country">
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Åland Islands</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory
                        </option>
                        <option value="VG">British Virgin Islands</option>
                        <option value="BN">Brunei</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos [Keeling] Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo - Brazzaville</option>
                        <option value="CD">Congo - Kinshasa</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Côte d’Ivoire</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories
                        </option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GG">Guernsey</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard Island and McDonald Islands
                        </option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong SAR China</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option selected="selected" value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JE">Jersey</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Laos</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macau SAR China</option>
                        <option value="MK">Macedonia</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia</option>
                        <option value="MD">Moldova</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="ME">Montenegro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar [Burma]</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="KP">North Korea</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PS">Palestinian Territories</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn Islands</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Réunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russia</option>
                        <option value="RW">Rwanda</option>
                        <option value="BL">Saint Barthélemy</option>
                        <option value="SH">Saint Helena</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint Lucia</option>
                        <option value="MF">Saint Martin</option>
                        <option value="PM">Saint Pierre and Miquelon
                        </option>
                        <option value="VC">Saint Vincent and the Grenadines
                        </option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">São Tomé and Príncipe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South
                            Sandwich Islands</option>
                        <option value="KR">South Korea</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syria</option>
                        <option value="TW">Taiwan</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania</option>
                        <option value="TH">Thailand</option>
                        <option value="TL">Timor-Leste</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States
                        </option>
                        <option value="UY">Uruguay</option>
                        <option value="UM">U.S. Minor Outlying Islands
                        </option>
                        <option value="VI">U.S. Virgin Islands</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VA">Vatican City</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="WF">Wallis and Futuna</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                </div>


                <div class="w3-col m6 w3-light-grey w3-center">
                    <p>Altre info</p>
                    <input class="w3-input" name="min_weidth" type="text" placeholder="Peso minimo per collo (kg)" required>
                    <input class="w3-input" name="max_weidth" type="text" placeholder="Peso massimo per collo (kg)" required>
                    <input class="w3-input" name="time" type="number" placeholder="Giorni stimati di consegna" required>
                </div>
            </div>
        
            <div class="w3-margin-top w3-margin-bottom w3-col m6 w3-center">
                <button class="w3-button w3-ripple w3-green" type="submit" value="inserimentoProdotto" name="actionAd" style="width:50%">Salva</button>
            </div>
            <div class="w3-margin-top w3-margin-bottom w3-col m6 w3-center">
                <button class="w3-button w3-ripple w3-red" style="width:50%">Annulla</button>
            </div>
        </form>
    </div>

    <hr>
    <!--TITOLO DELLA PAGINE-->
    <div class="w3-container w3-blue-grey" style="padding-bottom: 16px;">
        <h1>Lista dei Corrieri.</h1>
        <p>Clicca su un elemento della lista per visualizzare più informazioni o modificarle.</p>
        <hr>
        <input class="w3-input w3-border w3-padding" type="text" placeholder="Cerca un utente per Nome o Cognome" id="myInput" onkeyup="finderElement()">

        <div class="w3-white" id="divLocationMain" style="margin-top: 2%;">
            <table class="w3-table-all w3-margin-top" id="myTable">
                <tr>
                    <th style="width:0%;"></th>
                    <th style="width:30%;">Corriere</th>
                    <th style="width:25%;">Destinazione</th>
                    <th style="width:15%;">Peso collo</th>
                    <th style="width:15%;">Prezzo</th>
                    <th style="width:15%;">Tempi di consegna</th>
                </tr>

                <!--LISTA DEI PRODOTTI blade-->
                @php
                $speds = \App\Courier::all()
                @endphp
                @foreach($speds as $sped)
                <tr onclick="openModalAdmin('modaleEditCourier', null, null, null, {{$sped}}, null);">
                    <td></td>
                    <td><b>{{ $sped->courier_name }}</b><br>{{$sped->name_service}}</td>
                    <td>{{ $sped->destination_country }}</td>
                    <td>{{ $sped->pesomin }} - {{ $sped->pesomax }} kg</td>
                    <td>{{ number_format($sped->price, 2, ',', '.') }} €</td>
                    <td>{{ $sped->stima_giorni }} gg</td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>

<!--MODALE edit courier-->
<div id="modaleEditCourier" class="w3-modal">
    <div id="modaleAdmin" class="w3-modal-content">

        <div id="modalModUser" class="w3-container w3-blue-grey">
            <span onclick="closeModal('modaleEditCourier');" class="w3-button w3-display-topright">&times;</span>
            <h1>Stai modificando <!--INSERIRE DATI DB--></h1>
            <p>Utilizza questa form per modificare i dati della spedizione.</p>
            <form id="formModEl" method="post" class="w3-container" action="{{ url('courier_edit') }}?ref={{$_SERVER['REQUEST_URI']}}">
                @csrf
                <fieldset id="fieldsetModale" style="border: none">
                    <div class="w3-row-padding w3-container">
                        <div class="w3-col m6">
                            <input style="display: none" id="courier_idModal" name="courier_idModal">

                            <span class="w3-block w3-blue-grey" style="margin: none">Corriere:</span>
                            <select class="w3-select" id="brandModal" name="brandModal" type="text" placeholder="Marca">
                                <option disabled selected>Seleziona il Corriere</option>
                                {{$nameCouriers = \App\NameCourier::all()}}
                                @foreach ($nameCouriers as $nameCourier)
                                    <option value="{{ $nameCourier->name}}">{{ $nameCourier->name}}</option>
                                @endforeach
                                    <option onclick="modaleSottocategoria('nuovoCorriere', '');">Nuovo Corriere</option>
                            </select>

                            <span class="w3-block w3-blue-grey" style="margin: none">Nome servizio:</span>
                            <input class="w3-input" id="name_serviceModal" name="name_service" type="string" placeholder="Pacco celere 2" required>
                            
                            <span class="w3-block w3-blue-grey" style="margin: none">Prezzo spedizione:</span>
                            <input class="w3-input" id="priceModal" name="price" type="text" placeholder="Costo spedizione" required>
                            <span class="w3-block w3-blue-grey" style="margin: none">Stato di destinazione:</span>
                            <select title="Country" class="w3-select" name="destination_country">
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Åland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory
                                </option>
                                <option value="VG">British Virgin Islands</option>
                                <option value="BN">Brunei</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos [Keeling] Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo - Brazzaville</option>
                                <option value="CD">Congo - Kinshasa</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Côte d’Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories
                                </option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and McDonald Islands
                                </option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong SAR China</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option selected="selected" value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Laos</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macau SAR China</option>
                                <option value="MK">Macedonia</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia</option>
                                <option value="MD">Moldova</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar [Burma]</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="KP">North Korea</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territories</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn Islands</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Réunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russia</option>
                                <option value="RW">Rwanda</option>
                                <option value="BL">Saint Barthélemy</option>
                                <option value="SH">Saint Helena</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin</option>
                                <option value="PM">Saint Pierre and Miquelon
                                </option>
                                <option value="VC">Saint Vincent and the Grenadines
                                </option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">São Tomé and Príncipe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and the South
                                    Sandwich Islands</option>
                                <option value="KR">South Korea</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syria</option>
                                <option value="TW">Taiwan</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States
                                </option>
                                <option value="UY">Uruguay</option>
                                <option value="UM">U.S. Minor Outlying Islands
                                </option>
                                <option value="VI">U.S. Virgin Islands</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VA">Vatican City</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Vietnam</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                        </div>


                        <div class="w3-col m6">
                            <span class="w3-block w3-blue-grey" style="margin: none">Peso collo minimo (kg):</span>
                            <input class="w3-input" id="pesominModal" name="pesomin" type="number" placeholder="Peso minimo" required>

                            <span class="w3-block w3-blue-grey" style="margin: none">Peso collo massimo (kg):</span>
                            <input class="w3-input" id="pesomaxModal" name="pesomax" type="number" placeholder="Peso massimo">
                            
                            <span class="w3-block w3-blue-grey" style="margin: none">Stima giorni:</span>
                            <input class="w3-input" id="stima_giorniModal" name="stima_giorni" type="number" placeholder="Giorni stimati dal corriere per la spedizione" required>
                        </div>
                    </div>
                    
                </fieldset>
                <div class="w3-row">
                    <div class="w3-col l4 s4 w3-center">
                        <button type="button" class="w3-button w3-ripple w3-yellow" style="width:80%" onclick="enableField()">Modifica</button>
                    </div>
                    <div class="w3-col l4 s4 w3-center">
                        <button id="save" type="button" class="w3-button w3-ripple w3-green" style="width:80%; visibility: hidden"
                        onclick="conferma('Vuoi modificare '+ document.getElementById('name_serviceModal').value +'?', 'formModEl')">Salva</button>
                    </div>
            </form>
                    <form id="formDeleteProduct" method="post" action="{{ url('courier_deletion') }}?ref={{$_SERVER['REQUEST_URI']}}">
                    @csrf
                    <div class="w3-col l4 s4 w3-center">
                        <input style="display: none" id="courier_idModal1" name="element_idModal">
                        <button class="w3-button w3-ripple w3-red" style="width:80%;"
                            onclick="conferma('Vuoi eliminare la spedizione: '+ document.getElementById('name_service').value +'?', 'formDeleteProduct')"
                            type="button">Elimina Prodotto</button>
                    </div>
                    </form>
                </div>
            
        </div>
    </div>
</div>
<!--MODALE CHIUSURA-->

<!--Modale Nuovo Cirrere-->
<div id="nuovoCorriere" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" style="max-width: 700px">
        <header class="w3-container w3-teal">
            <span onclick="closeModal('nuovoCorriere');" class="w3-button w3-display-topright">&times;</span>
            <h2>Nuovo Corriere</h2>
        </header>
        <form type="submit" method="post" action="{{URL::to('/insert_courier')}}?ref={{$_SERVER['REQUEST_URI']}}">
            @csrf
            <div class="w3-padding">
                <div class="w3-row">
                    <label>Corriere: </label>
                    <input class="inputModale" placeholder="Nome corriere" type="text" name="name" required>
                </div>
                <div class="w3-row">
                    <label>Link: </label>
                    <input class="inputModale" placeholder="Link del sito di tracking corriere" type="text" name="link">
                </div>
                <div class="w3-row">
                    <button class="w3-right" type="submit">Salva</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection