<!-- Stored in app/views/layout/default.php> -->
<!DOCTYPE html>
<html>
    <head>
        <!-- Custom Styles -->

@section('head')
        <title>Eshop a Flat E-Commerce Bootstrap Responsive Website Template | Home :: w3layouts</title>
        <link href="{{ URL::asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <!-- Custom Theme files -->
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--webfont-->
        <!-- for bootstrap working -->
        <script type="text/javascript" src="{{URL::asset('js/bootstrap-3.1.1.min.js')}}"></script>
        <!-- //for bootstrap working -->
        <!-- cart -->
        <script src="{{URL::asset('js/simpleCart.min.js')}}"> </script>
        <!-- cart -->

        <link rel="stylesheet" href="{{ URL::asset('css/flexslider.css')  }}" type="text/css" media="screen" />
    </head>
    @show

    <body>
        <!-- Here your section -->

    @section('home-header')
        <div class="header">
            <div class="header-top-strip">
                <div class="container">
                    <div class="header-top-left">
                        <ul>
                            <li><a href="account.html"><span class="glyphicon glyphicon-user"> </span>Login</a></li>
                            <li><a href="/register"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>
                        </ul>
                    </div>
                    <div class="header-right">
                        <div class="cart box_1">
                            <a href="checkout.html">
                                <h3 class="h"> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)<img src="{{URL::asset('images/bag.png')}}" alt=""></h3>
                            </a>

                            <p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    @show

    @section('home-top-banner')
        <div class="banner-top">
            <div class="container">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo">
                            <h1><a href="/"><span>E</span> -Shop</a></h1>
                        </div>
                    </div>

                    <!--/.navbar-header-->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="/">Home</a></li>
                            <li><a href="/">ShowRoom</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorie <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-2">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="FERRAMENTA LIST.html"><h6> FERRAMENTA</h6></a></li>
                                                <li><a href="products.html">Ferramenta</a></li>
                                                <li><a href="products.html">Idraulica</a></li>
                                                <li><a href="products.html">Edilizia</a></li>
                                                <li><a href="products.html">Bagni</a></li>
                                                <li><a href="products.html">Ceramiche</a></li>
                                                <li><a href="products.html">Arredi Esterni</a></li>
                                                <li><a href="products.html">Arredi Interni</a></li>
                                                <li><a href="products.html">Venrnici a colori</a></li>
                                                <li><a href="products.html">Abbigliamento da lavoro</a></li>
                                                <li><a href="products.html">Casalinghi</a></li>
                                                <li><a href="products.html">Materiale Elettrico</a></li>

                                            </ul>
                                       </div>
                                        <ul class="multi-column-dropdown columns-2">
                                             <div class="row">
                                                 <div class="col-sm-4">
                                                     <ul class="multi-column-dropdown">
                                                     <li><a hrref="BRAND.HTML"><h6>BRAND</h6></a></li>

                                                        <li><a href="products.html">Bosh</a></li>
                                                        <li><a href="products.html">Biondini</a></li>
                                                        <li><a href="products.html">DigitalHouse</a></li>
                                                        <li><a href="products.html">BabyWorker</a></li>
                                                    </ul>
                                                </div>
                                             </div>
                                            </ul>


                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">kids <b class="caret"></b></a>
                             {{--   <ul class="dropdown-menu multi-column columns-2">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="multi-column-dropdown">
                                                <h6>NEW IN</h6>
                                                <li><a href="products.html">New In Boys Clothing</a></li>
                                                <li><a href="products.html">New In Girls Clothing</a></li>
                                                <li><a href="products.html">New In Boys Shoes</a></li>
                                                <li><a href="products.html">New In Girls Shoes</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="multi-column-dropdown">
                                                <h6>ACCESSORIES</h6>
                                                <li><a href="products.html">Bags</a></li>
                                                <li><a href="products.html">Watches</a></li>
                                                <li><a href="products.html">Sun Glasses</a></li>
                                                <li><a href="products.html">Jewellery</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul> --}}
                            </li>
                            <li><a href="typography.html">TYPO</a></li>
                            <li><a href="contact.html">CONTACT</a></li>
                        </ul>
                    </div>
                    <!--/.navbar-collapse-->
                </nav>
                <!--/.navbar-->
            </div>
        </div>
    @show

    @yield('banners')


    @yield('content')

    @section('home-footer')
        <div class="news-letter">
            <div class="container">
                <div class="join">

                    <div class="sub-left-right">

                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="footer_top">
                    <div class="span_of_4">
                        <div class="col-md-3 span1_of_4">
                            <h4>Shop</h4>
                            <ul class="f_nav">
                                <li><a href="#">new arrivals</a></li>
                                <li><a href="#">men</a></li>
                                <li><a href="#">women</a></li>
                                <li><a href="#">accessories</a></li>
                                <li><a href="#">kids</a></li>
                                <li><a href="#">brands</a></li>
                                <li><a href="#">trends</a></li>
                                <li><a href="#">sale</a></li>
                                <li><a href="#">style videos</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 span1_of_4">
                            <h4>help</h4>
                            <ul class="f_nav">
                                <li><a href="#">frequently asked  questions</a></li>
                                <li><a href="#">men</a></li>
                                <li><a href="#">women</a></li>
                                <li><a href="#">accessories</a></li>
                                <li><a href="#">kids</a></li>
                                <li><a href="#">brands</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 span1_of_4">
                            <h4>account</h4>
                            <ul class="f_nav">
                                <li><a href="/login">login</a></li>
                                <li><a href="/register">create an account</a></li>
                                <li><a href="#">create wishlist</a></li>
                                <li><a href="checkout.html">my shopping bag</a></li>
                                <li><a href="#">brands</a></li>
                                <li><a href="#">create wishlist</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 span1_of_4">
                            <h4>popular</h4>
                            <ul class="f_nav">
                                <li><a href="#">new arrivals</a></li>
                                <li><a href="#">men</a></li>
                                <li><a href="#">women</a></li>
                                <li><a href="#">accessories</a></li>
                                <li><a href="#">kids</a></li>
                                <li><a href="#">brands</a></li>
                                <li><a href="#">trends</a></li>
                                <li><a href="#">sale</a></li>
                                <li><a href="#">style videos</a></li>
                                <li><a href="#">login</a></li>
                                <li><a href="#">brands</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="cards text-center">
                    <img src="images/cards.jpg" alt="" />
                </div>
                <div class="copyright text-center">
                    <p>© 2015 Eshop. All Rights Reserved | Design by   <a href="http://w3layouts.com">  W3layouts</a></p>
                </div>
            </div>
        </div>
        @show

    </body>
</html>
