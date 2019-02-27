@extends('layout.defaultLayout')


@section('content')
<!--HEADERS-->
  <!--BIG SCREEN-->
  <header class="w3-display-container w3-hide-small w3-content w3-wide" style="width:100%; margin-top: 49px" id="home">
    <img class="w3-image" src="./images/ferramenta/ferramenta.jpg" width="1500" height="800">
    <div class="w3-display-middle w3-margin-top w3-center">
      <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Visca s.n.c.</b></span></h1>
      <span class="w3-hide-small w3-text-light-grey">di Visca Lucio e Filiberto</span>
    </div>
  </header>

  <!--SMALL SCREEN-->
  <header class="w3-display-container w3-hide-medium w3-hide-large w3-content w3-wide" style="width:100%; margin-top: 49px"
    id="home">
    <img class="w3-image" src="./images/ferramenta/ferramenta.jpg" width="1500" height="800">
    <div class="w3-display-middle w3-center">
      <h1 class="w3-medium w3-text-white"><span class="w3-padding-small w3-black w3-opacity-min"><b>Visca s.n.c.</b></span></h1>
    </div>
  </header>



  <!-- Page content -->
  <div class="w3-content w3-padding" style="max-width:1564px">

    <!-- Project Section -->
    <div class="w3-container w3-margin-top w3-padding-64" id="showroom">

      <h2 class="w3-border-bottom w3-border-light-grey w3-wide w3-center"><b>Showroom</b></h3>
        <div class="w3-row-padding" style="margin-top:40px">
          <div class="w3-col l4 m6 w3-margin-bottom">
            <div class="w3-display-container">
              <div class="w3-display-topleft w3-black w3-padding">Bagni</div>
              <img src="./images/bagno/bagno (2).jpg" alt="House" style="width:100%">
            </div>
          </div>
          <div class="w3-col l4 m6 w3-margin-bottom">
            <div class="w3-display-container">
              <div class="w3-display-topleft w3-black w3-padding">Ceramiche</div>
              <img src="./images/ceramiche/ceramiche (5).jpg" alt="House" style="width:100%">
            </div>
          </div>
          <div class="w3-col l4 m6 w3-margin-bottom">
            <div class="w3-display-container">
              <div class="w3-display-topleft w3-black w3-padding">Living</div>
              <img src="./images/cucine/cucina (2).jpg" alt="House" style="width:100%">
            </div>
          </div>
        </div>

        <div class="w3-row-padding">
          <div class="w3-col l4 m6 w3-margin-bottom">
            <div class="w3-display-container">
              <div class="w3-display-topleft w3-black w3-padding">Ferramenta</div>
              <img src="./images/ferramenta/ferramenta (6).jpg" alt="House" style="width:100%">
            </div>
          </div>
          <div class="w3-col l4 m6 w3-margin-bottom">
            <div class="w3-display-container">
              <div class="w3-display-topleft w3-black w3-padding">Cucine</div>
              <img src="./images/cucine/cucina (1).jpg" alt="House" style="width:99%">
            </div>
          </div>
          <div class="w3-col l4 m6 w3-margin-bottom">
            <div class="w3-display-container">
              <div class="w3-display-topleft w3-black w3-padding">Rubinetteria</div>
              <img src="./images/bagno/bagno (6).jpg" alt="House" style="width:99%">
            </div>
          </div>
        </div>

        <div class="w3-row-padding">
          <div class="w3-col l4 m6 w3-margin-bottom">
            <div class="w3-display-container">
              <div class="w3-display-topleft w3-black w3-padding">Caminetti</div>
              <img src="./images/caminetti/caminetto (2).jpg" alt="House" style="width:99%">
            </div>
          </div>
          <div class="w3-col l4 m6 w3-margin-bottom">
            <div class="w3-display-container">
              <div class="w3-display-topleft w3-black w3-padding">Expo Ceramiche</div>
              <img src="./images/ceramiche/ceramiche (7).jpg" alt="House" style="width:99%">
            </div>
          </div>
          <div class="w3-col l4 m6 w3-margin-bottom">
            <div class="w3-display-container">
              <div class="w3-display-topleft w3-black w3-padding">Porticati</div>
              <img src="./images/porticati/porticati (1).jpg" alt="House" style="width:99%">
            </div>
          </div>
        </div>
    </div>



    <!-- About Section -->
    <div class="w3-container w3-content w3-padding-64" id="orari">
      <h2 class="w3-wide w3-center"><b>Orari</b></h2>

      <div class="w3-col w3-large w3-margin-bottom w3-padding-large" style=" text-align: center;">
        <p>Lunedì - Venerdì <b>07:30-13:00 14:30-19:00</b></p>
        <p>Sabato <b>07:30-12:30</b></p>
        <p>Domenica <b>chiuso</b></p>
      </div>

    </div>

    <!-- Contact Section -->
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
      <h2 class="w3-wide w3-center"><b>Contattaci</b></h2>
      <div class="w3-row w3-padding-32">
        <!--big screen-->
        <div class="w3-col l6 m6 w3-hide-small" style="padding-top: 80px;">
          <div class="w3-padding-large w3-cell w3-large">
            <i class="fa fa-map-marker" style="width:30px"></i> Monte S.Giovanni Campano, FR<br>
            <i class="fa fa-map-marker" style="width:30px"></i> (03025) Via Reditoto, 22<br>
            <i class="fa fa-phone" style="width:30px"></i> Tel: <a href="tel:+390775288553">+39 0775.288.553</a><br>
            <i class="fa fa-fax" style="width:30px"></i> Fax: +39 0775.289.160<br>
            <i class="fa fa-envelope" style="width:30px"> </i> Email: <a href="mailto:acquisti@viscaedilizia.it">acquisti@viscaedilizia.it</a><br>
          </div>
        </div>


        <!--small screen-->
        <div class="w3-col w3-large w3-margin-bottom w3-hide-large w3-padding w3-hide-medium">
          <i class="fa fa-map-marker" style="width:30px"></i> Monte S.Giovanni Campano, FR<br>
          <i class="fa fa-map-marker" style="width:30px"></i> (03025) Via Reditoto, 22<br>
          <i class="fa fa-phone" style="width:30px"></i> Tel: <a href="tel:+390775288553">+39 0775.288.553</a><br>
          <i class="fa fa-fax" style="width:30px"></i> Fax: +39 0775.289.160<br>
          <i class="fa fa-envelope" style="width:30px"> </i> Email: <a href="mailto:acquisti@viscaedilizia.it">acquisti@viscaedilizia.it</a><br>
        </div>


        <div class="w3-col l6 m6 w3-padding-small">
          <h4 class="w3-border-bottom w3-border-light-grey w3-padding-16"> Scrivici</h4>
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-twothird">
              <select id="email" class="w3-input w3-border" required>
                <option value>Chi vuoi contattare?</option>
                <option value="commerciale@viscaedilizia.it">Informazioni Comerciali</option>
                <option value="acquisti@viscaedilizia.it">Ordini</option>
                <option value="amministrazione@viscaedilizia.it">Amministrazione</option>
              </select><br>
              <form target="_blank">
                <input id="obj" placeholder="Oggetto" class="w3-input w3-border">
                </input><br>
            </div>
          </div>
          <textarea id="body" rows="4" class="w3-input w3-border" type="text" placeholder="Messaggio" required></textarea>
          <button class="w3-button w3-black w3-section w3-right" type="button" onclick="email()">INVIA</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- End page content -->
  </div>

@stop




