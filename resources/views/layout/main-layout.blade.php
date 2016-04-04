<!DOCTYPE html>
<html lang="en">
<head>
<title>Let's Go | @yield('title')</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="{{url('favicon.ico')}}" />

 <!-- ===================== CSS ==================== -->
    <link rel="stylesheet" href="{{url('css/grid.css')}}">
    <link rel="stylesheet" href="{{url('fonts/latin.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">

    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">

   <!-- ========================= JS ======================== -->
    <script src="{{url('js/jquery-1.12.0.min.js')}}"></script>
    <script src="{{url('js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>

     <script src="{{url('js/main.js')}}"></script>


 @yield('link')

</head>
<body id="imagePage" data-spy="scroll" data-target=".navbar" data-offset="50">
@yield('content')


</body>
</html>

@yield('script')