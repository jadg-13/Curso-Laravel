<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('styles')
</head>
<body>
    @yield('header')
    @yield('content')
    @yield('footer')
    @yield('js')
</body>
</html>