@extends('layout.defaultLayout')

@section('content')

<div class="w3-container" style="margin-top:49px">
<div class="row justify-content-center">
    <div class="w3-container" style="margin-top:49px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{!$user=Auth::user()->get()}}


                        <div class="card-body w3-container">
                            @if (session('resent'))
                                <div class="alert_success" role="alert">
                                    <h3>{{ __('È stata inviata una ulteriore email di verifica') }}</h3>
                                </div>

                            @endif


                                <div class="alert">
                                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                    <h3>{{ __('Le è stata inviata una email di verifica all\'indirizzo email.')}}</h3><br>
                                    <h3>{{ __('Può procedere alla navigazione all\'interno del sito ma non può effettuare ordini o entrare nel suo profilo personale finchè non avrà effettuato la convalidazione dell\'email.') }}</h3><br>
                                    <h3>{{ __('Controllare la posta e confermare la registrazione seguendo le indicazioni') }}</h3>

                                    </h3>
                                </div>
                                <h3> <a href="{{ route('verification.resend') }}">{{ __('Invia una nuova email di verifica') }}</a></h3>
                        </div>
                </div>
            </div>
        </div>
    </div>
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
