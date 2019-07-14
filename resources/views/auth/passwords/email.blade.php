@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')

@endsection

@section('content')

<body class="shopping-cart-page">

    <!--div Desktop-->
    <div id="page">
        <!-- Header -->
        @include('components.banner')
        @include('components.navbarDesktop')
        <!-- end header -->

        <!-- !PAGE CONTENT! -->
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <section class="main-container col1-layout">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <article class="col-main">
                            <div class="account-login">
                                <div class="page-title">
                                    <h2>Email and Password Recovery</h2>
                                </div>
                                <form method="POST" action="{{ route('password.email') }}" style="border:none;">
                                    @csrf
                                    <fieldset class="col2-set">
                                        
                                        <div class="col-1 new-users"><strong>{{ __('Email recovery') }}</strong>
                                            <div class="content">
                                                <p>If you don't remember your e-mail with which you were registered, click on the button below.</p>
                                                <div class="buttons-set">
                                                    <button onclick="location.href='{{URL::to('password/email')}}'"
                                                        class="button create-account" type="button"><span>Email recovery</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 registered-users"><strong>{{ __('Password recovery') }}</strong>
                                            <div class="content">
                                                <p>Enter your email, you will receive the password reset link.</p>
                                                <ul class="form-list">
                                                    <li>
                                                        <label for="email">Email Address <span
                                                                class="required">*</span></label>
                                                        <input type="text" title="Email Address"
                                                            onfocus="this.value = '';" onblur="if (this.value == '')"
                                                            class="input-text required-entry form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email"
                                                            value="{{ old('email') }}" required autofocus name="email">
                                                            
                                                            @if ($errors->has('email'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                            @endif
                                                    </li>
                                                </ul>
                                                <p class="required">* Required Fields</p>
                                                <div class="buttons-set">
                                                    <button id="send2" name="send" type="submit"
                                                        class="button login"><span>{{ __('send reset link') }}</span></button>
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