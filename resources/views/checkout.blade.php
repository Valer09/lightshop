@extends('layout.defaultCheckout')
@section('title', 'Checkout')

@section('head')
  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/navbarColor.css')}}" />
  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/cart.css')}}" />
  <script src="{{url('/js/checkout.js')}}"></script>
@endsection

@section('content')
@if(Session::has('cart'))
<section class="main-container col2-left-layout">
    <div class="container">
        <div class="row">



            <div class="col-sm-9 col-sm-push-3">
                <article class="col-main">
                    <div class="page-title">
                        <h1>Checkout</h1>
                    </div>
                    <ol class="one-page-checkout" id="checkoutSteps">
                        <li id="opc-billing" class="section allow active">
                            <div class="step-title"> <span class="number">1</span>
                                <h3>Checkout Method</h3>
                                <!--<a href="#">Edit</a> -->
                            </div>
                            <div id="checkout-step-billing" class="step a-item" style="">
                                <form id="co-billing-form" action="">
                                    <fieldset class="group-select">
                                        <ul>
                                            <li>
                                                <label for="billing-address-select">Select a billing address from your address book or enter a new address.</label>
                                                <br>
                                                <select name="billing_address_id" id="billing-address-select" class="address-select" title="" onChange="billing.newAddress(!this.value)">
                                                    <option value="1" selected="selected">John Doe, aundh, tyyrt, Alabama 46532, United States</option>
                                                    <option value="">New Address</option>
                                                </select>
                                            </li>
                                            <li id="billing-new-address-form" style="display: none;">
                                                <fieldset>
                                                    <legend>New Address</legend>
                                                    <input type="hidden" name="billing[address_id]" value="4269" id="billing:address_id">
                                                    @if($address != null)
                                                    <p>A: {{ $address->NomeCognome }}</p>
                                                    @endif
                                                    <ul>
                                                        <li>
                                                            <div class="customer-name">
                                                                <div class="input-box name-firstname">
                                                                    <label for="billing:firstname"> First Name <span class="required">*</span> </label>
                                                                    <br>
                                                                    <input type="text" id="billing:firstname" name="billing[firstname]" value="pranali" title="First Name" class="input-text required-entry">
                                                                    @if($firstname!=null)
                                                                    <p>A: {{ $adress->firstname }}</p>
                                                                    @endif
                                                                </div>
                                                                <div class="input-box name-lastname">
                                                                    <label for="billing:lastname"> Last Name <span class="required">*</span> </label>
                                                                    <br>
                                                                    <input type="text" id="billing:lastname" name="billing[lastname]" value="d" title="Last Name" class="input-text required-entry">
                                                                    @if($lastname!=null)
                                                                    <p>A: {{ $adress->lastname }}</p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="input-box">
                                                                <label for="billing:company">Company</label>
                                                                <br>
                                                                <input type="text" id="billing:company" name="billing[company]" value="" title="Company" class="input-text">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <label for="billing:street1">Address <span class="required">*</span></label>
                                                            <br>
                                                            <input type="text" title="Street Address" name="billing[street][]" id="billing:street1  street1" value="aundh" class="input-text required-entry">
                                                            @if($street_number!=null)
                                                            <p>A: {{ $address->street_number }}</p>
                                                            @endif
                                                        </li>
                                                        <li>
                                                            <input type="text" title="Street Address 2" name="billing[street][]" id="billing:street2 street2" value="" class="input-text">
                                                            @if($street_number!=null)
                                                            <p>A: {{ $address->street_number }}</p>
                                                            @endif
                                                        </li>
                                                        <li>
                                                            <div class="input-box">
                                                                <label for="billing:city">City <span class="required">*</span></label>
                                                                <br>
                                                                <input type="text" title="City" name="billing[city]" value="tyyrt" class="input-text required-entry" id="billing:city">
                                                                @if($city!=null)
                                                                <p>A: {{ $address->city }}</p>
                                                                @endif
                                                            </div>
                                                            <div id="" class="input-box">
                                                                <label for="billing:region">State/Province <span class="required">*</span></label>
                                                                <br>
                                                                <select defaultvalue="1" id="billing:region_id" name="billing[region_id]" title="State/Province" class="validate-select" style="">
                                                                    <option value="">Please select region, state or province</option>
                                                                    <option value="1">Alabama</option>
                                                                    <option value="2">Alaska</option>
                                                                    <option value="3">American Samoa</option>
                                                                    <option value="4">Arizona</option>
                                                                    <option value="5">Arkansas</option>
                                                                    <option value="6">Armed Forces Africa</option>
                                                                    <option value="7">Armed Forces Americas</option>
                                                                    <option value="8">Armed Forces Canada</option>
                                                                    <option value="9">Armed Forces Europe</option>
                                                                    <option value="10">Armed Forces Middle East</option>
                                                                    <option value="11">Armed Forces Pacific</option>
                                                                    <option value="12">California</option>
                                                                    <option value="13">Colorado</option>
                                                                    <option value="14">Connecticut</option>
                                                                    <option value="15">Delaware</option>
                                                                    <option value="16">District of Columbia</option>
                                                                    <option value="17">Federated States Of Micronesia</option>
                                                                    <option value="18">Florida</option>
                                                                    <option value="19">Georgia</option>
                                                                    <option value="20">Guam</option>
                                                                    <option value="21">Hawaii</option>
                                                                    <option value="22">Idaho</option>
                                                                    <option value="23">Illinois</option>
                                                                    <option value="24">Indiana</option>
                                                                    <option value="25">Iowa</option>
                                                                    <option value="26">Kansas</option>
                                                                    <option value="27">Kentucky</option>
                                                                    <option value="28">Louisiana</option>
                                                                    <option value="29">Maine</option>
                                                                    <option value="30">Marshall Islands</option>
                                                                    <option value="31">Maryland</option>
                                                                    <option value="32">Massachusetts</option>
                                                                    <option value="33">Michigan</option>
                                                                    <option value="34">Minnesota</option>
                                                                    <option value="35">Mississippi</option>
                                                                    <option value="36">Missouri</option>
                                                                    <option value="37">Montana</option>
                                                                    <option value="38">Nebraska</option>
                                                                    <option value="39">Nevada</option>
                                                                    <option value="40">New Hampshire</option>
                                                                    <option value="41">New Jersey</option>
                                                                    <option value="42">New Mexico</option>
                                                                    <option value="43">New York</option>
                                                                    <option value="44">North Carolina</option>
                                                                    <option value="45">North Dakota</option>
                                                                    <option value="46">Northern Mariana Islands</option>
                                                                    <option value="47">Ohio</option>
                                                                    <option value="48">Oklahoma</option>
                                                                    <option value="49">Oregon</option>
                                                                    <option value="50">Palau</option>
                                                                    <option value="51">Pennsylvania</option>
                                                                    <option value="52">Puerto Rico</option>
                                                                    <option value="53">Rhode Island</option>
                                                                    <option value="54">South Carolina</option>
                                                                    <option value="55">South Dakota</option>
                                                                    <option value="56">Tennessee</option>
                                                                    <option value="57">Texas</option>
                                                                    <option value="58">Utah</option>
                                                                    <option value="59">Vermont</option>
                                                                    <option value="60">Virgin Islands</option>
                                                                    <option value="61">Virginia</option>
                                                                    <option value="62">Washington</option>
                                                                    <option value="63">West Virginia</option>
                                                                    <option value="64">Wisconsin</option>
                                                                    <option value="65">Wyoming</option>
                                                                </select>
                                                                <input type="text" id="billing:region" name="billing[region]" value="Alabama" title="State/Province" class="input-text required-entry" style="display: none;">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="input-box">
                                                                <label for="billing:postcode">Zip/Postal Code <span class="required">*</span></label>
                                                                <br>
                                                                <input type="text" title="Zip/Postal Code" name="billing[postcode]" id="billing:postcode" value="46532" class="input-text validate-zip-international required-entry">
                                                            </div>
                                                            <div class="input-box">
                                                                <label for="billing:country_id">Country <span class="required">*</span></label>
                                                                <br>
                                                                <select name="billing[country_id]" id="billing:country_id" class="validate-select" title="Country">
                                                                    <option value=""> </option>
                                                                    <option value="AF">Afghanistan</option>
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
                                                                    <option value="IO">British Indian Ocean Territory</option>
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
                                                                    <option value="HR">Croatia</option>
                                                                    <option value="CU">Cuba</option>
                                                                    <option value="CY">Cyprus</option>
                                                                    <option value="CZ">Czech Republic</option>
                                                                    <option value="CI">Côte d’Ivoire</option>
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
                                                                    <option value="TF">French Southern Territories</option>
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
                                                                    <option value="HM">Heard Island and McDonald Islands</option>
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
                                                                    <option value="IT">Italy</option>
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
                                                                    <option value="KP">North Korea</option>
                                                                    <option value="MP">Northern Mariana Islands</option>
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
                                                                    <option value="RO">Romania</option>
                                                                    <option value="RU">Russia</option>
                                                                    <option value="RW">Rwanda</option>
                                                                    <option value="RE">Réunion</option>
                                                                    <option value="BL">Saint Barthélemy</option>
                                                                    <option value="SH">Saint Helena</option>
                                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                                    <option value="LC">Saint Lucia</option>
                                                                    <option value="MF">Saint Martin</option>
                                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                                    <option value="WS">Samoa</option>
                                                                    <option value="SM">San Marino</option>
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
                                                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
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
                                                                    <option value="ST">São Tomé and Príncipe</option>
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
                                                                    <option value="UM">U.S. Minor Outlying Islands</option>
                                                                    <option value="VI">U.S. Virgin Islands</option>
                                                                    <option value="UG">Uganda</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="AE">United Arab Emirates</option>
                                                                    <option value="GB">United Kingdom</option>
                                                                    <option value="US" selected="selected">United States</option>
                                                                    <option value="UY">Uruguay</option>
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
                                                                    <option value="AX">Åland Islands</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="input-box">
                                                                <label for="billing:telephone">Telephone <span class="required">*</span></label>
                                                                <br>
                                                                <input type="text" name="billing[telephone]" value="454541" title="Telephone" class="input-text required-entry" id="billing:telephone">
                                                            </div>
                                                            <div class="input-box">
                                                                <label for="billing:fax">Fax</label>
                                                                <br>
                                                                <input type="text" name="billing[fax]" value="" title="Fax" class="input-text" id="billing:fax">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" name="billing[save_in_address_book]" value="1" title="Save in address book" id="billing:save_in_address_book" onChange="shipping.setSameAsBilling(false);" class="checkbox">
                                                            <label for="billing:save_in_address_book">Save in address book</label>
                                                        </li>
                                                    </ul>
                                                </fieldset>
                                            </li>
                                            <li>
                                                <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_yes" value="1" onClick="$('shipping:same_as_billing').checked = true;" class="radio">
                                                <label for="billing:use_for_shipping_yes">Ship to this address</label>
                                                <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_no" value="0" checked="checked" onClick="$('shipping:same_as_billing').checked = false;" class="radio">
                                                <label for="billing:use_for_shipping_no">Ship to different address</label>
                                            </li>
                                        </ul>
                                        <p class="require"><em class="required">* </em>Required Fields</p>
                                        <button type="button" class="button continue" onClick="billing.save()"><span>Continue</span></button>
                                    </fieldset>
                                </form>
                            </div>
                        </li>
                        <li id="opc-shipping" class="section">
                            <div class="step-title"> <span class="number">2</span>
                                <h3 class="one_page_heading"> Shipping Information</h3>
                                <!--<a href="#">Edit</a>-->
                            </div>
                            <div id="checkout-step-shipping" class="step a-item" style="display: none;">
                                <form action="" id="co-shipping-form">
                                    <fieldset class="group-select">
                                        <ul>
                                            <li>
                                                <label for="shipping-address-select">Select a shipping address from your address book or enter a new address.</label>
                                                <br>
                                                <select name="shipping_address_id" id="shipping-address-select" class="address-select" title="" onChange="shipping.newAddress(!this.value)">
                                                    <option value="1" selected="selected">John Doe, aundh, tyyrt, Alabama 46532, United States</option>
                                                    <option value="">New Address</option>
                                                </select>
                                            </li>
                                            <li id="shipping-new-address-form" style="display: none;">
                                                <fieldset>
                                                    <input type="hidden" name="shipping[address_id]" value="" id="shipping:address_id">
                                                    <ul>
                                                        <li>
                                                            <div class="customer-name">
                                                                <div class="input-box name-firstname">
                                                                    <label for="shipping:firstname"> First Name <span class="required">*</span> </label>
                                                                    <br>
                                                                    <input type="text" id="shipping:firstname" name="shipping[firstname]" value="" title="First Name" class="input-text required-entry" onChange="shipping.setSameAsBilling(false)">
                                                                </div>
                                                                <div class="input-box name-lastname">
                                                                    <label for="shipping:lastname"> Last Name <span class="required">*</span> </label>
                                                                    <br>
                                                                    <input type="text" id="shipping:lastname" name="shipping[lastname]" value="" title="Last Name" class="input-text required-entry" onChange="shipping.setSameAsBilling(false)">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="input-box">
                                                                <label for="shipping:company">Company</label>
                                                                <br>
                                                                <input type="text" id="shipping:company" name="shipping[company]" value="" title="Company" class="input-text" onChange="shipping.setSameAsBilling(false);">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <label for="shipping:street1">Address <span class="required">*</span></label>
                                                            <br>
                                                            <input type="text" title="Street Address" name="shipping[street][]" id="shipping:street1" value="" class="input-text required-entry" onChange="shipping.setSameAsBilling(false);">
                                                        </li>
                                                        <li>
                                                            <input type="text" title="Street Address 2" name="shipping[street][]" id="shipping:street2" value="" class="input-text" onChange="shipping.setSameAsBilling(false);">
                                                        </li>
                                                        <li>
                                                            <div class="input-box">
                                                                <label for="shipping:city">City <span class="required">*</span></label>
                                                                <br>
                                                                <input type="text" title="City" name="shipping[city]" value="" class="input-text required-entry" id="shipping:city" onChange="shipping.setSameAsBilling(false);">
                                                            </div>
                                                            <div id="" class="input-box">
                                                                <label for="shipping:region">State/Province <span class="required">*</span></label>
                                                                <br>
                                                                <select defaultvalue="" id="shipping:region_id" name="shipping[region_id]" title="State/Province" class="validate-select" style="">
                                                                    <option value="">Please select region, state or province</option>
                                                                    <option value="1">Alabama</option>
                                                                    <option value="2">Alaska</option>
                                                                    <option value="3">American Samoa</option>
                                                                    <option value="4">Arizona</option>
                                                                    <option value="5">Arkansas</option>
                                                                    <option value="6">Armed Forces Africa</option>
                                                                    <option value="7">Armed Forces Americas</option>
                                                                    <option value="8">Armed Forces Canada</option>
                                                                    <option value="9">Armed Forces Europe</option>
                                                                    <option value="10">Armed Forces Middle East</option>
                                                                    <option value="11">Armed Forces Pacific</option>
                                                                    <option value="12">California</option>
                                                                    <option value="13">Colorado</option>
                                                                    <option value="14">Connecticut</option>
                                                                    <option value="15">Delaware</option>
                                                                    <option value="16">District of Columbia</option>
                                                                    <option value="17">Federated States Of Micronesia</option>
                                                                    <option value="18">Florida</option>
                                                                    <option value="19">Georgia</option>
                                                                    <option value="20">Guam</option>
                                                                    <option value="21">Hawaii</option>
                                                                    <option value="22">Idaho</option>
                                                                    <option value="23">Illinois</option>
                                                                    <option value="24">Indiana</option>
                                                                    <option value="25">Iowa</option>
                                                                    <option value="26">Kansas</option>
                                                                    <option value="27">Kentucky</option>
                                                                    <option value="28">Louisiana</option>
                                                                    <option value="29">Maine</option>
                                                                    <option value="30">Marshall Islands</option>
                                                                    <option value="31">Maryland</option>
                                                                    <option value="32">Massachusetts</option>
                                                                    <option value="33">Michigan</option>
                                                                    <option value="34">Minnesota</option>
                                                                    <option value="35">Mississippi</option>
                                                                    <option value="36">Missouri</option>
                                                                    <option value="37">Montana</option>
                                                                    <option value="38">Nebraska</option>
                                                                    <option value="39">Nevada</option>
                                                                    <option value="40">New Hampshire</option>
                                                                    <option value="41">New Jersey</option>
                                                                    <option value="42">New Mexico</option>
                                                                    <option value="43">New York</option>
                                                                    <option value="44">North Carolina</option>
                                                                    <option value="45">North Dakota</option>
                                                                    <option value="46">Northern Mariana Islands</option>
                                                                    <option value="47">Ohio</option>
                                                                    <option value="48">Oklahoma</option>
                                                                    <option value="49">Oregon</option>
                                                                    <option value="50">Palau</option>
                                                                    <option value="51">Pennsylvania</option>
                                                                    <option value="52">Puerto Rico</option>
                                                                    <option value="53">Rhode Island</option>
                                                                    <option value="54">South Carolina</option>
                                                                    <option value="55">South Dakota</option>
                                                                    <option value="56">Tennessee</option>
                                                                    <option value="57">Texas</option>
                                                                    <option value="58">Utah</option>
                                                                    <option value="59">Vermont</option>
                                                                    <option value="60">Virgin Islands</option>
                                                                    <option value="61">Virginia</option>
                                                                    <option value="62">Washington</option>
                                                                    <option value="63">West Virginia</option>
                                                                    <option value="64">Wisconsin</option>
                                                                    <option value="65">Wyoming</option>
                                                                </select>
                                                                <input type="text" id="shipping:region" name="shipping[region]" value="" title="State/Province" class="input-text required-entry" style="display: none;">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="input-box">
                                                                <label for="shipping:postcode">Zip/Postal Code <span class="required">*</span></label>
                                                                <br>
                                                                <input type="text" title="Zip/Postal Code" name="shipping[postcode]" id="shipping:postcode" value="" class="input-text validate-zip-international required-entry" onChange="shipping.setSameAsBilling(false);">
                                                            </div>
                                                            <div class="input-box">
                                                                <label for="shipping:country_id">Country <span class="required">*</span></label>
                                                                <br>
                                                                <select name="shipping[country_id]" id="shipping:country_id" class="validate-select" title="Country" onChange="shipping.setSameAsBilling(false);">
                                                                    <option value=""> </option>
                                                                    <option value="AF">Afghanistan</option>
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
                                                                    <option value="IO">British Indian Ocean Territory</option>
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
                                                                    <option value="HR">Croatia</option>
                                                                    <option value="CU">Cuba</option>
                                                                    <option value="CY">Cyprus</option>
                                                                    <option value="CZ">Czech Republic</option>
                                                                    <option value="CI">Côte d’Ivoire</option>
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
                                                                    <option value="TF">French Southern Territories</option>
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
                                                                    <option value="HM">Heard Island and McDonald Islands</option>
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
                                                                    <option value="IT">Italy</option>
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
                                                                    <option value="KP">North Korea</option>
                                                                    <option value="MP">Northern Mariana Islands</option>
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
                                                                    <option value="RO">Romania</option>
                                                                    <option value="RU">Russia</option>
                                                                    <option value="RW">Rwanda</option>
                                                                    <option value="RE">Réunion</option>
                                                                    <option value="BL">Saint Barthélemy</option>
                                                                    <option value="SH">Saint Helena</option>
                                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                                    <option value="LC">Saint Lucia</option>
                                                                    <option value="MF">Saint Martin</option>
                                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                                    <option value="WS">Samoa</option>
                                                                    <option value="SM">San Marino</option>
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
                                                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
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
                                                                    <option value="ST">São Tomé and Príncipe</option>
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
                                                                    <option value="UM">U.S. Minor Outlying Islands</option>
                                                                    <option value="VI">U.S. Virgin Islands</option>
                                                                    <option value="UG">Uganda</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="AE">United Arab Emirates</option>
                                                                    <option value="GB">United Kingdom</option>
                                                                    <option value="US" selected="selected">United States</option>
                                                                    <option value="UY">Uruguay</option>
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
                                                                    <option value="AX">Åland Islands</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="input-box">
                                                                <label for="shipping:telephone">Telephone <span class="required">*</span></label>
                                                                <br>
                                                                <input type="text" name="shipping[telephone]" value="" title="Telephone" class="input-text required-entry" id="shipping:telephone" onChange="shipping.setSameAsBilling(false);">
                                                            </div>
                                                            <div class="input-box">
                                                                <label for="shipping:fax">Fax</label>
                                                                <br>
                                                                <input type="text" name="shipping[fax]" value="" title="Fax" class="input-text" id="shipping:fax" onChange="shipping.setSameAsBilling(false);">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" name="shipping[save_in_address_book]" value="1" title="Save in address book" id="shipping:save_in_address_book" onChange="shipping.setSameAsBilling(false);" class="checkbox">
                                                            <label for="shipping:save_in_address_book">Save in address book</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" name="shipping[same_as_billing]" id="shipping:same_as_billing" value="1" onClick="shipping.setSameAsBilling(this.checked)" class="checkbox">
                                                            <label for="shipping:same_as_billing">Use Billing Address</label>
                                                        </li>
                                                    </ul>
                                                </fieldset>
                                            </li>
                                        </ul>
                                        <p class="require"><em class="required">* </em>Required Fields</p>
                                        <div class="buttons-set1" id="shipping-buttons-container">
                                            <button type="button" class="button" onClick="shipping.save()"><span>Continue</span></button>
                                            <a href="#" onClick="checkout.back(); return false;" class="back-link">« Back</a> </div>
                                    </fieldset>
                                </form>
                            </div>
                        </li>
                        <li id="opc-shipping_method" class="section">
                            <div class="step-title"> <span class="number">3</span>
                                <h3 class="one_page_heading">Shipping Method</h3>
                                <!--<a href="#">Edit</a>-->
                            </div>
                            <div id="checkout-step-shipping_method" class="step a-item" style="display: none;">
                                <form id="co-shipping-method-form" action="">
                                    <fieldset>
                                        <div id="checkout-shipping-method-load">
                                            <dl class="shipping-methods">
                                                <dt>Flat Rate</dt>
                                                <dd>
                                                    <ul>
                                                        <li>
                                                            <input type="radio" name="shipping_method" value="flatrate_flatrate" id="s_method_flatrate_flatrate" checked="checked" class="radio">
                                                            <label for="s_method_flatrate_flatrate">Fixed <span class="price">$35.00</span> </label>
                                                        </li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div id="onepage-checkout-shipping-method-additional-load">
                                            <div class="add-gift-message">
                                                <h4>Do you have any gift items in your order?</h4>
                                                <p>
                                                    <input type="checkbox" name="allow_gift_messages" id="allow_gift_messages" value="1" onClick="toogleVisibilityOnObjects(this, ['allow-gift-message-container']);" class="checkbox">
                                                    <label for="allow_gift_messages">Check this checkbox if you want to add gift messages.</label>
                                                </p>
                                            </div>
                                            <div style="display: none;" class="gift-message-form" id="allow-gift-message-container">
                                                <div class="inner-box"> </div>
                                            </div>
                                        </div>
                                        <div class="buttons-set1" id="shipping-method-buttons-container">
                                            <button type="button" class="button" onClick="shippingMethod.save()"><span>Continue</span></button>
                                            <a href="#" onClick="checkout.back(); return false;" class="back-link">« Back</a> </div>
                                    </fieldset>
                                </form>
                            </div>
                        </li>
                        <li id="opc-payment" class="section">
                            <div class="step-title"> <span class="number">4</span>
                                <h3 class="one_page_heading">Payment Information</h3>
                                <!--<a href="#">Edit</a>-->
                            </div>
                            <div id="checkout-step-payment" class="step a-item" style="display: none;">
                                <form action="" id="co-payment-form">
                                    <dl id="checkout-payment-method-load">
                                        <dt>
                                            <input type="radio" id="p_method_checkmo" value="checkmo" name="payment[method]" title="Check / Money order" onClick="payment.switchMethod('checkmo')" class="radio">
                                            <label for="p_method_checkmo">Check / Money order</label>
                                        </dt>
                                        <dd>
                                            <fieldset class="form-list">
                                            </fieldset>
                                        </dd>
                                        <dt>
                                            <input type="radio" id="p_method_ccsave" value="ccsave" name="payment[method]" title="Credit Card (saved)" onClick="payment.switchMethod('ccsave')" class="radio">
                                            <label for="p_method_ccsave">Credit Card (saved)</label>
                                        </dt>
                                        <dd>
                                            <fieldset class="form-list">
                                                <ul id="payment_form_ccsave" style="display: none;">
                                                    <li>
                                                        <div class="input-box">
                                                            <label for="ccsave_cc_owner">Name on Card <span class="required">*</span></label>
                                                            <br>
                                                            <input type="text" disabled="" title="Name on Card" class="input-text required-entry" id="ccsave_cc_owner" name="payment[cc_owner]" value="">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="input-box">
                                                            <label for="ccsave_cc_type">Credit Card Type <span class="required">*</span></label>
                                                            <br>
                                                            <select disabled="" id="ccsave_cc_type" name="payment[cc_type]" class="required-entry validate-cc-type-select">
                                                                <option value="">--Please Select--</option>
                                                                <option value="AE">American Express</option>
                                                                <option value="VI">Visa</option>
                                                                <option value="MC">MasterCard</option>
                                                                <option value="DI">Discover</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="input-box">
                                                            <label for="ccsave_cc_number">Credit Card Number <span class="required">*</span></label>
                                                            <br>
                                                            <input type="text" disabled="" id="ccsave_cc_number" name="payment[cc_number]" title="Credit Card Number" class="input-text validate-cc-number validate-cc-type" value="">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="input-box">
                                                            <label for="ccsave_expiration">Expiration Date <span class="required">*</span></label>
                                                            <br>
                                                            <div class="v-fix">
                                                                <select disabled="" id="ccsave_expiration" style="width: 140px;" name="payment[cc_exp_month]" class="required-entry">
                                                                    <option value="" selected="selected">Month</option>
                                                                    <option value="1">01 - January</option>
                                                                    <option value="2">02 - February</option>
                                                                    <option value="3">03 - March</option>
                                                                    <option value="4">04 - April</option>
                                                                    <option value="5">05 - May</option>
                                                                    <option value="6">06 - June</option>
                                                                    <option value="7">07 - July</option>
                                                                    <option value="8">08 - August</option>
                                                                    <option value="9">09 - September</option>
                                                                    <option value="10">10 - October</option>
                                                                    <option value="11">11 - November</option>
                                                                    <option value="12">12 - December</option>
                                                                </select>
                                                            </div>
                                                            <div class="v-fix">
                                                                <select disabled="" id="ccsave_expiration_yr" style="width: 103px;" name="payment[cc_exp_year]" class="required-entry">
                                                                    <option value="" selected="selected">Year</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2021">2021</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="input-box">
                                                            <label for="ccsave_cc_cid">Card Verification Number <span class="required">*</span></label>
                                                            <br>
                                                            <div class="v-fix">
                                                                <input type="text" disabled="" title="Card Verification Number" class="input-text required-entry validate-cc-cvn" id="ccsave_cc_cid" name="payment[cc_cid]" style="width: 3em;" value="">
                                                            </div>
                                                            <a href="#" class="cvv-what-is-this">What is this?</a> </div>
                                                    </li>
                                                </ul>
                                            </fieldset>
                                        </dd>
                                    </dl>
                                </form>
                                <p class="require"><em class="required">* </em>Required Fields</p>
                                <div class="buttons-set1" id="payment-buttons-container">
                                    <button type="button" class="button" onClick="payment.save()"><span>Continue</span></button>
                                    <a href="#" onClick="checkout.back(); return false;" class="back-link">« Back</a> </div>
                                <div style="clear: both;"></div>
                            </div>
                        </li>
                        <li id="opc-review" class="section">
                            <div class="step-title"> <span class="number">5</span>
                                <h3 class="one_page_heading">Order Review</h3>
                                <!--<a href="#">Edit</a>-->
                            </div>
                            <div id="checkout-step-review" class="step a-item" style="display: none;">
                                <div class="order-review" id="checkout-review-load"> </div>
                                <div class="buttons-set13" id="review-buttons-container">
                                    <p class="f-left">Forgot an Item? <a href="#cart/">Edit Your Cart</a></p>
                                    <button type="submit" class="button" onClick="review.save();"><span>Place Order</span></button>
                                </div>
                            </div>
                        </li>
                    </ol>
                </article>
                <!--	///*///======    End article  ========= //*/// -->
            </div>
            <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                <div class="side-banner"><img src="images/side-banner.jpg" alt="banner"></div>
                <div class="block block-progress">
                    <div class="block-title ">Your Checkout</div>
                    <div class="block-content">
                        <dl>
                            <dt class="complete"> Billing Address <span class="separator">|</span> <a onClick="checkout.gotoSection('billing'); return false;" href="#billing">Change</a> </dt>
                            <dd class="complete">
                                <address>
                                    John Doe<br>
                                    Abc Company<br>
                                    23 North Main Stree<br>
                                    Windsor<br>
                                    Holtsville,  New York, 00501<br>
                                    United States<br>
                                    T: 5465465 <br>
                                    F: 466523
                                </address>
                            </dd>
                            <dt class="complete"> Shipping Address <span class="separator">|</span> <a onClick="checkout.gotoSection('shipping');return false;" href="#payment">Change</a> </dt>
                            <dd class="complete">
                                <address>
                                    John Doe<br>
                                    Abc Company<br>
                                    23 North Main Stree<br>
                                    Windsor<br>
                                    Holtsville,  New York, 00501<br>
                                    United States<br>
                                    T: 5465465 <br>
                                    F: 466523
                                </address>
                            </dd>
                            <dt class="complete"> Shipping Method <span class="separator">|</span> <a onClick="checkout.gotoSection('shipping_method'); return false;" href="#shipping_method">Change</a> </dt>
                            <dd class="complete"> Flat Rate - Fixed <br>
                                <span class="price">$15.00</span> </dd>
                            <dt> Payment Method </dt>
                        </dl>
                        @else
                        <h1>Nessun elemento nel carrello</h1>
                        @endif
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- Main Container End -->

