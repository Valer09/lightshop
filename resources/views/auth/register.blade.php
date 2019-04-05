@extends('layout.defaultLayout')
@section('content')
    <!--CONTENT PAGE-->
    <div class="w3-container w3-row" style="margin-top:65px">
        
        <div class="w3-container w3-half">
        </div>

        <!--REGISTER-->
        <div class="w3-container w3-half">
            <div class="w3-container" style="width: 100%">
                <div class="w3-container w3-red">
                    <h2><i class="w3-margin-right"></i>Registrazione</h2>
                </div>
                <div class="w3-container w3-white w3-padding-16">
                    <form action="{{ route('register') }}?ref={{$_SERVER['REQUEST_URI']}}" method="post" target="_blank">
                        @csrf
                        <div class="w3-row-padding" style="margin:0 -16px;">
                            <div class="w3-row w3-margin-bottom">
                                <label><i class="fa fa-user"></i> {{ __('Nome') }}</label>
                                <input id="name" class="w3-input form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                type="text" placeholder="Mario" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="w3-row w3-margin-bottom">
                                <label><i class="fa fa-user"></i> {{ __('Cognome') }}</label>
                                <input id="surname" class="w3-input form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" 
                                value="{{ old('surname') }}" type="text" placeholder="Rossi"  required>
                                @if ($errors->has('surname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="w3-row w3-margin-bottom">
                                <label><i class="fa fa-user"></i> {{ __('Codice Fiscale') }}</label>
                                <input id="cf" class="w3-input form-control" type="text" name="CF" value="CF" required>
                                @if ($errors->has('CF'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('CF') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="w3-row w3-margin-bottom">
                                <label><i class="fa fa-user"></i> {{ __('Partita IVA') }}</label>
                                <input id="cf" class="w3-input form-control" type="text" name="IVA" value="P.Iva ">
                                @if ($errors->has('IVA'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('IVA') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="w3-row w3-margin-bottom">
                                <label><i class="fa fa-user"></i> {{ __('E-Mail') }}</label>
                                <input id="email" class="w3-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" 
                                placeholder="mariorossi@gmail.com" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="w3-row w3-margin-bottom">
                                <label><i class="fa fa-user"></i> Ripeti email</label>
                                <input class="w3-input" type="text" placeholder="mariorossi@gmail.com" name="CheckIn" required>
                            </div>

                            <div class="w3-row w3-margin-bottom">
                                <label><i class="fa fa-user"></i> {{ __('PEC') }}</label>
                                <input id="pec" class="w3-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text"
                                       name="PEC" value="PEC ">

                            </div>
                            <div class="w3-row w3-margin-bottom">
                                <label><i class="fa fa-user"></i> Ripeti pec</label>
                                <input class="w3-input" type="text"  name="CheckIn">
                            </div>


                            <div class="w3-row w3-margin-bottom">
                                <label><i class="fa fa-lock"></i> {{ __('Password') }}</label>
                                <input id="password" class="w3-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                type="password" placeholder="*********" name="password" required>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="w3-row w3-margin-bottom">
                                <label><i class="fa fa-lock"></i> {{ __('Ripeti Password') }}</label>
                                <input id="password-confirm" class="w3-input form-control" type="password" placeholder="*********" name="password_confirmation" required>
                            </div>
                        </div>
                        <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-blind w3-center"></i>  Registrati</button>
                    </form>
                </div>
            </div>
        </div>
    </div>    
    
@endsection
