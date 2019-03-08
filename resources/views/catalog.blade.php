@extends('layout.defaultLayout')

@section('content')

<!-- Sidebar/menu -->
<div style="margin: auto">
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="top: 49px;z-index:3;width:250px" id="mySidebar">
        
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
    <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-top: 49px;margin-left:250px">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:83px"></div>

    <!-- Top header -->
    <header class="w3-container w3-xlarge">
        <p class="w3-left">Minuteria</p>
        <p class="w3-right">
            <i class="fa fa-shopping-cart w3-margin-right"></i>
            <i class="fa fa-search"></i>
        </p>
    </header>

    <!-- Image header -->
    <div class="w3-display-container w3-container">
        <img class="wa" src="./images/catalogo/minuteria_header.jpg" alt="Jeans" style="width:100%">
        <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
            <h1 class="w3-jumbo w3-hide-small">New arrivals</h1>
            <h1 class="w3-hide-large w3-hide-medium">New arrivals</h1>
            <h1 class="w3-hide-small">COLLECTION 2016</h1>
            <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
        </div>
    </div>

    <div class="w3-container w3-text-grey" id="jeans">
        <p>8 items</p>
    </div>

    <!-- Product grid -->
    <div class="w3-row w3-grayscale">
        <div class="w3-col l3 s6">
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
    </div>
</div>

@stop