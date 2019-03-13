@extends('layout.def_ESHOP')

@section('content')

    <div>
        <h3>Pagina per il test delle edits tramite controller </h3>
    </div>
{{--USER--}}
    <form type="submit" method="post" action="{{URL::to('/email_edit_submit')}}">
        @csrf

        <div>
            INSERISCI NUOVA EMAIL
        <input name="user_email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        </div>

        <div>
        RIPETI EMAIL
        <input name="control_email" type="email"  required>

        </div>

        <button type="submit"> Submit </button>

    </form>

    <form type="submit" method="post" action="{{URL::to('/password_edit_submit')}}">
        @csrf

        <div>
            INSERISCI VECCHIA PASSWORD
            <input name="old_password" type="password" required>
        </div>

        <div>
            INSERISCI NUOVA PASSWORD
            <input name="password" type="password"  required>

        </div>

        <div>
            RE-INSERISCI PASSWORD
            <input name="control_password" type="password"  required>

        </div>

        <button type="submit"> Submit </button>

    </form>

    <form type="submit" method="post" action="{{URL::to('/name_edit_submit')}}">
        @csrf

        <div>
            INSERISCI NUOVO NOME
            <input name="name" type="text" required>
        </div>


        <button type="submit"> Submit </button>

    </form>

    <form type="submit" method="post" action="{{URL::to('/surname_edit_submit')}}">
        @csrf

        <div>
            INSERISCI NUOVO COGNOME
            <input name="surname" type="text" required>
        </div>


        <button type="submit"> Submit </button>

    </form>

{{--ELEMENT--}}

    <form type="submit" method="post" action="{{URL::to('/element_name_edit_submit')}}">
        <div>
            @csrf
            ELEMENT NAME
            <select name="name" class="form-control">
                {{$Element = \App\Element::all()}}

                @foreach ($Element as $Element)
                    <option>{{ $Element->name}}</option>
                @endforeach

            </select>
            Iserisci nuovo nome
            <input name="new_name" type="text">
        </div>
        <button type="submit"> modifica </button>
    </form>
    <form type="submit" method="post" action="{{URL::to('/element_subcategories_edit_submit')}}">
        <div>
            @csrf
            ELEMENT SUBCATEGORY
            <select name="name" class="form-control">
                {{$Element = \App\Element::all()}}

                @foreach ($Element as $Element)
                    <option>{{ $Element->name}}</option>
                @endforeach
            </select>


            Iserisci nuova sottocategoria

            <select name="subcategories" class="form-control">
                {{$Subcategory = \App\Subcategory::all()}}

                @foreach ($Subcategory as $Subcategory)
                    <option>{{ $Subcategory->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit"> modifica </button>
    </form>
    <form type="submit" method="post" action="{{URL::to('/element_subcategories_edit_price')}}">
        @csrf
        <div>

            ELEMENT PRICE
            <select name="name" class="form-control">
                {{$Element = \App\Element::all()}}

                @foreach ($Element as $Element)
                    <option>{{ $Element->name}}</option>
                @endforeach
            </select>

            Iserisci il nuovo prezzo

            <input name="price" class="form-control" type="number">

            </input>
        </div>
        <button type="submit"> modifica </button>
    </form>

    <form type="submit" method="post" action="{{URL::to('/element_subcategories_edit_description')}}">
        @csrf
        <div>

            ELEMENT DESCRIPTION
            <select name="name" class="form-control">
                {{$Element = \App\Element::all()}}

                @foreach ($Element as $Element)
                    <option>{{ $Element->name}}</option>
                @endforeach
            </select>

            Iserisci la nuova descrizione dell'oggetto

            <input name="description" class="form-control" type="text">


        </div>
        <button type="submit"> modifica </button>
    </form>


@stop
