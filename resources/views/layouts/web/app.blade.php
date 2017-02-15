<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FRMS') }}</title>

    <!-- Styles -->
    {!! Html::style(mix('css/app.css')) !!}

</head>
<body>
    <div id="app">
        @include('layouts.web.login._header')

        @yield('content')
    </div>

    <!-- Scripts -->
    {!! Html::script(mix('js/app.js')) !!}
</body>
</html>
