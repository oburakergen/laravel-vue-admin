<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/favicon/site.webmanifest') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @auth
        <meta name="api-token" content="{{ auth()->user()->api_token }}">
    @endauth

    <title>{{ config('app.name', 'Laraplay') }}</title>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    @stack('custom-link')

</head>
<body>
<div id="wrapper" class="clearfix">
    <header id="header" class="header">
        @include('shared.topbar')
        @include('shared.navbar')
    </header>

    <div class="main-content">
        @yield('content')
    </div>

    @include('shared.footer')
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

<!-- Scripts -->
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ mix('/js/main.js') }}"></script>
@stack('custom-scripts')
</body>
</html>
