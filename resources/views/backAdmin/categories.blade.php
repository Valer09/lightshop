@extends('layout.defaultLayoutAdmin')

@section('content')

<div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <!--TITOLO DELLA PAGINE-->
    <div class="w3-container w3-blue-grey" style="padding: 16px;">
        <h1>Categorie negozio online</h1>
        <p>Utilizza questa pagina per modificare categorie e sottocategorie presenti nel negozio online</p>
        <!-- Accordion -->
        <div class="w3-card w3-round">
            <div class="w3-white">

                {{!$Category=\App\Category::all()}}
                @foreach($Category as $Category)
                    <button onclick="soffietto('{{$Category->name}}')" class="w3-button w3-block w3-theme-l1 w3-left-align">
                        <i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>
                        {{$Category->name}}
                    </button>

                    <div id="{{$Category->name}}" class="w3-hide w3-container">
                        
                        <div id="cardCategorie">
                            <p>Some other text..</p>
                            <p><button class="w3-button w3-block w3-theme-l1 w3-left-align">Aggiungi nuova sottoclasse
                                </button>
                            </p>
                        </div>
                    </div>
                @endforeach
 
            </div>
        </div>
    </div>
</div>

@stop
