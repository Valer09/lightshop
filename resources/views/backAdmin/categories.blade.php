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
                {{!$Subcategorylist=\App\Subcategory::all()}}
                @foreach($Category as $Category)
                    <button id="button{{$Category->name}}" onclick="soffietto('{{$Category->name}}', this.id);" class="w3-button w3-block w3-theme-l1 w3-left-align">
                        <i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>
                        {{$Category->name}}
                    </button>

                    <div id="{{$Category->name}}" class="cardCategorie w3-hide w3-container w3-light-grey"> 
                        @foreach($Subcategorylist as $Subcategory)
                        @if ($Subcategory->category == $Category->name)
                            <div class="w3-row">
                                <form method="post" id="cancellaSottocat{{$Subcategory->id}}" action="{{URL::to('/subcategory_deletion_submit')}}">
                                    @csrf
                                    <input style="display: none" name="subcategory" class="form-control" type="text" value="{{ $Subcategory->name}}">
                                    <input style="display: none" name="ref" type="text" value="{{$_SERVER['REQUEST_URI']}}">
                                    <button type="button" class="pulsanteDxProfile w3-bar-item w3-button w3-white w3-right" onclick="conferma('Intendi eliminare questa sottocategoria?', 'cancellaSottocat{{$Subcategory->id}}')">Elimina<br><i class="fa fa-close"></i></button>
                                </form>
                                <p>{{ $Subcategory->name }}</p>
                            </div>
                        @endif
                        @endforeach
                        <p style="margin-top: 0px"><button onclick="modaleSottocategoria('nuovaSottoclasse', '{{$Category->name}}')" class="w3-button"><i class="fa fa-plus"></i> Aggiungi nuova sottoclasse</button></p>
                    </div>
                @endforeach
 
            </div>
        </div>
    </div>
</div>

<!--Modale Nuovo indirizzo-->
<div id="nuovaSottoclasse" class="w3-modal">
            <div class="w3-modal-content w3-animate-top w3-card-4" style="max-width: 700px">
                <header class="w3-container w3-teal">
                    <span onclick="closeModal('nuovaSottoclasse');" class="w3-button w3-display-topright">&times;</span>
                    <h2>Nuova sottoclasse</h2>
                </header>
                <form type="submit" method="post" action="{{URL::to('/subcategory_insertion_submit')}}?ref={{$_SERVER['REQUEST_URI']}}">
                    @csrf
                    <div class="w3-padding">
                        <div class="w3-row">
                            <label>Sottocategoria: </label>
                            <input class="inputModale" placeholder="Sottocategoria" type="text" name="name" required>
                            <input type="text" class="w3-hide" id="modaleCategorySub" name="category" required>
                            <label id="categoriaLabel"></label>
                        </div>
                        <div class="w3-row">
                            <button class="w3-right" type="submit">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@stop
