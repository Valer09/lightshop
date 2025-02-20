@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')

<!--Plugin Slider-->
<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
<link rel="stylesheet" href="{{ asset('/css/catalogMediaQuery.css') }}" />
<!-- end Plugin slider-->
@endsection

@section('content')

<body class="grid-page">
  <div id="page">
    <!-- Header -->
    @include('components.banner')
    @include('components.navbarDesktop')
    <!-- end header -->

    {{!$Offerts = \App\Offert::allWithKey()}}

    <!-- Main Container -->
    <section class="main-container col2-left-layout">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-sm-push-3">
            <!-- Breadcrumbs -->
            @if($Category != null)
            <div class="breadcrumbs">
              <ul>
                <li class="home"> <a href="{{ url('home') }}" title="Go to Home Page">Home</a> <span>/</span> </li>
                <li class="category1599"> <a href="{{ url('catalog-').$Category[0]->name }}"
                    title="">{{ $Category[0]->name }}</a></li>
                @if($Category[1] != null || !empty($Category[1]) || $Category[1] != '')
                <li class="category1600"> <span>/ </span> <a
                    href="{{ url('catalog-').$Category[0]->name.'/'.$Category[1] }}" title="">{{ $Category[1] }}</a>
                </li>
                @endif
              </ul>
            </div>
            @endif
            <!-- Breadcrumbs End -->
            <div class="page-title">
              <h2 class="page-heading"> <span
                  class="page-heading-title">{{ empty($Category[0]->name) ? 'Results for "'.$search.'"' : $Category[0]->name }}</span>
              </h2>
            </div>

            @include('components.bannerFoto')
            
            <article class="col-main">
              <div class="toolbar">
                <div class="display-product-option">
                  <div class="pages">
                    <label>Page:</label>
                    <ul class="pagination">
                      @if(Request::input('page') > 1 && !empty(Request::input('page')))
                      <li><a href="{!! Request::fullUrlWithQuery(['page'=>Request::input('page') - 1]) !!}">&laquo;</a>
                      </li>
                      @endif
                      <li class="{{Request::input('page') == 1 || empty(Request::input('page')) ? 'active' : ''}}"><a
                          href="{!! Request::fullUrlWithQuery(['page'=>1]) !!}">1</a></li>
                      @for($it = 2 ; $it <= $Elements->lastPage() ; $it++)
                        <li class="{{Request::input('page') == $it ? 'active' : ''}}"><a
                            href="{!! Request::fullUrlWithQuery(['page'=>$it]) !!}">{{ $it }}</a></li>
                        @endfor
                        @if(Request::input('page') < $Elements->lastPage() && !($Elements->currentPage() == 1 &&
                          $Elements->lastPage() == 1))
                          <li><a
                              href="{!! Request::fullUrlWithQuery(['page'=>(empty(Request::input('page')) ? 2 : Request::input('page') + 1)]) !!}">&raquo;</a>
                          </li>
                          @endif
                    </ul>
                  </div>
                  <div class="product-option-right">
                    <div id="sort-by">
                      <label class="left">Sort By: </label>
                      <ul>
                        <li><a href="#">{{empty(Request::input('sort')) ? 'Featured ' : Request::input('sort')}} <span
                              class="right-arrow"></span></a>
                          <ul>
                            <li><a href="{!! Request::fullUrlWithQuery(['sort'=>'Featured']) !!}">Featured</a></li>
                            <li><a href="{!! Request::fullUrlWithQuery(['sort'=>'Low price']) !!}">Low price</a></li>
                            <li><a href="{!! Request::fullUrlWithQuery(['sort'=>'High price']) !!}">High price</a></li>
                            <li><a href="{!! Request::fullUrlWithQuery(['sort'=>'Newest Arrivals']) !!}">Newest
                                Arrivals</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="pager">
                      <div id="limiter">
                        <label>View: </label>
                        <ul>
                          <li><a href="#">{{empty(Request::input('limit')) ? '40' : Request::input('limit')}}<span
                                class="right-arrow"> </span></a>
                            <ul>
                              <li><a href="{!! Request::fullUrlWithQuery(['limit'=>'8']) !!}">8</a></li>
                              <li><a href="{!! Request::fullUrlWithQuery(['limit'=>'20']) !!}">20</a></li>
                              <li><a href="{!! Request::fullUrlWithQuery(['limit'=>'50']) !!}">50</a></li>
                              <li><a href="{!! Request::fullUrlWithQuery(['limit'=>'100']) !!}">100</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="category-products">
                <ul class="products-grid">
                  @foreach($Elements as $el)
                  <li class="item col-lg-3 col-md-4 col-sm-4 col-xs-6">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a href="{{url('element').$el->id}}" title="{{ $el->name }}"
                            class="product-image"><img src="{{ asset('storage').$el->pathPhoto }}"
                              alt="{{ $el->name }}"></a>
                          @if ($el->created_at != '' && date('m', strtotime(str_replace('-','/', $el->created_at))) ==
                          date("m"))
                          <div class="new-label new-top-left">New</div>
                          @endif
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="{{ $el->name }}" href="{{url('element').$el->id}}">
                              {{ $el->name }} </a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div style="width:80%" class="rating"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a
                                    href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box">
                                @if(isset($Offerts[$el->id]) && $Offerts[$el->id]->date_end > date('Y-m-d h:i:sa'))
                                <p class="old-price"><span class="price-label">Regular Price:</span> <span
                                    class="price">€{{ number_format($el->price, 2, ',', '.') }} </span> </p>
                                <p class="special-price"><span class="price-label">Special Price</span> <span
                                    class="price" style="color: red">€{{ number_format(($el->price - (($el->price)/100*$Offerts[$el->id]->discount_perc)), 2, '.', ',') }} </span> </p>
                                @else
                                <p class="special-price"><span class="price-label">Regular Price:</span> <span
                                    class="price">€{{ number_format($el->price, 2, ',', '.') }} </span> </p>
                                @endif
                              </div>
                            </div>
                            <div class="action">
                              <form method="post" action="{{ route('Element.addToCart', ['id' => $el->id]) }}">
                                @csrf
                                <button class="button btn-cart" type="submit" title="Add to cart" name="quantity" value="1"
                                  data-original-title="Add to Cart"><span>Add to Cart</span></button>
                              </form>    
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
              <div class="toolbar">
                <div class="display-product-option">
                  <div class="pages">
                    <label>Page:</label>
                    <ul class="pagination">
                      @if(Request::input('page') > 1 && !empty(Request::input('page')))
                      <li><a href="{!! Request::fullUrlWithQuery(['page'=>Request::input('page') - 1]) !!}">&laquo;</a>
                      </li>
                      @endif
                      <li class="{{Request::input('page') == 1 || empty(Request::input('page')) ? 'active' : ''}}"><a
                          href="{!! Request::fullUrlWithQuery(['page'=>1]) !!}">1</a></li>
                      @for($it = 2 ; $it <= $Elements->lastPage() ; $it++)
                        <li class="{{Request::input('page') == $it ? 'active' : ''}}"><a
                            href="{!! Request::fullUrlWithQuery(['page'=>$it]) !!}">{{ $it }}</a></li>
                        @endfor
                        @if(Request::input('page') < $Elements->lastPage() && !($Elements->currentPage() == 1 &&
                          $Elements->lastPage() == 1))
                          <li><a
                              href="{!! Request::fullUrlWithQuery(['page'=>(empty(Request::input('page')) ? 2 : Request::input('page') + 1)]) !!}">&raquo;</a>
                          </li>
                          @endif
                    </ul>
                  </div>
                  <div class="product-option-right">
                    <div id="sort-by">
                      <label class="left">Sort By: </label>
                      <ul>
                        <li><a href="#">{{empty(Request::input('sort')) ? 'Featured' : Request::input('sort')}} <span
                              class="right-arrow"></span></a>
                          <ul>
                            <li><a href="{!! Request::fullUrlWithQuery(['sort'=>'Featured']) !!}">Featured</a></li>
                            <li><a href="{!! Request::fullUrlWithQuery(['sort'=>'Low price']) !!}">Low price</a></li>
                            <li><a href="{!! Request::fullUrlWithQuery(['sort'=>'High price']) !!}">High price</a></li>
                            <li><a href="{!! Request::fullUrlWithQuery(['sort'=>'Newest Arrivals']) !!}">Newest
                                Arrivals</a></li>
                          </ul>
                        </li>
                      </ul>
                      <a class="button-asc left" href="#" title="Set Descending Direction"><span
                          class="top_arrow"></span></a>
                    </div>
                    <div class="pager">
                      <div id="limiter">
                        <label>View: </label>
                        <ul>
                          <li><a href="#">{{empty(Request::input('limit')) ? '40' : Request::input('limit')}}<span
                                class="right-arrow"> </span></a>
                            <ul>
                              <li><a href="{!! Request::fullUrlWithQuery(['limit'=>'8']) !!}">8</a></li>
                              <li><a href="{!! Request::fullUrlWithQuery(['limit'=>'20']) !!}">20</a></li>
                              <li><a href="{!! Request::fullUrlWithQuery(['limit'=>'50']) !!}">50</a></li>
                              <li><a href="{!! Request::fullUrlWithQuery(['limit'=>'100']) !!}">100</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>
            <!--	///*///======    End article  ========= //*/// -->
          </div>
          <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
            <div class="side-banner"><img src="{{ asset('images/side.jpg') }}" alt="banner"></div>

            <!--------Subcategory--------->
            @if($Category != null)
            <div class="block block-layered-nav block-cat">
              <div class="block-title">Categories</div>
              <div class="block-content">
                <dl id="narrow-by-list">
                  <dd class="odd">
                    <ol>
                      @foreach($Category[2] as $subcat)
                      <li> <a href="{{ url('catalog-'.$Category[0]->name, $subcat->name) }}"><span
                            class="price">{{$subcat->name}}</span></a></li>
                      @endforeach
                    </ol>
                  </dd>
                </dl>
              </div>
            </div>
            @endif

            <!--------Filter--------->
            <div class="block block-layered-nav block-filter">
              <div class="block-title">Shop By</div>
              <div class="block-content">
                <p class="block-subtitle">Shopping Options</p>
                <dl id="narrow-by-list">
                  <dt class="odd">Price</dt>
                  <dd class="odd">
                    <ol>
                      @for($i = 0; $i < 6; $i++) <li> <a
                          href="{!! Request::fullUrlWithQuery(['price'=> number_format(($rangeFilter * $i), 2).'-'.number_format(($rangeFilter * ($i + 1)), 2)]) !!}"><span
                            class="price">€{{ number_format(($rangeFilter * $i), 2) }}</span> - <span
                            class="price">{{ number_format(($rangeFilter * ($i + 1)), 2) }}</span></a></li>
                        @endfor
                    </ol>
                  </dd>
                </dl>
              </div>
            </div>

            <!--------cart--------->
            <div class="block block-cart">
              <div class="block-title ">My Cart</div>
              <div class="block-content">
                @if(Session::has('cart'))
                {{!$objcart=App\Http\Controllers\ElementsController::getElemCart()}}
                <div class="summary">
                  <p class="amount">There are <a
                      href="shopping_cart.html">{{ Session::has('cart') && Session::get('cart')->totalQty != 0 ? Session::get('cart')->totalQty : '0'}}
                      items</a> in your cart.</p>
                  <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span
                      class="price">€{{ number_format((Session::has('cart') && Session::get('cart')->totalPrice != 0 ? Session::get('cart')->totalPrice : '0'), 2) }}</span>
                  </p>
                </div>
                <div class="ajax-checkout">
                  <button class="button button-checkout"
                    onclick="location.href='{{ url('/checkout') }}'"><span>Checkout</span></button>
                </div>
                <p class="block-subtitle">Recently added item(s) </p>
                <ul>
                  @if($objcart['elements'] != null && !empty($objcart['elements']))
                  {{!$lastElement = end($objcart['elements'])}}
                  <li class="item"> <a href="{{ url('shopping-cart') }}" title="{{ $lastElement['item']->name }}"
                      class="product-image"><img src="{{ asset('storage').$lastElement['item']->pathPhoto }}"
                        alt="{{ $lastElement['item']->name }}"></a>
                    <div class="product-details">
                      <div class="access"> <a href="{{ route('Element.delToCart', ['id' => $lastElement['item']->id]) }}" title="Remove This Item" class="btn-remove1">
                          <span class="icon"></span> Remove </a> </div>
                      <strong>{{ $lastElement['qty'] }}</strong> x <span class="price">€{{ number_format($lastElement['price'], 2, ',', '.') }}</span>
                      <p class="product-name"> <a href="{{ url('shopping-cart') }}">{{ $lastElement['item']->name }}</a> </p>
                    </div>
                  </li>
                  @endif
                </ul>
                @else

                @endif
              </div>
            </div>
            <div class="custom-slider-wrap">
              <div class="custom-slider-inner">
                <div class="home-custom-slider">
                  <div>
                    <div class="sideoffer-banner">

                      <a href="#" title="Side Offer Banner">

                        <img class="hidden-xs" src="{{ asset('images/custom.jpg') }}" alt="Side Offer Banner"></a>


                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="block block-poll">
              <div class="block-title">Community Poll </div>
              <form id="pollForm" action="#" method="post" onSubmit="return validatePollAnswerIsSelected();">
                <div class="block-content">
                  <p class="block-subtitle">What is your favorite Magento feature?</p>
                  <ul id="poll-answers">
                    <li class="odd">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_5" value="5">
                      <span class="label">
                        <label for="vote_5">Layered Navigation</label>
                      </span> </li>
                    <li class="even">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_6" value="6">
                      <span class="label">
                        <label for="vote_6">Price Rules</label>
                      </span> </li>
                    <li class="odd">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_7" value="7">
                      <span class="label">
                        <label for="vote_7">Category Management</label>
                      </span> </li>
                    <li class="last even">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_8" value="8">
                      <span class="label">
                        <label for="vote_8">Compare Products</label>
                      </span> </li>
                  </ul>
                  <div class="actions">
                    <button type="submit" title="Vote" class="button button-vote"><span>Vote</span></button>
                  </div>
                </div>
              </form>
            </div>
            <div>
              <div class="featured-add-box">
                <div class="featured-add-inner"> <a href="#"> <img src="{{ asset('images/hot.jpg') }}" alt="f-img"></a>
                  <div class="banner-content">
                    <div class="banner-text">Electronic's</div>
                    <div class="banner-text1">20% off</div>
                    <p>limited time offer</p>
                    <a href="#" class="view-bnt">Shop now</a>
                  </div>
                </div>
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
  <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/common.js') }}"></script>

  <script type="text/javascript" src="{{ asset('/js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/jquery.mobile-menu.min.js') }}"></script>
</body>

@endsection