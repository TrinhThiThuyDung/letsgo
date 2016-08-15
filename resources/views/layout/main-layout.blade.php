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

<!--     <link rel="stylesheet" type="text/css" href="{{url('css/CSSupload/jquery.fileupload-ui.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{url('css/CSSupload/jquery.fileupload.css')}}">
    
     <link rel="stylesheet" type="text/css" href="{{url('css/sweetalert.css')}}">
    <!-- CSS adjustments for browsers with JavaScript disabled -->
   <!--  <noscript><link rel="stylesheet" href="{{url('css/jquery.fileupload-noscript.css')}}"></noscript>  
    <noscript><link rel="stylesheet" href="{{url('css/jquery.fileupload-ui-noscript.css')}}"></noscript> -->

   
<!--     <script src="{{url('js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{url('js/jquery-1.12.0.min.js')}}"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="{{url('js/bootstrap.min.js')}}"></script>



 @yield('link')

</head>
<body id="imagePage" data-spy="scroll" data-target=".navbar" data-offset="50">

@yield('content')


</body>
</html>
<!-- ========================= JS ======================== -->
    
    <script type="text/javascript" src="{{url('js/sweetalert.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/api/main.js')}}"></script>  
     <script src="{{url('js/filer/filereader.min.js')}}"></script>
    <script src="{{url('js/filer/caman.full.js')}}"></script>
    <script src="{{url('js/filer/jquery.mousewheel.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/api/upload.js')}}"></script>
    <!-- <script type="text/javascript" src="{{url('js/main.js')}}"></script> -->

   
    <!-- The template to display files available for upload -->
@yield('script')