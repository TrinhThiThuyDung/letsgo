<!DOCTYPE html>
<html>
<head>
	<title>Let's Go | Tiểu Long Hoàng </title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- ===================== CSS ==================== -->
    <link rel="stylesheet" href="{{url('css/grid.css')}}">
    <link rel="stylesheet" href="{{url('fonts/latin.css')}}">

    <link rel="stylesheet" href="{{url('css/style.css')}}">

    <link rel="stylesheet" href="{{url('css/style-home.css')}}">
      <link rel="stylesheet" href="{{url('css/gallery-image.css')}}">

    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="{{url('/css/albumize.css')}}">
     <link rel="stylesheet" href="{{url('/css/transitions.css')}}">
  
    <!-- ========================= JS ======================== -->
    <script src="{{url('js/jquery-1.12.0.min.js')}}"></script>
    <script src="{{url('js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{url('js/jquery.min.js')}}"></script>

    <script src="{{url('js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{url('/js/albumize.js')}}"></script>
   <!--  <script type="text/javascript" src="{{url('/js/jquery.collagePlus.js')}}"></script> -->
    <script type="text/javascript" src="{{url('/js/jquery.collagePlus.min.js')}}"></script>
   <!--   <script type="text/javascript" src="{{url('/js/jquery.removeWhitespace.js')}}"></script>   -->
     <script type="text/javascript" src="{{url('/js/jquery.removeWhitespace.min.js')}}"></script>
<style type="text/css">
	
</style>

