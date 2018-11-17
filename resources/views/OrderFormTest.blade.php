@extends('layout.default')

@section('content')

    <div>
        <h3> TESTA ORDINI </h3>

<form method="post" action="{{URL::to('/order_submit')}}">
@csrf
    Total
    <input name="total" type="text" class="form-control">


    <button type="submit"> Submit </button>>

</form>
    </div>

    <div>
        <h3> TESTA USER_INSERTION </h3>

        <form method="post" action="{{URL::to('/user_insertion_submit')}}">
        @csrf
            Name
            <input name="name" type="text" class="form-control">
            Surname
            <input name="surname" type="text" class="form-control">
            Email
            <input name="email" type="text" class="form-control">
            Password
            <input name="password" type="text" class="form-control">
            Group
            <select name="group" class="form-control">

                {{$Group = \App\Group::all()}}

                @foreach ($Group as $Group)
                    <option>{{ $Group->name }}</option>>
                    @endforeach

            </select>


        <button type="submit"> Submit </button>>

        </form>
    </div>

    <div>
        <h3> TESTA ELEMENT INSERTION </h3>

        <form method="post" action="{{URL::to('/element_insertion_submit')}}">
            @csrf
            Name
            <input name="name" type="text" class="form-control">
            Subcategory

            <select name="subcategory" class="form-control">

                {{$Subcategory = \App\Subcategory::all()}}

                @foreach ($Subcategory as $Subcategory)
                    <option>{{ $Subcategory->name }}</option>>
                    @endforeach

            </select>
            Price
            <input name="price" type="number" class="form-control">
            Quantity
            <input name="quantity" type="number" class="form-control">
            Brand
            <select name="brand" class="form-control">

                {{$Brand = \App\Brand::all()}}

                @foreach ($Brand as $Brand)
                    <option>{{ $Brand->name }}</option>>
                    @endforeach

            </select>
            Description
            <input name="description" type="text" class="form-control">


            <button type="submit"> Submit </button>>

        </form>
    </div>


    <div>
        <h3> TESTA NEWS INSERTION </h3>

        <form method="post" action="{{URL::to('/news_insertion_submit')}}">
            @csrf
            Name
            <input name="name" type="text" class="form-control">
            Description
            <input name="description" type="text" class="form-control">
            Start Date
            <input name="startDate" type="date" class="form-control">
            Stop Date
            <input name="stopDate" type="date" class="form-control">
            PhotoPath
            <input name="path" type="text" class="form-control">
            BuyLink
            <input name="link" type="text" class="form-control">


            <button type="submit"> Submit </button>>

        </form>
    </div>


    <div>
        <h3> TESTA CATEGORY INSERTION </h3>

        <form method="post" action="{{URL::to('/category_insertion_submit')}}">
            @csrf
            Name
            <input name="name" type="text" class="form-control">
            <button type="submit"> Submit </button>>

        </form>
    </div>
    <div>
        <h3> TESTA SUBCATEGORY INSERTION </h3>

        <form method="post" action="{{URL::to('/subcategory_insertion_submit')}}">
            @csrf
            Name
            <input name="name" type="text" class="form-control">
            Category
            <select name="category" class="form-control">

                {{$category = \App\Category::all()}}

                @foreach ($category as $category)
                    <option>{{ $category->name }}</option>>
                    @endforeach

            </select>

            <button type="submit"> Submit </button>

        </form>
    </div>








@stop
