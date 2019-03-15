
@extends('layout.defaultLayout')

@section('content')

<!-- !PAGE CONTENT! -->
<div class="w3-container" style="height:100%">
<div class="w3-content w3-center w3-padding" style="margin-top:100px;width:400px;background-color: #2c993f;">
    <form method="POST" action="{{ route('login') }}" style="border:none;">
        @csrf
        <div class="w3-row w3-center w3-border-bottom">
            <div class="w3-col s12 w3-left">
                <p>CI SEI MANCATO...</p>
            </div>
        </div>
        <div class="w3-row w3-center" >
            <div class="w3-col s12">
            <h5>Login</h5>
                <p>Inserisci email e password per accedere</p>
            </div>
        </div>
        <div class="w3-row w3-center w3-margin-bottom">
            <div class="w3-col l12 s12 w3-left w3-margin-bottom">
                <input class="w3-input w3-border-bottom" name="email" type="text" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email Here';}"
                            {{ $errors->has('email') ? ' is-invalid' : '' }}  name="email"
                            value="{{ old('email') }}" required autofocus/>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                        @endif<span class="validity"></span>
                <input class="w3-input w3-border-0" id="passRegister" type="password" placeholder="Password" required {{ $errors->has('password') ? ' is-invalid' : '' }} name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
            </div>
            <div class="w3-col l12 s12 w3-left w3-margin-bottom">
                <button class="w3-button w3-amber w3-block" type="submit" value="login">Login</button>
            </div>
        </div>
        <div class="w3-row w3-center" >
            <div class="w3-col l6 w3-left">
                <a href="{{URL::to('password/reset')}}" class="w3-left" style="text-decoration: none;">Password  o email dimenticata?</a>
            </div>
            <div class="w3-col l6 w3-right">
                <a href="./register" class="w3-right " style="text-decoration: none;">Non hai un account?</a>
            </div>
        </div>
    </form>
</div>
</div>
@s
