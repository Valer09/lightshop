@extends('layout.defaultLayout')
@section('content')

<header class="w3-display-container w3-wide" id="principalDiv" style="min-height: 100%">
    <div class="w3-display-middle w3-margin-top w3-margin">
        <h1 class="w3-xxlarge w3-center w3-text-white"><span class="w3-padding w3-green w3-opacity-min"><b>V</b></span> <span class="w3-hide-small w3-text-light-grey">Showroom</span></h1>
    </div>
</header>

<div class="divCenter w3-animate-right">
    <h1 style="padding: 20px">
    @switch(Request::path())
        @case('pavimenti')
            Pavimenti e rivestimenti
            @break
        @case('cucine')
            Cucine
            @break
        @case('bagni')
            Bagni
            @break
        @case('porte')
            Porte
            @break
        @case('caminetti')
            Caminetti
            @break
        @case('falegnameria')
            Falegnameria
            @break
        @case('esterno')
            Giardino ed Esterni
            @break
    @endswitch
    </h1>

            <!--ELEMENTO PER LA CREAZINOE DINAMICA DEGLI ARTICOLI per ora solo "BAGNI"-->
            
                @php
                    $conta = 1;
                    $nameCat = \App\CatShowroom::where('name_path', Request::path())->first();
                    $ElementsShowRoom=\App\ElementsShowRoom::where('nameSubCategory', $nameCat->name)->get();
                @endphp
                @foreach($ElementsShowRoom as $el)
                    
                    @if ($conta == 1)
                        <div class="w3-row rowShow">
                        <div class="w3-col divImShow l6" onclick="location.href='{{ url('el_showroom-')}}{{$el->id}}'">
                            <div>
                                <img class="imShow" src="{{asset('storage'.$el->pathPhoto)}}" alt="{{ $el->name }}">
                            </div>
                            <figcaption><b>{{ $el->name }}.</b> {{ $el->description }}</figcaption>
                        </div>
                        @php
                            $conta = 2
                        @endphp

                    @elseif ($conta == 2)
                        <div class="w3-col divImShow l6" onclick="location.href='{{ url('el_showroom-')}}{{$el->id}}'">
                            <div>
                                <img class="imShow" src="{{asset('storage'.$el->pathPhoto)}}" alt="{{ $el->name }}">
                            </div>
                            <figcaption><b>{{ $el->name }}.</b> {{ $el->description }}</figcaption>
                        </div>
                        </div>
                        @php
                            $conta = 3
                        @endphp

                    @elseif ($conta == 3)
                        <div class="w3-row rowShow">
                        <div class="w3-col divImShow l3" onclick="location.href='{{ url('el_showroom-')}}{{$el->id}}'">
                            <div>
                                <img class="imShow" src="{{asset('storage'.$el->pathPhoto)}}" alt="{{ $el->name }}">
                            </div>
                            <figcaption><b>{{ $el->name }}.</b> {{ $el->description }}</figcaption>
                        </div>
                        @php
                            $conta = 4
                        @endphp

                    @elseif ($conta == 4)
                        <div class="w3-col divImShow l3" onclick="location.href='{{ url('el_showroom-')}}{{$el->id}}'">
                            <div>
                                <img class="imShow" src="{{asset('storage'.$el->pathPhoto)}}" alt="{{ $el->name }}">
                            </div>
                            <figcaption><b>{{ $el->name }}.</b> {{ $el->description }}</figcaption>
                        </div>
                        @php
                            $conta = 5
                        @endphp

                    @elseif ($conta == 5)
                        <div class="w3-col divImShow l3" onclick="location.href='{{ url('el_showroom-')}}{{$el->id}}'">
                            <div>
                                <img class="imShow" src="{{asset('storage'.$el->pathPhoto)}}" alt="{{ $el->name }}">
                            </div>
                            <figcaption><b>{{ $el->name }}.</b> {{ $el->description }}</figcaption>
                        </div>
                        @php
                            $conta = 6
                        @endphp

                    @elseif ($conta == 6)
                        <div class="w3-col divImShow l3" onclick="location.href='{{ url('el_showroom-')}}{{$el->id}}'">
                            <div>
                                <img class="imShow" src="{{asset('storage'.$el->pathPhoto)}}" alt="{{ $el->name }}">
                            </div>
                            <figcaption><b>{{ $el->name }}.</b> {{ $el->description }}</figcaption>
                        </div>
                        </div>
                        @php
                            $conta = 1
                        @endphp
                    @endif
                
                @endforeach
        </div>
        </div>
    @stop