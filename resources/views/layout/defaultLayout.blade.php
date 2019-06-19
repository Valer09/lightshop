<!DOCTYPE html>
<html lang="it">
    <head>
        <title>@yield('title')</title>
        @include('components.head')
        @yield('head')
    </head>
    
    <!--body-->
    @yield('content')
    <!--end body-->

</html>
