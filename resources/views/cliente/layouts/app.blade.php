<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>{{ config('app.name', 'Canaime Studio') }}</title>

    <script src="{{ mix('js/app.js') }}"></script>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="cliente/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="cliente/css/blk-design-system-pro.css" rel="stylesheet" />
</head>

<body>
    @include('cliente.layouts/_header')

    <div id="app" class="main">
        @yield('content')
    </div>

    @include('cliente.layouts/_footer')
</body>
<script src="{{ mix('js/app.js') }}" defer></script>
<script src="{{ mix('cliente/js/jquery.min.js') }}"></script>
<script src="{{ mix('cliente/js/popper.min.js') }}"></script>
<script src="{{ mix('cliente/js/bootstrap.min.js') }}"></script>
<script src="{{ mix('cliente/js/perfect-scrollbar.jquery.min.js') }}"></script>

</html>
