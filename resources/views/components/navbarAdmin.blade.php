<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
    <a href="{{ url('/logout') }}" class="w3-bar-item w3-right">Log Out</a>
    <a href="{{ url('/home') }}" class="w3-bar-item w3-left">Go Back To Site</a>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebarAdmin"><br>
    <div class="w3-container w3-row">
        <div class="w3-col s4">
            <img src="/images/logo_visca.png" class="w3-circle w3-margin-right" style="width:46px">
        </div>
        <div class="w3-col s8 w3-bar">
            <span>Welcome, <strong> {{Auth::user()->name}}</strong></span><br>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
        </div>
    </div>
    <hr>
    <div class="w3-container">
        <h5>Dashboard</h5>
    </div>
    <div class="w3-bar-block">
        <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
        @if(!strcmp($_SERVER['REQUEST_URI'], "/admin/home") || !strcmp($_SERVER['REQUEST_URI'], "/admin"))
        <a href="{{url('/admin/home')}}" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-home fa-fw"></i>  Home</a>
        @else
        <a href="{{url('/admin/home')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home fa-fw"></i>  Home</a>
        @endif

        @if(!strcmp($_SERVER['REQUEST_URI'], "/admin/orders"))
        <a href="{{url('admin/orders')}}" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-clock-o fa-fw"></i>  Ordini</a>
        @else
        <a href="{{url('admin/orders')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-clock-o fa-fw"></i>  Ordini</a>
        @endif

        @if(!strcmp($_SERVER['REQUEST_URI'], "/admin/products"))
        <a href="{{url('admin/products')}}" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-diamond fa-fw"></i>  Prodotti</a>
        @else
        <a href="{{url('admin/products')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Prodotti</a>
        @endif
<!--
        @if(!strcmp($_SERVER['REQUEST_URI'], "/admin/news"))
        <a href="{{url('admin/news')}}" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-bell fa-fw"></i>  News</a>
        @else
        <a href="{{url('admin/news')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
        @endif
-->        
        @if(!strcmp($_SERVER['REQUEST_URI'], "/admin/offers"))
        <a href="{{url('admin/offers')}}" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-percent fa-fw"></i>  Offerte</a>
        @else
        <a href="{{url('admin/offers')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-percent fa-fw"></i>  Offerte</a>
        @endif

        @if(!strcmp($_SERVER['REQUEST_URI'], "/admin/categories"))
        <a href="{{url('admin/categories')}}" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-align-left fa-fw"></i>  Categorie</a>
        @else
        <a href="{{url('admin/categories')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-align-left fa-fw"></i>  Categorie</a>
        @endif
<!--
        @if(!strcmp($_SERVER['REQUEST_URI'], "/admin/showroomAdmin"))
        <a href="{{url('admin/showroomAdmin')}}" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-book fa-fw"></i>  Showroom</a>
        @else
        <a href="{{url('admin/showroomAdmin')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>  Showroom</a>
        @endif
-->
        @if(!strcmp($_SERVER['REQUEST_URI'], "/admin/orderscompleted"))
        <a href="{{url('admin/orderscompleted')}}" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-history fa-fw"></i>  Ordini completati</a>
        @else
        <a href="{{url('admin/orderscompleted')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  Ordini completati</a>
        @endif

        @if(!strcmp($_SERVER['REQUEST_URI'], "/admin/couriers"))
        <a href="{{url('admin/couriers')}}" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-truck fa-fw"></i>  Corrieri</a>
        @else
        <a href="{{url('admin/couriers')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-truck fa-fw"></i>  Corrieri</a>
        @endif

        @if(!strcmp($_SERVER['REQUEST_URI'], "/admin/users"))
        <a href="{{url('admin/users')}}" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Utenti</a>
        @else
        <a href="{{url('admin/users')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Utenti</a>
        @endif

        @if(!strcmp($_SERVER['REQUEST_URI'], "/admin/settings"))
        <a href="{{url('admin/settings')}}" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-cog fa-fw"></i>  Impostazione</a><br><br>
        @else
        <a href="{{url('admin/settings')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Impostazione</a><br><br>
        @endif
    </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
