@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/navbarTrasp.css')}}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/showroom.css')}}" />
    <script src="{{url('/js/navbarDinamic.js')}}"></script>
@endsection

@section('content')

<header class="w3-display-container w3-wide" id="principalDivElement" style="background-image: url('{{asset('storage')}}{{$Element[0]->pathPhoto}}')!important;">
    <div class="w3-display-bottommiddle w3-margin-top w3-margin">
        <h1 class="w3-xxlarge w3-center w3-text-white"><span class="w3-padding w3-green w3-opacity-min"><b>V</b></span> <span class="w3-hide-small w3-text-light-grey">Showroom</span></h1>
    </div>
</header>


<div class="divCenter" style="width: 100%; padding: 10%">
    <h1>{{$Element[0]->name}}</h1>
    <div>
        <p>{!! nl2br($Element[0]->description) !!}</p>
        @if(!empty($Element->linkBuy))
        <p><a href="{{ url($Element[0]->linkBuy) }}">Acquista qui!</a></p>
        @endif
    </div>


  <!--Slideshow-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      @for($i = 0; $i < count($Photos); $i++)
      <li data-target="#myCarousel" data-slide-to="{{$i+1}}"></li>
      @endfor
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item min-vh-100 active">
        <img src="{{ asset('storage').$Element[0]->pathPhoto}}" alt="Los Angeles">
      </div>
      @foreach($Photos as $photo)
      <div class="item min-vh-100">
        <img src="{{ asset('storage').$photo->path}}" alt="Los Angeles">
      </div>
      @endforeach
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
  
</div>

@endsection