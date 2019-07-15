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
                  <input class="input-text required-entry"
                    type="text" name="country" required>
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