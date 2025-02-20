<!-- Header -->
<!-- Navbar (sit on top) -->

<div class="w3-top w3-hide-small " id="navMar">
    <div class="w3-bar ">
        <a href="./#"><img class="logoBar w3-image w3-left" src="{{ url('/images/logo_visca.png')}}"></a>
        <a href="{{url('./#')}}" class="barSx w3-bar-item"><b>Visca s.n.c.</b></a>
        <a href="{{ url('/about ') }}" class="barDx w3-bar-item">Chi siamo</a>
        <a href="{{url('./#orari')}}" class="barDx w3-bar-item">Orari</a>
        <a href="{{url('/#contact')}}" class="barDx w3-bar-item">Contatti</a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right">
            <a href="{{ route('Element.shoppingCart') }}" class="barDx w3-bar-item w3-animate-opacity"><i class="fa fa-shopping-cart"></i> {{ Session::has('cart') && Session::get('cart')->totalQty != 0 ? Session::get('cart')->totalQty : ''}}</a>
            
            <a class="w3-bar-item barDx" onclick="this.style.display='none'; document.getElementById('searchButton').style.display = 'block';"><i class="fa fa-search"></i></a>
            <div id="searchButton" class="w3-bar-item barDx w3-animate-opacity w3-animate-right" style="display:none; padding:4.5px">
                <form action="{{url('search')}}" method="get">
                    <input type="text" placeholder="Trapano blu.." style="color:black;" name="search" required>
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            
            <div class="w3-dropdown-hover" style="padding: 0 0 0 0;">
                <a href="{{ url('/catalog ') }}" class="w3-bar-item barDx">Prodotti</a>
                <div class="w3-dropdown-content w3-bar-block w3-card-4" style="margin-top:49px">
                    {{!$Category = \App\Category::all()}}
                    @foreach ($Category as $Category)
                    <a href="{{ url('/catalog').$Category->name }}" class="w3-bar-item">{{ $Category->name }}</a></option>
                    @endforeach
                </div>
            </div>
            <div class="w3-dropdown-hover" style="padding: 0 0 0 0;">
                <a href="{{ url('/showroom ') }}" class="barDx w3-bar-item">Showroom</a>
                <div class="w3-dropdown-content w3-bar-block w3-card-4" style="margin-top:49px">
                    {{!$Cats=\App\CatShowroom::all()}}
                    @foreach($Cats as $cat)
                    <a href="{{ url($cat->name_path) }}" class="w3-bar-item">{{$cat->name}}</a></option>
                    @endforeach
                </div>
            </div>
            @auth
            <div class="w3-dropdown-hover" style="padding: 0 0 0 0;">
                <a href="{{ url('/profile') }}" class="barDx w3-bar-item">{{Auth::user()->name}}</a>

                <div class="w3-dropdown-content content-right w3-bar-block w3-card-4" style="margin-top:49px">
                    <?php $group = Auth::user()->group ?>
                    @if( $group == "Administrator" || $group == "Privileged" )
                    <a href="{{ url('/admin/home') }}" class="w3-bar-item">DASHBOARD</a>
                    @endif
                    <a href="{{ url('/profile') }}" class="w3-bar-item">Profilo</a>
                    <a href="{{ url('/logout') }}" class="w3-bar-item">Log Out</a>
                </div>
            </div>
            @else
            <a href="{{ route('login') }}" class="barDx w3-bar-item">Accedi</a>
            @endauth
        </div>
    </div>
</div>

<div class="w3-top w3-hide-medium w3-hide-large">
    <div class="w3-bar w3-white w3-wide w3-card">
        <div class="w3-row">
            <div class="logoBar">
                <a href="./#"><img class="w3-image w3-left" src="{{ url('/images/logo_visca.png')}}"
                    width="51"></a>
            </div>
            <div class="w3-rest">
                <button onclick="myFunction('tendina')" class="barSxM w3-margin-left w3-block w3-button"><b>Visca s.n.c.</b>
                    <i class="w3-xlarge fa fa-angle-down"></i></button>
            </div>
        </div>
        
        <!-- Float links to the right. Hide them on small screens -->
        <div id="tendina" class="w3-hide w3-bar w3-container">
            <p><a href="./#" class="barDxM w3-bar-item w3-button w3-row-padding"
                    onclick="myFunction('tendina')">Home</a></p>
            <p><a href="{{ url('/catalog ') }}" class="barDxM w3-bar-item w3-button w3-row-padding"
                    onclick="myFunction('tendina')">Prodotti</a></p>
            <p><a href="./404.html" class="barDxM w3-bar-item w3-button w3-row-padding"
                    onclick="myFunction('tendina')">Showroom</a></p>
            <p><a href="./#orari" class="barDxM w3-bar-item w3-button w3-row-padding"
                    onclick="myFunction('tendina')">Orari</a></p>
            <p><a href="./#contact" class="barDxM w3-bar-item w3-button w3-row-padding"
                    onclick="myFunction('tendina')">Contatti</a></p>
            <p><a href="./404.html" class="barDxM w3-bar-item w3-button w3-row-padding"
                    onclick="myFunction('tendina')">Chi
                    siamo</a></p>
            @auth
            <p><a href="{{ url('/logout') }}" class="barDxM w3-bar-item w3-button w3-row-padding"
                    onclick="myFunction('tendina')">Logout</a></p>
            @else
            <p><a href="{{ route('login') }}" class="barDxMButt w3-bar-item w3-button w3-row-padding"
                    onclick="myFunction('tendina')">Accedi</a></p>
            @endauth
        </div>
    </div>
</div>

