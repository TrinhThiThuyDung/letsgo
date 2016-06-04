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

    <link rel="stylesheet" type="text/css" href="{{url('css/CSSupload/jquery.fileupload-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/CSSupload/jquery.fileupload.css')}}">
    
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript><link rel="stylesheet" href="{{url('css/jquery.fileupload-noscript.css')}}"></noscript>  
    <noscript><link rel="stylesheet" href="{{url('css/jquery.fileupload-ui-noscript.css')}}"></noscript>

   
    <script src="{{url('js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>



 @yield('link')

</head>
<body id="imagePage" data-spy="scroll" data-target=".navbar" data-offset="50">

@yield('content')


</body>
</html>
<!-- ========================= JS ======================== -->
   <!--  <script src="{{url('js/jquery-1.12.0.min.js')}}"></script> -->
    <script type="text/javascript" src="{{url('js/jsUpload/vendor/jquery.ui.widget.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jsUpload/tmpl.min.js')}}"></script>
   <script type="text/javascript" src="{{url('js/jsUpload/load-image.all.min.js')}}"></script> 
   <script type="text/javascript" src="{{url('js/jsUpload/jquery.blueimp-gallery.min.js')}}"></script>
   <script type="text/javascript" src="{{url('js/jsUpload/canvas-to-blob.min.js')}}"></script>
   <script type="text/javascript" src="{{url('js/jsUpload/jquery.iframe-transport.js')}}"></script>
   <script type="text/javascript" src="{{url('js/jsUpload/jquery.fileupload.js')}}"></script>
   <script type="text/javascript" src="{{url('js/jsUpload/jquery.fileupload-process.js')}}"></script>
   <script type="text/javascript" src="{{url('js/jsUpload/jquery.fileupload-image.js')}}"></script>
   <script type="text/javascript" src="{{url('js/jsUpload/jquery.fileupload-validate.js')}}"></script> 
   <script type="text/javascript" src="{{url('js/jsUpload/jquery.fileupload-ui.js')}}"></script>
 
   
    <script src="{{url('js/jsUpload/main.js')}}"></script>
    
    <script type="text/javascript" src="{{url('js/api/main.js')}}"></script>
    <!-- The template to display files available for upload -->
@yield('script')