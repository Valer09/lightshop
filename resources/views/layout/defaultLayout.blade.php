<!DOCTYPE html>
<html>

<head>
    @include('layout.head')
</head>

<body>
    @include('layout.navbar')

    @yield('content')

    @include('layout.footer')
</body>
</html>