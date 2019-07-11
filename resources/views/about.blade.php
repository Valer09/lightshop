@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')

  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/navbarTrasp.css')}}" />
@endsection

@section('content')

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
                                                        <input type="text" id="billing:firstname" name="billing[firstname]" value="" title="First Name" class="input-text ">
                                                    </div>
                                                    <div class="input-box name-lastname">
                                                        <label for="billing:lastname"> Email Address <span class="required">*</span> </label>
                                                        <br>
                                                        <input type="text" id="billing:lastname" name="billing[lastname]" value="" title="Last Name" class="input-text">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-box">
                                                    <label for="billing:company">Company</label>
                                                    <br>
                                                    <input type="text" id="billing:company" name="billing[company]" value="" title="Company" class="input-text">
                                                </div>
                                                <div class="input-box">
                                                    <label for="billing:email">Telephone <span class="required">*</span></label>
                                                    <br>
                                                    <input type="text" name="billing[email]" id="billing:email" value="" title="Email Address" class="input-text validate-email">
                                                </div>
                                            </li>
                                            <li>
                                                <label for="billing:street1">Address <span class="required">*</span></label>
                                                <br>
                                                <input type="text" title="Street Address" name="billing[street][]" id="billing:street1  street1" value="" class="input-text required-entry">
                                            </li>
                                            <li>
                                                <input type="text" title="Street Address 2" name="billing[street][]" id="billing:street2 street2" value="" class="input-text required-entry">
                                            </li>
                                            <li class="">
                                                <label for="comment">Comment<em class="required">*</em></label>
                                                <br>
                                                <div style="float:none" class="">
                                                    <textarea name="comment" id="comment" title="Comment" class="required-entry input-text" cols="5" rows="3"></textarea>
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
                <div class="customer-img"><img src="{{ url('/images/side.jpg') }}" alt="logo"></div>
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
</style>

@endsection
