@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

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
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-md-4 col-sm-3 hidden-xs">
          <div class="side-banner"><img src="images/side.jpg" alt="banner"></div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12 home-slider">
          <div id="magik-slideshow" class="magik-slideshow slider-block">
            <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
              <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                <ul>
                  <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                    data-thumb='http://htmldemo.themessoft.com/lilac/version4/images/slide-img1.jpg'> <img src='http://htmldemo.themessoft.com/lilac/version4/images/slide-img1.jpg' alt="slide-img"
                      data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                    <div class="info">
                      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500'
                        data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                        data-elementdelay='0.1' data-endelementdelay='0.1'
                        style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Todays Sale</span>
                      </div>
                      <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500'
                        data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                        data-elementdelay='0.1' data-endelementdelay='0.1'
                        style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>Fairy Style</span>
                      </div>
                      <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500'
                        data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none'
                        data-elementdelay='0.1' data-endelementdelay='0.1'
                        style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>In augue urna, nunc,
                        tincidunt, augue, augue facilisis facilisis.</div>
                      <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500'
                        data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                        data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>
                        <a href='#' class="buy-btn">Shop Now</a> </div>
                    </div>
                  </li>
                  <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                    data-thumb='http://htmldemo.themessoft.com/lilac/version4/images/slide-img2.jpg'> <img src='http://htmldemo.themessoft.com/lilac/version4/images/slide-img2.jpg' alt="slide-img"
                      data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                    <div class="info">
                      <div class='tp-caption ExtraLargeTitle sft slide2  tp-resizeme ' data-endspeed='500'
                        data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none'
                        data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                        style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;padding-right:0px'>
                        <span>Womens Day</span> </div>
                      <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500'
                        data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                        data-elementdelay='0.1' data-endelementdelay='0.1'
                        style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Hottest Deals</div>
                      <div class='tp-caption Title sft  tp-resizeme small_text start ' data-endspeed='500'
                        data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none'
                        data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                        style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.</div>
                      <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500'
                        data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                        data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>
                        <a href='#' class="buy-btn">Buy Now</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="main-container col2-left-layout">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-sm-push-3">
            <div style="overflow:hidden">
              <div class="figure banner-with-effects effect-sadie1 banner-width  with-button"
                style="background-color:#ffffff"><img src="http://htmldemo.themessoft.com/lilac/version4/images/watch.jpg" alt="">
                <div class="figcaption">
                  <div class="banner-content left top"><span
                      style="color: #444444; font-size: 12px; letter-spacing:1px; font-weight:600">DIGITAL
                      LIFE</span><br>
                    <span style="font-size: 24px; color: #000000;">Slim, smart and <br
                        style="color: #000000; font-size: 24px;">
                      beautiful</span></div>
                </div>
                <a href="" style="color:#00aeef" class="left bottom btn_type_1" rel="nofollow">Read more</a>
              </div>
              <div class="figure banner-with-effects effect-sadie1 banner-width  with-button"
                style="background-color:#ffffff"><img src="http://htmldemo.themessoft.com/lilac/version4/images/shoes-banner.jpg" alt="">
                <div class="figcaption">
                  <div class="banner-content left top"><b><span
                        style="color: #444444; font-size: 12px; letter-spacing:1px">TODAYS OFFER</span></b><br>
                    <span style="color: #000000; font-size: 24px; padding-top:5px">Men's shoes <br
                        style="color: #000000; font-size: 24px;">
                      collection</span></div>
                </div>
                <a href="#" style="color:#00aeef" class="left bottom btn_type_1" rel="nofollow">Read more</a>
              </div>
            </div>
            <div class="content-page">

              <!-- featured category -->
              <div class="category-product">
                <div class="navbar nav-menu">
                  <div class="navbar-collapse">
                    <div class="new_title">
                      <h2>Sale</h2>
                    </div>
                    <ul class="nav navbar-nav">
                      {{!$Category = \App\Category::all()}}
                      @php
                        $int = 1;
                      @endphp
                      @foreach($Category as $Ca)
                      @if($int==1)
                      @php
                      $int = $int + 1;
                      @endphp
                      <li class="active"><a data-toggle="tab" href="#tab-{{ $Ca->name }}">{{ $Ca->name }}</a></li>
                      @else
                      <li class=""><a data-toggle="tab" href="#tab-{{ $Ca->name }}" class="active">{{ $Ca->name }}</a></li>
                      @endif
                      @endforeach
                    </ul>
                  </div>
                  <!-- /.navbar-collapse -->

                </div>
                <div class="product-bestseller">
                  <div class="product-bestseller-content">
                    <div class="product-bestseller-list">
                      <div class="tab-container">
                        <!-- tab product -->
                        {{!$Offerts = \App\Offert::allWithKey()}}
                        @foreach($Category as $Cat)
                        <div class="tab-panel active" id="tab-{{$Cat->name}}">
                          <div class="category-products">
                            <ul class="products-grid">
                              @php
                              $conta = 0;
                              @endphp

                              @foreach($Offerts as $of)
                              {{!$el =\App\Element::find($of->id_element)}}
                              @if($of->date_end > date('Y-m-d h:i:sa') && $Cat->name == \App\Subcategory::where('name' ,$el->subcategories)->first()->category)
                              <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                  <div class="item-img">
                                    <div class="item-img-info"> <a class="product-image" title="{{ $el->name }}"
                                        href="{{ url('element').$el->id}}"> <img alt="{{ $el->name }}"
                                          src="{{ asset('storage').$el->pathPhoto }}"> </a>
                                      <div class="new-label new-top-left">new</div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="{{ $el->name }}" href="{{ url('element').$el->id}}">
                                          {{ $el->name }} </a> </div>
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div style="width:80%" class="rating"></div>
                                          </div>
                                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                              class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-content">
                                        <div class="item-price">
                                          <div class="price-box"> <span class="regular-price">
                                            <span class="price" style="color: red">
                                              <b>€ {{ number_format(($el->price - (($el->price)/100*$of->discount_perc)), 2, '.', ',') }}</b><br>
                                            </span>
                                            <label style="text-decoration: line-through">€ {{ number_format($el->price, 2, '.', ',') }}</label>
                                            <label> (-{{$of->discount_perc}}%)</label>
                                          </div>
                                        </div>
                                        <div class="action">
                                          <button class="button btn-cart" type="button" title=""
                                            data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- End  Item inner-->
                              </li>
                              @endif
                              @php
                              $conta++;
                              if($conta >= 8 ) @stop
                              @endphp
                              @endforeach
                            </ul>
                          </div>
                        </div>
                        @endforeach

                        <div class="tab-panel " id="tab-4"> No Products Found !! </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="offer-banner"> <a href="#"><img alt="Banner" src="http://htmldemo.themessoft.com/lilac/version4/images/banner-img.png"></a> </div>
            
            <div class="featured-pro-block">
              <div class="slider-items-products">
                <div class="new-arrivals-block">
                  <div class="block-title">
                    <h2>Featured Product</h2>
                  </div>
                  <div id="new-arrivals-slider" class="product-flexslider hidden-buttons">
                    <div class="home-block-inner"> </div>
                    <div class="slider-items slider-width-col4 products-grid block-content">
                      {{!$Elements = DB::table('elements')->orderBy('created_at', 'desc')->get()}}
                      @for($i = 0; $i < count($Elements) && $i < 16; $i++)
                      {{!$el = $Elements[$i]}}
                      <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="{{ $el->name }}"
                                href="{{ url('element').$el->id }}"> <img alt="{{ $el->name }}"
                                  src="{{ asset('storage').$el->pathPhoto }}"> </a>
                              <div class="new-label new-top-left">new</div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="{{ url('element').$el->id }}"> {{ $el->name }} </a> </div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                    <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span
                                        class="price">$245.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title=""
                                    data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endfor
                      <!-- End Item -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
            <div>
              <div class="sideoffer-banner">

                <a href="#" title="Side Offer Banner">

                  <img class="hidden-xs" src="http://htmldemo.themessoft.com/lilac/version4/images/custom-slide1.jpg" alt="Side Offer Banner"></a>


              </div>
            </div>
            {{!!$hot = \App\Offert::where('date_end', '>', date('Y-m-d h:i:sa'))->orderBy('discount_perc', 'desc')->first()}}
            @if(isset($hot))
            {{!!$hotEl =\App\Element::find($hot->id_element)}}
            <input style="display:none" id="dataFine" value="{{ $hot->date_end }}">
            <div class="hot-deal">
              <ul class="products-grid">
                <li class="right-space two-height item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="{{ url('element').$hotEl->id }}" title="{{ $hotEl->name }}" class="product-image"> <img
                            src="{{ asset('storage').$hotEl->pathPhoto }}" alt="{{ $hotEl->name }}"> </a>
                        <div class="hot-label hot-top-left">Hot Deal</div>
                        <div class="box-timer">
                          <div class="countbox_1 timer-grid"></div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="{{ url('element').$hotEl->id }}" title="{{ $hotEl->name }}"> {{ $hotEl->name }} </a> </div>
                        <div class="item-content">
                          <div class="rating">
                            <div class="ratings">
                              <div class="rating-box">
                                <div class="rating" style="width:80%"></div>
                              </div>
                              <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a
                                  href="#">Add Review</a> </p>
                            </div>
                          </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price">
                              <span class="price" style="color: red">
                                <b>€ {{ number_format(($hotEl->price - (($hotEl->price)/100*$hot->discount_perc)), 2, '.', ',') }}</b><br>
                              </span>
                              <label style="text-decoration: line-through">€ {{ number_format($hotEl->price, 2, '.', ',') }}</label>
                              <label> (-{{$hot->discount_perc}}%)</label>
                            </div>
                          </div>
                          <div class="action">
                            <button data-original-title="Add to Cart" title="" type="button"
                              class="button btn-cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            @endif
            <div class="testimonials">
              <div class="ts-testimonial-widget">
                <div class="slider-items-products">
                  <div id="testimonials-slider" class="product-flexslider hidden-buttons home-testimonials">
                    <div class="slider-items slider-width-col4 fadeInUp owl-carousel owl-theme"
                      style="opacity: 1; display: block;">

                      <div class="holder">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lid est laborum dolo rumes fugats
                          untras. dolore magna aliquam erat volutpat. Aenean est auctorwisiet urna. Aliquam erat
                          volutpat...</p>
                        <div class="testimonial-arrow-down"></div>
                        <div class="thumb">
                          <div class="customer-img"> <img src="images/photo1.jpg" alt="Saraha Smith"> </div>
                          <div class="customer-bio"> <strong class="name"><a href="#" target="_blank">Saraha
                                Smith</a></strong> <span>Happy Customer</span> </div>
                        </div>
                      </div>

                      <div class="holder">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lid est laborum dolo rumes fugats
                          untras. dolore magna aliquam erat volutpat. Aenean est auctorwisiet urna. Aliquam erat
                          volutpat...</p>
                        <div class="testimonial-arrow-down"></div>
                        <div class="thumb">
                          <div class="customer-img"> <img src="images/photo.jpg" alt="Stephen Doe"> </div>
                          <div class="customer-bio"> <strong class="name"><a href="#" target="_blank">Stephen
                                Doe</a></strong> <span>Happy Customer</span> </div>
                        </div>
                      </div>

                      <div class="holder">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lid est laborum dolo rumes fugats
                          untras. dolore magna aliquam erat volutpat. Aenean est auctorwisiet urna. Aliquam erat
                          volutpat...</p>
                        <div class="testimonial-arrow-down"></div>
                        <div class="thumb">
                          <div class="customer-img"> <img src="images/photo1.jpg" alt="Mark doe"> </div>
                          <div class="customer-bio"> <strong class="name"><a href="#" target="_blank">Mark
                                doe</a></strong> <span>Happy Customer</span> </div>
                        </div>
                      </div>

                      <div class="holder">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lid est laborum dolo rumes fugats
                          untras. dolore magna aliquam erat volutpat. Aenean est auctorwisiet urna. Aliquam erat
                          volutpat...</p>
                        <div class="testimonial-arrow-down"></div>
                        <div class="thumb">
                          <div class="customer-img"> <img src="images/photo.jpg" alt="John Doe"> </div>
                          <div class="customer-bio"> <strong class="name"><a href="#" target="_blank">John
                                Doe</a></strong> <span>Happy Customer</span> </div>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="featured-add-box">
              <div class="featured-add-inner"> <a href="#"> <img src="images/hot.jpg" alt="f-img"></a>
                <div class="banner-content">
                  <div class="banner-text">Electronics</div>
                  <div class="banner-text1">20% off</div>
                  <p>limited time offer</p>
                  <a href="#" class="view-bnt">Shop now</a>
                </div>
              </div>
            </div>

            <div>
              <div class="our-features-box">
                <div class="row">
                  <div class="col-lg-12 space">
                    <div class="feature-box first"> <span class="fa fa-truck"></span>
                      <div class="content">
                        <h3>Worldwide Delivery</h3>
                        <p>Lorem ipsum dolor sit amet</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 space">
                    <div class="feature-box"> <span class="fa fa-headphones"></span>
                      <div class="content">
                        <h3>Help Center</h3>
                        <p>Lorem ipsum dolor sit amet</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 space">
                    <div class="feature-box"> <span class="fa fa-share"></span>
                      <div class="content">
                        <h3>Easy RETURNS</h3>
                        <p>Lorem ipsum dolor sit amet</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 space">
                    <div class="feature-box last"> <span class="fa fa-phone"></span>
                      <div class="content">
                        <h3>Helpline +0800 567 345</h3>
                        <p>Lorem ipsum dolor sit amet</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </aside>
        </div>
      </div>
    </section>
    
    <!--footer Desktop-->
    @include('components.footerDesktop')
    <!-- End Footer Desktop -->
  </div>

  <!--div Mobile Menu-->
  <div id="mobile-menu">
  @include('components.navbarMobile')
  </div>

  <!-- JavaScript -->
  <script type="text/javascript" src="{{ url('js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/revslider.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/common.js') }}"></script>

  <script type="text/javascript" src="{{ url('js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/jquery.mobile-menu.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/countdown.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/home.js') }}"></script>

</body>
@endsection
