<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1170/1170576.png">
    <link href="{{ asset('css/front/style.css') }}" rel="stylesheet" type="text/css" >

    <link href="{{ asset('css/front/animate.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/front/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/front/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link href="{{ asset('css/front/slick.min.css') }}" rel="stylesheet" type="text/css" >

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
</head>

<body>
    @include('front.layouts.header')

    @yield('content')

    @include('front.layouts.footer')

     <!-- Jquery Slim JS -->
     <script src="{{ asset('js/front/jquery.min.js')}} "></script>
    
    <script src="{{ asset('js/front/jquery-ui.min.js')}} "></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
   
    @stack('scripts')
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}


</body>

</html>