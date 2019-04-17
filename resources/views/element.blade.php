@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')
  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/navbarColor.css')}}" />
@endsection

@section('content')
@php
 $el = $Element[0];
 $photos = App\Http\Controllers\gets_controller::photo_element_controller($el->id);
 $brand = App\Http\Controllers\gets_controller::brand_controller($el->brand);
@endphp

<!--BIG DISPLAY-->
<!-- !PAGE CONTENT! -->
<div class="w3-row w3-hide-small w3-hide-medium w3-display-container" style="min-height:100%">
    <div class="l4 w3-display-bottomleft w3-padding" style="max-width: 33%">
        <h1>{{$el->name}}</h1>
        @if($brand->link != null || $brand->link != "")
        <a target="_blank" href="{{$brand->link}}"><h4>{{ $el->brand }}</h4></a>
        @else
        <h4>{{ $el->brand }}</h4>
        @endif
        <span>{!! nl2br(utf8_decode($el->description)) !!}</span>
    </div>
    <div class="containerCarousel w3-col w3-display-topmiddle l4" style="margin-top: 100px;">          
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            @for($i=1; $i <= count($photos); $i++)
            <li data-target="#myCarousel" data-slide-to="{{$i}}"></li>
            @endfor
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active" style="overflow:hidden; max-height:60%">
                    <img data-src="{{ asset('storage').$el->pathPhoto}}" alt="{{ $el->name }}">
                </div>

                @foreach($photos as $photo)
                <div class="item" style="overflow:hidden; max-height:60%">
                    <img class="w3-image" data-src="{{ asset('storage').$photo->path}}" alt="{{$photo->alt}}">
                </div>
                @endforeach
            </div>

            <!-- Left and right controls -->
            @if(!empty($photos) || count($photos) > 0)
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
            @endif
        </div>
    </div>
    <div class="l4 w3-display-bottomright w3-center">
        <div class="w3-padding" style="background-color: #2c993f; color: white">
            <p>Prezzo: {{ number_format($el->price, 2, ',', '.') }} €</p>
            <form method="post" action="{{route('Element.addToCart', ['id' => $el->id]) }}">
                @csrf
                <input style="color:black" type="number" name="quantity" min="1" max="{{$el->availability}}" value="1" required>
                <button type="submit" class="w3-button w3-black">Aggiungi la carrello</button>
            </form>
        </div>
    </div>
</div>

<!--SMALL AND MEDIUM-->
<!-- !PAGE CONTENT! -->
<div class="w3-hide-large" style="margin-top: 80px">
    <div class="w3-container w3-white">          
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            @for($i=1; $i <= count($photos); $i++)
            <li data-target="#myCarousel" data-slide-to="{{$i}}"></li>
            @endfor
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active" style=" height: 80%">
                    <img src="{{ asset('storage').$el->pathPhoto}}" style=" height: 80%" alt="{{ $el->name }}">
                </div>

                @foreach($photos as $photo)
                <div class="item" style=" height: 80%">
                    <img src="{{ asset('storage').$photo->path}}" style=" height: 80%" alt="{{$photo->alt}}">
                </div>
                @endforeach
            </div>

            <!-- Left and right controls -->
            @if(!empty($photos) || count($photos) > 0)
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
            @endif
        </div>
    </div>
    <div class="w3-container w3-padding-16">
        <h1>{{$el->name}}</h1>
        @if($brand->link != null || $brand->link != "")
        <a target="_blank" href="{{$brand->link}}"><h4>{{ $el->brand }}</h4></a>
        @endif
        <span>{!! nl2br($el->description) !!}</span>
    </div>
    <div class="w3-container w3-center w3-padding-16">
        <div>
            <p>Prezzo: {{ number_format($el->price, 2, ',', '.') }} €</p>
            <form method="post">
                @csrf
                <input type="number" name="quantity" min="1" max="{{$el->availability}}" required>
                <button type="button" class="w3-button w3-black">Aggiungi la carrello</button>
            </form>
        </div>
    </div>
</div>

@endsection