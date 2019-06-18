<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        @include('components.headAdmin')
        @yield('head')
    </head>

    <body class="w3-light-grey">
        @include('components.navbarAdmin')

        @yield('content')

        @include('components.footerAdmin')
    </body>
</html>