<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Prevent Auto Caching in Browsers -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <!-- Use for Internet Exploer -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <!-- csrf token sample generated -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- For JS Files -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- <script type="module" src="{{ asset('js/popper.min.js') }}"></script> -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- For CSS -->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script|EB+Garamond|Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">

    @yield('assets')
</head>

<body>
    @include('partials.header')
    <div class="wrapper">
    @include('partials.sidebar')
        <!-- Page Content Holder -->
        <div id="content">
           @include('partials.togglerButton')
           @yield('content')
        </div>
    </div>

    <script src="{{ asset('js/myscript.js') }}"></script>
</body>

</html>