
@extends('layout/main-layout')

@section('title','Đăng nhập')


@section('link')

  <!-- ===================== CSS ==================== -->
    <link rel="stylesheet" href="{{url('css/grid.css')}}">
    <link rel="stylesheet" href="{{url('fonts/latin.css')}}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" type="text/css" href="{{url('css/sweetalert.css')}}">

    <!-- ======================= JS ======================= -->

<script src="{{url('js/api/signIn.js')}}"></script>
<script src="{{url('js/jquery.validate.min.js')}}"></script>   
<script src="{{url('js/additional-methods.min.js')}}"></script>
<script src="{{url('js/ajaxsubmit.js')}}"></script>
 <script type="text/javascript" src="{{url('js/sweetalert.min.js')}}"></script>
 
@endsection

@section('content')
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand logo" href="{{url('/')}}" style="color: #04DAF1 !important;">LET'S GO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" style="padding-right: 15px;     font-size: 17px;">
        <li><a class="sign-up-in" href="{{url('/auth/register')}}" style="font-family: Architects Daughter,cursive; ">ĐĂNG KÝ</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- ================ MODEL REGISTER=============== -->
    <div class="signup-page" style="margin-top: 44px; margin-bottom: 10px; height: 569px;">
      <div class="signup-content">
        <div class="container">
          <div class="page-header" style="margin: 40px 20px;">
            <h1 class="logo" style="color: #04DAF1 !important;">LET'S GO <small>Chào mừng tới thế giới của Let's Go!</small></h1>
          </div>
          <div class="panel panel-info" style="width: 945px; margin-left: 261px;">
            
              <div class="panel-heading">
                <h3 class="panel-title">Đăng Nhập</h3>
              </div>
              <div class="panel-body">
            <form id="form-signin" class="form-horizontal" method="post" action="{{url('/auth/signin')}}">
                         <div class="form-group" style="margin:0px;">
                            <input id="email" name="email" minlength="6" maxlength="100" type="email" placeholder="Email" class="form-control input-md">
                         </div>
                          <div class="spacing">
                            <input type="checkbox"  name="remember_me" id="remember-me" checked="checked"><small>Nhớ Đăng Nhập</small>
                          </div>

                           <div class="form-group" style="margin:0px;">
                              <input id="password" minlength="6" maxlength="100" name="password" type="password" placeholder="Mật khẩu" class="form-control input-md">
                          </div>
                          <div class="spacing"><a href="#"><small>Bạn quên mật khẩu? Đừng lo!</small></a><br/></div>

                          <button style="width: 120px !important;" id="singlebutton" type="submit" name="singlebutton" class="btn btn-info btn-sm pull-right">Đăng Nhập</button>
                      
            </form>
           <!--  <div class="or" style="width: 100%;">
              <span class="signup_only">or</span>
            </div>
            <div class="rom">
            <div class="col-md-12" >
                   <a href="#"><img class="id" src="{{url('images/content-image/facebook.png')}}" style="width: 48%; float: left;" /></a>
                 
                        <a href="#"><img class="id" src="{{url('images/content-image/google.png')}}" style="width: 48%; float: right;" /></a>
            </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
</div>
<footer>
   <div class="container" style="height: 100%;">
             
             <div class="copyright" style="text-align: center;
    margin-top: 10px;
    margin-bottom: 2px;">
            © <span id="copyright-year"></span> BACH KHOA HA NOI - HEDSPI
            <!-- {%FOOTER_LINK} -->
          </div><!-- FOOTER COPYRIGHT END -->
          <div class="well5 center">
      <div class="container">
        <div>
          <span style="color: red;">Design By </span> TrinhThiThuyDung<span class="glyphicons glyphicons-cat"></span> </div>
      </div>
    </div>
         </div>
</footer>
@endsection