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
                <button id="but#ordini" class="button btn-continue first tablink" onclick="openTab(event,'#ordini'); location.href='#ordini'">Orders</button>
                <button id="but#dati" class="button tablink" onclick="openTab(event,'#dati'); location.href='#dati'">Profile</button>
                <button id="but#spedizione" class="button tablink" onclick="openTab(event,'#spedizione'); location.href='#spedizione'">Addresses</button>
                <button id="but#password" class="button tablink" onclick="openTab(event,'#password'); location.href='#password'">Security</button>
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
                                title="&lt;span&gt;Remove item&lt;/span&gt;"
                                class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                          </tr>
                          <tr class="last even">
                            <td>
                              <h4 class="product-name"><a href="#">Apple MacBook MC516LL/A 13.3-Inch Laptop</a></h4>
                            </td>
                            <td><input type="text" class="input-text qty" size="2" value="1"
                                name="ship[15][4212][qty]"></td>
                            <td><select title="" class="" id="ship_15_4212_address" name="ship[15][4212][address]">
                                <option selected="selected" value="1">John Doe, aundh, tyyrt, Alabama 46532, United
                                  States</option>
                              </select></td>
                            <td class="a-center last"><a
                                href="http://demo.magentomagik.com/ma_optima/index.php/checkout/cart/delete"
                                title="&lt;span&gt;Remove item&lt;/span&gt;"
                                class="btn-remove btn-remove2"><span>Remove item</span></a></td>
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
                <form method="post" action="//" id="checkout_multishipping_form">
                  <div class="page-title_multi">
                    <h2>Profile</h2>
                  </div>
                  <!--page-title_multi-->
                  <div class="title-buttons">
                    <button onclick="$('.popup1').show(); $('.popup2').show();" class="button new-address" title="Enter a New Address" 
                      type="button"><span>Edit profile</span></button>
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
                            <tr class="even">
                              <td>
                                <h4 class="product-name"><a href="#">Apple iPod classic 160 GB Silver (7th Generation)
                                    NEWEST MODEL</a></h4>
                              </td>
                              <td><input type="text" class="input-text qty" size="2" value="1" name="ship[1][63][qty]">
                              </td>
                              <td><select title="" class="" id="ship_1_63_address" name="ship[1][63][address]">
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
                                  title="&lt;span&gt;Remove item&lt;/span&gt;"
                                  class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                            </tr>
                            <tr class="last even">
                              <td>
                                <h4 class="product-name"><a href="#">Apple MacBook MC516LL/A 13.3-Inch Laptop</a></h4>
                              </td>
                              <td><input type="text" class="input-text qty" size="2" value="1"
                                  name="ship[15][4212][qty]"></td>
                              <td><select title="" class="" id="ship_15_4212_address" name="ship[15][4212][address]">
                                  <option selected="selected" value="1">John Doe, aundh, tyyrt, Alabama 46532, United
                                    States</option>
                                </select></td>
                              <td class="a-center last"><a
                                  href="http://demo.magentomagik.com/ma_optima/index.php/checkout/cart/delete"
                                  title="&lt;span&gt;Remove item&lt;/span&gt;"
                                  class="btn-remove btn-remove2"><span>Remove item</span></a></td>
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
                </form>
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
                    <button onclick="$('.popup1').show(); $('.popup3').show();" class="button new-address" title="Enter a New Address" 
                      type="button"><span>Enter a New Address</span></button>
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
                            <tr class="even">
                              <td>
                                <h4 class="product-name"><a href="#">Apple iPod classic 160 GB Silver (7th Generation)
                                    NEWEST MODEL</a></h4>
                              </td>
                              <td><input type="text" class="input-text qty" size="2" value="1" name="ship[1][63][qty]">
                              </td>
                              <td><select title="" class="" id="ship_1_63_address" name="ship[1][63][address]">
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
                                  title="&lt;span&gt;Remove item&lt;/span&gt;"
                                  class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                            </tr>
                            <tr class="last even">
                              <td>
                                <h4 class="product-name"><a href="#">Apple MacBook MC516LL/A 13.3-Inch Laptop</a></h4>
                              </td>
                              <td><input type="text" class="input-text qty" size="2" value="1"
                                  name="ship[15][4212][qty]"></td>
                              <td><select title="" class="" id="ship_15_4212_address" name="ship[15][4212][address]">
                                  <option selected="selected" value="1">John Doe, aundh, tyyrt, Alabama 46532, United
                                    States</option>
                                </select></td>
                              <td class="a-center last"><a
                                  href="http://demo.magentomagik.com/ma_optima/index.php/checkout/cart/delete"
                                  title="&lt;span&gt;Remove item&lt;/span&gt;"
                                  class="btn-remove btn-remove2"><span>Remove item</span></a></td>
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
                </form>
              </div>
              <!--==========End addresses============-->

              <!--======password=======-->
              <div id="#password" class="multiple_addresses" style="display:none">
                <form method="post" action="//" id="checkout_multishipping_form">
                  <div class="page-title_multi">
                    <h2>Password</h2>
                  </div>
                  <!--page-title_multi-->
                  <div class="title-buttons">
                    <button onclick="$('.popup1').show(); $('.popup4').show();" class="button new-address" title="Enter a New Address" 
                      type="button"><span>Edit password</span></button>
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
                            <tr class="even">
                              <td>
                                <h4 class="product-name"><a href="#">Apple iPod classic 160 GB Silver (7th Generation)
                                    NEWEST MODEL</a></h4>
                              </td>
                              <td><input type="text" class="input-text qty" size="2" value="1" name="ship[1][63][qty]">
                              </td>
                              <td><select title="" class="" id="ship_1_63_address" name="ship[1][63][address]">
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
                                  title="&lt;span&gt;Remove item&lt;/span&gt;"
                                  class="btn-remove btn-remove2"><span>Remove item</span></a></td>
                            </tr>
                            <tr class="last even">
                              <td>
                                <h4 class="product-name"><a href="#">Apple MacBook MC516LL/A 13.3-Inch Laptop</a></h4>
                              </td>
                              <td><input type="text" class="input-text qty" size="2" value="1"
                                  name="ship[15][4212][qty]"></td>
                              <td><select title="" class="" id="ship_15_4212_address" name="ship[15][4212][address]">
                                  <option selected="selected" value="1">John Doe, aundh, tyyrt, Alabama 46532, United
                                    States</option>
                                </select></td>
                              <td class="a-center last"><a
                                  href="http://demo.magentomagik.com/ma_optima/index.php/checkout/cart/delete"
                                  title="&lt;span&gt;Remove item&lt;/span&gt;"
                                  class="btn-remove btn-remove2"><span>Remove item</span></a></td>
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
                </form>
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
      <div class="newsletter"><a onclick="$('.popup2').hide(); $('.popup1').hide();"><img src="images/f-box-close-icon.png" alt="close" class="x"
            id="x"></a>
        <div style="display:none;" id="formSuccess1">Thank you for your subscription.</div>
        <form class="email-form" name="popup-newsletter" id="popup-newsletter" method="post">
          <h3>Newsletter Sign up</h3>
          <h4>sign up for our exclusive email list and be the first to hear of special promotions, new arrivals, and
            designer news.</h4>
          <div class="newsletter-form">
            <div class="input-box">
              <input type="text" class="input-text required-entry validate-email" placeholder="Enter your email address"
                title="Sign up for our newsletter" id="newsletter2" name="email">
              <button class="button subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
              <img style="display:none;margin-left:120px;margin-top:10px;" id="loader1" alt="Loading"
                src="images/loading.gif"> </div>
            <!--input-box-->
          </div>
          <!--newsletter-form-->
          <label class="subscribe-bottom">
            <input type="checkbox" id="notshowpopup" name="notshowpopup">
            Don’t show this popup again</label>
        </form>
      </div>
      <!--newsletter-->
    </div>
    <!--newsletter-sign-box-->
  </div>


  <!--new address-->
  <div class="popup1 popup3">
    <div class="newsletter-sign-box">
      <div class="newsletter"><a onclick="$('.popup1').hide(); $('.popup3').hide();"><img src="images/f-box-close-icon.png" alt="close" class="x"
            id="x"></a>
        <div style="display:none;" id="formSuccess1">Thank you for your subscription.</div>
        <form class="email-form" name="popup-newsletter" id="popup-newsletter" method="post">
          <h3>Newsletter Sign up</h3>
          <h4>sign up for our exclusive email list and be the first to hear of special promotions, new arrivals, and
            designer news.</h4>
          <div class="newsletter-form">
            <div class="input-box">
              <input type="text" class="input-text required-entry validate-email" placeholder="Enter your email address"
                title="Sign up for our newsletter" id="newsletter2" name="email">
              <button class="button subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
              <img style="display:none;margin-left:120px;margin-top:10px;" id="loader1" alt="Loading"
                src="images/loading.gif"> </div>
            <!--input-box-->
          </div>
          <!--newsletter-form-->
          <label class="subscribe-bottom">
            <input type="checkbox" id="notshowpopup" name="notshowpopup">
            Don’t show this popup again</label>
        </form>
      </div>
      <!--newsletter-->
    </div>
    <!--newsletter-sign-box-->
  </div>


  <!--password-->
  <div class="popup1 popup4">
    <div class="newsletter-sign-box">
      <div class="newsletter"><a onclick="$('.popup1').hide(); $('.popup4').hide();"><img src="images/f-box-close-icon.png" alt="close" class="x"
            id="x"></a>
        <div style="display:none;" id="formSuccess1">Thank you for your subscription.</div>
        <form class="email-form" name="popup-newsletter" id="popup-newsletter" method="post">
          <h3>Newsletter Sign up</h3>
          <h4>sign up for our exclusive email list and be the first to hear of special promotions, new arrivals, and
            designer news.</h4>
          <div class="newsletter-form">
            <div class="input-box">
              <input type="text" class="input-text required-entry validate-email" placeholder="Enter your email address"
                title="Sign up for our newsletter" id="newsletter2" name="email">
              <button class="button subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
              <img style="display:none;margin-left:120px;margin-top:10px;" id="loader1" alt="Loading"
                src="images/loading.gif"> </div>
            <!--input-box-->
          </div>
          <!--newsletter-form-->
          <label class="subscribe-bottom">
            <input type="checkbox" id="notshowpopup" name="notshowpopup">
            Don’t show this popup again</label>
        </form>
      </div>
      <!--newsletter-->
    </div>
    <!--newsletter-sign-box-->
  </div>
  <!--popup1-->
  <div class="popup1" id="overlay"></div>
  <!----------END POPUP--------->
</body>