@extends('layout.default')

@section('elements-content')

<section>
    <div class="col-md-12">
        ELEMENTS LIST
        <ul>
            {{--categorylist=variabile definita nell ordercontroller--}}
            @foreach($categorylist as $item)
             {{-- cicla e crea una lista assegnando ogni oggetto ciclato nella var elementlist del controller ElementsController --}}

                <li>
                <?php echo $item->name ?> {{-- name=nome colonna tabella elementi --}}

                    @foreach($subcategorylist as $item)


                     <li>
                         <?php echo $item->name ?>
                             @endforeach
                     </li>

                @endforeach


        </ul>
    </div>
</section>
