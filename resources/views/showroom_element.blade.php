@extends('layout.defaultLayout')
@section('content')

<header class="w3-display-container w3-wide" id="principalDivElement#">
    <div class="w3-display-bottommiddle w3-margin-top w3-margin">
        <h1 class="w3-xxlarge w3-center w3-text-white"><span class="w3-padding w3-green w3-opacity-min"><b>V</b></span> <span class="w3-hide-small w3-text-light-grey">Showroom</span></h1>
    </div>
    <img src="{{asset('storage')}}{{$Element[0]->pathPhoto}}" style="width: 100%">
</header>

<div class="divCenter" style="width: 100%; padding: 10%">
    <h1>{{$Element[0]->name}}</h1>
    <div>
        <p>{{$Element[0]->description}}</p>
        <p>The latest addition to the successful restaurant chain Sticks’n’Sushi is found on the busy King’s Road near Sloane Square in London. The restaurant occupies all floors in a classic, white three-story townhouse while a protruding, black-and-grey tile-clad foundation finishes off the architectural elegance. With a fascinating body of work that merges architecture with design, interior design and art direction, the designers behind this restaurant are the award-winning Danish practice Norm Architects.
            For the King’s Road job, they chose to highlight the architecture of the house by following the nature of the spaces and their intake of daylight: 
            “We wanted to take the guests on a journey by creating a diversity in the design. You move from the dark cellar to the light first floor. 
        </p>
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

<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

@stop