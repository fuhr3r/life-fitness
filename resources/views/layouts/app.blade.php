<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
    <meta name=”viewport” content=”width=device-width, user-scalable=0; initial-scale=1.0, maximum-scale=1.0">
    <meta name=”viewport” content=”width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=false;”>
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    <meta name="theme-color" content="#000000"/>

    {{--<link rel="icon" sizes="192x192" href="nice-highres.png"> //logo--}}
    <link rel="stylesheet" href="{{ URL::asset('semantic/semantic.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css/app.css') }}"/>
    @stack('training-grid')
</head>
<body>

@yield('content')

<script src="{{ URL::asset('js/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ URL::asset('semantic/semantic.js') }}"></script>

<script src="{{ URL::asset('js/hammer-js/hammer.min.js') }}"></script>
<script src="{{ URL::asset('js/hammer-js/hammer-time.min.js') }}"></script>
<script src="{{ URL::asset('js/hammer-js/jquery.hammer.js') }}"></script>

@stack('mask')
@stack('cep')

<script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>

