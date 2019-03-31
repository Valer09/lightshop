@extends('layout.defaultLayout')
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

    <!-- Slideshow -->
  @if(count($Photos) > 0)
  <div class="w3-container">
    @foreach($Photos as $photo)
    <div class="w3-display-container mySlides">
      <img src="{{ asset('storage') }}{{ $photo->path }}" style="width:100%">
      @if($photo->alt != '')
      <div class="w3-display-topleft w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">{{ $photo->alt }}</span>
      </div>
      @endif
      
    </div>
    @endforeach

    
    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    
      <div class="w3-center">
        @for($i = 1; $i <= count($Photos); $i++)
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv({{ $i }})"></span>
        @endfor
      </div>
    </div>
   

  </div>

  @endif
  
</div>

@stop