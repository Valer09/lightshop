@extends('layout.defaultLayout')

@section('content')

    <div class="w3-container" style="height:100%">
        <div class="w3-content w3-center w3-padding" style="margin-top:100px;width:400px;background-color: #2c993f;">
            <div class="container" style="margin-top:14px">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">

                            <div class="card-header" style="margin-bottom: 27px"><b><h2 style="font-family: 'Lucida Sans'">{{ __('Reset Password') }}</h2></b></div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('password.update') }}" >
                                    @csrf

                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="form-group row" style="margin-bottom: 10px; margin-top: 15px">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">
                                            <a style="font-size: medium;  font-family: 'Lucida Sans'">{{ __('Indirizzo email di registrazione') }}</a></label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control w3-input w3-round" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>



                                    <div class="form-group row" style="margin-bottom: 10px; margin-top: 15px">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">
                                            <a style="font-size: medium;  font-family: 'Lucida Sans'">{{ __('Password') }}</a></label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control{{ $errors->has('Nuova Password') ? ' is-invalid' : '' }} w3-input w3-round" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row" style="margin-bottom: 10px; margin-top: 15px">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                                            <a style="font-size: medium;  font-family: 'Lucida Sans'">
                                                {{ __('Conferma Password') }}</a></label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control form-control w3-input w3-round" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">

                                            <button type="submit" class="w3-button w3-yellow" style="margin-top: 10px">
                                                <a style="font-size: medium;  font-family: 'Lucida Sans'">
                                                    {{ __('Reset Password') }}</a>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
