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
                <h2>About Us</h2>
              </div>
              <div class="static-contain">
                <p>Created by the evolution of AnsaldoBreda, the most important Italian brand with more than 160 years of history in the rail and metro sector, previously Hitachi Rail Italy, today Hitachi Rail Spa has a wide range of products, ranging from high speed to driverless metros.
                  Among these the best known is the ETR1000, developed in partnership with Bombardier, the very high speed train capable of reaching 350 km/h on the rail network and currently in operation in Italy for FSI-Trenitalia customer.
                  In the segment of local public transport Hitachi Rail SpA is the world leader for the driverless metros, holding about the 30% of the world market.</p>
                <br>
                <p>In the field of regional trains Hitachi Rail manufactures the Vivalto, successful example of double-deck vehicle and operating in most of Italy, and the TSR, high-capacity train in operation in Lombardy.
                  Hitachi Rail is present in many countries of the world, among which - beyond Italy of course - in the Far East and in USA.</p>
                <br>
                <p>At Website.com, we believe everyone deserves to have a website or online store. Innovation and simplicity makes us happy: our goal is to remove any technical or financial barriers that can prevent business owners from making their own website. We're excited to help you on your journey!</p>
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
                  <li class="item odd"><strong>About Us</strong></li>
                  <li class="item even"><a href="{{ url('sitemap') }}">Sitemap</a></li>
                  <li class="item  odd"><a href="#">Terms of Service</a></li>
                  <li class="item even"><a href="#">Search Terms</a></li>
                  <li class="item last"><a href="{{ url('contact') }}">Contact Us</a></li>
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