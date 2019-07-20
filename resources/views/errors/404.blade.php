@extends('layout.defaultLayout')
@section('title', 'Error')

<!--HEAD-->
@section('head')

@endsection

<!--body-->
@section('content')

<body class="cms-index-index cms-home-page">
  
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
          <article class="col-main">
            <div class="content-wrapper">
              <div class="std">
                <div class="page-not-found">
                  <h2>404</h2>
                  <h3><img src="{{ asset('images/signal.png') }}">Oops! The Page you requested was not found!</h3>
                  <h3>{{ $exception->getMessage() }}</h3>
                  <div><a href="{{ url('/') }}" type="button" class="btn-home"><span>Back To Home</span></a></div>
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

