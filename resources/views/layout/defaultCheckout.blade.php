<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    @include('layout.head')
    @yield('head')
</head>

<body>
    @include('layout.headerCheckout')

    @yield('content')

    @include('layout.footer')
</body>
</html>
