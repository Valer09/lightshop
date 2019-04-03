<!-- Header -->
<!-- Navbar (sit on top) -->

<div class="w3-top w3-hide-small">
    <div class="w3-bar w3-white w3-card">
        <a href="./#"><img id="logoBar" class="w3-image w3-left" src="{{ url('/images/logo_visca.png')}}"></a>
        <a href="{{url('./#')}}" class="barSx w3-bar-item w3-button"><b>Visca s.n.c.</b></a>
        <a href="{{ url('/about ') }}" class="barDx w3-bar-item w3-button">Chi siamo</a>
        <a href="{{url('./#orari')}}" class="barDx w3-bar-item w3-button">Orari</a>
        <a href="{{url('/#contact')}}" class="barDx w3-bar-item w3-button">Contatti</a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right ">
            <a href="{{ route('Element.shoppingCart') }}" class="barDx w3-bar-item w3-button"><i class="fa fa-shopping-cart"></i> {{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</a>
            <div class="w3-dropdown-hover w3-bar-item" style="padding: 0 0 0 0;">
                <a id="prodot" href="{{ url('/catalog ') }}" class="barDx w3-button">Prodotti</a>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    {{!$Category = \App\Category::all()}}
                    @foreach ($Category as $Category)
                    <a href="{{ url('/catalog').$Category->name }}" class="w3-bar-item w3-button">{{ $Category->name }}</a></option>
                    @endforeach
                </div>
            </div>
            <div class="w3-dropdown-hover w3-bar-item" style="padding: 0 0 0 0;">
                <a id="prodot" href="{{ url('/showroom ') }}" class="barDx w3-button">Showroom</a>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="{{ url('/showroom/pavimenti') }}" class="w3-bar-item w3-button">Pavimenti e Rivestimenti</a></option>
                    <a href="{{ url('/showroom/cucine') }}" class="w3-bar-item w3-button">Cucine</a></option>
                    <a href="{{ url('/showroom/bagni') }}" class="w3-bar-item w3-button">Bagni</a></option>
                    <a href="{{ url('/showroom/porte') }}" class="w3-bar-item w3-button">Porte</a></option>
                    <a href="{{ url('/showroom/caminetti') }}" class="w3-bar-item w3-button">Caminetti</a></option>
                    <a href="{{ url('/showroom/falegnameria') }}" class="w3-bar-item w3-button">Falegnameria</a></option>
                </div>
            </div>
            @auth
            <div class="w3-dropdown-hover w3-bar-item" style="padding: 0 0 0 0;">
                <a href="{{ url('/profile') }}" class="barDxButt w3-button">{{Auth::user()->name}}</a>

                <div class="w3-dropdown-content content-right w3-bar-block w3-card-4">
                    <?php $group = Auth::user()->group ?>
                    @if( $group == "Administrator" )
                    <a href="{{ url('/admin/home ') }}" class="w3-bar-item w3-button">DASHBOARD</a>

                    @endif
                    <a href="{{ url('/profile ') }}" class="w3-bar-item w3-button">Profilo</a>
                    <a href="{{ url('/logout') }}" class="w3-bar-item w3-button">Log Out</a>
                </div>
            </div>
            @else
            <a href="{{ route('login') }}" class="barDxButt w3-bar-item w3-button">Accedi</a>
            @endauth
        </div>
    </div>
</div>

<div class="w3-top w3-hide-medium w3-hide-large">
    <div class="w3-bar w3-white w3-wide w3-card">
        <a href="./#"><img id="logoBar" class="w3-image w3-left" src="{{ url('/images/logo_visca.png')}}"
                width="51"></a>
        <button onclick="myFunction('tendina')" class="barSxM w3-bar-item w3-block w3-button"><b>Visca s.n.c.</b>
            <i class="w3-margin-left fa fa-bars"></i></button>

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

