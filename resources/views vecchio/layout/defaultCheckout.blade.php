<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    @include('components.head')
    @yield('head')
</head>

<body>
    @include('components.headerCheckout')

    @yield('content')

    @include('components.footer')
</body>
</html>
