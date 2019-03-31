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
        @case('showroom/pavimenti')
            Pavimenti e rivestimenti
            @break
        @case('showroom/cucine')
            Cucine
            @break
        @case('showroom/bagni')
            Bagni
            @break
        @case('showroom/porte')
            Porte
            @break
        @case('showroom/caminetti')
            Caminetti
            @break
        @case('showroom/falegnameria')
            Falegnameria
            @break
    @endswitch
    </h1>

            <!--Inizio esempio--
            <div class="w3-row rowShow">
                <a href="{{ url('showroom/element') }}">
                    <div class="w3-col divImShow l6">
                        <div>
                            <img class="imShow" src="https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="The Pulpit Rock">
                        </div>
                        <figcaption>Ciaomodimnsoinm klsnjnsoidnjosni nio un iun uinui nui nu n un iun iu n iuniu n iun uin iu n uin uin ui nu in uin ui hb ytf  rctr dcftr c trc tr crt</figcaption>
                    </div>
                </a>
                <a href="{{ url('showroom/element') }}">
                    <div class="w3-col divImShow l6">
                        <div>
                            <img class="imShow" src="https://images.pexels.com/photos/417273/pexels-photo-417273.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="The Pulpit Rock">
                        </div>
                        <figcaption>Ciaomodimnsoinm klsnjnsoidnjosni nio un iun uindfefefdfdfdfd fd dd fdfds f sdgfv derfg str hg vrth v trh vet nhr teynv ytne net ny veytn tey neyt nv etynv etn eytn vetn yt nvet ny tnvt eny vteynvn tyn ten eui nui nu n un iun iu n iuniu n iun uin iu n uin uin ui nu in uin ui hb ytf  rctr dcftr c trc tr crt</figcaption>                     
                    </div>
                </a>
            </div>

            <div class="w3-row rowShow">
                <div class="w3-col divImShow l3">
                    <div>
                        <img class="imShow" src="https://images.pexels.com/photos/157811/pexels-photo-157811.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="The Pulpit Rock">
                    </div>
                    <figcaption>Ciaomodimnsoinm klsnjnsoidnjosni nio un iun uinui nui nu n un iun iu n iuniu n iun uin iu n uin uin ui nu in uin ui hb ytf  rctr dcftr c trc tr crt</figcaption>                
                </div>
                <div class="w3-col divImShow l3">
                    <div>
                        <img class="imShow" src="https://images.pexels.com/photos/584399/living-room-couch-interior-room-584399.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="The Pulpit Rock">
                    </div>        
                    <figcaption>Ciaomodimnsoinm klsnjnsoidnjosni nio un iun uindfefefdfdfdfd fd dd fdfds f sdgfv derfg str hg vrth v trh vet nhr teynv ytne net ny veytn tey neyt nv etynv etn eytn vetn yt nvet ny tnvt eny vteynvn tyn ten eui nui nu n un iun iu n iuniu n iun uin iu n uin uin ui nu in uin ui hb ytf  rctr dcftr c trc tr crt</figcaption>             
                </div>
                <div class="w3-col divImShow l3">
                    <div>
                        <img class="imShow" src="https://images.pexels.com/photos/279719/pexels-photo-279719.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="The Pulpit Rock">
                    </div>        
                    <figcaption>Ciaomodimnsoinm klsnjnsoidnjosni nio un iun uinui nui nu n un iun iu n iuniu n iun uin iu n uin uin ui nu in uin ui hb ytf  rctr dcftr c trc tr crt</figcaption>             
                </div>
                <div class="w3-col divImShow l3">
                    <div>
                        <img class="imShow" src="https://images.pexels.com/photos/276724/pexels-photo-276724.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="The Pulpit Rock">
                    </div>        
                    <figcaption>FINEEEE</figcaption>             
                </div>
            </div>
            --fine esempio-->

            <!--ELEMENTO PER LA CREAZINOE DINAMICA DEGLI ARTICOLI per ora solo "BAGNI"-->
            
                {{!$ElementsShowRoom=\App\ElementsShowRoom::all()}}
                @php
                    $conta = 1
                @endphp
                @foreach($ElementsShowRoom as $el)
                @if ($el->nameSubCategory===Request::path())
                    
                    @if ($conta == 1)
                        <div class="w3-row rowShow">
                        <div class="w3-col divImShow l6" onclick="location.href='{{ url('showroom/et')}}{{$el->id}}'">
                            <div>
                                <img class="imShow" src="{{asset('storage'.$el->pathPhoto)}}" alt="{{ $el->name }}">
                            </div>
                            <figcaption><b>{{ $el->name }}.</b> {{ $el->description }}</figcaption>
                        </div>
                        @php
                            $conta = 2
                        @endphp

                    @elseif ($conta == 2)
                        <div class="w3-col divImShow l6" onclick="location.href='{{ url('showroom/et')}}{{$el->id}}'">
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
                        <div class="w3-col divImShow l3" onclick="location.href='{{ url('showroom/et')}}{{$el->id}}'">
                            <div>
                                <img class="imShow" src="{{asset('storage'.$el->pathPhoto)}}" alt="{{ $el->name }}">
                            </div>
                            <figcaption><b>{{ $el->name }}.</b> {{ $el->description }}</figcaption>
                        </div>
                        @php
                            $conta = 4
                        @endphp

                    @elseif ($conta == 4)
                        <div class="w3-col divImShow l3" onclick="location.href='{{ url('showroom/et')}}{{$el->id}}'">
                            <div>
                                <img class="imShow" src="{{asset('storage'.$el->pathPhoto)}}" alt="{{ $el->name }}">
                            </div>
                            <figcaption><b>{{ $el->name }}.</b> {{ $el->description }}</figcaption>
                        </div>
                        @php
                            $conta = 5
                        @endphp

                    @elseif ($conta == 5)
                        <div class="w3-col divImShow l3" onclick="location.href='{{ url('showroom/et')}}{{$el->id}}'">
                            <div>
                                <img class="imShow" src="{{asset('storage'.$el->pathPhoto)}}" alt="{{ $el->name }}">
                            </div>
                            <figcaption><b>{{ $el->name }}.</b> {{ $el->description }}</figcaption>
                        </div>
                        @php
                            $conta = 6
                        @endphp

                    @elseif ($conta == 6)
                        <div class="w3-col divImShow l3" onclick="location.href='{{ url('showroom/et')}}{{$el->id}}'">
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
                
                @endif
                @endforeach
        </div>
        </div>
    @stop