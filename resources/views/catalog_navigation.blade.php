@extends('layout.defaultLayout')

@section('content')

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
    <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-top: 49px;margin-left:auto; margin-right:auto; max-width: 1500px;">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:83px"></div>
    <span>Clicca sul nome della categoria per aprire la sezione dedicata</span>
    <!-- Product grid 
    <div class="w3-row w3-grayscale">-->
        @php
            $conta = 1;
        @endphp
        {{!$Category = \App\Category::all()}}
        @foreach($Category as $cat)
            @if ($conta == 1)
            <div class="w3-row w3-grayscale">
            @endif
                    <div class="w3-container w3-col l3" onclick="location.href='{{ url('catalog').$cat->name }}'">
                        <div class="w3-display-container">
                            <img src=" {{ asset('storage') }} " style="width:100%" alt="{{ $cat->name }}">
                        </div>
                    </div>
                @php
                    $conta = $conta + 1;
                @endphp

            @if ($conta == 5)
                </div>
                @php
                    $conta = 1;
                @endphp
            @endif
        @endforeach
    </div>
@stop
