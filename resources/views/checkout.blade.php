@extends('layout.defaultLayout')
@section('title', 'Checkout')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/flexslider.css') }}">
@endsection

@section('content')

<body class="checkout-page">
  <div id="page">
    <!-- Header -->
    @include('components.banner')
    @include('components.navbarDesktop')
    <!-- end header -->

  <!-- Main Container -->
  <section class="main-container col2-left-layout">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-push-3">
            <form id="co-billing-form" action="{{ url('order_submit') }}" method="post">
            @csrf
              <article class="col-main">
                <div class="page-title">
                  <h1>Checkout</h1>
                </div>
                <ol class="one-page-checkout" id="checkoutSteps">
                  <li id="opc-billing" class="section allow active">
                    <a href="#billing">
                      <div class="step-title"> <span class="number">1</span>
                        <h3>Checkout Method</h3>
                      </div>
                    </a>
                    <div id="checkout-step-billing" class="step a-item" style="">
                      <fieldset class="group-select">
                        <ul>
                          <li>
                            <label for="billing-address-select">Select a billing address from your address book or enter
                              a new address.</label>
                            <br>
                            <select name="billing_address_id" id="billing-address-select" class="address-select"
                              title="" onChange="billing.new-address(!this.value)">
                              @if($address != null)
                              <option value="{{ $address->id }}" selected="selected">{{ $address->NomeCognome }},
                                {{ $address->street }} {{ $address->street_number }}, {{ $address->city }}
                                {{ $address->CAP }}, {{ $address->country }}
                              </option>
                              @endif
                              {{!$addresses = App\Address::where([['user_id', $User->id],['id', '!=' , $User->address_id]])->get() }}
                              @foreach($addresses as $ad)
                              <option value="{{ $ad->id }}">{{ $ad->NomeCognome }}, {{ $ad->street }}
                                {{ $ad->street_number }}, {{ $ad->city }} {{ $ad->CAP }}, {{ $ad->country }}</option>
                              @endforeach
                              <option value="">New Address</option>
                            </select>
                          </li>
                          <li id="billing-new-address-form" style="display: block;">
                            <fieldset>
                              <legend>New Address</legend>
                              <input type="hidden" name="billing[address_id]" value="4269" id="billing:address_id">
                              <ul>
                                <li>
                                  <div class="customer-name">
                                    <div class="input-box name-firstname">
                                      <label for="billing:firstname"> First Name <span class="required">*</span>
                                      </label>
                                      <br>
                                      <input type="text" id="billing:firstname" name="billing[firstname]"
                                        value="pranali" title="First Name" class="input-text required-entry">
                                    </div>
                                    <div class="input-box name-lastname">
                                      <label for="billing:lastname"> Last Name <span class="required">*</span> </label>
                                      <br>
                                      <input type="text" id="billing:lastname" name="billing[lastname]" value="d"
                                        title="Last Name" class="input-text required-entry">
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="input-box">
                                    <label for="billing:company">Company</label>
                                    <br>
                                    <input type="text" id="billing:company" name="billing[company]" value=""
                                      title="Company" class="input-text">
                                  </div>
                                </li>
                                <li>
                                  <label for="billing:street1">Address <span class="required">*</span></label>
                                  <br>
                                  <input type="text" title="Street Address" name="billing[street][]"
                                    id="billing:street1  street1" value="aundh" class="input-text required-entry">
                                </li>
                                <li>
                                  <input type="text" title="Street Address 2" name="billing[street][]"
                                    id="billing:street2 street2" value="" class="input-text">
                                </li>
                                <li>
                                  <div class="input-box">
                                    <label for="billing:city">City <span class="required">*</span></label>
                                    <br>
                                    <input type="text" title="City" name="billing[city]" value="tyyrt"
                                      class="input-text required-entry" id="billing:city">
                                  </div>
                                  <div id="" class="input-box">
                                    <label for="billing:region">State/Province <span class="required">*</span></label>
                                    <br>
                                    <select defaultvalue="1" id="billing:region_id" name="billing[region_id]"
                                      title="State/Province" class="validate-select" style="">
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
                                    <input type="text" id="billing:region" name="billing[region]" value="Alabama"
                                      title="State/Province" class="input-text required-entry" style="display: block;">
                                  </div>
                                </li>
                                <li>
                                  <div class="input-box">
                                    <label for="billing:postcode">Zip/Postal Code <span
                                        class="required">*</span></label>
                                    <br>
                                    <input type="text" title="Zip/Postal Code" name="billing[postcode]"
                                      id="billing:postcode" value="46532"
                                      class="input-text validate-zip-international required-entry">
                                  </div>
                                  <div class="input-box">
                                    <label for="billing:country_id">Country <span class="required">*</span></label>
                                    <br>
                                    <select name="billing[country_id]" id="billing:country_id" class="validate-select"
                                      title="Country">
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
                                    <input type="text" name="billing[telephone]" value="454541" title="Telephone"
                                      class="input-text required-entry" id="billing:telephone">
                                  </div>
                                  <div class="input-box">
                                    <label for="billing:fax">Fax</label>
                                    <br>
                                    <input type="text" name="billing[fax]" value="" title="Fax" class="input-text"
                                      id="billing:fax">
                                  </div>
                                </li>
                                <li>
                                  <input type="checkbox" name="billing[save_in_address_book]" value="1"
                                    title="Save in address book" id="billing:save_in_address_book"
                                    onChange="shipping.setSameAsBilling(false);" class="checkbox">
                                  <label for="billing:save_in_address_book">Save in address book</label>
                                </li>
                              </ul>
                            </fieldset>
                          </li>
                          <li>
                            <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_yes"
                              value="1" onClick="$('shipping:same_as_billing').checked = true;" class="radio">
                            <label for="billing:use_for_shipping_yes">Ship to this address</label>
                            <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_no"
                              value="0" checked="checked" onClick="$('shipping:same_as_billing').checked = false;"
                              class="radio">
                            <label for="billing:use_for_shipping_no">Ship to different address</label>
                          </li>
                        </ul>
                        <p class="require"><em class="required">* </em>Required Fields</p>
                        <button type="button" class="button continue"
                          onClick="buttonContinue('billing', 'shipping');"><span>Continue</span></button>
                      </fieldset>
                    </div>
                  </li>
                  <li id="opc-shipping" class="section">
                    <a href="#shipping">
                      <div class="step-title"> <span class="number">2</span>
                        <h3 class="one_page_heading"> Shipping Information</h3>
                      </div>
                    </a>
                    <div id="checkout-step-shipping" class="step a-item" style="display: none;">
                      <fieldset class="group-select">
                        <ul>
                          <li>
                            <label for="shipping-address-select">Select a shipping address from your address book or
                              enter a new address.</label>
                            <br>
                            <select name="shipping_address_id" id="shipping-address-select" class="address-select"
                              title="" onChange="shipping.newAddress(!this.value)">
                              @if($address != null)
                              <option value="{{ $address->id }}" selected="selected">{{ $address->NomeCognome }},
                                {{ $address->street }} {{ $address->street_number }}, {{ $address->city }}
                                {{ $address->CAP }}, {{ $address->country }}
                              </option>
                              @endif
                              {{!$addresses = App\Address::where([['user_id', $User->id],['id', '!=' , $User->address_id]])->get() }}
                              @foreach($addresses as $ad)
                              <option value="{{ $ad->id }}">{{ $ad->NomeCognome }}, {{ $ad->street }}
                                {{ $ad->street_number }}, {{ $ad->city }} {{ $ad->CAP }}, {{ $ad->country }}</option>
                              @endforeach
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
                                      <label for="shipping:firstname"> Name and surname <span class="required">*</span>
                                      </label>
                                      <br>
                                      <input type="text" id="shipping:firstname" name="NomeCognome" value=""
                                        title="First Name" class="input-text required-entry"
                                        onChange="shipping.setSameAsBilling(false)">
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="input-box">
                                    <label for="shipping:company">Company</label>
                                    <br>
                                    <input type="text" id="shipping:company" name="shipping[company]" value=""
                                      title="Company" class="input-text" onChange="shipping.setSameAsBilling(false);">
                                  </div>
                                </li>
                                <li>
                                  <div class="input-box">
                                    <label for="shipping:street1">Address <span class="required">*</span></label>
                                    <br>
                                    <input type="text" title="Street Address" name="street" id="shipping:street1"
                                      value="" class="input-text required-entry"
                                      onChange="shipping.setSameAsBilling(false);">
                                  </div>
                                  <div id="" class="input-box">
                                    <label for="shipping:street1">Street number <span class="required">*</span></label>
                                    <br>
                                    <input type="text" title="Street Address 2" name="street_number"
                                      id="shipping:street2" value="" class="input-text"
                                      onChange="shipping.setSameAsBilling(false);">
                                  </div>
                                </li>
                                <li>
                                  <div class="input-box">
                                    <label for="shipping:city">City <span class="required">*</span></label>
                                    <br>
                                    <input type="text" title="City" name="city" value=""
                                      class="input-text required-entry" id="shipping:city"
                                      onChange="shipping.setSameAsBilling(false);">
                                  </div>
                                  <div id="" class="input-box">
                                    <label for="shipping:region">State/Province <span class="required">*</span></label>
                                    <br>
                                    <input type="text" title="City" name="Provincia" value=""
                                      class="input-text required-entry" id="shipping:city"
                                      onChange="shipping.setSameAsBilling(false);">
                                  </div>
                                </li>
                                <li>
                                  <div class="input-box">
                                    <label for="shipping:postcode">Zip/Postal Code <span
                                        class="required">*</span></label>
                                    <br>
                                    <input type="text" title="Zip/Postal Code" name="CAP" id="shipping:postcode"
                                      value="" class="input-text validate-zip-international required-entry"
                                      onChange="shipping.setSameAsBilling(false);">
                                  </div>
                                  <div class="input-box">
                                    <label for="shipping:country_id">Country <span class="required">*</span></label>
                                    <br>
                                    <select name="country_id" id="shipping:country_id" class="validate-select"
                                      title="Country" onChange="shipping.setSameAsBilling(false);">
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
                              </ul>
                            </fieldset>
                          </li>
                        </ul>
                        <p class="require"><em class="required">* </em>Required Fields</p>
                        <div class="buttons-set1" id="shipping-buttons-container">
                          <button type="button" class="button"
                            onClick="buttonContinue('shipping', 'shipping_method');"><span>Continue</span></button>
                          <a href="#" onClick="buttonContinue('shipping', 'billing');" class="back-link">« Back</a>
                        </div>
                      </fieldset>
                    </div>
                  </li>
                  <li id="opc-shipping_method" class="section">
                    <a href="#shipping_method">
                      <div class="step-title"> <span class="number">3</span>
                        <h3 class="one_page_heading">Shipping Method</h3>
                      </div>
                    </a>
                    <div id="checkout-step-shipping_method" class="step a-item" style="display: none;">
                      <fieldset>
                        <div id="checkout-shipping-method-load">
                          <dl class="shipping-methods">
                            <dt>Flat Rate</dt>
                            <dd>
                              <ul>
                                @if(isset($Spedizioni))
                                @foreach ($Spedizioni as $sped)
                                <li>
                                  <input type="radio" name="courier" value="{{ $sped->id }}"
                                    id="s_method_flatrate_flatrate" class="radio €{{ number_format($sped->price, 2, ',', '.')  }}" required>
                                  <label id="label-courier-{{ $sped->id }}" for="s_method_flatrate_flatrate">{{ $sped->stima_giorni }}gg stimati per la
                                    consegna. {{ $sped->courier_name }} <span class="price">
                                      €{{ number_format($sped->price, 2, ',', '.')  }}</span>
                                  </label>
                                </li>
                                @endforeach
                                @else
                                <li>
                                  <input type="radio" name="shipping_method" value="flatrate_flatrate"
                                    id="s_method_flatrate_flatrate" checked="checked" class="radio">
                                  <label for="s_method_flatrate_flatrate">Not Couriers. Please contact assistance.
                                  </label>
                                </li>
                                @endif
                              </ul>
                            </dd>
                          </dl>
                        </div>
                        <div id="onepage-checkout-shipping-method-additional-load">
                          <div class="add-gift-message">
                            <h4>Do you have any gift items in your order?</h4>
                            <p>
                              <input type="checkbox" name="allow_gift_messages" id="allow_gift_messages" value="1"
                                onClick="toogleVisibilityOnObjects(this, ['allow-gift-message-container']);"
                                class="checkbox">
                              <label for="allow_gift_messages">Check this checkbox if you want to add gift
                                messages.</label>
                            </p>
                          </div>
                          <div style="display: block;" class="gift-message-form" id="allow-gift-message-container">
                            <div class="inner-box"> </div>
                          </div>
                        </div>
                        <div class="buttons-set1" id="shipping-method-buttons-container">
                          <button type="button" class="button"
                            onClick="buttonContinue('shipping_method', 'payment');"><span>Continue</span></button>
                          <a href="#" onClick="buttonContinue('shipping_method', 'shipping');" class="back-link">«
                            Back</a> </div>
                      </fieldset>
                    </div>
                  </li>
                  <li id="opc-payment" class="section">
                    <a href="#payment">
                      <div class="step-title"> <span class="number">4</span>
                        <h3 class="one_page_heading">Payment Information</h3>
                      </div>
                    </a>
                    <div id="checkout-step-payment" class="step a-item" style="display: none;">
                      <dl id="checkout-payment-method-load">
                        <dt>
                          <input type="radio" id="p_method_checkmo" value="checkmo" name="payment"
                            title="Check / Money order" checked="checked" 
                            class="radio">
                          <label for="p_method_checkmo">PayPal</label>
                        </dt>
                        <dd>
                          <fieldset class="form-list">
                          </fieldset>
                        </dd>
                        <dt>
                          <input type="radio" id="p_method_ccsave" value="ccsave" name="payment"
                            title="Credit Card (saved)"  class="radio">
                          <label for="p_method_ccsave">Credit Card (saved)</label>
                        </dt>
                        <dd>
                          <fieldset class="form-list">
                            <ul id="payment_form_ccsave" style="display: none;">
                              <li>
                                <div class="input-box">
                                  <label for="ccsave_cc_owner">Name on Card <span class="required">*</span></label>
                                  <br>
                                  <input type="text" title="Name on Card" class="input-text required-entry"
                                    id="ccsave_cc_owner" name="payment[cc_owner]" value="">
                                </div>
                              </li>
                              <li>
                                <div class="input-box">
                                  <label for="ccsave_cc_type">Credit Card Type <span class="required">*</span></label>
                                  <br>
                                  <select id="ccsave_cc_type" name="payment[cc_type]"
                                    class="required-entry validate-cc-type-select">
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
                                  <label for="ccsave_cc_number">Credit Card Number <span
                                      class="required">*</span></label>
                                  <br>
                                  <input type="text" id="ccsave_cc_number" name="payment[cc_number]"
                                    title="Credit Card Number" class="input-text validate-cc-number validate-cc-type"
                                    value="">
                                </div>
                              </li>
                              <li>
                                <div class="input-box">
                                  <label for="ccsave_expiration">Expiration Date <span class="required">*</span></label>
                                  <br>
                                  <div class="v-fix">
                                    <select id="ccsave_expiration" style="width: 140px;" name="payment[cc_exp_month]"
                                      class="required-entry">
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
                                    <select id="ccsave_expiration_yr" style="width: 103px;" name="payment[cc_exp_year]"
                                      class="required-entry">
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
                                  <label for="ccsave_cc_cid">Card Verification Number <span
                                      class="required">*</span></label>
                                  <br>
                                  <div class="v-fix">
                                    <input type="text" title="Card Verification Number"
                                      class="input-text required-entry validate-cc-cvn" id="ccsave_cc_cid"
                                      name="payment[cc_cid]" style="width: 3em;" value="">
                                  </div>
                                  <a href="#" class="cvv-what-is-this">What is this?</a>
                                </div>
                              </li>
                            </ul>
                          </fieldset>
                        </dd>
                      </dl>
                      <p class="require"><em class="required">* </em>Required Fields</p>
                      <div class="buttons-set1" id="payment-buttons-container">
                        <button type="button" class="button"
                          onClick="buttonContinue('payment', 'review');"><span>Continue</span></button>
                        <a href="#" onClick="buttonContinue('payment', 'shipping_method');" class="back-link">« Back</a>
                      </div>
                      <div style="clear: both;"></div>
                    </div>
                  </li>
                  <li id="opc-review" class="section">
                    <a href="#review">
                      <div class="step-title"> <span class="number">5</span>
                        <h3 class="one_page_heading">Order Review</h3>
                      </div>
                    </a>
                    <div id="checkout-step-review" class="step a-item" style="display: none;">
                      <div class="order-review" id="checkout-review-load"> </div>
                      <div class="buttons-set13" id="review-buttons-container">
                        <p class="f-left">Forgot an Item? <a href="{{ url('shopping-cart') }}">Edit Your Cart</a></p>


                        <div class="block block-progress">
                          <div class="block-title ">Your Checkout</div>
                          <div class="block-content">
                            <div class="col-sm-6">
                              <dl>
                                <dt class="complete"> Billing Address <span class="separator">|</span> <a
                                    onClick="checkout.gotoSection('billing'); return false;" href="#billing">Change</a>
                                </dt>
                                <dd class="complete">
                                  <address id="addressBilling">
                                  </address>
                                </dd>
                                <dt class="complete"> Shipping Address <span class="separator">|</span> <a
                                    onClick="checkout.gotoSection('shipping');return false;" href="#payment">Change</a>
                                </dt>
                                <dd class="complete">
                                  <address id="addressShipping">
                                  </address>
                                </dd>
                                <dt class="complete"> Shipping Method <span class="separator">|</span> <a
                                    onClick="checkout.gotoSection('shipping_method'); return false;"
                                    href="#shipping_method">Change</a> </dt>
                                <dd id="courierReview" class="complete"></dd>
                                <dt class="complete"> Payment Method <span class="separator">|</span> <a
                                    onClick="checkout.gotoSection('payment'); return false;"
                                    href="#payment">Change</a> </dt>
                                <dd id="paymentReview" class="complete">PayPal</dd>
                              </dl>
                            </div>
                          </div>
                        </div>


                        <button type="submit" class="button" onClick="review.save();"><span>Place Order</span></button>
                        <a href="#" onClick="buttonContinue('review', 'payment');" class="back-link">« Back</a>
                      </div>
                    </div>
                    
                  </li>
                </ol>
              </article>
              <!--	///*///======    End article  ========= //*/// -->
            </form>
          </div>
          <div class="col-sm-3 col-sm-3 col-sm-push-3">
          <div class="block block-progress">
            <div class="block-title ">Total checkout</div>
              <div class="block-content">                       
                <table class="table checkout-table-total">
                  <colgroup>
                    <col>
                    <col width="1">
                  </colgroup>
                  <tfoot>
                    <tr>
                      <td colspan="1" class="a-left" style=""><strong>Total</strong></td>
                      <td class="a-right" style=""><strong><span
                        class="price" id="priceTotal"></span></strong></td>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td colspan="1" class="a-left" style=""> Subtotal </td>
                      <td class="a-right" style=""><span
                              class="price">€<span id="priceSubtotal">{{ number_format($totalPrice, 2, ',', '.') }}</span></span>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="1" class="a-left" style=""> Discount </td>
                      <td class="a-right" style=""><span class="price">
                        - €<span id="priceDiscount">{{ number_format($totalDiscount, 2, ',', '.') }}</span></span>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="1" class="a-left" style=""> Shipping </td>
                      <td class="a-right" style="">
                        <span id="priceShipping" class="price"></span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  <!-- Main Container End -->

  <!--footer Desktop-->
  @include('components.footerDesktop')
  <!-- End Footer Desktop -->
  </div>

  <!--div Mobile Menu-->
  <div id="mobile-menu">
    @include('components.navbarMobile')
  </div>
  <!-- JavaScript -->
  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/revslider.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/common.js') }}"></script>

  <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.mobile-menu.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/checkout.js') }}"></script>
</body>

@endsection