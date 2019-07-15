@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/flexslider.css') }}">
@endsection

@section('content')

<body class="shopping-cart-page">
    <div id="page">

        <!-- Header -->
        @include('components.banner')
        @include('components.navbarDesktop')
        <!-- end header -->

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
                                            @if(Session::has('cart') && count($elements) > 0 )
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
                                                        <th colspan="1" class="a-center"><span class="nobr">Unit
                                                                Price</span></th>
                                                        <th class="a-center" rowspan="1">Qty</th>
                                                        <th colspan="1" class="a-center">Subtotal</th>
                                                        <th class="a-center" rowspan="1">&nbsp;</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr class="first last">
                                                        <td class="a-right last" colspan="50"><button
                                                                onclick="setLocation('#')" class="button btn-continue"
                                                                title="Continue Shopping" type="button"><span>Continue
                                                                    Shopping</span></button>
                                                            <button class="button btn-update" title="Update Cart"
                                                                value="update_qty" name="update_cart_action"
                                                                type="submit"><span>Update Cart</span></button>
                                                            <button id="empty_cart_button" class="button btn-empty"
                                                                title="Clear Cart" value="empty_cart"
                                                                name="update_cart_action" type="submit"><span>Clear
                                                                    Cart</span></button></td>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @foreach($elements as $el)
                                                    <tr class="first odd">
                                                        <td class="image"><a class="product-image"
                                                                title="{{ $el['item']->name }}"
                                                                href="{{ url('element').$el['item']->id }}"><img
                                                                    width="75" alt="{{ $el['item']->name }}"
                                                                    src="{{ asset('storage').$el['item']->pathPhoto }}"></a>
                                                        </td>
                                                        <td>
                                                            <h2 class="product-name"> <a
                                                                    href="{{ url('element').$el['item']->id }}">{{ $el['item']->name }}</a>
                                                            </h2>
                                                        </td>
                                                        <td class="a-center"><a title="Edit item parameters"
                                                                class="edit-bnt" href="#configure/id/15945/"></a></td>
                                                        <td class="a-right">
                                                            <span class="cart-price">
                                                                @if(array_key_exists($el['item']->id, $Offerts))
                                                                <p class="old-price"><span
                                                                        class="price">€{{ number_format($el['item']->price, 2, '.', ',') }}</span>
                                                                </p>
                                                                <br><span
                                                                    class="price">€{{ number_format(($el['item']->price - (($el['item']->price)/100*$Offerts[$el['item']->id]->discount_perc)), 2, '.', ',') }}</span>
                                                                @else
                                                                <span
                                                                    class="price">€{{ number_format($el['item']->price, 2, '.', ',') }}</span>
                                                                @endif
                                                            </span>
                                                        </td>
                                                        <td class="a-center movewishlist">
                                                            <div class="product_count">
                                                                <input type="text" name="qty" maxlength="12"
                                                                    value="{{ $el['qty'] }}" title="Quantity:"
                                                                    class="input-text qty">
                                                                <button
                                                                    onclick="location.href='{{ route('Element.getincreased', ['id' => $el['item']->id]) }}'"
                                                                    class="increase items-count" type="button"><i
                                                                        class="fa fa-angle-up"></i></button>
                                                                <button
                                                                    onclick="location.href='{{ route('Element.getdecreased', ['id' => $el['item']->id]) }}'"
                                                                    class="reduced items-count" type="button"><i
                                                                        class="fa fa-angle-down"></i></button>
                                                            </div>
                                                        </td>
                                                        @if(array_key_exists($el['item']->id, $Offerts))
                                                        <td class="a-right movewishlist"><span class="cart-price"> <span
                                                                    class="price">€{{ number_format($el['qty'] * ($el['item']->price - (($el['item']->price)/100*$Offerts[$el['item']->id]->discount_perc)), 2, '.', ',') }}</span>
                                                            </span></td>
                                                        @else
                                                        <td class="a-right movewishlist"><span class="cart-price"> <span
                                                                    class="price">€{{ number_format($el['qty'] * $el['item']->price, 2, '.', ',') }}</span>
                                                            </span></td>
                                                        @endif
                                                        <td class="a-center last"><a class="button remove-item"
                                                                title="Remove item"
                                                                href="{{ route('Element.delToCart', ['id' => $el['item']->id]) }}"><span><span>Remove
                                                                        item</span></span></a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            @else
                                            <div class="a-center">
                                                <span>There are no products in the cart.</span>
                                            </div>
                                            @endif
                                        </fieldset>
                                    </form>
                                </div>
                                <!-- BEGIN CART COLLATERALS -->
                                @if(Session::has('cart') && count($elements) > 0 )
                                <div class="cart-collaterals row">
                                    <div class="col-sm-6">
                                        <div class="shipping">
                                            <h3>Estimate Shipping and Tax</h3>
                                            <div class="shipping-form">
                                                <form id="shipping-zip-form" method="post" action="#estimatePost/">
                                                    <p>Enter your destination to get a shipping estimate.</p>
                                                    <ul class="form-list">
                                                        <li>
                                                            <label for="region_id">Estimated weight of the
                                                                package</label>
                                                            <label>
                                                                <h4>{{ $totalWeight }} Kg</h4>
                                                            </label>
                                                        </li>
                                                        <hr>
                                                        <li>
                                                            <label class="required"
                                                                for="country">Country</label>
                                                            <div class="input-box">
                                                                <select title="Country" class="validate-select"
                                                                    id="country" name="country_id">
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
                                                        </li>
                                                    </ul>
                                                    <div class="buttons-set11">
                                                        <button class="button get-quote"
                                                            onclick="coShippingMethodForm.submit()" title="Get a Quote"
                                                            type="button"><span>Get a Quote</span></button>
                                                    </div>
                                                    <!--buttons-set11-->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="totals col-sm-6">
                                        <h3>Shopping Cart Total</h3>
                                        <div class="inner">

                                            <table class="table shopping-cart-table-total"
                                                id="shopping-cart-totals-table">
                                                <colgroup>
                                                    <col>
                                                    <col width="1">
                                                </colgroup>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="1" class="a-left" style=""><strong>Grand
                                                                Total</strong></td>
                                                        <td class="a-right" style=""><strong><span
                                                                    class="price">$77.38</span></strong></td>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="1" class="a-left" style=""> Subtotal </td>
                                                        <td class="a-right" style=""><span
                                                                class="price">€{{ number_format($totalPrice, 2, ',', '.') }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="1" class="a-left" style=""> Discount </td>
                                                        <td class="a-right" style=""><span class="price">-
                                                                €{{ number_format($totalPrice, 2, ',', '.') }}</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <ul class="checkout">
                                                <li>
                                                    <button onclick="location.href='{{ route('checkout') }}'"
                                                        class="button btn-proceed-checkout" title="Proceed to Checkout"
                                                        type="button"><span>Proceed to Checkout</span></button>
                                                </li>
                                                <br>
                                            </ul>
                                        </div>
                                        <!--inner-->
                                    </div>
                                </div>
                                @endif

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
                                                        <div class="item-img-info"> <a class="product-image"
                                                                title="Retis lapen casen" href="product_detail.html">
                                                                <img alt="Retis lapen casen"
                                                                    src="products-images/product1.jpg"> </a>
                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li><a class="link-quickview"
                                                                            href="quick_view.html"></a> </li>
                                                                    <li><a class="link-wishlist"
                                                                            href="wishlist.html"></a> </li>
                                                                    <li><a class="link-compare" href="compare.html"></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Retis lapen casen"
                                                                    href="product_detail.html"> Retis lapen casen </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:80%" class="rating"></div>
                                                                        </div>
                                                                        <p class="rating-links"> <a href="#">1
                                                                                Review(s)</a> <span
                                                                                class="separator">|</span> <a
                                                                                href="#">Add Review</a> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price">
                                                                            <span class="price">$155.00</span> </span>
                                                                    </div>
                                                                </div>
                                                                <div class="action">
                                                                    <button class="button btn-cart" type="button"
                                                                        title=""
                                                                        data-original-title="Add to Cart"><span>Add to
                                                                            Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image"
                                                                title="Retis lapen casen" href="product_detail.html">
                                                                <img alt="Retis lapen casen"
                                                                    src="products-images/product1.jpg"> </a>
                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li><a class="link-quickview"
                                                                            href="quick_view.html"></a> </li>
                                                                    <li><a class="link-wishlist"
                                                                            href="wishlist.html"></a> </li>
                                                                    <li><a class="link-compare" href="compare.html"></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Retis lapen casen"
                                                                    href="product_detail.html"> Retis lapen casen </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:80%" class="rating"></div>
                                                                        </div>
                                                                        <p class="rating-links"> <a href="#">1
                                                                                Review(s)</a> <span
                                                                                class="separator">|</span> <a
                                                                                href="#">Add Review</a> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price">
                                                                            <span class="price">$225.00</span> </span>
                                                                    </div>
                                                                </div>
                                                                <div class="action">
                                                                    <button class="button btn-cart" type="button"
                                                                        title=""
                                                                        data-original-title="Add to Cart"><span>Add to
                                                                            Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image"
                                                                title="Retis lapen casen" href="product_detail.html">
                                                                <img alt="Retis lapen casen"
                                                                    src="products-images/product1.jpg"> </a>
                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li><a class="link-quickview"
                                                                            href="quick_view.html"></a> </li>
                                                                    <li><a class="link-wishlist"
                                                                            href="wishlist.html"></a> </li>
                                                                    <li><a class="link-compare" href="compare.html"></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Retis lapen casen"
                                                                    href="product_detail.html"> Retis lapen casen </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:80%" class="rating"></div>
                                                                        </div>
                                                                        <p class="rating-links"> <a href="#">1
                                                                                Review(s)</a> <span
                                                                                class="separator">|</span> <a
                                                                                href="#">Add Review</a> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price">
                                                                            <span class="price">$99.00</span> </span>
                                                                    </div>
                                                                </div>
                                                                <div class="action">
                                                                    <button class="button btn-cart" type="button"
                                                                        title=""
                                                                        data-original-title="Add to Cart"><span>Add to
                                                                            Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image"
                                                                title="Retis lapen casen" href="product_detail.html">
                                                                <img alt="Retis lapen casen"
                                                                    src="products-images/product1.jpg"> </a>
                                                            <div class="new-label new-top-left">new</div>
                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li><a class="link-quickview"
                                                                            href="quick_view.html"></a> </li>
                                                                    <li><a class="link-wishlist"
                                                                            href="wishlist.html"></a> </li>
                                                                    <li><a class="link-compare" href="compare.html"></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Retis lapen casen"
                                                                    href="product_detail.html"> Retis lapen casen </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:80%" class="rating"></div>
                                                                        </div>
                                                                        <p class="rating-links"> <a href="#">1
                                                                                Review(s)</a> <span
                                                                                class="separator">|</span> <a
                                                                                href="#">Add Review</a> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <p class="special-price"> <span
                                                                                class="price-label">Special Price</span>
                                                                            <span class="price"> $156.00 </span> </p>
                                                                        <p class="old-price"> <span
                                                                                class="price-label">Regular
                                                                                Price:</span> <span class="price">
                                                                                $167.00 </span> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="action">
                                                                    <button class="button btn-cart" type="button"
                                                                        title=""
                                                                        data-original-title="Add to Cart"><span>Add to
                                                                            Cart</span> </button>
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

</body>
@endsection