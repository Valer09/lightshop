@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')
  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/navbarColor.css')}}" />
@endsection

@section('content')

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
    <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="padding-top: 80px;margin-left:auto; margin-right:auto; max-width: 1500px;">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:83px"></div>
    <!-- Product grid 
    <div class="w3-row w3-grayscale">-->
        @php
            $conta = 1;
        @endphp
        {{!$Category = \App\Category::all()}}
        @foreach($Category as $cat)
            @if ($conta == 1)
            <div class="">
            @endif
                    <div class="w3-container w3-col l3">
                        <a href="{{ url('catalog').$cat->name }}">
                            <div class="w3-display-container categories">
                                <img src="{{ asset('storage').$cat->pathPhoto }}" style="width:100%" alt="{{ $cat->name }}">
                                <div class="w3-display-middle w3-margin-top w3-center">
                                    <h2 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>{{ $cat->name }}</b></span></h2>
                                </div>
                            </div>
                        </a>
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
    </div><!--DIV RIDONDANTE-->
    </div>
@endsection
