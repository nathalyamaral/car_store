<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/jquery.steps.js"></script>
    <script src="js/jquery.validate-1.19.0.js"></script>
    <script src="js/additional-methods.js"></script>
    
	<!-- Slider Pro Js -->
	<script src="js/sliderpro.min.js"></script>

	<!-- Slick Slider Js -->
	<script src="js/slick.js"></script>

	<!-- Owl Carousel Js -->
    <script src="js/owl.carousel.min.js"></script>

	<!-- Boostrap Js -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Boostrap Js -->
    <script src="js/wow.animation.js"></script>

	<!-- Custom Js -->
    <script src="js/custom.js"></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
    
<body>
    @header
    @endheader
</body>
</html>
