@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')
  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/navbarColor.css')}}" />
  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/auth.css')}}" />
  <script src="{{url('/js/auth.js')}}"></script>
@endsection

@section('content')
    <!--CONTENT PAGE-->
<<section class="main-container col1-layout">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <article class="col-main">
                    <div class="account-login">
                        <div class="page-title">
                            <h2>Create an Account</h2>
                        </div>
                        <form id="regForm" action="{{ route('register') }}?ref={{$_SERVER['REQUEST_URI']}}" method="post" target="_blank">
                        @csrf
                            <fieldset class="col2-set">
                                <div class="col-1 registered-users"><strong>Registered Customers</strong>
                                    <div class="content">
                                        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                        <ul class="form-list">
                                            <li>
                                                <label for="email">Name <span class="required">*</span></label>
                                                <input id="name" class="input-text required-entry form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                       type="text" name="name" value="{{ old('name') }}" required autofocus>
                                                @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </li>
                                            <li>
                                                <label for="email">Surname <span class="required">*</span></label>
                                                <input id="surname" class="input-text required-entry form-control {{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname"
                                                            value="{{ old('surname') }}" type="text" required>
                                                @if ($errors->has('surname'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('surname') }}</strong>
                                                </span>
                                                @endif
                                            </li>
                                            <li>
                                                <label for="email">Fiscal Code <span class="required">*</span></label>
                                                <input  id="cf" class="input-text required-entry form-control {{ $errors->has('CF') ? ' is-invalid' : '' }}" type="text" name="CF" value="{{ old('CF') }}" required>
                                                @if ($errors->has('CF'))
                                                <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('CF') }}</strong>
                                               </span>
                                                @endif
                                            </li>
                                            <li>
                                                <label for="email">Email Address <span class="required">*</span></label>
                                                <input id="email" class="input-text required-entry form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text"
                                                       name="email" value="{{ old('email') }}" required>
                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </li>
                                            <li>
                                                <label for="email">Repeat Email Address <span class="required">*</span></label>
                                                <input class="input-text required-entry form-control {{ $errors->has('email_confirmation') ? ' is-invalid' : '' }}" type="text"
                                                       name="email_confirmation" value="{{ old('email_confirmation') }}" autocomplete="off" required>
                                                @if ($errors->has('email_confirmation'))
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('email_confirmation') }}</strong>
                                                 </span>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-2 registered-users">
                                    <div class="content">
                                        <ul class="form-list">
                                            <li>
                                                <label for="email">VAT number</label>
                                                <input id="ipva" class="input-text form-control {{ $errors->has('IVA') ? ' is-invalid' : '' }}" type="text" name="IVA" value="{{ old('IVA') }}">
                                                @if ($errors->has('IVA'))
                                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('IVA') }}</strong>
                                                </span>
                                                @endif
                                            </li>
                                            <li>
                                                <label for="pass">Email PEC</label>
                                                <input id="pec" class="input-text form-control {{ $errors->has('PEC') ? ' is-invalid' : '' }}" type="text"
                                                       name="PEC" value="{{ old('PEC') }}">
                                                @if ($errors->has('PEC'))
                                                <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('PEC') }}</strong>
                                               </span>
                                                @endif
                                            </li>
                                            <li>
                                                <label for="email">Repeat Email PEC </label>
                                                <input class="input-text form-control {{ $errors->has('PEC_confirmation') ? ' is-invalid' : '' }}" autocomplete="off"
                                                       type="text" name="PEC_confirmation" value="{{ old('PEC_confirmation') }}">
                                                @if ($errors->has('PEC_confirmation'))
                                                <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('PEC_confirmation') }}</strong>
                                               </span>
                                                @endif
                                            </li>
                                            <li>
                                                <label for="pass">Password <span class="required">*</span></label>
                                                <input id="password" class="input-text required-entry form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                            type="password" name="password" required>
                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $errors->first('password') }}</strong>
                                                 </span>
                                                @endif
                                            </li>
                                            <li>
                                                <label for="pass">Repeat Password <span class="required">*</span></label>
                                                <input id="password-confirm" class="input-text required-entry form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                                       type="password" name="password_confirmation" autocomplete="off" required>
                                                @if ($errors->has('password_confirmation'))
                                                <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                                @endif
                                            </li>
                                        </ul>
                                        <p class="required">* Required Fields</p>
                                        <div class="buttons-set">
                                            <button id="send2" name="send" type="submit" class="button login"><span>Create an Account</span></button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </article>
                <!--	///*///======    End article  ========= //*/// -->
            </div>

        </div>
    </div>
