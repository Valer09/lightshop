@extends('layout.defaultLayout')

@section('content')
<div class="w3-container" style="height:100%">
<div class="w3-content w3-center w3-padding" style="margin-top:100px;width:400px;background-color: rgba(51,171,70,0.96);">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b><h3 style="font-family: 'Lucida Sans'">{{ __('Recupero Password') }}</h3></b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row" style="margin-top: 10px ; padding: 17px">
                            <label for="email" class="col-md-4 col-form-label text-md-right" ><a style="font-size: medium;  font-family: 'Lucida Sans'">{{ __('Inserisca la sua email di registrazione') }}</a></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} w3-input w3-round" name="email" value="{{ old('email') }}" required style="margin-top: 13px">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="w3-button w3-yellow" style="font-family: 'Lucida Sans'">
                                    {{ __('Invia link di reset via email') }}
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
