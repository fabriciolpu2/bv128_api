<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {!!Theme::js('js/d/app.js')!!} --}}
    <script src="{{ mix('admin/js/d/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:500,600,700%7COpen+Sans&display=swap"
          rel="stylesheet">

    <!-- Styles -->
    {!!Theme::css('css/app.css')!!}
    <link href="{{ mix('admin/css/app.css') }}" rel="stylesheet">    
</head>
<body>
    @include('layouts/_header')

    <div id="app" class="main">
        @yield('content')
    </div>

    @include('layouts/_footer')
</body>
</html>