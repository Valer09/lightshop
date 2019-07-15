@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

<!--HEAD-->
@section('head')

@endsection

<!--body-->
@section('content')

<body class="multiple-addresses-page">

  <!--div Desktop-->
  <div id="page">
    <!-- Header -->
    @include('components.banner')
    @include('components.navbarDesktop')
    <!-- end header -->
    <!-- Main Container -->
    <section class="main-container col1-layout">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <div class="state_bar">
              <div class="w3-bar">
                <button id="but#ordini" class="button btn-continue first tablink"
                  onclick="openTab(event,'#ordini'); location.href='#ordini'">Orders</button>
                <button id="but#dati" class="button tablink"
                  onclick="openTab(event,'#dati'); location.href='#dati'">Profile</button>
                <button id="but#spedizione" class="button tablink"
                  onclick="openTab(event,'#spedizione'); location.href='#spedizione'">Addresses</button>
                <button id="but#password" class="button tablink"
                  onclick="openTab(event,'#password'); location.href='#password'">Security</button>
              </div>
              <script
                type="text/javascript">decorateGeneric($$('#checkout-progress-state li'), ['first', 'last']);</script>
            </div>
            <article class="col-main">

              <!--======Order=======-->
              <div id="#ordini" class="multiple_addresses">
                <div class="row page-title_multi" style="margin-left: auto;">
                  <h2>My Orders</h2>
                </div>
                <!--page-title_multi-->
                <div class="addresses">
                  <div class="table-responsive">
                    <fieldset class="multiple-checkout">
                      <input type="hidden" id="can_continue_flag" value="0" name="continue">
                      <input type="hidden" id="add_new_address_flag" value="0" name="new_address">
                      Please select shipping address for applicable items
                      <table id="multiship-addresses-table" class="data-table">
                        <colgroup>
                          <col>
                          <col width="1">
                          <col width="1">
                          <col width="1">
                        </colgroup>
                        <thead>
                          <tr class="first last">
                            <th>Product</th>
                            <th class="a-left">Qty</th>
                            <th>Send to</th>
                            <th>Remove</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr class="first last">
                            <td class="a-right last" colspan="100"><button onclick="$('can_continue_flag').value=0"
                                class="button btn-update" type="submit"><span>Update Qty &amp;
                                  Addresses</span></button></td>
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr class="first odd">
                            <td>
                              <h4 class="product-name"><a href="#">Ocean Premium Saline Nasal Spray - 1.5 fl oz</a>
                              </h4>
                            </td>
                            <td><input type="text" class="input-text qty" size="2" value="1" name="ship[0][43][qty]">
                            </td>
                            <td><select title="" class="" id="ship_0_43_address" name="ship[0][43][address]">
                                <option selected="selected" value="1">John Doe, aundh, tyyrt, Alabama 46532, United
                                  States</option>
                              </select></td>
                            <td class="a-center last"><a
                                href="http://demo.magentomagik.com/ma_optima/index.php/checkout/cart/delete"
                                title="Remove item" class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                          </tr>
                          <tr class="odd">
                            <td>
                              <h4 class="product-name"><a href="#">Apple iPod classic 160 GB Silver (7th Generation)
                                  NEWEST MODEL</a></h4>
                            </td>
                            <td><input type="text" class="input-text qty" size="2" value="1" name="ship[2][63][qty]">
                            </td>
                            <td><select title="" class="" id="ship_2_63_address" name="ship[2][63][address]">
                                <option selected="selected" value="1">John Doe, aundh, tyyrt, Alabama 46532, United
                                  States</option>
                              </select></td>
                            <td class="a-center last"><a
                                href="http://demo.magentomagik.com/ma_optima/index.php/checkout/cart/delete"
                                title="&lt;span&gt;Remove item&lt;/span&gt;" class="btn-remove btn-remove2"><span>Remove
                                  item</span></a></td>
                          </tr>
                          <tr class="last even">
                            <td>
                              <h4 class="product-name"><a href="#">Apple MacBook MC516LL/A 13.3-Inch Laptop</a></h4>
                            </td>
                            <td><input type="text" class="input-text qty" size="2" value="1" name="ship[15][4212][qty]">
                            </td>
                            <td><select title="" class="" id="ship_15_4212_address" name="ship[15][4212][address]">
                                <option selected="selected" value="1">John Doe, aundh, tyyrt, Alabama 46532, United
                                  States</option>
                              </select></td>
                            <td class="a-center last"><a
                                href="http://demo.magentomagik.com/ma_optima/index.php/checkout/cart/delete"
                                title="&lt;span&gt;Remove item&lt;/span&gt;" class="btn-remove btn-remove2"><span>Remove
                                  item</span></a></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="buttons-set">
                        <button onclick="$('can_continue_flag').value=1" class="button btn-continue"
                          title="Continue to Shipping Information" type="submit"><span>Continue to Shipping
                            Information</span></button>
                      </div>
                    </fieldset>
                  </div>
                  <!--multiple-checkout-->
                </div>
              </div>
              <!--======End Order=======-->

              <!--======Data=======-->
              <div id="#dati" class="multiple_addresses" style="display:none">
                <div class="page-title_multi">
                  <h2>Profile</h2>
                </div>
                <!--page-title_multi-->
                <div class="title-buttons">
                  <button onclick="$('.popup5').show(); $('.popup2').show();" class="button new-address"
                    title="Enter a New Address" type="button"><span>Edit profile</span></button>
                </div>
                <!--title-buttons-->
                <div class="addresses">
                  <div class="content">
                    <ul class="form-list">
                      <li>
                        <label class="text-info-key">Name:</label>
                        <label class="text-info-value">{{Auth::user()->name}}</label>
                      </li>
                      <li>
                        <label class="text-info-key">Surname:</label>
                        <label class="text-info-value">{{Auth::user()->surname}}</label>
                      </li>
                      <li>
                        <label class="text-info-key">Fiscal Code:</label>
                        <label class="text-info-value">{{strtoupper(Auth::user()->CF)}}</label>
                      </li>
                      <li>
                        <label class="text-info-key">Email:</label>
                        <label class="text-info-value">{{Auth::user()->email}}</label>
                      </li>
                      @if(isset(Auth::user()->IVA))
                      <li>
                        <label class="text-info-key">VAT number:</label>
                        <label class="text-info-value">{{strtoupper(Auth::user()->IVA)}}</label>
                      </li>
                      @endif
                      @if(isset(Auth::user()->PEC))
                      <li>
                        <label class="text-info-key">Email PEC:</label>
                        <label class="text-info-value">{{Auth::user()->PEC}}</label>
                      </li>
                      @endif
                    </ul>
                  </div>
                  <!--multiple-checkout-->
                </div>
              </div>
              <!--======End data=======-->

              <!--======adresses=======-->
              <div id="#spedizione" class="multiple_addresses" style="display:none">
                <form method="post" action="//" id="checkout_multishipping_form">
                  <div class="page-title_multi">
                    <h2>Multiple Addresses</h2>
                  </div>
                  <!--page-title_multi-->
                  <div class="title-buttons">
                    <button onclick="$('.popup5').show(); $('.popup3').show();" class="button new-address"
                      title="Enter a New Address" type="button"><span>Enter a New Address</span></button>
                  </div>
                  <!--title-buttons-->
                  <div class="addresses">
                    <div class="table-responsive">
                      <fieldset class="multiple-checkout">
                        <input type="hidden" id="can_continue_flag" value="0" name="continue">
                        <input type="hidden" id="add_new_address_flag" value="0" name="new_address">
                        Please select shipping address for applicable items
                        <table id="multiship-addresses-table" class="data-table">
                          <colgroup>
                            <col>
                            <col>
                            <col>
                            <col width="1">
                          </colgroup>
                          <thead>
                            <tr class="first last">
                              <th>Name</th>
                              <th>Address</th>
                              <th>City</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr class="first last">
                              <td class="a-right last" colspan="100"></td>
                            </tr>
                          </tfoot>
                          <tbody>
                            {{!$id=Auth::user()->id, !$addresses=App\Address::where('user_id', $id)->get()}}
                            @foreach($addresses as $address)
                            <tr class="first odd">
                              <td>
                                <h4 class="product-name">{{$address->NomeCognome}}</h4>
                              </td>
                              <td>
                                <span>{{$address->street}}, {{$address->street_number}}</span>
                              </td>
                              <td>
                                <span>{{$address->city}} ({{$address->Provincia}}) - {{$address->CAP}}
                                  <br>{{$address->country}}</span>
                              </td>
                              <td class="a-center last">
                                <a href="{{ URL::to('/delete_user_address') }}{{$address->id}}?ref={{$_SERVER['REQUEST_URI']}}"
                                  title="Remove item" class="btn-remove btn-remove2"><span>Remove item</span></a>
                                @if( $address->id == Auth::user()->address_id )
                                <a title="Favorite address" class="btn-favorite btn-yes-favorite"></a>
                                @else
                                <a href="{{ URL::to('/star_address') }}{{$address->id}}"
                                  title="Select this address as a favorite" class="btn-favorite btn-not-favorite"></a>
                                @endif
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </fieldset>
                    </div>
                    <!--multiple-checkout-->
                  </div>
                </form>
              </div>
              <!--==========End addresses============-->

              <!--======password=======-->
              <div id="#password" class="multiple_addresses" style="display:none">
                <div class="page-title_multi">
                  <h2>Password</h2>
                </div>
                <!--page-title_multi-->
                <div class="title-buttons">
                  <button onclick="$('.popup5').show(); $('.popup4').show();" class="button new-address"
                    title="Enter a New Address" type="button"><span>Edit password</span></button>
                </div>
                <div class="addresses">
                  <div class="content">
                    <ul class="form-list">
                      <li>
                        <label class="text-info-key">Password:</label>
                        <label class="text-info-value">********</label>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--==========End password============-->


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
  <script type="text/javascript" src="{{ asset('js/openTabProfile.js') }}"></script>

  <!-------------POPUP------------->
  <!--data profile-->
  <div class="popup1 popup2">
    <div class="newsletter-sign-box">
      <div class="newsletter"><a onclick="$('.popup2').hide(); $('.popup5').hide();"><img
            src="images/f-box-close-icon.png" alt="close" class="x" id="x"></a>
        <form type="submit" method="post" action="{{URL::to('/user_edit')}}?ref={{$_SERVER['REQUEST_URI']}}#dati">
          @csrf
          <h3>Edit profile</h3>
          <fieldset class="col2-set">
            <div class="input-box">
              <ul class="form-list">
                <li>
                  <label>Name: <span class="required">*</span></label>
                  <input class="input-text required-entry form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                    type="text" name="name" value="{{Auth::user()->name}}" required autofocus>
                </li>
                <li>    
                  <label>Surname: <span class="required">*</span></label>
                  <input class="input-text required-entry form-control {{ $errors->has('surname') ? ' is-invalid' : '' }}"
                    type="text" name="surname" value="{{Auth::user()->surname}}" required>
                </li>
                <li>
                  <label>Fiscal Code: <span class="required">*</span></label>
                  <input class="input-text required-entry form-control {{ $errors->has('CF') ? ' is-invalid' : '' }}"
                    type="text" name="CF" value="{{strtoupper(Auth::user()->CF)}}" required>
                </li>
                <li>
                  <label>Email: <span class="required">*</span></label>
                  <input class="input-text required-entry form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                    type="text" name="email" value="{{Auth::user()->email}}" required>
                </li>
                <li>
                  <label>VAT number:</label>
                  <input class="input-text form-control {{ $errors->has('PIVA') ? ' is-invalid' : '' }}"
                    type="text" name="PIVA" value="{{!empty(Auth::user()->IVA) ? strtoupper(Auth::user()->IVA) : ''}}">
                </li>
                <li>
                  <label>Email PEC:</label>
                  <input class="input-text form-control {{ $errors->has('PEC') ? ' is-invalid' : '' }}"
                    type="text" name="pec" value="{{!empty(Auth::user()->PEC) ? Auth::user()->PEC : ''}}">
                </li>
              </ul>
              <button class="button subscribe" title="Save" type="submit"><span>Save</span></button>
            </div>
          </fieldset>
        </form>
      </div>
      <!--newsletter-->
    </div>
  <!--newsletter-sign-box-->
  </div>


  <!--new address-->
  <div class="popup1 popup3">
    <div class="newsletter-sign-box">
      <div class="newsletter"><a onclick="$('.popup5').hide(); $('.popup3').hide();"><img
            src="images/f-box-close-icon.png" alt="close" class="x" id="x"></a>
        <form type="submit" method="post" action="{{URL::to('/address_insertion_submit')}}?ref={{$_SERVER['REQUEST_URI']}}">
          @csrf
          <h3>Edit profile</h3>
          <fieldset class="col2-set">
            <div class="input-box">
              <ul class="form-list">
                <li>
                  <label>Recipient's name and surname : <span class="required">*</span></label>
                  <input class="input-text required-entry"
                    type="text" name="NomeCognome" required autofocus>
                </li>
                <li>    
                  <label>Address: <span class="required">*</span></label>
                  <input class="input-text required-entry"
                    type="text" name="street" required>
                </li>
                <li>
                  <label>Street number: <span class="required">*</span></label>
                  <input class="input-text required-entry"
                    type="text" name="street_number" required>
                </li>
                <li>
                  <label>City: <span class="required">*</span></label>
                  <input class="input-text required-entry"
                    type="text" name="city" required>
                </li>
                <li>
                  <label>Postal Code: <span class="required">*</span></label>
                  <input class="input-text required-entry"
                    type="text" name="CAP" required>
                </li>
                <li>
                  <label>Province/District: <span class="required">*</span></label>
                  <input class="input-text required-entry"
                    type="text" name="Provincia" required>
                </li>
                <li>
                  <label>Country: <span class="required">*</span></label>
                  <select title="Country" class="validate-select"
                    id="country" name="country" required>
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
                </li>
              </ul>
              <button class="button subscribe" title="Save" type="submit"><span>Save</span></button>
            </div>
          </fieldset>
        </form>
      </div>
      <!--newsletter-->
    </div>
    <!--newsletter-sign-box-->
  </div>


  <!--password-->
  <div class="popup1 popup4">
    <div class="newsletter-sign-box">
      <div class="newsletter"><a onclick="$('.popup5').hide(); $('.popup4').hide();"><img
            src="images/f-box-close-icon.png" alt="close" class="x" id="x"></a>
        <form type="submit" method="post" action="{{ URL::to('/password_edit_submit') }}?ref={{$_SERVER['REQUEST_URI']}}">
        @csrf
          <h3>Edit profile</h3>
          <fieldset class="col2-set">
            <div class="input-box">
              <ul class="form-list">
                <li>
                  <label>Old password : <span class="required">*</span></label>
                  <input class="input-text required-entry"
                    name="old_password" type="password" required autofocus>
                </li>
                <li>    
                  <label>New password: <span class="required">*</span></label>
                  <input class="input-text required-entry"
                    name="password" type="password" required>
                </li>
                <li>
                  <label>Repeat new password: <span class="required">*</span></label>
                  <input class="input-text required-entry"
                    name="control_password" autocomplete="off" type="password" required>
                </li>
              </ul>
              <button class="button subscribe" title="Save" type="submit"><span>Save</span></button>
            </div>
          </fieldset>
        </form>
      </div>
      <!--newsletter-->
    </div>
    <!--newsletter-sign-box-->
  </div>
  <!--popup1-->
  <div class="popup1 popup5" id="overlay"></div>
  <!----------END POPUP--------->
</body>