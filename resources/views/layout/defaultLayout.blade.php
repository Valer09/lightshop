<!DOCTYPE html>
<html>

<head>
    @include('layout.head')

</head>

<body style="max-width: 1200px">
    @include('layout.navbar')

    @yield('content')

    @include('layout.footer')
</body>
</html>