</section>
<!-- Main Container End -->

<!-- Footer -->
<footer class="footer">
    <div class="newsletter-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="newsletter">
                        <form>
                            <div>
                                <h4><span>newsletter</span></h4>
                                <input type="text" placeholder="Enter your email address" class="input-text" title="Sign up for our newsletter" id="newsletter1" name="email">
                                <button class="subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--newsletter-->

    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-column pull-left">
                        <h4>Shopping Guide</h4>
                        <ul class="links">
                            <li><a href="blog.html" title="How to buy">Blog</a></li>
                            <li><a href="faq.html" title="FAQs">FAQs</a></li>
                            <li><a href="#" title="Payment">Payment</a></li>
                            <li><a href="#" title="Shipment">Shipment</a></li>
                            <li><a href="#" title="Where is my order?">Where is my order?</a></li>
                            <li><a href="#" title="Return policy">Return policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-column pull-left">
                        <h4>Style Advisor</h4>
                        <ul class="links">
                            <li><a href="login.html" title="Your Account">Your Account</a></li>
                            <li><a href="#" title="Information">Information</a></li>
                            <li><a href="#" title="Addresses">Addresses</a></li>
                            <li><a href="#" title="Addresses">Discount</a></li>
                            <li><a href="#" title="Orders History">Orders History</a></li>
                            <li><a href="#" title="Order Tracking">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-column pull-left">
                        <h4>Information</h4>
                        <ul class="links">
                            <li><a href="sitemap.html" title="Site Map">Site Map</a></li>
                            <li><a href="#" title="Search Terms">Search Terms</a></li>
                            <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                            <li><a href="about_us.html" title="About Us">About Us</a></li>
                            <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
                            <li><a href="#" title="Suppliers">Suppliers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Contact Us</h4>
                    <div class="contacts-info">
                        <address>
                            <i class="add-icon">&nbsp;</i>123 Main Street, Anytown, <br>
                            &nbsp;CA 12345  USA
                        </address>
                        <div class="phone-footer"><i class="phone-icon">&nbsp;</i> +1 800 123 1234</div>
                        <div class="email-footer"><i class="email-icon">&nbsp;</i> <a href="mailto:support@magikcommerce.com">abc@example.com</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="social">
                        <ul>
                            <li class="fb"><a href="#"></a></li>
                            <li class="tw"><a href="#"></a></li>
                            <li class="googleplus"><a href="#"></a></li>
                            <li class="rss"><a href="#"></a></li>
                            <li class="pintrest"><a href="#"></a></li>
                            <li class="linkedin"><a href="#"></a></li>
                            <li class="youtube"><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="payment-accept"> <img src="images/payment-1.png" alt=""> <img src="images/payment-2.png" alt=""> <img src="images/payment-3.png" alt=""> <img src="images/payment-4.png" alt=""> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 coppyright">
                    © 2017 ThemesSoft. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<div id="mobile-menu">
    <ul>
        <li>
            <div class="mm-search">
                <form id="search1" name="search">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
                        </div>
                        <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
                    </div>
                </form>
            </div>
        </li>
        <li><a href="index.html">Home</a>
            <ul>
                <li><a href="index.html">Home Version 1</a></li>
                <li><a href="../home2/index.html">Home Version 2</a></li>
            </ul>
        </li>
        <li><a href="#">Pages</a>
            <ul>
                <li><a href="grid.html">Grid</a> </li>
                <li> <a href="list.html">List</a> </li>
                <li> <a href="product_detail.html">Product Detail</a> </li>
                <li> <a href="shopping_cart.html">Shopping Cart</a> </li>
                <li><a href="checkout.html">Checkout</a> </li>
                <li> <a href="wishlist.html">Wishlist</a> </li>
                <li> <a href="dashboard.html">Dashboard</a> </li>
                <li> <a href="multiple_addresses.html">Multiple Addresses</a> </li>
                <li> <a href="about_us.html">About us</a> </li>
                <li><a href="blog.html">Blog</a>
                    <ul>
                        <li><a href="blog-detail.html">Blog Detail</a> </li>
                    </ul>
                </li>
                <li><a href="contact_us.html">Contact us</a> </li>
                <li><a href="404error.html">404 Error Page</a> </li>
            </ul>
        </li>
        <li><a href="#">Women</a>
            <ul>
                <li> <a href="#" class="">Stylish Bag</a>
                    <ul>
                        <li> <a href="grid.html" class="">Clutch Handbags</a> </li>
                        <li> <a href="grid.html" class="">Diaper Bags</a> </li>
                        <li> <a href="grid.html" class="">Bags</a> </li>
                        <li> <a href="grid.html" class="">Hobo handbags</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Material Bag</a>
                    <ul>
                        <li> <a href="grid.html">Beaded Handbags</a> </li>
                        <li> <a href="grid.html">Fabric Handbags</a> </li>
                        <li> <a href="grid.html">Handbags</a> </li>
                        <li> <a href="grid.html">Leather Handbags</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Shoes</a>
                    <ul>
                        <li> <a href="grid.html">Flat Shoes</a> </li>
                        <li> <a href="grid.html">Flat Sandals</a> </li>
                        <li> <a href="grid.html">Boots</a> </li>
                        <li> <a href="grid.html">Heels</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Jwellery</a>
                    <ul>
                        <li> <a href="grid.html">Bracelets</a> </li>
                        <li> <a href="grid.html">Necklaces &amp; Pendent</a> </li>
                        <li> <a href="grid.html">Pendants</a> </li>
                        <li> <a href="grid.html">Pins &amp; Brooches</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Dresses</a>
                    <ul>
                        <li> <a href="grid.html">Casual Dresses</a> </li>
                        <li> <a href="grid.html">Evening</a> </li>
                        <li> <a href="grid.html">Designer</a> </li>
                        <li> <a href="grid.html">Party</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Swimwear</a>
                    <ul>
                        <li> <a href="grid.html">Swimsuits</a> </li>
                        <li> <a href="grid.html">Beach Clothing</a> </li>
                        <li> <a href="grid.html">Clothing</a> </li>
                        <li> <a href="grid.html">Bikinis</a> </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="grid.html">Men</a>
            <ul>
                <li> <a href="grid.html" class="">Shoes</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="grid.html">Sport Shoes</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Casual Shoes</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Leather Shoes</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">canvas shoes</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Dresses</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="grid.html">Casual Dresses</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Evening</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Designer</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Party</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Jackets</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="grid.html">Coats</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Formal Jackets</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Leather Jackets</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Blazers</a> </li>
                    </ul>
                </li>
                <li> <a href="#.html">Watches</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Casio</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Titan</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Tommy-Hilfiger</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Sunglasses</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="grid.html">Ray Ban</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Police</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Oakley</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Accesories</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="grid.html">Backpacks</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Wallets</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Laptops Bags</a> </li>
                        <li class="level2 nav-6-1-1"><a href="grid.html">Belts</a> </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="grid.html">Electronics</a>
            <ul>
                <li> <a href="grid.html"><span>Mobiles</span></a>
                    <ul>
                        <li> <a href="grid.html"><span>Samsung</span></a> </li>
                        <li> <a href="grid.html"><span>Nokia</span></a> </li>
                        <li> <a href="grid.html"><span>IPhone</span></a> </li>
                        <li> <a href="grid.html"><span>Sony</span></a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html" class=""><span>Accesories</span></a>
                    <ul>
                        <li> <a href="grid.html"><span>Mobile Memory Cards</span></a> </li>
                        <li> <a href="grid.html"><span>Cases &amp; Covers</span></a> </li>
                        <li> <a href="grid.html"><span>Mobile Headphones</span></a> </li>
                        <li> <a href="grid.html"><span>Bluetooth Headsets</span></a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html"><span>Cameras</span></a>
                    <ul>
                        <li> <a href="grid.html"><span>Camcorders</span></a> </li>
                        <li> <a href="grid.html"><span>Point &amp; Shoot</span></a> </li>
                        <li> <a href="grid.html"><span>Digital SLR</span></a> </li>
                        <li> <a href="grid.html"><span>Camera Accesories</span></a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html"><span>Audio &amp; Video</span></a>
                    <ul>
                        <li> <a href="grid.html"><span>MP3 Players</span></a> </li>
                        <li> <a href="grid.html"><span>IPods</span></a> </li>
                        <li> <a href="grid.html"><span>Speakers</span></a> </li>
                        <li> <a href="grid.html"><span>Video Players</span></a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html"><span>Computer</span></a>
                    <ul>
                        <li> <a href="grid.html"><span>External Hard Disk</span></a> </li>
                        <li> <a href="grid.html"><span>Pendrives</span></a> </li>
                        <li> <a href="grid.html"><span>Headphones</span></a> </li>
                        <li> <a href="grid.html"><span>PC Components</span></a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html"><span>Appliances</span></a>
                    <ul>
                        <li> <a href="grid.html"><span>Vaccum Cleaners</span></a> </li>
                        <li> <a href="grid.html"><span>Indoor Lighting</span></a> </li>
                        <li> <a href="grid.html"><span>Kitchen Tools</span></a> </li>
                        <li> <a href="grid.html"><span>Water Purifier</span></a> </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="grid.html">Furniture</a>
            <ul>
                <li> <a href="grid.html">Living Room</a>
                    <ul>
                        <li> <a href="grid.html">Racks &amp; Cabinets</a> </li>
                        <li> <a href="grid.html">Sofas</a> </li>
                        <li> <a href="grid.html">Chairs</a> </li>
                        <li> <a href="grid.html">Tables</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html" class="">Dining &amp; Bar</a>
                    <ul>
                        <li> <a href="grid.html">Dining Table Sets</a> </li>
                        <li> <a href="grid.html">Serving Trolleys</a> </li>
                        <li> <a href="grid.html">Bar Counters</a> </li>
                        <li> <a href="grid.html">Dining Cabinets</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Bedroom</a>
                    <ul>
                        <li> <a href="grid.html">Beds</a> </li>
                        <li> <a href="grid.html">Chest of Drawers</a> </li>
                        <li> <a href="grid.html">Wardrobes &amp; Almirahs</a> </li>
                        <li> <a href="grid.html">Nightstands</a> </li>
                    </ul>
                </li>
                <li> <a href="grid.html">Kitchen</a>
                    <ul>
                        <li> <a href="grid.html">Kitchen Racks</a> </li>
                        <li> <a href="grid.html">Kitchen Fillings</a> </li>
                        <li> <a href="grid.html">Wall Units</a> </li>
                        <li> <a href="grid.html">Benches &amp; Stools</a> </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="grid.html">Kids</a> </li>
        <li><a href="contact-us.html">Contact Us</a> </li>
    </ul>
    <div class="top-links">
        <ul class="links">
            <li><a title="My Account" href="login.html">My Account</a> </li>
            <li><a title="Wishlist" href="wishlist.html">Wishlist</a> </li>
            <li><a title="Checkout" href="checkout.html">Checkout</a> </li>
            <li><a title="Blog" href="blog.html"><span>Blog</span></a> </li>
            <li class="last"><a title="Login" href="login.html"><span>Login</span></a> </li>
        </ul>
    </div>
</div>

<!-- End Footer -->

<!-- JavaScript -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/revslider.js"></script>
<script type="text/javascript" src="js/common.js"></script>

<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
</script>

@endsection
