@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')
  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/navbarColor.css')}}" />
@endsection

@section('content')

<!-- Sidebar/Filter -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top w3-animate-left w3-light-grey" style="top: 49px;z-index:3;width:250px" id="mySidebar">
    <div class="">
        <div class="w3-margin-left">
            <a class="w3-row w3-margin" href="{{ url('catalog') }}">
            <span><i class="fa fa-angle-left"></i> Catalogo</span>
            </a>
            @if($Category[1] != null || $Category[1] != '')
            <a class="w3-row w3-margin-top" href="{{ url('catalog').$Category[0]->name }}">
                <span><i class="fa fa-angle-left"></i> {{$Category[0]->name }}</span>
            </a>
            @endif
        </div>
        <div class="w3-light-grey w3-margin-top article-navigation">
            <div class="body">
                <ul class="first-level narrow dashed">
                    <p>Sottocategorie</p>
                    @foreach($Category[2] as $subcat)
                    <li>
                        <a href="{{ url('catalog'.$Category[0]->name, $subcat->name) }}" wt_name="assortment_menu.level3">{{$subcat->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div id="filter">
        <!--FILTER-->
        <div class="w3-container">
            <form method="post" action="/action_page_post.php">
            <div>
                <label for="price-min">Prezzo minimo:</label>
                <input calss="w3-input w3-border-0" type="number" name="price-min" id="price-min" value="200" min="0" max="10000">
                <label for="price-max">Prezzo massimo:</label>
                <input calss="w3-input w3-border-0" type="number" name="price-max" id="price-max" value="800" min="0" max="10000">
            </div>
                <input type="submit" data-inline="true" value="Submit">
                <p>The range slider can be useful for allowing users to select a specific price range when browsing products.</p>
            </form>
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
<div class="w3-main" style="margin-top: 49px;margin-left:250px; max-width: 1500px;">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:83px"></div>

    <!-- Top header -->
    <header class="w3-container">
        @if($Category[1] != null || !empty($Category[1]) || $Category[1] != '')
        <h2 class="w3-xlarge">{{ $Category[0]->name }} <i class="fa fa-angle-right"></i> {{ $Category[1] }}</h2>
        <h5>{{count($Elements)}} elementi</h5>
        @endif
    </header>

    <!-- Image header -->
    @if($Category[1] == null)
    <div class="w3-display-container w3-container">
        <img class="w3-image" src="{{ asset('storage').$Category[0]->pathPhoto }}" alt="Jeans" style="width:100%">
        <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
            <h1 class="w3-jumbo w3-hide-small" style="text-shadow: 3px 2px 10px black;">{{ $Category[0]->name }}</h1>
            <h1 class="w3-hide-large w3-hide-medium" style="text-shadow: 3px 2px 10px black;">{{ $Category[0]->name }}</h1>
            <h4 class="w3-padding" style="text-shadow: 3px 2px 10px black;">{{count($Elements)}} elementi</h4>
            <p><a href="#elementi" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
        </div>
    </div>
    @endif

    <!-- Product grid -->
    {{!$conta = 1}}
    @foreach($Elements as $el)
    @if ($conta == 1)
    <div class="w3-row w3-grayscale w3-margin-top" id="elementi">
    @endif

        <div class="w3-container w3-col l3">
            <div class="w3-display-container">
                <img class="w3-image" src=" {{ asset('storage').$el->pathPhoto }}">
                @if ($el->created_at != '' && date('m', strtotime(str_replace('-','/', $el->created_at))) == date("m"))
                <span class="w3-tag w3-display-topleft" style="width:auto; height:auto">Nuovo</span>
                @endif
                <div class="w3-display-middle w3-display-hover">
                    <button onclick="location.href='{{url('element/').$el->id}}'" class="w3-button w3-black">Acquista
                        <i class="fa fa-shopping-cart"></i></button>
                </div>
            </div>
            <div class="divElP">
            <p>{{ $el->name }}<br><b>€ {{ number_format($el->price, 2, ',', '.') }}</b></p>
            </div>
        </div>
        
    {{!$conta = $conta + 1}}
    @if ($conta == 5)
    </div>
    {{!$conta = 1}}
    @endif
    @endforeach
        </div> <!--diV RIDONDANTE-->
    
</div>
@stop
