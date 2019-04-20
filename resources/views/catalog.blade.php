@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')
          
    <!--Plugin Slider-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
    <!-- end Plugin slider-->

    <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/navbarColor.css')}}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/catalog.css')}}" />
    <script src="{{url('/js/catalog.js')}}"></script>

  @endsection

@section('content')

<!-- Sidebar/Filter -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top w3-animate-left" id="mySidebar">
    <div id="borderGradient"></div>
    <div id="filter" class="w3-margin-left w3-margin-top">
        <div class="w3-margin-left">
            <a class="w3-row" href="{{ url('catalog') }}">
            <span><i class="fa fa-angle-left"></i> Catalogo</span>
            </a>
            @if($Category != null && ($Category[1] != null || $Category[1] != ''))
            <a class="w3-row w3-margin-top" href="{{ url('catalog').$Category[0]->name }}">
                <span><i class="fa fa-angle-left"></i> {{$Category[0]->name }}</span>
            </a>
            @endif
        </div>
        @if($Category != null)
        <span><h4>Sottocategorie</h4></span>
        <div class="w3-margin-bottom article-navigation">
            <div class="body">
                <ul class="first-level narrow dashed">
                    @foreach($Category[2] as $subcat)
                    <li>
                        <a href="{{ url('catalog'.$Category[0]->name, $subcat->name) }}" wt_name="assortment_menu.level3">{{$subcat->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

        <!--FILTER-->
        <span><h4>Filtra per</h4></span>
        <div class="w3-container w3-margin-bottom">
            <div>
                <label>Prezzo:</label>
                <input type="text" id="js-range-slider" name="price" value="" />
            </div>
        </div>

        <div class="w3-container">
            <div class="exp-left-nav-filter-heading">
                <label>Marca</label>
                <span class="exp-left-nav-more-glyph nsg-glyph--plus collapsed"></span>
                <span class="exp-left-nav-less-glyph nsg-glyph--minus"></span>
            </div>
            <div class="">
                <ul>
                @php
                $brands = array();
                foreach($Elements as $el) {
                    if(empty($brands[$el->brand])){
                        $brands[$el->brand] = 1;
                    } else{
                        $brands[$el->brand]++;
                    }
                }
                @endphp
                @foreach ($brands as $key => $value)
                    <li class="">
                        <input type="checkbox" id="filter-{{$key}}" class="checkFilter" value="{{$key}}">
                        <span>{{$key}} ({{$value}})</span>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>                                               
    </div>     
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
    <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-top: 49px;margin-left:250px;">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:83px"></div>

    @if($Category != null)
        <!-- Top header -->
        <header class="w3-container">
            @if($Category[1] != null || !empty($Category[1]) || $Category[1] != '')
            <h2 class="w3-xlarge">{{ $Category[0]->name }} <i class="fa fa-angle-right"></i> {{ $Category[1] }}</h2>
            <h5>{{count($Elements)}} elementi</h5>
            @endif
        </header>

        <!-- Image header -->
        @if($Category[1] == null && empty($search))
        <div class="w3-display-container w3-container">
            <img class="w3-image"  data-src="{{ asset('storage').$Category[0]->pathPhoto }}" alt="{{ $Category[0]->name }}" style="width:100%">
            <div class="w3-display-topleft w3-text-white textAnimation" style="padding:24px 48px">
                <h1 class="w3-jumbo w3-hide-small" style="text-shadow: 3px 2px 10px black;">{{ $Category[0]->name }}</h1>
                <h1 class="w3-hide-large w3-hide-medium" style="text-shadow: 3px 2px 10px black;">{{ $Category[0]->name }}</h1>
                <h4 class="w3-padding" style="text-shadow: 3px 2px 10px black;">{{count($Elements)}} elementi</h4>
                <p><a href="#elementi" class="w3-black w3-padding-large w3-large w3-card-4 w3-hover-red">Prodotti</a></p>
            </div>
        </div>
        @endif
    @else
        <header class="w3-container">
            <h2 class="w3-xlarge"><i class="fa fa-search"></i>Ricerca per: {{$search}}</h2>
            <h5>{{count($Elements)}} elementi</h5>
        </header>
    @endif

    <div class="first w3-container w3-grayscale w3-margin-top" id="elementi">

    <!-- Product grid -->
    @foreach($Elements as $el)

        <div class="filterDiv {{$el->brand}} " value="{{$el->id}}/{{$el->brand}}/{{number_format($el->price, 2, '.', ',')}}">

            <div class="third w3-display-container w3-white">
                <img class="lazy" data-src=" {{ asset('storage').$el->pathPhoto }}">
                @if ($el->created_at != '' && date('m', strtotime(str_replace('-','/', $el->created_at))) == date("m"))
                <span class="w3-round-xlarge w3-tag w3-display-topleft" style="width:auto; height:auto">Nuovo</span>
                @endif
                <div class="w3-display-middle w3-display-hover">
                    <button onclick="location.href='{{url('element/').$el->id}}'" class="w3-button w3-black">Acquista<i class="fa fa-shopping-cart"></i></button>
                </div>
            </div>

            <div class="divElP w3-row">
                <p>{{ $el->name }}<br><b>€ <label class="prices">{{ number_format($el->price, 2, '.', ',') }}</label></b></p>
            </div>

        </div>
        
   
    @endforeach

    </div>
    
</div>
@endsection
