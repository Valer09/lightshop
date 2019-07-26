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
                    <div class="content-wrapper">
                        <div class="alert-success">
                            <h3>{{ __('Email Verificata con successo.')}}</h3>
                        </div>
                    </div>
                    <div><a href="{{URL::to('home')}}" type="button" class="btn-home"><span>Home</span></a></div>
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

</body>