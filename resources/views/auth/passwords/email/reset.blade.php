@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')

@endsection

@section('content')

<body class="error-page">

    <!--div Desktop-->
    <div id="page">
        <!-- Header -->
        @include('components.banner')
        @include('components.navbarDesktop')
        <!-- end header -->

        <!-- !PAGE CONTENT! -->
        @if (isset($newEmail))
            <div class="alert alert-danger" role="alert">
                {{ $newEmail }}
            </div>
        @endif
        @if (isset($email))
            <div class="alert alert-success" role="alert">
                This is your email: <strong>{{ $email }}</strong>
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
                                <form method="POST" action="{{URL::to('email_recovery')}}" style="border:none;">
                                    @csrf
                                    <fieldset class="col2-set">
                                        <div class="col-1 new-users"><strong>Password recovery</strong>
                                            <div class="content">
                                                <p>If you don't remember your password click on the button below.</p>
                                                <div class="buttons-set">
                                                    <button onclick="location.href='{{URL::to('password/reset')}}'"
                                                        class="button create-account" type="button"><span>Password recovery</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 registered-users"><strong>Email recovery</strong>
                                            <div class="content">
                                                <p>Enter your fiscal code with which you registered, to retrieve your email.</p>
                                                <ul class="form-list">
                                                    <li>
                                                        <label for="email">Fiscal code <span
                                                                class="required">*</span></label>
                                                        <input type="text" title="Email Address"
                                                            class="input-text required-entry form-control" required autofocus name="cf">
                                                    </li>
                                                </ul>
                                                <p class="required">* Required Fields</p>
                                                <div class="buttons-set">
                                                    <button id="send2" name="send" type="submit"
                                                        class="button login"><span>Email recover</span></button>
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

</body>
@endsection