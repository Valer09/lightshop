@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')
  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/navbarTrasp.css')}}" />
  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/home.css')}}" />
  <script src="{{url('/js/navbarDinamic.js')}}"></script>
  <script src="{{url('/js/home.js')}}"></script>
@endsection

@section('content')



<!--HEADERS-->
  <!--BIG SCREEN-->
  <header class="w3-hide-small w3-hide-medium w3-wide w3-animate-opacity" style="min-height: 100%; overflow: hidden; width: 100%">

    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 100%">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item min-vh-100 active">
          <img src="{{ asset('storage').'/images/home/DSCF4141 (FILEminimizer).JPG'}}" alt="Los Angeles">
        </div>

        <div class="item min-vh-100">
          <img src="{{ asset('storage').'/images/home/DSCF4114 (FILEminimizer).JPG'}}" alt="Chicago">
        </div>
      
        <div class="item min-vh-100">
          <img src="{{ asset('storage').'/images/home/DSCF4155 (FILEminimizer).JPG'}}" alt="New york">
        </div>
      
        <div class="item min-vh-100">
          <img src="{{ asset('storage').'/images/home/DSCF4179 (FILEminimizer).JPG'}}" alt="New york">
        </div>
      
        <div class="item min-vh-100">
          <img src="{{ asset('storage').'/images/home/DSCF4275 (FILEminimizer).JPG'}}" alt="New york">
        </div>
      
        <div class="item min-vh-100">
          <img src="{{ asset('storage').'/images/home/DSCF4299 (FILEminimizer).JPG'}}" alt="New york">
        </div>
        
        <div class="w3-display-middle w3-margin-top w3-center">
          <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Visca s.n.c.</b></span></h1>
          <span class="w3-hide-small w3-text-light-grey">di Visca Lucio e Filiberto</span>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!--SMALL SCREEN-->
  <header class="w3-display-container w3-hide-large w3-content w3-wide" style="width:100%;">
    <img class="w3-image" src="./images/ferramenta/ferramenta.jpg" width="1500" height="800">
    <div class="w3-display-middle w3-center">
      <h1 class="w3-large w3-text-white"><span class="w3-padding-small w3-black w3-opacity-min"><b>Visca s.n.c.</b></span></h1>
    </div>
  </header>



  <!-- Page content -->
  <div class="w3-content w3-padding" style="max-width:1564px">
    <div class="w3-container w3-margin-top w3-padding-64" id="showroom">

      <h2 class="w3-border-bottom w3-border-light-grey w3-wide w3-center"><b>Offerte</b></h2>
      <div class="carousel-frame" style="height:fit-content">
        <ul>
          {{!$Offerts = \App\Offert::allWithKey() }}
          @foreach($Offerts as $of)
          {{!$el =\App\Element::find($of->id_element)}}
          <li class="carousel-item">
            <div class=" w3-display-container w3-white" style="width:210px; height: 210px">
                <img class="lazy" data-src=" {{ asset('storage').$el->pathPhoto }}" style="object-fit:scale-down; width: 100%; height:210px;">
                
                <span class="w3-round-xlarge w3-tag w3-display-bottommiddle w3-red" style="width:auto; height:auto"><label class="prices" style="text-decoration: line-through">€ {{ number_format($el->price, 2, '.', ',') }}</label> -{{$of->discount_perc}}%<br>Scontato a: <b>€ {{ number_format(($el->price - (($el->price)/100*$of->discount_perc)), 2, '.', ',') }}</b></span>

                <div class="w3-display-middle w3-display-hover">
                    <button onclick="location.href='{{url('element/').$el->id}}'" class="w3-button w3-black">Acquista<i class="fa fa-shopping-cart"></i></button>
                </div>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <!-- Project Section -->
    <div class="w3-container w3-margin-top w3-padding-64" id="showroom">

      <h2 class="w3-border-bottom w3-border-light-grey w3-wide w3-center"><b>Showroom</b></h2>
      <div class="w3-row-padding" style="margin-top:40px">
        <div class="w3-col l4 m4 w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft w3-black w3-padding">Bagni</div>
            <img class="img-showroom" onclick="openImage(this);" src="./images/bagno/bagno (2).jpg" alt="I Bagni" style="width:100%">
          </div>
        </div>
        <div class="w3-col l4 m4 w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft w3-black w3-padding">Ceramiche</div>
            <img class="img-showroom" onclick="openImage(this);" src="./images/ceramiche/ceramiche (5).jpg" alt="Ceramiche"
              style="width:100%">
          </div>
        </div>
        <div class="w3-col l4 m4 w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft w3-black w3-padding">Living</div>
            <img class="img-showroom" onclick="openImage(this);" src="./images/cucine/cucina (2).jpg" alt="Le Cucine"
              style="width:100%">
          </div>
        </div>
      </div>

      <div class="w3-row-padding">
        <div class="w3-col l4 m4 w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft w3-black w3-padding">Ferramenta</div>
            <img class="img-showroom" onclick="openImage(this);" src="./images/ferramenta/ferramenta (6).jpg" alt="Il Negozio"
              style="width:100%">
          </div>
        </div>
        <div class="w3-col l4 m4 w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft w3-black w3-padding">Cucine</div>
            <img class="img-showroom" onclick="openImage(this);" src="./images/cucine/cucina (1).jpg" alt="Le Cucine"
              style="width:99%">
          </div>
        </div>
        <div class="w3-col l4 m4 w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft w3-black w3-padding">Rubinetteria</div>
            <img class="img-showroom" onclick="openImage(this);" src="./images/bagno/bagno (6).jpg" alt="I Bagni" style="width:99%">
          </div>
        </div>
      </div>

      <div class="w3-row-padding">
        <div class="w3-col l4 m4 w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft w3-black w3-padding">Caminetti</div>
            <img class="img-showroom" onclick="openImage(this);" src="./images/caminetti/caminetto (2).jpg" alt="I Caminetti"
              style="width:99%">
          </div>
        </div>
        <div class="w3-col l4 m4 w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft w3-black w3-padding">Expo Ceramiche</div>
            <img class="img-showroom" onclick="openImage(this);" src="./images/ceramiche/ceramiche (7).jpg" alt="Ceramiche"
              style="width:99%">
          </div>
        </div>
        <div class="w3-col l4 m4 w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft w3-black w3-padding">Porticati</div>
            <img class="img-showroom" onclick="openImage(this);" src="./images/porticati/porticati (1).jpg" alt="I Porticati"
              style="width:99%">
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
          <form target="_blank">
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-twothird">
                <select id="email" class="w3-input w3-border" required>
                  <option value>Chi vuoi contattare?</option>
                  <option value="commerciale@viscaedilizia.it">Informazioni Comerciali</option>
                  <option value="acquisti@viscaedilizia.it">Ordini</option>
                  <option value="amministrazione@viscaedilizia.it">Amministrazione</option>
                </select><br>
                <input id="obj" placeholder="Oggetto" class="w3-input w3-border"><br>
              </div>
            </div>
            <textarea id="body" rows="4" class="w3-input w3-border" type="text" placeholder="Messaggio" required></textarea>
            <button class="w3-button w3-black w3-section w3-right" type="button" onclick="email()">INVIA</button>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- End page content -->
  
  <!--Modale immagini-->
  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'" style="display: none;">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image" src="https://www.w3schools.com/w3images/tech_phone.jpg">
      <p id="caption" class="w3-opacity w3-large">A phone</p>
    </div>
  </div>
@endsection




