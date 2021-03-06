<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mic Car</title>

    <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">
    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('js/sliderpro.min.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/wow.animation.js') }}"></script>
    <script src="{{ asset('js/jquery.validate-1.19.0.js') }}"></script>
    <script src="{{ asset('js/additional-methods.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/cidade_estado.js') }}"></script>

    
    <style>
        @media(min-width: 768px) {
          .field-label-responsive {
            padding-top: .5rem;
            text-align: right;
            }
        }
    </style>

</head>
    
<body>
    @header
    @endheader
</body>
</html>
