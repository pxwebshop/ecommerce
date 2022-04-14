<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
    <!--  -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/front/style.css') }}" rel="stylesheet" type="text/css" >

    <link href="{{ asset('css/front/animate.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/front/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/front/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" >

    <script type="text/javascript" src="{{ URL::asset('js/front/jquery.min.js') }}"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    @include('libs.header' )
    @yield('content')

    <!-- <script src="{{asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script> -->
    @include('libs.footer' )
    <!-- <script type="text/javascript" src="{{ asset('js/front/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/front/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/front/main.js') }}"></script> -->

    @stack('scripts')
</body>

</html>