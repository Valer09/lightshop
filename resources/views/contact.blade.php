@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')
@endsection

@section('content')

<body class="cms-index-index cms-home-page">

  <!--div Desktop-->
  <div id="page">
    <!-- Header -->
    @include('components.banner')
    @include('components.navbarDesktop')
    <!-- end header -->

    <!-- Main Container -->
    <section class="main-container col2-left-layout">
      <div class="container">
        <div class="row">



          <div class="col-sm-9 col-sm-push-3">
            <article class="col-main">
              <div class="page-title">
                <h2>Contact Us</h2>
              </div>
              <div class="static-contain">
                <fieldset class="group-select">
                  <ul>
                    <li id="billing-new-address-form">
                      <fieldset>
                        <input type="hidden" name="billing[address_id]" value="" id="billing:address_id">
                        <ul>
                          <li>
                            <div class="customer-name">
                              <div class="input-box name-firstname">
                                <label for="billing:firstname"> First Name<span class="required">*</span></label>
                                <br>
                                <input type="text" id="billing:firstname" name="billing[firstname]" value=""
                                  title="First Name" class="input-text ">
                              </div>
                              <div class="input-box name-lastname">
                                <label for="billing:lastname"> Email Address <span class="required">*</span> </label>
                                <br>
                                <input type="text" id="billing:lastname" name="billing[lastname]" value=""
                                  title="Last Name" class="input-text">
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="input-box">
                              <label for="billing:company">Company</label>
                              <br>
                              <input type="text" id="billing:company" name="billing[company]" value="" title="Company"
                                class="input-text">
                            </div>
                            <div class="input-box">
                              <label for="billing:email">Telephone <span class="required">*</span></label>
                              <br>
                              <input type="text" name="billing[email]" id="billing:email" value="" title="Email Address"
                                class="input-text validate-email">
                            </div>
                          </li>
                          <li>
                            <label for="billing:street1">Address <span class="required">*</span></label>
                            <br>
                            <input type="text" title="Street Address" name="billing[street][]"
                              id="billing:street1  street1" value="" class="input-text required-entry">
                          </li>
                          <li>
                            <input type="text" title="Street Address 2" name="billing[street][]"
                              id="billing:street2 street2" value="" class="input-text required-entry">
                          </li>
                          <li class="">
                            <label for="comment">Comment<em class="required">*</em></label>
                            <br>
                            <div style="float:none" class="">
                              <textarea name="comment" id="comment" title="Comment" class="required-entry input-text"
                                cols="5" rows="3"></textarea>
                            </div>
                          </li>
                        </ul>
                      </fieldset>
                    </li>
                    <p class="require"><em class="required">* </em>Required Fields</p>
                    <input type="text" name="hideit" id="hideit" value="" style="display:none !important;">
                    <div class="buttons-set">
                      <button type="submit" title="Submit" class="button submit"> <span> Submit </span> </button>
                    </div>
                  </ul>
                </fieldset>
              </div>
            </article>
            <!--	///*///======    End article  ========= //*/// -->
          </div>
          <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
            <div class="side-banner"><img src="images/side-banner.jpg" alt="banner"></div>
            <div class="block block-company">
              <div class="block-title">Company </div>
              <div class="block-content">
                <ol id="recently-viewed-items">
                  <li class="item odd"><a href="#">About Us</a></li>
                  <li class="item even"><a href="#">Sitemap</a></li>
                  <li class="item  odd"><a href="#">Terms of Service</a></li>
                  <li class="item even"><a href="#">Search Terms</a></li>
                  <li class="item last"><strong>Contact Us</strong></li>
                </ol>
              </div>
            </div>
          </aside>
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