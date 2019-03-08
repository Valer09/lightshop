<!DOCTYPE html>
<html>

<head>
    @include('layout.head')

</head>

<body style="max-width: 1480px;" class="w3-middle">
    @include('layout.navbar')

    @yield('content')

    @include('layout.footer')
</body>
</html>
