<!DOCTYPE html>
<html>
<head>
	<title> Let's Go | Nha Anh </title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ===================== CSS ==================== -->
    <link rel="stylesheet" href="{{url('css/grid.css')}}">
    <link rel="stylesheet" href="{{url('fonts/latin.css')}}">
<!--     <link rel="stylesheet" href="{{url('/css/albumize.css')}}"> -->

   <link rel="stylesheet" href="{{url('css/style.css')}}">
   <link rel="stylesheet" href="{{url('css/style-home.css')}}">
   <link rel="stylesheet" href="{{url('css/gallery-image.css')}}">

    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">

 <link rel="stylesheet" href="{{url('css/albums.css')}}">

    <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}">

    <!-- Start WOWSlider.com HEAD section -->
<!-- <link rel="stylesheet" type="text/css" href="{{url('engine1/style.css')}}" /> -->

<!-- End WOWSlider.com HEAD section -->
  	<!-- ========================= JS ======================== -->
    <script src="{{url('js/jquery-1.12.0.min.js')}}"></script>
    <script src="{{url('js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
<!-- ================ Gallerry Image JS =============== -->
    <script src="{{url('js/jquery.min.js')}}"></script>
   
<!-- ================ Gallerry Image JS =============== -->
   <!--  <script type="text/javascript" src="{{url('/js/albumize.js')}}"></script> -->
 <!--    <script src="{{url('js/function.js')}}"></script>
     <script src="{{url('js/html5.js')}}"></script>
      <script src="{{url('js/ma5gallery.js')}}"></script> -->
      <script src="{{url('js/albums.js')}}"></script>
   
  

</head>
<body id="imagePage" data-spy="scroll" data-target=".navbar" data-offset="50">



    <!-- ==================== HEADER LAYOUT ==================== -->
   <div id="header" class="welcome" style="height: 300px;">
        <div class="container">
          <div class="row">
       
          <div class="welcome-content">
           <div class="wel-img">
             <img src="{{url('/images/cat-logo1.png')}}">
           </div>
           <div class="wel-content"></div>
            </div>
      
      </div>
    </div>
 </div>
    <!-- ==================== HEADER LAYOUT ====================== -->

    <!-- ==================== CONTENT LAYOUT ==================== -->
  <div class="pageWidth">
    <nav id="myNav" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="row">
        <div class="collapse navbar-collapse" id="navigation">
           <div class="navbar-header" style="/*margin-left: 3%;*/">
             <a class="navbar-brand text-uppercase logo" style="margin: auto !important; color: #04DAF1;" href="{{url('/')}}">LET'S GO</a>
           </div>
           <ul class=" nav navbar-nav navbar-left menu">
            <li>
              <a href="{{url('/')}}" > TRANG CHỦ</a>
            </li>
            <li class="" style="height: 66%; text-align: center;width: 1px;background-color: #1B6E69 !important;margin: 3% 0;"></li>
            <li>
              <a href="#">THEO DÕI </a>
            </li>
          </ul>
