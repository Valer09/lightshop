@extends('layout.default')

@section('content')

    <div>
        <h3>Pagina per il test delle deletions tramite controller </h3>
    </div>


        <form method="post" type="submit" action="{{URL::to('/element_deletion_submit')}}">
            @csrf
            <select name="element" class="form-control">
                {{$Element = \App\Element::all()}}

                @foreach ($Element as $Element)
                    <option>{{ $Element->name, $Element->id }}</option>>
                @endforeach

            </select>

            <button type="submit"> Submit </button>

        </form>








@stop
