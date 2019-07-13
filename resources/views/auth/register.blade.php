@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')

@endsection

@section('content')

<body class="cms-index-index cms-home-page">

    <!--div Desktop-->
    <div id="page">
        <!-- Header -->
        @include('components.banner')
        @include('components.navbarDesktop')
        <!-- end header -->
        <!--CONTENT PAGE-->
        <section class="main-container col1-layout">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <article class="col-main">
                            <div class="account-login">
                                <div class="page-title">
                                    <h2>Create an Account</h2>
                                </div>
                                <form id="regForm" action="{{ route('register') }}?ref={{$_SERVER['REQUEST_URI']}}"
                                    method="post" target="_blank">
                                    @csrf
                                    <fieldset class="col2-set">
                                        <div class="col-1 registered-users"><strong>Registered Customers</strong>
                                            <div class="content">
                                                <p>By creating an account with our store, you will be able to move
                                                    through the checkout process faster, store multiple shipping
                                                    addresses, view and track your orders in your account and more.</p>
                                                <ul class="form-list">
                                                    <li>
                                                        <label for="email">Name <span class="required">*</span></label>
                                                        <input id="name"
                                                            class="input-text required-entry form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                            type="text" name="name" value="{{ old('name') }}" required
                                                            autofocus>
                                                        @if ($errors->has('name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        <label for="email">Surname <span
                                                                class="required">*</span></label>
                                                        <input id="surname"
                                                            class="input-text required-entry form-control {{ $errors->has('surname') ? ' is-invalid' : '' }}"
                                                            name="surname" value="{{ old('surname') }}" type="text"
                                                            required>
                                                        @if ($errors->has('surname'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('surname') }}</strong>
                                                        </span>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        <label for="email">Fiscal Code <span
                                                                class="required">*</span></label>
                                                        <input id="cf"
                                                            class="input-text required-entry form-control {{ $errors->has('CF') ? ' is-invalid' : '' }}"
                                                            type="text" name="CF" value="{{ old('CF') }}" required>
                                                        @if ($errors->has('CF'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('CF') }}</strong>
                                                        </span>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        <label for="email">Email Address <span
                                                                class="required">*</span></label>
                                                        <input id="email"
                                                            class="input-text required-entry form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                            type="text" name="email" value="{{ old('email') }}"
                                                            required>
                                                        @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        <label for="email">Repeat Email Address <span
                                                                class="required">*</span></label>
                                                        <input
                                                            class="input-text required-entry form-control {{ $errors->has('email_confirmation') ? ' is-invalid' : '' }}"
                                                            type="text" name="email_confirmation"
                                                            value="{{ old('email_confirmation') }}" autocomplete="off"
                                                            required>
                                                        @if ($errors->has('email_confirmation'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email_confirmation') }}</strong>
                                                        </span>
                                                        @endif
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-2 registered-users">
                                            <div class="content">
                                                <ul class="form-list">
                                                    <li>
                                                        <label for="email">VAT number</label>
                                                        <input id="ipva"
                                                            class="input-text form-control {{ $errors->has('IVA') ? ' is-invalid' : '' }}"
                                                            type="text" name="IVA" value="{{ old('IVA') }}">
                                                        @if ($errors->has('IVA'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('IVA') }}</strong>
                                                        </span>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        <label for="pass">Email PEC</label>
                                                        <input id="pec"
                                                            class="input-text form-control {{ $errors->has('PEC') ? ' is-invalid' : '' }}"
                                                            type="text" name="PEC" value="{{ old('PEC') }}">
                                                        @if ($errors->has('PEC'))
                                                        <span class="invalid-feedback"
                                                            role="alert"><strong>{{ $errors->first('PEC') }}</strong>
                                                        </span>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        <label for="email">Repeat Email PEC </label>
                                                        <input
                                                            class="input-text form-control {{ $errors->has('PEC_confirmation') ? ' is-invalid' : '' }}"
                                                            autocomplete="off" type="text" name="PEC_confirmation"
                                                            value="{{ old('PEC_confirmation') }}">
                                                        @if ($errors->has('PEC_confirmation'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('PEC_confirmation') }}</strong>
                                                        </span>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        <label for="pass">Password <span
                                                                class="required">*</span></label>
                                                        <input id="password"
                                                            class="input-text required-entry form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                            type="password" name="password" required>
                                                        @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        <label for="pass">Repeat Password <span
                                                                class="required">*</span></label>
                                                        <input id="password-confirm"
                                                            class="input-text required-entry form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                                            type="password" name="password_confirmation"
                                                            autocomplete="off" required>
                                                        @if ($errors->has('password_confirmation'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                        </span>
                                                        @endif
                                                    </li>
                                                </ul>
                                                <p class="required">* Required Fields</p>
                                                <div class="buttons-set">
                                                    <button id="send2" name="send" type="submit"
                                                        class="button login"><span>Create an Account</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </article>
                        <!--	///*///======    End article  ========= //*/// -->
                    </div>

                </div>
            </div>
        </section>
        <!-- Main Container End -->
        <!--footer Desktop-->
        @include('components.footerDesktop')
        <!-- End Footer Desktop -->
    </div>

    <!--div Mobile Menu-->
    <div id="mobile-menu">
        @include('components.navbarMobile')
    </div>

    <!-- JavaScript -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/revslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/common.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mobile-menu.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/menu_up.js') }}"></script>
</body>

@endsection