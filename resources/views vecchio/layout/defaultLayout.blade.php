<!DOCTYPE html>
<html lang="it">
    <head>
        <title>@yield('title')</title>
        @include('components.head')
        @yield('head')
    </head>

    <body>
        @include('components.navbar')

        @yield('content')

        @include('components.footer')
    </body>
</html>
