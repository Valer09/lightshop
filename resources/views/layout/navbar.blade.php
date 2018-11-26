<!-- Header -->
  <!-- Navbar (sit on top) -->
  <div class="w3-top w3-hide-small">
    <div class="w3-bar w3-white w3-wide w3-card">
      <img id="logoBar" class="w3-image w3-left" src="./images/logo visca.png">
      <a href="./" id="barSx" class="w3-bar-item w3-button"><b>Visca s.n.c.</b></a>
      <a href="./404.html" id="barDx" class="w3-bar-item w3-button">Chi siamo</a>
      <a href="./orari.html" id="barDx" class="w3-bar-item w3-button">Orari</a>
      <a href="./contatti.html" id="barDx" class="w3-bar-item w3-button">Contatti</a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right ">
        <div class="w3-dropdown-hover">
          <a id="barDx" class="w3-button">Prodotti</a>
          <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a href="#" class="w3-bar-item w3-button">Link 1</a>
            <a href="#" class="w3-bar-item w3-button">Link 2</a>
            <a href="#" class="w3-bar-item w3-button">Link 3</a>
          </div>
        </div>
        <a href="./404.html" id="barDx" class="w3-bar-item w3-button">Showroom</a>
        @auth
            <a href="{{ url('/logout') }}" id="barDxButt" class="w3-bar-item w3-button">Logout</a>
        @else
            <a href="{{ route('login') }}" id="barDxButt" class="w3-bar-item w3-button">Accedi</a>
        @endauth
      </div>
    </div>
  </div>

  <div class="w3-top w3-hide-medium w3-hide-large">
    <div class="w3-bar w3-white w3-wide w3-card">
      <img id="logoBar" class="w3-image w3-left" src="./images/logo visca.png" width="51">
      <button onclick="myFunction('Demo1')" id="barSx" class="w3-bar-item w3-block w3-button"><b>Visca s.n.c.</b></button>
      <!-- Float links to the right. Hide them on small screens -->
      <div id="Demo1" class="w3-hide w3-bar w3-container">
        <p><a href="./index.html" id="barDxM" class="w3-bar-item w3-button w3-row-padding" onclick="myFunction()">Home</a></p>
        <p><a href="./404.html" id="barDxM" class="w3-bar-item w3-button w3-row-padding" onclick="myFunction()">Prodotti</a></p>
        <p><a href="./404.html" id="barDxM" class="w3-bar-item w3-button w3-row-padding" onclick="myFunction()">Showroom</a></p>
        <p><a href="./orari.html" id="barDxM" class="w3-bar-item w3-button w3-row-padding" onclick="myFunction()">Orari</a></p>
        <p><a href="./contatti.html" id="barDxM" class="w3-bar-item w3-button w3-row-padding" onclick="myFunction()">Contatti</a></p>
        <p><a href="./404.html" id="barDxM" class="w3-bar-item w3-button w3-row-padding" onclick="myFunction()">Chi
            siamo</a></p>
        @auth
            <p><a href="{{ url('/logout') }}" id="barDxM" class="w3-bar-item w3-button w3-row-padding" onclick="myFunction()">Logout</a></p>
        @else
        <p><a href="{{ route('login') }}" id="barDxMButt" class="w3-bar-item w3-button w3-row-padding" onclick="myFunction()">Accedi</a></p>
        @endauth
      </div>
    </div>
  </div>
