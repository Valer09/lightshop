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

        <!-- !PAGE CONTENT! -->
        <section class="main-container col1-layout">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <article class="col-main">
                            <div class="account-login">
                                <div class="page-title">
                                    <h2>Login or Create an Account</h2>
                                </div>
                                <form method="POST" action="{{ route('login') }}" style="border:none;">
                                    @csrf
                                    <fieldset class="col2-set">
                                        <div class="col-1 new-users"><strong>New Customers</strong>
                                            <div class="content">
                                                <p>By creating an account with our store, you will be able to move
                                                    through the checkout process faster, store multiple shipping
                                                    addresses, view and track your orders in your account and more.</p>
                                                <div class="buttons-set">
                                                    <button onclick="location.href='{{ url('register') }}'"
                                                        class="button create-account" type="button"><span>Create an
                                                            Account</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 registered-users"><strong>Registered Customers</strong>
                                            <div class="content">
                                                <p>If you have an account with us, please log in.</p>
                                                <ul class="form-list">
                                                    <li>
                                                        <label for="email">Email Address <span
                                                                class="required">*</span></label>
                                                        <input type="text" title="Email Address"
                                                            onfocus="this.value = '';" onblur="if (this.value == '')"
                                                            class="input-text required-entry" id="email"
                                                            value="{{ old('email') }}" required autofocus name="email"
                                                            {{ $errors->has('email') ? ' is-invalid' : '' }}>
                                                        @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                        @endif<span class="validity"></span>
                                                    </li>
                                                    <li>
                                                        <label for="pass">Password <span
                                                                class="required">*</span></label>
                                                        <input type="password" title="Password" id="pass"
                                                            class="input-text required-entry validate-password"
                                                            name="password" requiredplaceholder="Password" required
                                                            {{ $errors->has('password') ? ' is-invalid' : '' }}
                                                            name="password" required>
                                                        @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                        @endif
                                                    </li>
                                                </ul>
                                                <p class="required">* Required Fields</p>
                                                <div class="buttons-set">
                                                    <button id="send2" name="send" type="submit"
                                                        class="button login"><span>Login</span></button>
                                                    <a class="forgot-word" href="{{URL::to('password/reset')}}">Forgot Your Password?</a> </div>
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
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/revslider.js"></script>
    <script type="text/javascript" src="js/common.js"></script>

    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
    <script type="text/javascript" src="js/menu_up.js"></script>

</body>
@endsection