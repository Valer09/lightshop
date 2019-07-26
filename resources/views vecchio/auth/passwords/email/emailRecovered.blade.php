@extends('layout.defaultLayout')

@section('content')

    <div class="w3-container" style="height:100%">
        <div class="w3-content w3-center w3-padding" style="margin-top:100px;width:400px;background-color: #2c993f;">
            <div class="container" style="margin-top:19px">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header"><b><h3 style="font-family: 'Lucida Sans'">{{ __('Recupero Email') }}</h3></b></div>
                        </div>

                        <div class="form-group row" style="margin-top: 10px ; padding: 17px">
                            <label for="email" class="col-md-4 col-form-label text-md-right" ><a style="font-size: medium;  font-family: 'Lucida Sans'">{{ __('La sua email di registrazione è:') }}</a></label><br>
                            <h3>{{$email}}</h3>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="login"  class="w3-button w3-yellow" style="font-family: 'Lucida Sans'" >
                                    {{ __('Vai al login') }}
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
