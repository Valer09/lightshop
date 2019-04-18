<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        @include('layout.head')
        @yield('head')
    </head>

    <body>
        @include('layout.navbar')

        @yield('content')

        @include('layout.footer')
    </body>
</html>
