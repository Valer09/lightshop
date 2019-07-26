@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')
  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/navbarColor.css')}}" />
  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/auth.css')}}" />
  <script src="{{url('/js/auth.js')}}"></script>
@endsection

@section('content')
    <!--CONTENT PAGE-->
<div class="w3-container">
    <div class="w3-content w3-padding" style="margin-top:100px;margin-bottom:51px;width:50%; background-color: #46967c;">
        <h2 class="whiteForm w3-center"><i class="w3-margin-right"></i>Registrazione</h2>
        <hr>
        <form id="regForm" action="{{ route('register') }}?ref={{$_SERVER['REQUEST_URI']}}" method="post" target="_blank">
        @csrf
            <div class="w3-container whiteForm w3-padding-16">
                <div class="tab w3-row-padding" style="margin:0 -16px;">
                    <div class="w3-row w3-margin-bottom">
                        <label><i class="fa fa-user"></i> {{ __('Nome') }}</label>
                        <input id="name" class="w3-input form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" 
                        type="text" placeholder="Mario" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="w3-row w3-margin-bottom">
                        <label><i class="fa fa-user"></i> {{ __('Cognome') }}</label>
                        <input id="surname" class="w3-input form-control {{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" 
                        value="{{ old('surname') }}" type="text" placeholder="Rossi"  required>
                        @if ($errors->has('surname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('surname') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="w3-row w3-margin-bottom">
                        <label><i class="fa fa-user"></i> {{ __('Codice Fiscale') }}</label>
                        <input id="cf" class="w3-input form-control {{ $errors->has('CF') ? ' is-invalid' : '' }}" type="text" name="CF" placeholder="Codice fiscale"  value="{{ old('CF') }}" required>
                        @if ($errors->has('CF'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('CF') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="tab w3-row-padding" style="margin:0 -16px;">
                    <div class="w3-row w3-margin-bottom">
                        <label><i class="fa fa-user"></i> {{ __('E-Mail') }}</label>
                        <input id="email" class="w3-input form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" 
                        placeholder="mariorossi@gmail.com" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="w3-row w3-margin-bottom">
                        <label><i class="fa fa-user"></i> Ripeti email</label>
                        <input class="w3-input form-control {{ $errors->has('email_confirmation') ? ' is-invalid' : '' }}" type="text" 
                            placeholder="mariorossi@gmail.com" name="email_confirmation" value="{{ old('email_confirmation') }}" autocomplete="off" required>
                        @if ($errors->has('email_confirmation'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email_confirmation') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="tab w3-row-padding" style="margin:0 -16px;">
                    <button class="w3-button" type="button" onclick="registraAzienda('aziendaRegistrazione'); this.style.display='none'">Registrati come azienda</button>
                    <div id="aziendaRegistrazione">
                        <div class="w3-row w3-margin-bottom w3-">
                        <label><i class="fa fa-user"></i> {{ __('Partita IVA') }}</label>
                        <input id="ipva" class="w3-input form-control {{ $errors->has('IVA') ? ' is-invalid' : '' }}" type="text" name="IVA" placeholder="Partita IVA" value="{{ old('IVA') }}">
                        @if ($errors->has('IVA'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('IVA') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="w3-row w3-margin-bottom">
                        <label><i class="fa fa-user"></i> {{ __('PEC') }}</label>
                        <input id="pec" class="w3-input form-control {{ $errors->has('PEC') ? ' is-invalid' : '' }}" type="text"
                                name="PEC" value="{{ old('PEC') }}" placeholder="Email PEC">
                        @if ($errors->has('PEC'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('PEC') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="w3-row w3-margin-bottom">
                        <label><i class="fa fa-user"></i> Ripeti pec</label>
                        <input class="w3-input form-control {{ $errors->has('PEC_confirmation') ? ' is-invalid' : '' }}" autocomplete="off"
                        type="text" name="PEC_confirmation" placeholder="Ripeti email PEC" value="{{ old('PEC_confirmation') }}">
                        @if ($errors->has('PEC_confirmation'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('PEC_confirmation') }}</strong>
                        </span>
                        @endif
                    </div>
                    </div>
                </div>

                <div class="tab w3-row-padding" style="margin:0 -16px;">
                    <div class="w3-row w3-margin-bottom">
                        <label><i class="fa fa-lock"></i> {{ __('Password') }}</label>
                        <input id="password" class="w3-input form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" 
                        type="password" placeholder="Password" name="password" required>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="w3-row w3-margin-bottom">
                        <label><i class="fa fa-lock"></i> {{ __('Ripeti Password') }}</label>
                        <input id="password-confirm" class="w3-input form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                        type="password" placeholder="Ripeti password" name="password_confirmation" autocomplete="off" required>
                        @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div style="overflow:auto;">
                    <div style="float:right;">
                    <button class="w3-button w3-dark-grey" type="button" id="prevBtn" onclick="nextPrev(-1)">Indietro</button>
                    <button class="w3-button w3-dark-grey" type="button" id="nextBtn" onclick="nextPrev(1)">Avanti</button>
                    </div>
                </div>
                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
            </div>
        </form>
    </div>
            
</div>
  


<script>


var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Registrati";
    } else {
        document.getElementById("nextBtn").innerHTML = "Avanti";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && (!validateForm() && currentTab != 2)) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}


//Richiamo funz.
@php
    $error1 = $errors->has('email') || $errors->has('email');
    $error2 = $errors->has('IVA') || $errors->has('PEC') || $errors->has('PEC_confirmation');
    $error3 = $errors->has('password') || $errors->has('password_confirmation');
@endphp
{{ $error1 ? 'nextPrev(1);' : '' }}
{{ !$error1 && $error2 ? 'nextPrev(2);' : '' }}
{{ !$error1 && !$error2 && $error3 ? 'nextPrev(3);' : '' }}
</script>

@endsection
