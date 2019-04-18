<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        @include('layout.headAdmin')
        @yield('head')
    </head>

    <body class="w3-light-grey">
        @include('layout.navbarAdmin')

        @yield('content')

        @include('layout.footerAdmin')
    </body>
</html>