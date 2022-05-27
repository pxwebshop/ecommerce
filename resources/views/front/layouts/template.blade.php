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
    <link href="{{ asset('css/front/toastr.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/front/aos.css') }}" rel="stylesheet" type="text/css" >

    {{-- <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">  --}}
</head>

<body>
    @include('front.layouts.header')

    @yield('content')

    @include('front.layouts.footer')

     <!-- Jquery Slim JS -->
     <script src="{{ asset('js/front/jquery.min.js')}} "></script>
    
    <script src="{{ asset('js/front/jquery-ui.min.js')}} "></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    
    <script src="{{ asset('js/front/aos.js')}} "></script>
    <script>
      AOS.init();
    </script>

    @stack('scripts')
    <script src="{{ asset('js/front/toastr.min.js')}} "></script>
    {{-- <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script> --}}
    {!! Toastr::message() !!}

    {{-- chatbot facebook --}}
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "103967885649490");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v13.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    {{-- end: chatbot facebook --}}

</body>

</html>