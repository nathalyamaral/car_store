<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="js/bootstrap.js" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="js/bootstrap.min.js" defer></script>
    <script src="js/jquery-1.11.0.min.js" defer></script>
    <script src="js/jquery.gmap3.min.js" defer></script>
    <script src="js/owl.carousel.min.js" defer></script>
    <script src="js/slick.js" defer></script>
    <script src="js/sliderpro.min.js" defer></script>
    <script src="js/wow.animation.js" defer></script>
    <script src="js/custom.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body style="background-color: black">
    
    @include('header')

    <div class="container">
        @yield('content')
    </div>

    @include('footer')

</body>
</html>
