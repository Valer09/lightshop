@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')
  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/navbarColor.css')}}" />
  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/cart.css')}}" />
@endsection

@section('content')

<!-- PAGE CONTENT -->
<section class="main-container col1-layout">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <article class="col-main">
                    <div class="cart">
                        <div class="page-title">
                            <h2>Shopping Cart</h2>
                        </div>
                        <div class="table-responsive">
                            <form method="post" action="#updatePost/">
                                <input type="hidden" value="Vwww7itR3zQFe86m" name="form_key">
                                <fieldset>
                                    <table class="data-table cart-table" id="shopping-cart-table">
                                        <colgroup>
                                            <col width="1">
                                            <col>
                                            <col width="1">
                                            <col width="1">
                                            <col width="1">
                                            <col width="1">
                                            <col width="1">
                                        </colgroup>
                                        <thead>
                                        <tr class="first last">
                                            <th rowspan="1">&nbsp;</th>
                                            <th rowspan="1"><span class="nobr">Product Name</span></th>
                                            <th rowspan="1"></th>
                                            <th colspan="1" class="a-center"><span class="nobr">Unit Price</span></th>
                                            <th class="a-center" rowspan="1">Qty</th>
                                            <th colspan="1" class="a-center">Subtotal</th>
                                            <th class="a-center" rowspan="1">&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr class="first last">
                                            <td class="a-right last" colspan="50"><button onclick="setLocation('#')" class="button btn-continue" title="Continue Shopping" type="button"><span>Continue Shopping</span></button>
                                                <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span>Update Cart</span></button>
                                                <button id="empty_cart_button" class="button btn-empty" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span>Clear Cart</span></button></td>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <tr class="first odd">
                                            <td class="image"><a class="product-image" title="Sample Product" href="#/women-s-crepe-printed-black/"><img width="75" alt="Sample Product" src="products-images/product1.jpg"></a></td>
                                            <td><h2 class="product-name"> <a href="#/women-s-crepe-printed-black/">Sample Product</a> </h2></td>
                                            <td class="a-center"><a title="Edit item parameters" class="edit-bnt" href="#configure/id/15945/"></a></td>
                                            <td class="a-right"><span class="cart-price"> <span class="price">$70.00</span> </span></td>
                                            <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="1" name="cart[15945][qty]"></td>
                                            <td class="a-right movewishlist"><span class="cart-price"> <span class="price">$70.00</span> </span></td>
                                            <td class="a-center last"><a class="button remove-item" title="Remove item" href="#"><span><span>Remove item</span></span></a></td>
                                        </tr>
                                        <tr class="last even">
                                            <td class="image"><a class="product-image" title="Sample Product" href="#women-s-u-tank-top/"><img width="75" alt="Sample Product" src="products-images/product1.jpg"></a></td>
                                            <td><h2 class="product-name"> <a href="#women-s-u-tank-top/">Sample Product</a> </h2></td>
                                            <td class="a-center"><a title="Edit item parameters" class="edit-bnt" href="#configure/id/15946/"></a></td>
                                            <td class="a-right"><span class="cart-price"> <span class="price">$7.38</span> </span></td>
                                            <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="1" name="cart[15946][qty]"></td>
                                            <td class="a-right movewishlist"><span class="cart-price"> <span class="price">$7.38</span> </span></td>
                                            <td class="a-center last"><a class="button remove-item" title="Remove item" href="#"><span><span>Remove item</span></span></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </fieldset>
                            </form>
                        </div>
                        <!-- BEGIN CART COLLATERALS -->
                        <div class="cart-collaterals row">
                            <div class="col-sm-4">
                                <div class="shipping">
                                    <h3>Estimate Shipping and Tax</h3>
                                    <div class="shipping-form">
                                        <form id="shipping-zip-form" method="post" action="#estimatePost/">
                                            <p>Enter your destination to get a shipping estimate.</p>
                                            <ul class="form-list">
                                                <li>
                                                    <label class="required" for="country"><em>*</em>Country</label>
                                                    <div class="input-box">
                                                        <select title="Country" class="validate-select" id="country" name="country_id">
                                                            <option value=""> </option>
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
                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                            <option value="VC">Saint Vincent and the Grenadines</option>
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
                                                            <option selected="selected" value="US">United States</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UM">U.S. Minor Outlying Islands</option>
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
                                                </li>
                                                <li>
                                                    <label for="region_id">State/Province</label>
                                                    <div class="input-box">
                                                        <select style="" title="State/Province" name="region_id" id="region_id" defaultvalue="" class="required-entry validate-select">
                                                            <option value="">Please select region, state or province</option>
                                                            <option value="1" title="Alabama">Alabama</option>
                                                            <option value="2" title="Alaska">Alaska</option>
                                                            <option value="3" title="American Samoa">American Samoa</option>
                                                            <option value="4" title="Arizona">Arizona</option>
                                                            <option value="5" title="Arkansas">Arkansas</option>
                                                            <option value="6" title="Armed Forces Africa">Armed Forces Africa</option>
                                                            <option value="7" title="Armed Forces Americas">Armed Forces Americas</option>
                                                            <option value="8" title="Armed Forces Canada">Armed Forces Canada</option>
                                                            <option value="9" title="Armed Forces Europe">Armed Forces Europe</option>
                                                            <option value="10" title="Armed Forces Middle East">Armed Forces Middle East</option>
                                                            <option value="11" title="Armed Forces Pacific">Armed Forces Pacific</option>
                                                            <option value="12" title="California">California</option>
                                                            <option value="13" title="Colorado">Colorado</option>
                                                            <option value="14" title="Connecticut">Connecticut</option>
                                                            <option value="15" title="Delaware">Delaware</option>
                                                            <option value="16" title="District of Columbia">District of Columbia</option>
                                                            <option value="17" title="Federated States Of Micronesia">Federated States Of Micronesia</option>
                                                            <option value="18" title="Florida">Florida</option>
                                                            <option value="19" title="Georgia">Georgia</option>
                                                            <option value="20" title="Guam">Guam</option>
                                                            <option value="21" title="Hawaii">Hawaii</option>
                                                            <option value="22" title="Idaho">Idaho</option>
                                                            <option value="23" title="Illinois">Illinois</option>
                                                            <option value="24" title="Indiana">Indiana</option>
                                                            <option value="25" title="Iowa">Iowa</option>
                                                            <option value="26" title="Kansas">Kansas</option>
                                                            <option value="27" title="Kentucky">Kentucky</option>
                                                            <option value="28" title="Louisiana">Louisiana</option>
                                                            <option value="29" title="Maine">Maine</option>
                                                            <option value="30" title="Marshall Islands">Marshall Islands</option>
                                                            <option value="31" title="Maryland">Maryland</option>
                                                            <option value="32" title="Massachusetts">Massachusetts</option>
                                                            <option value="33" title="Michigan">Michigan</option>
                                                            <option value="34" title="Minnesota">Minnesota</option>
                                                            <option value="35" title="Mississippi">Mississippi</option>
                                                            <option value="36" title="Missouri">Missouri</option>
                                                            <option value="37" title="Montana">Montana</option>
                                                            <option value="38" title="Nebraska">Nebraska</option>
                                                            <option value="39" title="Nevada">Nevada</option>
                                                            <option value="40" title="New Hampshire">New Hampshire</option>
                                                            <option value="41" title="New Jersey">New Jersey</option>
                                                            <option value="42" title="New Mexico">New Mexico</option>
                                                            <option value="43" title="New York">New York</option>
                                                            <option value="44" title="North Carolina">North Carolina</option>
                                                            <option value="45" title="North Dakota">North Dakota</option>
                                                            <option value="46" title="Northern Mariana Islands">Northern Mariana Islands</option>
                                                            <option value="47" title="Ohio">Ohio</option>
                                                            <option value="48" title="Oklahoma">Oklahoma</option>
                                                            <option value="49" title="Oregon">Oregon</option>
                                                            <option value="50" title="Palau">Palau</option>
                                                            <option value="51" title="Pennsylvania">Pennsylvania</option>
                                                            <option value="52" title="Puerto Rico">Puerto Rico</option>
                                                            <option value="53" title="Rhode Island">Rhode Island</option>
                                                            <option value="54" title="South Carolina">South Carolina</option>
                                                            <option value="55" title="South Dakota">South Dakota</option>
                                                            <option value="56" title="Tennessee">Tennessee</option>
                                                            <option value="57" title="Texas">Texas</option>
                                                            <option value="58" title="Utah">Utah</option>
                                                            <option value="59" title="Vermont">Vermont</option>
                                                            <option value="60" title="Virgin Islands">Virgin Islands</option>
                                                            <option value="61" title="Virginia">Virginia</option>
                                                            <option value="62" title="Washington">Washington</option>
                                                            <option value="63" title="West Virginia">West Virginia</option>
                                                            <option value="64" title="Wisconsin">Wisconsin</option>
                                                            <option value="65" title="Wyoming">Wyoming</option>
                                                        </select>
                                                        <input type="text" style="display:none;" class="input-text required-entry" title="State/Province" value="" name="region" id="region">
                                                    </div>
                                                </li>
                                                <li>
                                                    <label for="postcode">Zip/Postal Code</label>
                                                    <div class="input-box">
                                                        <input type="text" value="" name="estimate_postcode" id="postcode" class="input-text validate-postcode">
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="buttons-set11">
                                                <button class="button get-quote" onclick="coShippingMethodForm.submit()" title="Get a Quote" type="button"><span>Get a Quote</span></button>
                                            </div>
                                            <!--buttons-set11-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="discount">
                                    <h3>Discount Codes</h3>
                                    <form method="post" action="#couponPost/" id="discount-coupon-form">
                                        <label for="coupon_code">Enter your coupon code if you have one.</label>
                                        <input type="hidden" value="0" id="remove-coupone" name="remove">
                                        <input type="text" value="" name="coupon_code" id="coupon_code" class="input-text fullwidth">
                                        <button value="Apply Coupon" onclick="discountForm.submit(false)" class="button coupon " title="Apply Coupon" type="button"><span>Apply Coupon</span></button>
                                    </form>
                                </div>
                            </div>
                            <div class="totals col-sm-4">
                                <h3>Shopping Cart Total</h3>
                                <div class="inner">
                                    <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
                                        <colgroup>
                                            <col>
                                            <col width="1">
                                        </colgroup>
                                        <tfoot>
                                        <tr>
                                            <td colspan="1" class="a-left" style=""><strong>Grand Total</strong></td>
                                            <td class="a-right" style=""><strong><span class="price">$77.38</span></strong></td>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <tr>
                                            <td colspan="1" class="a-left" style=""> Subtotal </td>
                                            <td class="a-right" style=""><span class="price">$77.38</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <ul class="checkout">
                                        <li>
                                            <button class="button btn-proceed-checkout" title="Proceed to Checkout" type="button"><span>Proceed to Checkout</span></button>
                                        </li>
                                        <br>
                                        <li><a title="Checkout with Multiple Addresses" href="multiple_addresses.html">Checkout with Multiple Addresses</a> </li>
                                        <br>
                                    </ul>
                                </div>
                                <!--inner-->

                            </div>
                        </div>

                        <!--cart-collaterals-->
                        <div class="crosssel">
                            <div class="new_title">
                                <h2>you may be interested</h2>
                            </div>
                            <div class="category-products">
                                <ul class="products-grid">
                                    <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product1.jpg"> </a>
                                                    <div class="box-hover">
                                                        <ul class="add-to-links">
                                                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                            <li><a class="link-compare" href="compare.html"></a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div style="width:80%" class="rating"></div>
                                                                </div>
                                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span> </div>
                                                        </div>
                                                        <div class="action">
                                                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product1.jpg"> </a>
                                                    <div class="box-hover">
                                                        <ul class="add-to-links">
                                                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                            <li><a class="link-compare" href="compare.html"></a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div style="width:80%" class="rating"></div>
                                                                </div>
                                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
                                                        </div>
                                                        <div class="action">
                                                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product1.jpg"> </a>
                                                    <div class="box-hover">
                                                        <ul class="add-to-links">
                                                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                            <li><a class="link-compare" href="compare.html"></a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div style="width:80%" class="rating"></div>
                                                                </div>
                                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span> </div>
                                                        </div>
                                                        <div class="action">
                                                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product1.jpg"> </a>
                                                    <div class="new-label new-top-left">new</div>
                                                    <div class="box-hover">
                                                        <ul class="add-to-links">
                                                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                            <li><a class="link-compare" href="compare.html"></a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div style="width:80%" class="rating"></div>
                                                                </div>
                                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                <!--	///*///======    End article  ========= //*/// -->
            </div>

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
                <div class="col-sm-5 col-xs-12 coppyright"> &copy; 2016 Magikcommerce. All Rights Reserved.</div>
                <div class="col-sm-7 col-xs-12 company-links">
                    <ul class="links">
                        <li><a href="#" title="Magento Themes">HTML Themes</a></li>
                        <li><a href="#" title="Premium Themes">Premium Themes</a></li>
                        <li><a href="#" title="Responsive Themes">Responsive Themes</a></li>
                        <li class="last"><a href="#" title="Magento Extensions">HTML Extensions</a></li>
                    </ul>
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
