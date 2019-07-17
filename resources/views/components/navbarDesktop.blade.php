  <header>
    <div class="header-container">
      <div class="container">
        <div class="row"> 
          <!-- Header Language -->
          <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 pull-left">
            
            <!-- End Header Language --> 
            <!-- Header Currency -->
            <div class="dropdown block-currency-wrapper"> <a class="block-currency dropdown-toggle" href="#"> Welcome {{ empty(Auth::user()->name) || Auth::user()->name == null ? '' : Auth::user()->name}}</a>
              </ul>
            </div>
          </div>
          <!-- Header Top Links -->
          <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 pull-right hidden-xs">
            <div class="toplinks">
              <div class="links">
              @auth
                {{!$group = Auth::user()->group}}
                @if( $group == "Administrator" || $group == "Privileged" )
                <div class="myaccount"><a title="Dashboard" href="{{ url('/admin/home') }}"><span class="hidden-xs">DASHBOARD</span></a> </div>
                @endif
                <div class="myaccount"><a title="My Account" href="{{ url('/profile') }}"><span class="hidden-xs">My Account</span></a> </div>
                <div class="check"><a title="Checkout" href="{{ url('/checkout') }}"><span class="hidden-xs">Checkout</span></a> </div>
              @endauth
                <!-- Header Company -->
                <div class="dropdown block-company-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-company dropdown-toggle" href="#"> Company <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li role="presentation"><a href="{{ url('about') }}"> About Us </a> </li>
                    <li role="presentation"><a href="{{ url('contact') }}"> Contact Us </a> </li>
                    <li role="presentation"><a href="{{ url('privacy_policy') }}"> Privacy Policy </a> </li>
                    <li role="presentation"><a href="{{ url('sitemap') }}">Site Map </a> </li>
                  </ul>
                </div>
                <!-- End Header Company -->
              @auth
                <div class="login"><a href="{{ url('logout') }}"><span class="hidden-xs">Logout</span></a> </div>
              @else
                <div class="login"><a href="{{ url('login') }}"><span class="hidden-xs">Login</span></a> </div>
              @endauth
              </div>
            </div>
            <!-- End Header Top Links --> 
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 logo-block"> 
          <!-- Header Logo -->
          <div class="logo"> <a title="Visca s.n.c." href="{{ url('/') }}"><img alt="Visca s.n.c." src="{{ url('images/logo.png') }}"> </a> </div>
          <!-- End Header Logo --> 
        </div>
        <div class="col-lg-7 col-md-6 col-sm-6 col-xs-3 hidden-xs category-search-form">
          <div class="search-box">
            <form id="search_mini_form" action="{{url('search')}}" method="get">
              <!-- Autocomplete End code -->
              @csrf
              <input id="search" type="text" name="search" placeholder="Search entire store here..." class="searchbox" maxlength="128">
              <button type="submit" title="Search" class="search-btn-bg" id="submit-button"></button>
            </form>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 card_wishlist_area">
          <div class="mm-toggle-wrap">
            <div class="mm-toggle"><i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
          </div>
          <div class="top-cart-contain"> 
            <!-- Top Cart -->
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="{{ url('shopping-cart') }}"><span class="price hidden-xs">Shopping Cart</span> 
              <span class="cart_count hidden-xs">{{ Session::has('cart') && Session::get('cart')->totalQty != 0 ? Session::get('cart')->totalQty : '0'}} pz/ €{{ number_format((Session::has('cart') && Session::get('cart')->totalPrice != 0 ? Session::get('cart')->totalPrice : '0'), 2) }}</span> </a> </div>
              <div>
                <div class="top-cart-content"> 
                  <!--block-subtitle-->
                  <ul class="mini-products-list" id="cart-sidebar">
                    @if(Session::has('cart'))
                    {{!$objcart=App\Http\Controllers\ElementsController::getElemCart()}}
                    @foreach($objcart['elements'] as $el)
                    <li class="item first">
                      <div class="item-inner"> <a class="product-image" title="Retis lapen casen" href="#l"><img alt="Retis lapen casen" src="{{ asset('storage').$el['item']->pathPhoto }}"> </a>
                        <div class="product-details">
                          <div class="access"><a class="btn-remove1" title="Remove This Item" href="{{ route('Element.delToCart', ['id' => $el['item']->id]) }}">Remove</a> <a class="btn-edit" title="Edit item" href="{{ url('shopping-cart')}}"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                          <!--access--><strong>{{ $el['qty'] }}</strong> x <span class="price">€{{ number_format($el['price'], 2, ',', '.') }}</span>
                          <p class="product-name"><a href="{{url('element').$el['item']->id}}">{{ $el['item']->name }}</a> </p>
                        </div>
                      </div>
                    </li>
                    @endforeach
                    @else
                    <li class="item first">
                      <div class="item-inner">
                          <p class="product-name">Non ci sono prodotti..</p>
                      </div>
                    </li>
                    @endif
                  </ul>
                  <!--actions-->
                  <div class="actions">
                    <button class="btn-checkout" title="Checkout" onclick="location.href='{{ url('checkout') }}'" type="button"><span>Checkout</span> </button>
                    <a href="{{ route('Element.shoppingCart') }}" class="view-cart"><span>View Cart</span></a> </div>
                </div>
              </div>
            </div>
            <!-- Top Cart -->
            <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
              <input value="" type="hidden">
              <input id="enable_module" value="1" type="hidden">
              <input class="effect_to_cart" value="1" type="hidden">
              <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
            </div>
          </div>
          <!-- mgk wishlist --> 
        </div>
      </div>
    </div>
    <nav class="hidden-xs">
      <div class="nav-container">
        <div class="col-md-3 col-xs-12 col-sm-3">
          <div class="mega-container visible-lg visible-md visible-sm">
            <div class="navleft-container">
              <div class="mega-menu-title">
                <h3><i class="fa fa-navicon"></i> All Categories</h3>
              </div>
              <div class="mega-menu-category">
                <ul class="nav">
                  {{!$Category = \App\Category::all()}}
                  @foreach ($Category as $cat)
                  {{!$Subcategory = $cat->get_subcategories}}
                  <li> <a href="{{ url('catalog-').$cat->name }}"><i class="fa fa-home"></i> {{ $cat->name }}</a>
                    <div class="wrap-popup column1">
                      <div class="popup">
                        <ul class="nav">
                          @foreach ($Subcategory as $subcat)
                          <li><a href="{{ url('catalog-'.$cat->name, $subcat->name) }}">{{ $subcat->name }}</a></li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- features box -->
        <div class="our-features-box hidden-xs">
          <div class="features-block">
            <div class="col-lg-9 col-md-9 col-xs-12 col-sm-9 offer-block"> <a href="{{ url('home') }}">Home</a> <a href="{{ url('catalog-Illuminazione esterna') }}">Outdoor</a> <a href="{{ url('catalog-Illuminazione esterni') }}">Interior</a> <a href="{{ url('catalog-Illuminazione esterna') }}">Outdoor</a> <a href="{{ url('catalog-Illuminazione esterni') }}">Interior</a> <span>Order online or call us (+1800) 000 8808</span> </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
