@extends('layout.defaultLayout')

@section('content')

<!-- Sidebar/Filter -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top w3-animate-left" style="top: 49px;z-index:3;width:250px" id="mySidebar">
    <div class="w3-center">
        <a class="w3-row" href="{{ url('catalog') }}">
            <span><i class="fa fa-angle-left"></i> Catalogo</span>
        </a>
        @if($Category[1] != null || $Category[1] != '')
        <a class="w3-row" href="{{ url('catalog').$Category[0]->name }}">
            <span><i class="fa fa-angle-left"></i> {{$Category[0]->name }}<span> (332)</span>
        </a>
        @endif
        <div class="w3-light-grey article-navigation">
            <div class="body">
                <ul class="first-level narrow dashed">
                    @foreach($Category[2] as $subcat)
                    <li class="active">
                        <a href="{{ url('catalog'.$Category[0]->name, $subcat->name) }}" wt_name="assortment_menu.level3">{{$subcat->name}}<span class="product-counter"> (69)</span></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div id="filter" data-filter="open">
        <!--FILTER-->
    </div>     
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
    <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-top: 49px;margin-left:250px; max-width: 1500px;">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:83px"></div>

    <!-- Top header -->
    <header class="w3-container w3-xlarge">
        @if($Category[1] != null || !empty($Category[1]) || $Category[1] != '')
        <p class="w3-left">{{ $Category[0]->name }} <i class="fa fa-angle-right"></i> {{ $Category[1] }}</p>
        @else
        <p class="w3-left">{{ $Category[0]->name }}</p>
        @endif
        <p class="w3-right">
            <i class="fa fa-shopping-cart w3-margin-right"></i>
            <i class="fa fa-search"></i>
        </p>
    </header>

    <!-- Image header -->
    <div class="w3-display-container w3-container">

        <img class="wa" src="{{ asset('storage').$Category[0]->pathPhoto }}" alt="Jeans" style="width:100%">
        <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
            <h1 class="w3-jumbo w3-hide-small">New arrivals</h1>
            <h1 class="w3-hide-large w3-hide-medium">New arrivals</h1>
            <h1 class="w3-hide-small">COLLECTION 2016</h1>
            <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
        </div>
    </div>

    <div class="w3-container w3-text-grey" id="jeans">
        <p>{{count($Elements)}} elementi</p>
    </div>

    <!-- Product grid 
    <div class="w3-row w3-grayscale">-->
        {{!$conta = 1}}
        @foreach($Elements as $el)
            @if ($conta == 1)
            <div class="w3-row w3-grayscale">
            @endif
                    <div class="w3-container w3-col l3">
                        <div class="w3-display-container">
                            <img src=" {{ asset('storage').$el->pathPhoto }}" style="width:100%">
                            @if ($el->created_at != '' && date('m', strtotime(str_replace('-','/', $el->created_at))) == date("m"))
                            <span class="w3-tag w3-display-topleft" style="width:auto; height:auto">Nuovo</span>
                            @endif
                            <div class="w3-display-middle w3-display-hover">
                                <button onclick="location.href='{{url('element/').$el->id}}'" class="w3-button w3-black">Acquista
                                    <i class="fa fa-shopping-cart"></i></button>
                            </div>
                        </div>
                        <p>{{ $el->name }}<br><b>€ {{ number_format($el->price, 2, ',', '.') }}</b></p>
                    </div>
                    {{!$conta = $conta + 1}}

            @if ($conta == 5)
                </div>
                {{!$conta = 1}}
            @endif
        @endforeach
    </div>
<!--ESEMPIOPOO
        <div class="w3-col l3 s6">
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="{{asset('storage')}}/images/catalogo/bullone.jpg" style="width:100%">
                    <div class="w3-display-middle w3-display-hover">
                        <button onclick="window.location.href='./prodotto.html'" class="w3-button w3-black">Acquista ora
                            <i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
            </div>
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="./images/catalogo/bullone.jpg" style="width:100%">
                    <div class="w3-display-middle w3-display-hover">
                        <button onclick="window.location.href='./prodotto.html'" class="w3-button w3-black">Acquista ora
                            <i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>Mega Ripped Jeans<br><b>$19.99</b></p>
            </div>
        </div>

        <div class="w3-col l3 s6">
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="./images/catalogo/bullone.jpg" style="width:100%">
                    <span class="w3-tag w3-display-topleft">New</span>
                    <div class="w3-display-middle w3-display-hover">
                        <button onclick="window.location.href='./prodotto.html'" class="w3-button w3-black">Acquista ora
                            <i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>Mega Ripped Jeans<br><b>$19.99</b></p>
            </div>
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="./images/catalogo/bullone.jpg" style="width:100%">
                    <span class="w3-tag w3-display-topleft">New</span>
                    <div class="w3-display-middle w3-display-hover">
                        <button onclick="window.location.href='./prodotto.html'" class="w3-button w3-black">Acquista ora
                            <i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>Washed Skinny Jeans<br><b>$20.50</b></p>
            </div>
        </div>

        <div class="w3-col l3 s6">
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="./images/catalogo/bullone.jpg" style="width:100%">
                    <div class="w3-display-middle w3-display-hover">
                        <button onclick="window.location.href='./prodotto.html'" class="w3-button w3-black">Acquista ora
                            <i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>Washed Skinny Jeans<br><b>$20.50</b></p>
            </div>
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="./images/catalogo/bullone.jpg" style="width:100%">
                    <span class="w3-tag w3-display-topleft">Sale</span>
                    <div class="w3-display-middle w3-display-hover">
                        <button class="w3-button w3-black">Acquista ora <i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>Vintage Skinny Jeans<br><b class="w3-text-red">$14.99</b></p>
            </div>
        </div>

        <div class="w3-col l3 s6">
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="./images/catalogo/bullone.jpg" style="width:100%">
                    <span class="w3-tag w3-display-topleft">New</span>
                    <div class="w3-display-middle w3-display-hover">
                        <button onclick="window.location.href='./prodotto.html'" class="w3-button w3-black">Acquista ora
                            <i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>Vintage Skinny Jeans<br><b>$14.99</b></p>
            </div>
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="./images/catalogo/bullone.jpg" style="width:100%">
                    <div class="w3-display-middle w3-display-hover">
                        <button onclick="window.location.href='./prodotto.html'" class="w3-button w3-black">Acquista ora
                            <i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
            </div>
        </div>
-->
    </div>
@stop
