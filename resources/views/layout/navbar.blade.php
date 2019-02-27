<!-- Header -->
  <!-- Navbar (sit on top) -->

    <div class="w3-top w3-hide-small">
      <div class="w3-bar w3-white w3-wide w3-card">
        <a href="./#"><img id="logoBar" class="w3-image w3-left" src="/images/logo_visca.png"></a>
        <a href="./#" class="barSx w3-bar-item w3-button"><b>Visca s.n.c.</b></a>
        <a href="./404.html" class="barDx w3-bar-item w3-button">Chi siamo</a>
        <a href="./#orari" class="barDx w3-bar-item w3-button">Orari</a>
        <a href="./#contact" class="barDx w3-bar-item w3-button">Contatti</a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right ">
          <div class="w3-dropdown-hover w3-bar-item" style="padding: 0 0 0 0;">
            <a id="prodot" class="barDx w3-button">Prodotti</a>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">

                        {{!$Category = \App\Category::all()}}
                        @foreach ($Category as $Category)
                            <a href="{{ url('/inside') }}" class="w3-bar-item w3-button">{{ $Category->name }}</a></option>
                        @endforeach
            </div>
          </div>
          <a href="{{ url('/showroom ') }}" class="barDx w3-bar-item w3-button">Showroom</a>
          @auth
          <div class="w3-dropdown-hover">
            <a href="{{ url('/profile') }}" id="barDxButt" class="w3-bar-item w3-button">{{Auth::user()->name}}</a>
              <div class="w3-dropdown-content w3-bar-block w3-card-4">
                  <?php $group = Auth::user()->group ?>
                  @if(  $group == "Administrator"  )
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
        <a href="./#"><img id="logoBar" class="w3-image w3-left" src="/images/logo_visca.png" width="51"></a>
          <button onclick="myFunction('tendina')" class="barSxM w3-bar-item w3-block w3-button"><b>Visca s.n.c.</b>
        <i class="w3-margin-left fa fa-bars"></i></button>
      
        <!-- Float links to the right. Hide them on small screens -->
        <div id="tendina" class="w3-hide w3-bar w3-container">
          <p><a href="./#" class="barDxM w3-bar-item w3-button w3-row-padding" onclick="myFunction('tendina')">Home</a></p>
          <p><a href="./404.html" class="barDxM w3-bar-item w3-button w3-row-padding" onclick="myFunction('tendina')">Prodotti</a></p>
          <p><a href="./404.html" class="barDxM w3-bar-item w3-button w3-row-padding" onclick="myFunction('tendina')">Showroom</a></p>
          <p><a href="./#orari" class="barDxM w3-bar-item w3-button w3-row-padding" onclick="myFunction('tendina')">Orari</a></p>
          <p><a href="./#contact" class="barDxM w3-bar-item w3-button w3-row-padding" onclick="myFunction('tendina')">Contatti</a></p>
          <p><a href="./404.html" class="barDxM w3-bar-item w3-button w3-row-padding" onclick="myFunction('tendina')">Chi
              siamo</a></p>
          @auth
              <p><a href="{{ url('/logout') }}" class="barDxM w3-bar-item w3-button w3-row-padding" onclick="myFunction('tendina')">Logout</a></p>
          @else
          <p><a href="{{ route('login') }}" class="barDxMButt w3-bar-item w3-button w3-row-padding" onclick="myFunction('tendina')">Accedi</a></p>
          @endauth
        </div>
      </div>
    </div>

