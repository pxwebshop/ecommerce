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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    @include('libs.header' )
    @yield('content')


    @include('libs.footer' )

    @stack('scripts')

     <!-- Jquery Slim JS -->
     <script src="{{ asset('js/front/jquery.min.js')}} "></script>
    <!-- Bootstrap JS -->
    <!-- <script src="{{ asset('js/front/bootstrap.bundle.min.js')}} "></script> -->
    <!-- Meanmenu JS -->
    <!-- <script src="{{ asset('js/front/jquery.meanmenu.js')}} "></script> -->
    <!-- Owl Carousel JS -->
    <script src="{{ asset('js/front/owl.carousel.min.js')}} "></script>
    <!-- Magnific Popup JS -->
    <!-- <script src="{{ asset('js/front/jquery.magnific-popup.min.js')}} "></script> -->
    <!-- Nice Select JS -->
    <!-- <script src="{{ asset('js/front/jquery.nice-select.min.js')}} "></script> -->
    <!-- Slick JS -->
    <!-- <script src="{{ asset('js/front/slick.min.js')}} "></script> -->
    <!-- Odometer JS -->
    <!-- <script src="{{ asset('js/front/odometer.min.js')}} "></script> -->
    <!-- Appear JS -->
    <!-- <script src="{{ asset('js/front/jquery.appear.js')}} "></script> -->
    <!-- Jquery Ui JS -->
    <script src="{{ asset('js/front/jquery-ui.min.js')}} "></script>
    <!-- Ajaxchimp JS -->
    <!-- <script src="{{ asset('js/front/jquery.ajaxchimp.min.js')}} "></script> -->
    <!-- Form Validator JS -->
    <!-- <script src="{{ asset('js/front/form-validator.min.js')}} "></script> -->
    <!-- Contact JS -->
    <!-- <script src="{{ asset('js/front/contact-form-script.js')}} "></script> -->
    <!-- Wow JS -->
    <script src="{{ asset('js/front/wow.min.js')}} "></script>
</body>

</html>