<!--           <form action="" class="search-form">
                <div class="form-group has-feedback" style="margin-top: 1%; margin-right: 4%;">
                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </form> -->
             <ul class="nav navbar-nav navbar-right user-detail" id="nav-user"  style="    margin-right: 8px;">
              <li><button style="margin: 3px;" type="button" class="btn btn-success navbar-btn btn-circle" >Đăng Ảnh</button></li>
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
                             
                                <div class="profile-usertitle">
                                  <div class="profile-usertitle-name">
                                    Tiểu Long Hoàng
                                  </div>
                                  <div class="profile-usertitle-job">
                                    Sinh viên
                                  </div>
                                </div>
                             
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
                <li>
                  <form action="" class="search-form">
                <div class="form-group has-feedback" style="margin-top: 1%; margin-right: 4%;">
                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </form> 
                </li>
             </ul>
        </div>
    </div>
  </div>
  </nav>

     <div class="pageContent">
     
 <div id="gallerry-images">
  <div class="container gallerry-image" >
  <!--   <div class="row" style=" margin-top: 15px; margin-bottom: 30px;"> -->
      <!-- <div class="col-md-12"> -->
           <div id="album " class="album-gal carouselGallery-col-60" title="Album title">
              <div class=" wrap-images  item-1 ">
                <div class="box-1">
                  <div class="photo full carouselGallery-col-1 carouselGallery-carousel" data-index="0" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-1.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-1.jpg')}}'); background-position: 50% 50%;">
                 <!--    <a class="photo-link" data-href = "{{url('../images/home-images/photo-1.jpg')}}" data-slide='9' href="{{url('../images/home-images/photo-1.jpg')}}">

                    </a> -->
                    <div class="action">
                        <div class="view">
                          <a href="" class="like">
                            <span class="icon icon-like"></span>
                            <span class="icon icon-love"></span>
                          </a>
                          <a href="" class="add-to-gal">
                            <span class="icon-add-gal"></span>
                          </a>
                        </div>
                        <div class="info">
                          <div class="inside">
                            <div class="about-img">
                              <span class="about-img">
                                <a href="" class="title-img"> Anh dep</a>
                                by
                                <a href="" class="by">Tieu Long Hoang</a>
                              </span>
                            </div>
                            <time>
                              <span class="hour" data-bind = "hour">1h ago</span>
                              <span class="t-detail" data-bind = "t-detail">20/03</span>
                            </time>
                          </div>
                        </div>
                    </div>
                  </div>

                </div>
              </div>
          <div class="wrap-images item-3">
             <div class="item-big">
                    <div class="box-1">
                      <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="1" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-9.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-9.jpg')}}'); background-position: 50% 50%;">
                           <!--   <a class="photo-link" data-href = "{{url('../images/home-images/photo-9.jpg')}}" data-slide='8' href="{{url('../images/home-images/photo-9.jpg')}}">
                             </a> -->
                         <div class="action">
                              <div class="view">
                                  <a href="" class="like">
                                    <span class="icon icon-like"></span>
                                    <span class="icon icon-love"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Anh dep</a> by
                                    <a href="" class="by">Tieu Long Hoang</a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
                 <div class="item-small">
                    <div class="small-1">
                      <div class="box-1">
                        <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="2" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-2.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-2.jpg')}}'); background-position: 50% 50%;">
                           <!--   <a class="photo-link" data-href = "{{url('../images/home-images/photo-2.jpg')}}" data-slide='7' href="{{url('../images/home-images/photo-2.jpg')}}">
                             </a> -->
                              <div class="action">
                              <div class="view">
                                  <a href="" class="like">
                                    <span class="icon icon-like"></span>
                                    <span class="icon icon-love"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Anh dep</a> by
                                    <a href="" class="by">Tieu Long Hoang</a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="small-2">
                    <div class="box-1">
                      <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="3" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-3.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-3.jpg')}}'); background-position: 50% 50%;">
                        <!--   <a class="photo-link" data-href = "{{url('../images/home-images/photo-3.jpg')}}" data-slide='6' href="{{url('../images/home-images/photo-3.jpg')}}">
                          </a> -->
                          <div class="action">
                              <div class="view">
                                  <a href="" class="like">
                                    <span class="icon icon-like"></span>
                                    <span class="icon icon-love"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Anh dep</a> by
                                    <a href="" class="by">Tieu Long Hoang</a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                      </div>
                    
                    </div>
                  </div>
                 </div>
              </div>
              <div class="wrap-images item-3" style="height: 300px;">

                <div class="medium m1">
                  <div class="box-1">
                     <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="4" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-4.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-4.jpg')}}'); background-position: 50% 50%;">
                  <!--   <a class="photo-link" data-href = "{{url('../images/home-images/photo-4.jpg')}}" data-slide='5' href="{{url('../images/home-images/photo-4.jpg')}}">

                    </a> -->
                    <div class="action">
                              <div class="view">
                                  <a href="" class="like">
                                    <span class="icon icon-like"></span>
                                    <span class="icon icon-love"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Anh dep</a> by
                                    <a href="" class="by">Tieu Long Hoang</a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                  </div>
                  </div>
                </div>
                 <div class="medium m2">
                  <div class="box-1">
                     <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="5" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-5.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-5.jpg')}}'); background-position: 50% 50%;">
                   <!--  <a class="photo-link" data-href = "{{url('../images/home-images/photo-5.jpg')}}" data-slide = '4' href="{{url('../images/home-images/photo-5.jpg')}}">
                    </a> -->
                    <div class="action">
                              <div class="view">
                                  <a href="" class="like">
                                    <span class="icon icon-like"></span>
                                    <span class="icon icon-love"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Anh dep</a> by
                                    <a href="" class="by">Tieu Long Hoang</a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                  </div>
                  </div>
                </div>
                 <div class="medium m3">
                  <div class="box-1">
                     <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="6" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-6.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-6.jpg')}}'); background-position: 50% 50%;">
                  <!--   <a class="photo-link" data-href = "{{url('../images/home-images/photo-6.jpg')}}" data-slide = '5'  href="{{url('../images/home-images/photo-6.jpg')}}">
                    </a> -->
                    <div class="action">
                              <div class="view">
                                  <a href="" class="like">
                                    <span class="icon icon-like"></span>
                                    <span class="icon icon-love"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Anh dep</a> by
                                    <a href="" class="by">Tieu Long Hoang</a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                  </div>
                  </div>
                </div>
              </div>
                <div class=" wrap-images item-2">
                   <div class="item-big">
                    <div class="box-1">
                       <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="7" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-7.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-7.jpg')}}'); background-position: 50% 50%;">
                  <!--   <a class="photo-link" data-href = "{{url('../images/home-images/photo-7.jpg')}}" data-slide = '6'  href="{{url('../images/home-images/photo-7.jpg')}}">
                    </a> -->
                    <div class="action">
                              <div class="view">
                                  <a href="" class="like">
                                    <span class="icon icon-like"></span>
                                    <span class="icon icon-love"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Anh dep</a> by
                                    <a href="" class="by">Tieu Long Hoang</a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                  </div>
                    </div>
                   </div>
                 <div class="item-small">
                    <div class="box-1">
                      <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="8" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-8.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-8.jpg')}}'); background-position: 50% 50%;">
                     <!--    <a class="photo-link" data-href = "{{url('../images/home-images/photo-8.jpg')}}" data-slide = '7'  href="{{url('../images/home-images/photo-4.jpg')}}">
                        </a> -->
                        <div class="action">
                              <div class="view">
                                  <a href="" class="like">
                                    <span class="icon icon-like"></span>
                                    <span class="icon icon-love"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Anh dep</a> by
                                    <a href="" class="by">Tieu Long Hoang</a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                      </div>
                    </div>
                 </div>
                </div>
                <div class="wrap-images "></div>
            </div>
       <!--  </div> -->
      
   <!--  </div> -->
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

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>