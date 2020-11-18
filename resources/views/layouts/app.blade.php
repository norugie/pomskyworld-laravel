<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Pomskyworld') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- CoreUI CSS -->
        <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
    </head>
    <body class="c-app">
        @include('layouts.cms.menu')
        <div class="c-wrapper">
            @include('layouts.cms.header')
            <div class="c-body">
                <div class="c-main">
                    @yield('content')
                </div>
            </div>
            @include('layouts.cms.footer')
        </div>
        <!-- Optional JavaScript -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        {{-- Core UI bundle script --}}
        <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
    </body>
</html>