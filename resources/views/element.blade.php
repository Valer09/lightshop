@extends('layout.defaultLayout')

@section('content')
{{!$el = $Element[0]}}
{{!$photos = App\Http\Controllers\gets_controller::photo_element_controller($el->id)}}
{{!$brand = App\Http\Controllers\gets_controller::brand_controller($el->brand)}}

<!-- !PAGE CONTENT! -->
    <div class="w3-main w3-white" style="margin-top:49px; margin-left:260px">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:80px"></div>

    <!-- Slideshow Header -->
    <div class="w3-container" id="apartment">
        <h2 class="w3-text-green">{{$el->name}}</h2>
        <div class="w3-display-container mySlides">
            <img src="{{ asset('storage').$el->pathPhoto}}" style="max-width: 600px; max-height: 500px; height:100%;margin-bottom:-6px">
        </div>
        @foreach($photos as $photo)
        <div class="w3-display-container mySlides">
            <img src="{{ asset('storage').$photo->path}}" style="max-width: 600px; max-height: 500px; height:100%;margin-bottom:-6px">
            @if($photo->alt != "")
            <div class="w3-display-bottomleft w3-container w3-black">
                <p>{{$photo->alt}}</p>
            </div>
            @endif
        </div>
        @endforeach
    </div>

    <div class="w3-row-padding w3-section">
        <div class="w3-col s3 l1">
            <img class="demo w3-opacity w3-hover-opacity-off" src="{{ asset('storage').$el->pathPhoto}}" style="width:100%;cursor:pointer"
            onclick="currentDiv(1)" title="Living room">
        </div>
        {{!$contaa = 2}}
        @foreach($photos as $photo)
        <div class="w3-col s3 l1">
            <img class="demo w3-opacity w3-hover-opacity-off" src="{{ asset('storage').$photo->path}}" style="width:100%;cursor:pointer"
            onclick="currentDiv({{$contaa}})" title="Living room">
        </div>
        {{!$contaa++}}
        @endforeach
    </div>

    <div class="w3-container">
    <h4><strong>Dettagli</strong></h4>
    <div class="w3-row w3-large">
        <div class="w3-col s6">
        <p>{{ $el->name }} - 
            @if($brand->link != null || $brand->link != "")
            <a target="_blank" href="{{$brand->link}}"><b>{{ $el->brand }}</b></a>
            @else
            <b>{{ $el->brand }}</b>
            @endif
        </p>
        <p>{!! nl2br($el->description) !!}</p>
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

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
    </script>
@stop