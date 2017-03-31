<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('error_code'): @yield('error_text')</title>

    <!-- Styles -->
    <link href="{{ asset('css/404.css') }}" rel="stylesheet">

</head>
<body>

    @yield('content')
   

</body>
</html>