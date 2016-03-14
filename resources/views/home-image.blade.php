<!DOCTYPE html>
<html>
<head>
	<title> Let's Go | Nha Anh </title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ===================== CSS ==================== -->
    <link rel="stylesheet" href="{{url('css/grid.css')}}">
    <link rel="stylesheet" href="{{url('fonts/latin.css')}}">

   <link rel="stylesheet" href="{{url('css/style.css')}}">
   <link rel="stylesheet" href="{{url('css/style-home.css')}}">

    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  	<!-- ========================= JS ======================== -->
    <script src="{{url('js/jquery-1.12.0.min.js')}}"></script>
    <script src="{{url('js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
   <nav class="navbar navbar-inverse navbar-fixed-top" style="height: 62px;">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="margin-left: 3%;">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand text-uppercase logo" style="margin: 11px 6px !important; padding: 11px 11px !important;  color: #04DAF1;" href="#">LET'S GO</a>
        </div>
   
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation">
        <ul class=" nav navbar-nav navbar-left menu" style="height: 62px;">
          <li>
            <a href="#" > NGƯỜI THEO DÕI</a>
          </li>
          <li class="" style="    height: 66%;
    text-align: center;
    width: 1px;
    background-color: #1B6E69 !important;
    margin-top: 3%;
    margin-bottom: 3%;"></li>
          <li>
            <a href="#"> TẤT CẢ ẢNH </a>
          </li>
        </ul>
        <form action="" class="search-form">
                <div class="form-group has-feedback" style="margin-top: 1%; margin-right: 4%;">
                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </form>
            <ul class="nav navbar-nav navbar-right user-detail" id="nav-user">
            <li style="margin-right: 30px !important;"><button style="margin: 3.5px;" type="button" class="btn btn-success navbar-btn btn-circle" >Đăng Ảnh</button></li>
             <li class="dropdown detail-hover">
                  <a href="#"  class="dropdown-toggle" data-toggle="dropdown">
                   <strong>
                   <img src="{{url('/images/user_alerts.png')}}">
                      <span style="font-family: Architects Daughter,cursive; color: white;">Thông Báo</span>
                   </strong>
                  </a>
                  <ul class="dropdown-menu" role = "menu">
                   <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                        <div class="menuHeader">
                          <h3>
                            Thông Báo
                          </h3>
                        </div>
                            <div class="panel panel-default">
                                <ul class="list-group" id="contact-list">
                                <li class="list-group-item">
                                       <div >
                                         <span style="font-style: italic; border-radius: none"> Bạn không có thông báo mới nào...</span>
                                       </div>
                                        
                                        <div class="clearfix"></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-xs-12 col-sm-3 col-md-4">
                                            <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                                        </div>
                                        <div class="col-xs-12 col-sm-9 col-md-8">
                                        <a href="#">
                                            <span class="name">Scott Stevens</span></a><br/>
                                           <a href="#"><span class="">ABC đã like ảnh của bạn </span></a><br/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    
                                                        <li class="list-group-item">
                                        <div class="col-xs-12 col-sm-3 col-md-4">
                                            <img src="http://api.randomuser.me/portraits/men/25.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                                        </div>
                                        <div class="col-xs-12 col-sm-9 col-md-8">
                                           <a href="#"> <span class="name">aze e</span></a><br/>
                                           <a href=""> <span > XYZ đã chia sẻ ảnh của bạn </span> </a><br/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div>
                  </ul>
                </li>
            <!-- ====Persional===== -->
                <li class="dropdown detail-hover">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <strong>
                      <img class="ava-img" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xtl1/v/t1.0-1/c22.0.160.160/p160x160/12809768_1561885120795333_7785380619686698052_n.jpg?oh=ab3ce4a2385490ddaccffdd8e80efac5&oe=575379CB&__gda__=1465997005_4aa837d030c5295622dcacacd6a476e8">
                      <span style="font-family: Architects Daughter,cursive; color: white;">Tiểu Long Hoàng</span>
                    </strong>
                  </a>
                   <ul class="dropdown-menu" role = "menu">
                      <li id="profile">
                      <!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

                        <div class="container">
                            <div class="row profile-row">
                            <div class="col-md-12">
                              <div class="profile-sidebar">
                                <!-- SIDEBAR USERPIC -->
                                <div class="profile-userpic">
                                  <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xtl1/v/t1.0-1/c22.0.160.160/p160x160/12809768_1561885120795333_7785380619686698052_n.jpg?oh=ab3ce4a2385490ddaccffdd8e80efac5&oe=575379CB&__gda__=1465997005_4aa837d030c5295622dcacacd6a476e8" class="img-responsive" alt="">
                                </div>
                                <!-- END SIDEBAR USERPIC -->
                                <!-- SIDEBAR USER TITLE -->
                                <div class="profile-usertitle">
                                  <div class="profile-usertitle-name">
                                    Tiểu Long Hoàng
                                  </div>
                                  <div class="profile-usertitle-job">
                                    Sinh viên
                                  </div>
                                </div>
                                <!-- END SIDEBAR USER TITLE -->
                                <!-- SIDEBAR BUTTONS -->
                                <div class="profile-userbuttons">
                                  <button type="button" class="btn btn-success btn-sm">Thông tin</button>
                                  <button type="button" class="btn btn-danger btn-sm">Đăng xuất</button>
                                </div>
                                <!-- END SIDEBAR BUTTONS -->
                                <!-- SIDEBAR MENU -->
                                <div class="profile-usermenu">
                                  <ul class="nav">
                                    <li class="active">
                                      <a href="#">
                                      <i class="glyphicon glyphicon-home"></i>
                                      Trang cá nhân </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                      <i class="glyphicon glyphicon-user"></i>
                              Cài đặt tài khoản </a>
                                    </li>
                                    <li>
                                      <a href="#" target="_blank">
                                      <i class="glyphicon glyphicon-pencil"></i>
                                      Thay đổi mật khẩu </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                      <i class="glyphicon glyphicon-flag"></i>
                                      Giúp đỡ </a>
                                    </li>
                                  </ul>
                                </div>
                                <!-- END MENU -->
                              </div>
                            </div>
                          </div>
                        </div>

                      </li>
      
                  </ul>
                </li>
            </ul>
              
        </div>
      </div>
    </nav>

    <!-- ==================== HEADER LAYOUT ==================== -->
    <div id="header" class="welcome" >
      
   
<div class="container">
  <div class="row">
    <div class="col-md-4" style="width: 3%;"></div>
    <div class="col-md-4" style="width: 94%;">
      <div class="welcome-content">
        <img src="http://kenhsinhvien.vn/images/cover/cover-26.jpg" width="1207" height="300">
      </div>
    </div>
    <div class="col-md-4" style="width: 3%;"></div>
  </div>
</div>
 </div>
 <div id="gallerry-images">
   <div class="container">
     
   </div>
 </div>
      <footer>
        <div class="container" style="height: 100%;">
            <div class="footerlinks"><!-- FOOTER LINKS START -->            
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>

                    <!--replace the email address below with your email address-->
                    <li><a href="mailto:m@creatrix.us">Contact</a></li>                   
                </ul>
            </div><!-- FOOTER LINKS END -->
             
             <div class="copyright">
            © <span id="copyright-year"></span> BACH KHOA HA NOI - HEDSPI
            <!-- {%FOOTER_LINK} -->
          </div><!-- FOOTER COPYRIGHT END -->
         </div>
     </footer><!-- FOOTER END -->
</body>
</html>