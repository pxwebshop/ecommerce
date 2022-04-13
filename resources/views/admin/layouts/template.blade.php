<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

	@yield('content')
	
    <!-- <script src="{{asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script> -->
   
    @stack('scripts')

</body>
</html>