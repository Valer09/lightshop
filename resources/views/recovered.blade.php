@extends('layout.defaultLayout')

@section('content')

    <div class="card-body w3-container" style="margin-top: 55px">

        <div class="alert_success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <h3>{{ __('Password Modificata')}}</h3><br>
        </div>
        <div>
            <h2><a href="{{URL::to('home')}}"> Vai alla Home</a> </h2>
        </div>

    </div>

@endsection
<style>
    .alert {
        padding: 20px;
        background-color: #f44336; /* Red */
        color: white;
        margin-bottom: 15px;
    }

    .alert_success {
        padding: 20px;
        background-color: rgba(40, 176, 0, 0.74); /* Red */
        color: black;
        margin-bottom: 15px;
    }

    /* The close button */
    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }
    /* When moving the mouse over the close button */
    .closebtn:hover {
        color: black;
    }
</style>
