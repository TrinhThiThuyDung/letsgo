<!DOCTYPE html>
<html lang="en">
<head>
<title>Let's Go | @yield</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="{{url('images/favicon.ico')}}">
<link rel="shortcut icon" href="{{url('images/favicon.ico')}}" />
<link rel="stylesheet" href="{{url('css/stuck.css')}}">
<link rel="stylesheet" href="{{url('css/style.css')}}">
<link rel="stylesheet" href="{{url('css/touchTouch.css')}}">
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/jquery-migrate-1.1.1.js')}}"></script>
<script src="{{url('js/script.js')}}"></script> 
<script src="{{url('js/superfish.js')}}"></script>
<script src="{{url('js/jquery.equalheights.js')}}"></script>
<script src="{{url('js/jquery.mobilemenu.js')}}"></script>
<script src="{{url('js/jquery.easing.1.3.js')}}"></script>
<script src="{{url('js/tmStickUp.js')}}"></script>
<script src="{{url('js/jquery.ui.totop.js')}}"></script>
<script src="{{url('js/touchTouch.jquery.js')}}"></script>

<script>
 $(document).ready(function(){

  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
  $('.gallery .gall_item').touchTouch();

  }); 
</script>
 @yield('link')
<!--[if lt IE 9]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">


<![endif]-->
</head>
<body class="page1" id="top">
@yield('content')
<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12">  
        <div class="socials">
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-google-plus"></a>
          <a href="#" class="fa fa-pinterest"></a>
        </div>
        <div class="copyright"><span class="brand">Bliss </span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <div>Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a></div>
        </div>
      </div>
    </div>
  </div> 
</footer> 
</body>
</html>

