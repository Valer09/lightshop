@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/navbarTrasp.css')}}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/showroom.css')}}" />
    <script src="{{url('/js/navbarDinamic.js')}}"></script>
@endsection


@section('content')

<!-- PAGE CONTENT -->

<header class="w3-display-container w3-wide" id="principalDiv">
    <div class="w3-display-topmiddle w3-margin-top w3-margin">
        <h1 class="w3-xxlarge w3-center w3-text-white"><span class="w3-padding w3-green w3-opacity-min"><b>V</b></span> <span class="w3-hide-small w3-text-light-grey">Showroom</span></h1>
    </div>
</header>
<div id="boxShow" class="w3-row w3-white w3-container">
    <!--MAX 7 ELEMENTI-->
    <div id="show1" class="show w3-col" style="width: 14.28571%;" onclick="location.href='{{ url('pavimenti_rivestimenti')}}'">
        <div class="testoShow w3-right w3-white w3-opacity-min">
        <span><b>Pavimenti e Rivestimenti</b></span></div>
    </div>

    <div id="show2" class="show w3-col" style="width: 14.28571%;" onclick="location.href='{{ url('cucine')}}'">
        <div class="testoShow w3-right w3-white w3-opacity-min">
        <span><b>Cucine</b></span></div>
    </div>

    <div id="show3" class="show w3-col" style="width: 14.28571%;" onclick="location.href='{{ url('bagni')}}'">
        <div class="testoShow w3-right w3-white w3-opacity-min">
        <span><b>Bagni</b></span></div>
    </div>

    <div id="show4" class="show w3-col" style="width: 14.28571%;" onclick="location.href='{{ url('porte')}}'">
        <div class="testoShow w3-right w3-white w3-opacity-min">
        <span><b>Porte</b></span></div>
    </div>

    <div id="show5" class="show w3-col" style="width: 14.28571%;" onclick="location.href='{{ url('caminetti')}}'">
        <div class="testoShow w3-right w3-white w3-opacity-min">
        <span><b>Caminetti</b></span></div>
    </div>

    <div id="show6" class="show w3-col" style="width: 14.28571%;" onclick="location.href='{{ url('falegnameria')}}'">
        <div class="testoShow w3-right w3-white w3-opacity-min">
        <span><b>Falegnameria</b></span></div>
    </div>

    <div id="show7" class="show w3-col" style="width: 14.28571%;" onclick="location.href='{{ url('giardini_esterni')}}'">
        <div class="testoShow w3-right w3-white w3-opacity-min">
        <span><b>Giardino ed Esterno</b></span></div>
    </div>
</div>

@stop