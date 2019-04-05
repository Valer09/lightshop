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
                            <img src="data:image/jpeg;base64,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" style="width:100%" alt="{{ $cat->name }}">
                            <div class="w3-display-middle w3-margin-top w3-center">
                                <h2 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>{{ $cat->name }}</b></span></h2>
                            </div>
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
    </div>
@stop