<!-- Footer -->
<footer class="footer">
    <div class="newsletter-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="newsletter">
                        <form>
                            <div>
                                <h4><span>newsletter</span></h4>
                                <input type="text" placeholder="Enter your email address" class="input-text" title="Sign up for our newsletter" id="newsletter1" name="email">
                                <button class="subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--newsletter-->

    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-column pull-left">
                        <h4>Shopping Guide</h4>
                        <ul class="links">
                            <li><a href="blog.html" title="How to buy">Blog</a></li>
                            <li><a href="faq.html" title="FAQs">FAQs</a></li>
                            <li><a href="#" title="Payment">Payment</a></li>
                            <li><a href="#" title="Shipment">Shipment</a></li>
                            <li><a href="#" title="Where is my order?">Where is my order?</a></li>
                            <li><a href="#" title="Return policy">Return policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-column pull-left">
                        <h4>Style Advisor</h4>
                        <ul class="links">
                            <li><a href="login.html" title="Your Account">Your Account</a></li>
                            <li><a href="#" title="Information">Information</a></li>
                            <li><a href="#" title="Addresses">Addresses</a></li>
                            <li><a href="#" title="Addresses">Discount</a></li>
                            <li><a href="#" title="Orders History">Orders History</a></li>
                            <li><a href="#" title="Order Tracking">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-column pull-left">
                        <h4>Information</h4>
                        <ul class="links">
                            <li><a href="sitemap.html" title="Site Map">Site Map</a></li>
                            <li><a href="#" title="Search Terms">Search Terms</a></li>
                            <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                            <li><a href="about_us.html" title="About Us">About Us</a></li>
                            <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
                            <li><a href="#" title="Suppliers">Suppliers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Contact Us</h4>
                    <div class="contacts-info">
                        <address>
                            <i class="add-icon">&nbsp;</i>123 Main Street, Anytown, <br>
                            &nbsp;CA 12345  USA
                        </address>
                        <div class="phone-footer"><i class="phone-icon">&nbsp;</i> +1 800 123 1234</div>
                        <div class="email-footer"><i class="email-icon">&nbsp;</i> <a href="mailto:support@magikcommerce.com">abc@example.com</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="social">
                        <ul>
                            <li class="fb"><a href="#"></a></li>
                            <li class="tw"><a href="#"></a></li>
                            <li class="googleplus"><a href="#"></a></li>
                            <li class="rss"><a href="#"></a></li>
                            <li class="pintrest"><a href="#"></a></li>
                            <li class="linkedin"><a href="#"></a></li>
                            <li class="youtube"><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="payment-accept"> <img src="images/payment-1.png" alt=""> <img src="images/payment-2.png" alt=""> <img src="images/payment-3.png" alt=""> <img src="images/payment-4.png" alt=""> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 coppyright">
                    © 2017 ThemesSoft. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<div id="mobile-menu">
    <ul>
        <li>
            <div class="mm-search">
                <form id="search1" name="search">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
                        </div>
                        <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
                    </div>
                </form>
            </div>
        </li>
        <li><a href="index.html">Home</a>
            <ul>
                <li><a href="index.html">Home Version 1</a></li>
                <li><a href="../home2/index.html">Home Version 2</a></li>
            </ul>
        </li>
        <li><a href="#">Pages</a>
            <ul>
                <li><a href="grid.html">Grid</a> </li>
                <li> <a href="list.html">List</a> </li>
                <li> <a href="product_detail.html">Product Detail</a> </li>
                <li> <a href="shopping_cart.html">Shopping Cart</a> </li>
                <li><a href="checkout.html">Checkout</a> </li>
                <li> <a href="wishlist.html">Wishlist</a> </li>
                <li> <a href="dashboard.html">Dashboard</a> </li>
                <li> <a href="multiple_addresses.html">Multiple Addresses</a> </li>
                <li> <a href="about_us.html">About us</a> </li>
                <li><a href="blog.html">Blog</a>
                    <ul>
                        <li><a href="blog-detail.html">Blog Detail</a> </li>
                    </ul>
                </li>
                <li><a href="contact_us.html">Contact us</a> </li>
                <li><a href="404error.html">404 Error Page</a> </li>
            </ul>
        </li>
        <li><a href="#">Women</a>
            <ul>
                <li> <a href="#" class="">Stylish Bag</a>
                    <ul>
                        <li> <a href="grid.html" class="">Clutch Handbags</a> </li>
                        <li> <a href="grid.html" class="">Diaper Bags</a> </li>
                        <li> <a href="grid.html" class="">Bags</a> </li>
                        <li> <a href="grid.html" class="">Hobo handbags</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Material Bag</a>
                    <ul>
                        <li> <a href="grid.html">Beaded Handbags</a> </li>
                        <li> <a href="grid.html">Fabric Handbags</a> </li>
                        <li> <a href="grid.html">Handbags</a> </li>
                        <li> <a href="grid.html">Leather Handbags</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Shoes</a>
                    <ul>
                        <li> <a href="grid.html">Flat Shoes</a> </li>
                        <li> <a href="grid.html">Flat Sandals</a> </li>
                        <li> <a href="grid.html">Boots</a> </li>
                        <li> <a href="grid.html">Heels</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Jwellery</a>
                    <ul>
                        <li> <a href="grid.html">Bracelets</a> </li>
                        <li> <a href="grid.html">Necklaces &amp; Pendent</a> </li>
                        <li> <a href="grid.html">Pendants</a> </li>
                        <li> <a href="grid.html">Pins &amp; Brooches</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Dresses</a>
                    <ul>
                        <li> <a href="grid.html">Casual Dresses</a> </li>
                        <li> <a href="grid.html">Evening</a> </li>
                        <li> <a href="grid.html">Designer</a> </li>
                        <li> <a href="grid.html">Party</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Swimwear</a>
                    <ul>
                        <li> <a href="grid.html">Swimsuits</a> </li>
                        <li> <a href="grid.html">Beach Clothing</a> </li>
                        <li> <a href="grid.html">Clothing</a> </li>
                        <li> <a href="grid.html">Bikinis</a> </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="grid.html">Men</a>
            <ul>
                <li> <a href="grid.html" class="">Shoes</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="grid.html">Sport Shoes</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Casual Shoes</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Leather Shoes</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">canvas shoes</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Dresses</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="grid.html">Casual Dresses</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Evening</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Designer</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Party</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Jackets</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="grid.html">Coats</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Formal Jackets</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Leather Jackets</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Blazers</a> </li>
                    </ul>
                </li>
                <li> <a href="#.html">Watches</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Casio</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Titan</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Tommy-Hilfiger</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Sunglasses</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="grid.html">Ray Ban</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Police</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Oakley</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Accesories</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="grid.html">Backpacks</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Wallets</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Laptops Bags</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Belts</a> </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="grid.html">Electronics</a>
            <ul>
                <li> <a href="grid.html"><span>Mobiles</span></a>
                    <ul>
                        <li> <a href="grid.html"><span>Samsung</span></a> </li>
                        <li> <a href="grid.html"><span>Nokia</span></a> </li>
                        <li> <a href="grid.html"><span>IPhone</span></a> </li>
                        <li> <a href="grid.html"><span>Sony</span></a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html" class=""><span>Accesories</span></a>
                    <ul>
                        <li> <a href="grid.html"><span>Mobile Memory Cards</span></a> </li>
                        <li> <a href="grid.html"><span>Cases &amp; Covers</span></a> </li>
                        <li> <a href="grid.html"><span>Mobile Headphones</span></a> </li>
                        <li> <a href="grid.html"><span>Bluetooth Headsets</span></a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html"><span>Cameras</span></a>
                    <ul>
                        <li> <a href="grid.html"><span>Camcorders</span></a> </li>
                        <li> <a href="grid.html"><span>Point &amp; Shoot</span></a> </li>
                        <li> <a href="grid.html"><span>Digital SLR</span></a> </li>
                        <li> <a href="grid.html"><span>Camera Accesories</span></a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html"><span>Audio &amp; Video</span></a>
                    <ul>
                        <li> <a href="grid.html"><span>MP3 Players</span></a> </li>
                        <li> <a href="grid.html"><span>IPods</span></a> </li>
                        <li> <a href="grid.html"><span>Speakers</span></a> </li>
                        <li> <a href="grid.html"><span>Video Players</span></a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html"><span>Computer</span></a>
                    <ul>
                        <li> <a href="grid.html"><span>External Hard Disk</span></a> </li>
                        <li> <a href="grid.html"><span>Pendrives</span></a> </li>
                        <li> <a href="grid.html"><span>Headphones</span></a> </li>
                        <li> <a href="grid.html"><span>PC Components</span></a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html"><span>Appliances</span></a>
                    <ul>
                        <li> <a href="grid.html"><span>Vaccum Cleaners</span></a> </li>
                        <li> <a href="grid.html"><span>Indoor Lighting</span></a> </li>
                        <li> <a href="grid.html"><span>Kitchen Tools</span></a> </li>
                        <li> <a href="grid.html"><span>Water Purifier</span></a> </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="grid.html">Furniture</a>
            <ul>
                <li> <a href="grid.html">Living Room</a>
                    <ul>
                        <li> <a href="grid.html">Racks &amp; Cabinets</a> </li>
                        <li> <a href="grid.html">Sofas</a> </li>
                        <li> <a href="grid.html">Chairs</a> </li>
                        <li> <a href="grid.html">Tables</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html" class="">Dining &amp; Bar</a>
                    <ul>
                        <li> <a href="grid.html">Dining Table Sets</a> </li>
                        <li> <a href="grid.html">Serving Trolleys</a> </li>
                        <li> <a href="grid.html">Bar Counters</a> </li>
                        <li> <a href="grid.html">Dining Cabinets</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Bedroom</a>
                    <ul>
                        <li> <a href="grid.html">Beds</a> </li>
                        <li> <a href="grid.html">Chest of Drawers</a> </li>
                        <li> <a href="grid.html">Wardrobes &amp; Almirahs</a> </li>
                        <li> <a href="grid.html">Nightstands</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Kitchen</a>
                    <ul>
                        <li> <a href="grid.html">Kitchen Racks</a> </li>
                        <li> <a href="grid.html">Kitchen Fillings</a> </li>
                        <li> <a href="grid.html">Wall Units</a> </li>
                        <li> <a href="grid.html">Benches &amp; Stools</a> </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="grid.html">Kids</a> </li>
        <li><a href="contact-us.html">Contact Us</a> </li>
    </ul>
    <div class="top-links">
        <ul class="links">
            <li><a title="My Account" href="login.html">My Account</a> </li>
            <li><a title="Wishlist" href="wishlist.html">Wishlist</a> </li>
            <li><a title="Checkout" href="checkout.html">Checkout</a> </li>
            <li><a title="Blog" href="blog.html"><span>Blog</span></a> </li>
            <li class="last"><a title="Login" href="login.html"><span>Login</span></a> </li>
        </ul>
    </div>
</div>

<!-- End Footer -->

<!-- JavaScript -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/revslider.js"></script>
<script type="text/javascript" src="js/common.js"></script>

<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
@endsection