</head>
<body id="imagePage" data-spy="scroll" data-target=".navbar" data-offset="50" style="background: #fff !important;">

	   <nav id="myNav" class="navbar navbar-inverse navbar-fixed-top" style="height: 62px;">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="margin-left: 3%;">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand text-uppercase logo" style="margin: 11px 6px !important; padding: 11px 11px !important;  color: #04DAF1;" href="{{url('/')}}">LET'S GO</a>
        </div>
   
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation">
        <ul class=" nav navbar-nav navbar-left menu" style="height: 62px;">
          <li>
            <a href="{{url('/')}}" > TRANG CHỦ</a>
          </li>
          <li class="" style="height: 66%;
    text-align: center;
    width: 1px;
    background-color: #1B6E69 !important;
    margin-top: 3%;
    margin-bottom: 3%;"></li>
          <li>
            <a href="#">THEO DÕI </a>
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

 <div id="header" class="profile-header" >
    <div class="cover-photo" style="background: url(../images/cover/coverphoto01.jpg) no-repeat; background-size: cover;"></div>
    <div class="profile-info">
    	<div class="profile-photo">
    		<img src="{{url('/images/profile/profile01.jpg')}}">
    </div>
    <div class="profile-name">
    	<span class="name">Tiểu Long Hoàng</span>
    </div> 
    </div>            
 </div>
 <div class="tab-nav">
  	   <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist" style="width: 100%; background: #f0f7fc url(../images/form-button-white-25px.png) repeat-x top;">
                       <li class="active" style="    margin-left: 23%;"><a href="#men" role="tab" data-toggle="tab">Ảnh</a></li>
                       <li><a href="#women" role="tab" data-toggle="tab">Ảnh yêu thích</a></li>
                       <li><a href="#kids" role="tab" data-toggle="tab">Thông tin cá nhân</a></li>
                       <li><a href="#sports" role="tab" data-toggle="tab">Theo dõi</a></li>
                    </ul>  
    				 <div class="profile-content" style="background: url(../images/ironpatern.png); background-repeat: repeat; padding: 0;">
    				    <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="men" style="background: rgb(255, 255, 255);">
                          <div class="upload">
                          <div class="empty">
                          	<button type="button" class="btn btn-primary btn-upload">Đăng ảnh</button>
                          </div>
                          	
                          </div>
                           <div class="albumize Collage" title="Album title" style=" margin-top: 22px; border-radius: 2px;"> 
								<a href = "{{url('../images/home-images/photo-9.jpg')}}" title="image title"> 
									<img src="{{url('../images/home-images/photo-9.jpg')}}"> </img>
								</a>
								<a href = "{{url('../images/home-images/photo-9.jpg')}}" title="image title"> 
									<img src="{{url('../images/home-images/photo-9.jpg')}}" class="albumize-cover"> </img>
								</a>
								<a href = "{{url('../images/home-images/photo-9.jpg')}}" title="image title"> 
									<img src="{{url('../images/home-images/photo-9.jpg')}}"> </img>
								</a>
								<a href = "{{url('../images/home-images/photo-9.jpg')}}" title="image title"> 
									<img src="{{url('../images/home-images/photo-9.jpg')}}"> </img>
								</a>
								<a href = "{{url('../images/home-images/photo-9.jpg')}}" title="image title"> 
									<img src="{{url('../images/home-images/photo-9.jpg')}}"> </img>
								</a>
								<a href = "{{url('../images/home-images/photo-9.jpg')}}" title="image title"> 
									<img src="{{url('../images/home-images/photo-9.jpg')}}"> </img>
								</a>
							 </div>
                          </div>
                          <div class="tab-pane" id="women" style="background: rgb(255, 255, 255);">
                               <!--  <div class="container gal-container"> -->
               <div class="container">
              <div class="row" >
              	 	<div class="gal-container">
                  <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                    <div class="box">
                      <a href="#" data-toggle="modal" data-target="#1">
                        <img src="http://placemi.com/i3xhd/1000x750">
                      </a>
                      <div class="modal fade" id="1" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                              <img src="http://placemi.com/i3xhd/1000x750">
                            </div>
                              <div class="col-md-12 description">
                                <h4>This is the first one on my Gallery</h4>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                      <a href="#" data-toggle="modal" data-target="#2">
                        <img src="http://placemi.com/gut3z/1000x750">
                      </a>
                      <div class="modal fade" id="2" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                              <img src="http://placemi.com/gut3z/1000x750">
                            </div>
                              <div class="col-md-12 description">
                                <h4>This is the second one on my Gallery</h4>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                      <a href="#" data-toggle="modal" data-target="#3">
                        <img src="http://placemi.com/yggpo/1000x750">
                      </a>
                      <div class="modal fade" id="3" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                              <img src="http://placemi.com/yggpo/1000x750">
                            </div>
                              <div class="col-md-12 description">
                                <h4>This is the third one on my Gallery</h4>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                      <a href="#" data-toggle="modal" data-target="#4">
                        <img src="http://placemi.com/49zqo/1000x750">
                      </a>
                      <div class="modal fade" id="4" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                              <img src="http://placemi.com/49zqo/1000x750">
                            </div>
                              <div class="col-md-12 description">
                                <h4>This is the fourth one on my Gallery</h4>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                      <a href="#" data-toggle="modal" data-target="#5">
                        <img src="http://placemi.com/k2mjk/1000x750">
                      </a>
                      <div class="modal fade" id="5" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                              <img src="http://placemi.com/k2mjk/1000x750">
                            </div>
                              <div class="col-md-12 description">
                                <h4>This is the fifth one on my Gallery</h4>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                      <a href="#" data-toggle="modal" data-target="#6">
                        <img src="http://placemi.com/lv0ga/1000x750">
                      </a>
                      <div class="modal fade" id="6" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                              <img src="http://placemi.com/lv0ga/1000x750">
                            </div>
                              <div class="col-md-12 description">
                                <h4>This is the sixth one on my Gallery</h4>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                      <a href="#" data-toggle="modal" data-target="#7">
                        <img src="http://placemi.com/3rezh/1000x750">
                      </a>
                      <div class="modal fade" id="7" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                              <img src="http://placemi.com/3rezh/1000x750">
                            </div>
                              <div class="col-md-12 description">
                                <h4>This is the seventh one on my Gallery</h4>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
              </div>
               </div>
                          </div>
                          <div class="tab-pane" id="kids" style="width: 100%; height: 100%; background: rgb(255, 255, 255);">
                           <div class="container">
                             <div class="row">
                                <div class="info-user">
                              <div class="about">
                                <h3 class="textHeading">Tự Bạch</h3>
                                <div class="content-info">
                                  <div class="column-about">
                                    <dl>
                                      <dt>Tên: </dt>
                                      <dd>Tiểu Long Hoàng</dd>
                                    </dl>
                                    <dl>
                                      <dt>Giới tính: </dt>
                                      <dd>Nữ</dd>
                                    </dl>
                                    <dl>
                                      <dt>Ngày sinh: </dt>
                                      <dd>04/02/1993</dd>
                                    </dl>
                                    <dl>
                                      <dt>Bạn ở: </dt>
                                      <dd>Hà Nội</dd>
                                    </dl>
                                  </div>
                                </div>
                              </div>
                             
                            </div>
                             <div class="info-active">
                             <h4 class="textHeading">Hoạt động</h4>
                                <div class="contentActive">
                                  <dl>
                                    <dt>Tham gia: </dt>
                                    <dd>22 tháng 10 nă, 2014</dd>
                                  </dl>
                                  <dl>
                                    <dt>Đã đóng góp ảnh: </dt>
                                    <dd>10 ảnh</dd>
                                  </dl>
                                  <dl>
                                    <dt>Lượt thích ảnh: </dt>
                                    <dd>13 ảnh</dd>
                                  </dl>
                                </div>
                              </div>
                             </div>
                           </div>
                          </div>
                          <div class="tab-pane" id="sports" style="background: rgb(255, 255, 255);">
                            <ul class="nav-list list-inline">                                
                                <li><a href="#"><img src="{{url('/images/profile/profile02.jpg')}}"><span>Basketball</span></a></li>
                                <li><a href="#"><img src="{{url('/images/profile/profile03.jpg')}}"><span>Football</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Soccer.png"><span>Soccer</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_MensTraining.png"><span>Men's Training</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_WomensTraining.png"><span>Women's Training</span></a></li>
                            </ul>
                          </div>
                        </div>
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
<script type="text/javascript">
	

    // All images need to be loaded for this plugin to work so
    // we end up waiting for the whole window to load in this example
        $(document).ready(function(){
            $('.Collage').collagePlus();
        });


    // Here we apply the actual CollagePlus plugin
  /*  function collage() {
        $('.Collage').removeWhitespace().collagePlus(
            {
                'fadeSpeed'     : 2000,
                'targetHeight'  : 200
            }
        );
    };
*/
    // This is just for the case that the browser window is resized
   
    
</script>