@extends('layout.defaultLayout')

@section('content')

<!--FUNZIONE PER ALTRE FOTO DELL_OGETTO          {{!$photos = App\Http\Controllers\gets_controller::photo_element_controller($el->id)}}<img src=" {{ asset('storage').$photos[0]->path }}" style="width:100%">
   -->

<!-- !PAGE CONTENT! -->
    <div class="w3-main w3-white" style="margin-top:49px; margin-left:260px">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:80px"></div>

    <!-- Slideshow Header -->
    <div class="w3-container" id="apartment">
    <h2 class="w3-text-green">Minuteria</h2>
    <div class="w3-display-container mySlides">
        <img src="./images/catalogo/bullone.jpg" style="max-width: 500px; max-height: 500px; height:100%;margin-bottom:-6px">
        <div class="w3-display-bottomleft w3-container w3-black">
        <p>Bullone</p>
        </div>
    </div>
    <div class="w3-display-container mySlides">
        <img src="./images/catalogo/bullone1.jpg" style="max-width: 500px; max-height: 500px; height:100%;margin-bottom:-6px">
        <div class="w3-display-bottomleft w3-container w3-black">
        <p>Dining Room</p>
        </div>
    </div>
    <div class="w3-display-container mySlides">
        <img src="./images/catalogo/bullone2.jpg" style="max-width: 500px; max-height: 500px; height:100%; margin-bottom:-6px">
        <div class="w3-display-bottomleft w3-container w3-black">
        <p>Bedroom</p>
        </div>
    </div>
    <div class="w3-display-container mySlides">
        <img src="./images/catalogo/bullone3.jpg" style="max-width: 500px; max-height: 500px; height:100%;margin-bottom:-6px">
        <div class="w3-display-bottomleft w3-container w3-black">
        <p>Living Room II</p>
        </div>
    </div>
    </div>
    <div class="w3-row-padding w3-section">
    <div class="w3-col s3">
        <img class="demo w3-opacity w3-hover-opacity-off" src="./images/catalogo/bullone.jpg" style="width:100%;cursor:pointer"
        onclick="currentDiv(1)" title="Living room">
    </div>
    <div class="w3-col s3">
        <img class="demo w3-opacity w3-hover-opacity-off" src="./images/catalogo/bullone1.jpg" style="width:100%;cursor:pointer"
        onclick="currentDiv(2)" title="Dining room">
    </div>
    <div class="w3-col s3">
        <img class="demo w3-opacity w3-hover-opacity-off" src="./images/catalogo/bullone2.jpg" style="width:100%;cursor:pointer"
        onclick="currentDiv(3)" title="Bedroom">
    </div>
    <div class="w3-col s3">
        <img class="demo w3-opacity w3-hover-opacity-off" src="./images/catalogo/bullone3.jpg" style="width:100%;cursor:pointer"
        onclick="currentDiv(4)" title="Second Living Room">
    </div>
    </div>

    <div class="w3-container">
    <h4><strong>Dettagli</strong></h4>
    <div class="w3-row w3-large">
        <div class="w3-col s6">
        <p><i class="fa fa-fw fa-male"></i> Max people: 4</p>
        <p><i class="fa fa-fw fa-bath"></i> Bathrooms: 2</p>
        <p><i class="fa fa-fw fa-bed"></i> Bedrooms: 1</p>
        </div>
        <div class="w3-col s6">
        <p><i class="fa fa-fw fa-clock-o"></i> Check In: After 3PM</p>
        <p><i class="fa fa-fw fa-clock-o"></i> Check Out: 12PM</p>
        </div>
    </div>
    <hr>

    <h4><strong>Amenities</strong></h4>
    <div class="w3-row w3-large">
        <div class="w3-col s6">
        <p><i class="fa fa-fw fa-shower"></i> Shower</p>
        <p><i class="fa fa-fw fa-wifi"></i> WiFi</p>
        <p><i class="fa fa-fw fa-tv"></i> TV</p>
        </div>
        <div class="w3-col s6">
        <p><i class="fa fa-fw fa-cutlery"></i> Kitchen</p>
        <p><i class="fa fa-fw fa-thermometer"></i> Heating</p>
        <p><i class="fa fa-fw fa-wheelchair"></i> Accessible</p>
        </div>
    </div>
    <hr>

    <h4><strong>Extra Info</strong></h4>
    <p>Our apartment is really clean and we like to keep it that way. Enjoy the lorem ipsum dolor sit amet,
        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i>
        <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>

    </div>
    <hr>

    <!-- End page content -->
    </div>
@stop