@extends('layout.def_ESHOP')

@section('content')

    <div>
        <h3>Pagina per il test delle deletions tramite controller </h3>
    </div>

{{-- *** ELEMENT-ACTIONS *** --}}

    <form method="post" type="submit" action="{{URL::to('/element_deletion_submit')}}">
            <div>
            @csrf
            <select name="element" class="form-control">
                {{$Element = \App\Element::all()}}

                @foreach ($Element as $Element)
                    <option>{{ $Element->name, $Element->id }}</option>
                @endforeach

            </select>
            </div>

            <button type="submit"> Submit </button>

    </form>
    <form method="post" type="submit" action="{{URL::to('/element_increase_submit')}}">
    <div>
        @csrf
        INCREASE_ELEMENT
        <select name="increase" class="form-control">
            {{$Element = \App\Element::all()}}

            @foreach ($Element as $Element)
                <option>{{ $Element->name, $Element->id }}</option>
            @endforeach

        </select>

    </div>
        <button type="submit"> Submit </button>
    </form>


    <form method="post" type="submit" action="{{URL::to('/element_decrease_submit')}}">
    <div>
        @csrf
        DECREASE_ELEMENT
        <select name="decrease" class="form-control">
            {{$Element = \App\Element::all()}}

            @foreach ($Element as $Element)
                <option>{{ $Element->name, $Element->id }}</option>
            @endforeach

        </select>

    </div>
        <button type="submit"> Submit </button>
    </form>
    <form method="post" type="submit" action="{{URL::to('/element_decrease_of_submit')}}">
        <div>
            @csrf
            DECREASE_ELEMENT_OF
            <select name="decrease" class="form-control">
                {{$Element = \App\Element::all()}}

                @foreach ($Element as $Element)
                    <option>{{ $Element->name, $Element->id }}</option>
                @endforeach

            </select>
            Quantity
            <input type="text" name="quantity">

        </div>
        <button type="submit"> Submit </button>
    </form>

    <form method="post" type="submit" action="{{URL::to('/element_increase_of_submit')}}">
        <div>
            @csrf
            INCREASE_ELEMENT_OF
            <select name="increase" class="form-control">
                {{$Element = \App\Element::all()}}

                @foreach ($Element as $Element)
                    <option>{{ $Element->name, $Element->id }}</option>
                @endforeach

            </select>
            Quantity
            <input type="text" name="quantity">

        </div>
        <button type="submit"> Submit </button>
    </form>

{{-- *** END-ELEMENT-ACTIONS *** --}}

    {{--USER-DELETION-FORM--}}
    <form method="post" type="submit" action="{{URL::to('/user_deletion_submit')}}">
        <div>
            @csrf
            inserisci l'email dell'utente da cancellare
                <input name="email", type="email">
                   {{--<option>{{ $User->id.';'.' '.$User->name.' '.$User->surname.';'.' '.$User->email  }}</option>--}}
        </div>

        <button type="submit"> Submit </button>
    </form>

    {{--NEWS-DELETION-FORM--}}
    <form method="post" type="submit" action="{{URL::to('/news_deletion_submit')}}">
        <div>
            @csrf
            seleziona la news da cancellare
            <select name="news" class="form-control">
                {{$News = \App\News::all()}}

                @foreach ($News as $News)
                    <option>{{ $News->name}}</option>
                @endforeach

            </select>
            {{--<option>{{ $User->id.';'.' '.$User->name.' '.$User->surname.';'.' '.$User->email  }}</option>--}}

        </div>
        <button type="submit"> Submit </button>

    </form>

    {{--CATEGORY-DELETION-FORM--}}
    <form method="post" type="submit" action="{{URL::to('/category_deletion_submit')}}">
        <div>
            @csrf
            seleziona la categoria da cancellare
            <select name="category" class="form-control">
                {{$Category = \App\Category::all()}}

                @foreach ($Category as $Category)
                    <option>{{ $Category->name}}</option>
                @endforeach

            </select>
            {{--<option>{{ $User->id.';'.' '.$User->name.' '.$User->surname.';'.' '.$User->email  }}</option>--}}

        </div>
        <button type="submit"> Submit </button>

    </form>

    {{--SUBCATEGORY-DELETION-FORM--}}
    <form method="post" type="submit" action="{{URL::to('/subcategory_deletion_submit')}}">
        <div>
            @csrf
            seleziona la categoria da cancellare
            <select name="subcategory" class="form-control">
                {{$subcategory = \App\Subcategory::all()}}

                @foreach ($subcategory as $Subcategory)
                    <option>{{ $Subcategory->name}}</option>
                @endforeach

            </select>
            {{--<option>{{ $User->id.';'.' '.$User->name.' '.$User->surname.';'.' '.$User->email  }}</option>--}}

        </div>
        <button type="submit"> Submit </button>

    </form>

@stop
