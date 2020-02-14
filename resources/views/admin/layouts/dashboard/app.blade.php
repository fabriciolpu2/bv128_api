<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->

    @yield('pre_js')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <!-- {!!Theme::css('css/d/schedule.css')!!} -->
    <link href="{{ mix('admin/css/d/schedule.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body>

    @if (Auth::guest())
    @yield('content')
    @else
    <div id="app">
        @include('layouts.dashboard._header')
        <div class="wrapper">

            <div class="container-fluid">
                    {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (Session::has('success'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @endif --}}
                @if (Auth::user()->isBlocked())
                        <div class="row text-center m-t-20">
                            <div class="col-12">
                                <div class="card-box">
                                    <h2 class="m-t-0 header-title">Conta Bloqueada</h2>
                                    <p class="text-muted m-b-30 font-18">
                                        A sua conta foi bloqueada, entre em contato
                                    </p>
                                </div>
                            </div>
                        </div>
                @else
                    @yield('content')
                @endif
            </div>

            {{-- <vue-snotify></vue-snotify> --}}
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    {{ __('labels.Year') }} © {{config('app.name') }}
                </div>
            </div>
        </div>
    </footer>
    @endif
    <!-- Scripts -->
    <!-- Scripts -->
    {{-- <script src="{{ mix('admin/js/d/app.js') }}"></script>
    <script src="{{ mix('admin/js/d/jquery.slimscroll.js') }}"></script>
    <script src="{{ mix('admin/js/d/jquery.app.js') }}"></script> --}}
    {!!Theme::js('admin/js/d/app.js')!!}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    {!!Theme::js('admin/js/d/jquery.slimscroll.js')!!}
    {!!Theme::js('admin/js/d/jquery.app.js')!!}
    @yield('js')
</body>

</html>
