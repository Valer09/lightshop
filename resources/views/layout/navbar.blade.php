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
              <a href="#" class="w3-bar-item w3-button">Link 1</a>
              <a href="#" class="w3-bar-item w3-button">Link 2</a>
              <a href="#" class="w3-bar-item w3-button">Link 3</a>
            </div>
          </div>
          <a href="./404.html" class="barDx w3-bar-item w3-button">Showroom</a>
          @auth
              <a href="{{ url('/logout') }}" class="barDxButt w3-bar-item w3-button">Logout</a>
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

