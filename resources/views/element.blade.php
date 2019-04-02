@extends('layout.defaultLayout')

@section('content')
@php
 $el = $Element[0];
 $photos = App\Http\Controllers\gets_controller::photo_element_controller($el->id);
 $brand = App\Http\Controllers\gets_controller::brand_controller($el->brand);
@endphp

<!--BIG DISPLAY-->
<!-- !PAGE CONTENT! -->
<div class="w3-row w3-hide-small w3-hide-medium" style="padding-top: 49px; min-height: 100%;">
        <div class="l4 w3-container w3-padding-16" style="position: absolute; left: 0; bottom: 0; max-width: 33%">
            <h1>{{$el->name}}</h1>
            @if($brand->link != null || $brand->link != "")
            <a target="_blank" href="{{$brand->link}}"><h4>{{ $el->brand }}</h4></a>
            @endif
            <span>Hans J. Wegner designed the stackable Elbow Chair in 1956. After crafting two prototypes, he set the
                production-intensive chair design aside in his archives, where it remained for nearly half a century
                until it was brought back to life in 2005. Wegner designed the stackable Elbow Chair in 1956. After crafting two prototypes, he set the
                production-intensive chair design aside in his archives, where it remained for nearly half a century
                until it was brought back to life in 2005.Wegner designed the stackable Elbow Chair in 1956. After crafting two prototypes, he set the
                production-intensive chair design aside in his archives, where it remained for nearly half a century
                until it was brought back to life in 2005.</span>
        </div>
        <div class="w3-col w3-display-topmiddle l4" style="max-width:500px; margin-top: 80px">          
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
                <div class="item active" style=" height: 600px">
                    <img src="{{ asset('storage').$el->pathPhoto}}" alt="{{ $el->name }}" style="height: 600px">
                </div>

                @foreach($photos as $photo)
                <div class="item" style="height: 600px; overflow:hidden">
                    <img class="w3-image" src="{{ asset('storage').$photo->path}}" alt="{{$photo->alt}}" style="height: 600px;">
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
        <div class="l4 w3-container w3-center w3-padding-16" style="position: absolute; right: 0; bottom: 0;">
            <div>
                <p>Prezzo: {{$el->price}} €</p>
                <form method="post">
                    @csrf
                    <input type="number" name="quantity" min="1" max="{{$el->availability}}" required>
                    <button type="button" class="w3-button w3-black">Aggiungi la carrello</button>
                </form>
            </div>
        </div>
</div>

<!--SMALL AND MEDIUM-->
<!-- !PAGE CONTENT! -->
<div class="w3-hide-large" style="padding-top: 49px;">
        <div class="w3-container" style="margin-top: 80px">          
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
                <div class="item active" style=" height: 600px">
                    <img src="{{ asset('storage').$el->pathPhoto}}" alt="{{ $el->name }}">
                </div>

                @foreach($photos as $photo)
                <div class="item" style=" height: 600px">
                    <img src="{{ asset('storage').$photo->path}}" alt="{{$photo->alt}}">
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
            <span>Hans J. Wegner designed the stackable Elbow Chair in 1956. After crafting two prototypes, he set the
                production-intensive chair design aside in his archives, where it remained for nearly half a century
                until it was brought back to life in 2005. Wegner designed the stackable Elbow Chair in 1956. After crafting two prototypes, he set the
                production-intensive chair design aside in his archives, where it remained for nearly half a century
                until it was brought back to life in 2005.Wegner designed the stackable Elbow Chair in 1956. After crafting two prototypes, he set the
                production-intensive chair design aside in his archives, where it remained for nearly half a century
                until it was brought back to life in 2005.</span>
        </div>
        <div class="w3-container w3-center w3-padding-16">
            <div>
                <p>Prezzo: {{$el->price}} €</p>
                <form method="post">
                    @csrf
                    <input type="number" name="quantity" min="1" max="{{$el->availability}}" required>
                    <button type="button" class="w3-button w3-black">Aggiungi la carrello</button>
                </form>
            </div>
        </div>
</div>

@stop