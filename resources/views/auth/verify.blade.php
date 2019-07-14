@extends('layout.defaultLayout')

@section('content')

<body class="error-page">

  <!--div Desktop-->
  <div id="page">
    <!-- Header -->
    @include('components.banner')
    @include('components.navbarDesktop')
    <!-- end header -->
    <!-- Main Container -->
    {{!$user=Auth::user()->get()}}
    @if (session('resent'))
        <div class="alert-success" role="alert">
            <h3>{{ __('È stata inviata una ulteriore email di verifica') }}</h3>
        </div>

    @endif

    <section class="main-container col1-layout">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <article class="col-main">
              <div class="content-wrapper">
                <div class="std">
                  <div class="page-not-found">
                    <div class="alert-success">
                      <h3>{{ __('Le è stata inviata una email di verifica all\'indirizzo email.')}}</h3>
                    </div>
                    <div class="content-wrapper">
                      <h4>{{ __('Può procedere alla navigazione all\'interno del sito ma non può effettuare ordini o entrare nel suo profilo personale finchè non avrà effettuato la convalidazione dell\'email.') }}<br>
                      {{ __('Controllare la posta e confermare la registrazione seguendo le indicazioni') }}</h4>
                    </div>
                    <div><a href="{{ route('verification.resend') }}" type="button" class="btn-home"><span>Resend link with email</span></a></div>
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
  <script type="text/javascript" src="{{ asset('js/cloud-zoom.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/menu_up.js') }}"></script>

</body>