<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trang chủ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{url('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('fonts/latin.css')}}">
    <link rel="stylesheet" href="{{url('css/gallery-image.css')}}">
   
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">

  
    <script src="{{url('js/jquery-1.12.0.min.js')}}"></script>
    <script src="{{url('js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top" style="background-color: rgba(51, 51, 51, 0.92);">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">LET'S GO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">TRANG CHỦ</a></li>
        <li><a href="#band">GIỚI THIỆU</a></li>
        <li><a href="#tour">HÌNH ẢNH</a></li>
         <li><a href="#contact">ĐĂNG NHẬP</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{url('/images/header-background.jpeg')}}" alt="New York" >
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>      
      </div>

      <div class="item">
        <img src="{{url('/images/header-img.jpg')}}" alt="Chicago" >
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago - A night we won't forget.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="{{url('/images/banner.jpg')}}" alt="Los Angeles">
        <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center about-content" style="padding: 0px; margin: 5px 5px 5px 5px; ">
 
  <div class="row" style="margin-right: -6px;">
    <div class="col-sm-4">
      <div class="about-img">
        <img src="https://drscdn.500px.org/photo/141852085/m%3D2048/9c3f9a7554ab47d8679653cd75b88f25">
      </div>
      <div class="about-text">
       <h3>LET'S GO</h3>
        <p><em>We love Go!</em></p>
        <p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <br>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="about-img">
        <img src="https://drscdn.500px.org/photo/142115879/q%3D80_m%3D1500/01d6cc31145600e760d6049d0f952da5">
      </div>
      <div class="about-text">
       <h3>LET'S GO</h3>
        <p><em>We love Go!</em></p>
        <p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <br>
      </div>
    </div>
    <div class="col-sm-4">
     <div class="about-img">
        <img src="https://drscdn.500px.org/photo/142148445/q%3D80_m%3D1500/30154086377288684116c20b6fd2cbf0">
     </div>
      <div class="about-text">
       <h3>LET'S GO</h3>
        <p><em>We love Go!</em></p>
        <p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <br>
      </div>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container" style="width: 100%;">
    <div class="row" style="width: 100%;  background-color: #f7f8fa; margin: 0px;">
      <div class="col-md-12">
        <!-- Nav tabs -->
        <div class="card">
        
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#moment" aria-controls="moment" role="tab" data-toggle="tab">Khoảnh khắc cuộc sống</a></li>
                <li role="presentation"><a href="#nature" aria-controls="nature" role="tab" data-toggle="tab">Thiên nhiên </a></li>
                                        
                <li role="presentation"><a href="#people" aria-controls="people" role="tab" data-toggle="tab">Con người</a></li>
                <li role="presentation"><a href="#animals" aria-controls="animals" role="tab" data-toggle="tab">Động vật</a></li>
                <li role="presentation"><a href="#discovery" aria-controls="discovery" role="tab" data-toggle="tab">Khám phá</a></li>
                <li role="presentation"><a href="#more" aria-controls="more" role="tab" data-toggle="tab">Xem nhiều hơn </a></li>
            </ul>
           
        </div>
            <!-- Tab panes -->
          <div class=" row tab-content">
              <div role="tabpanel" class="tab-pane active" id="moment">
               <!--  <div class="container gal-container"> -->
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
                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                      <a href="#" data-toggle="modal" data-target="#8">
                        <img src="http://placemi.com/nfjhz/1000x750">
                      </a>
                      <div class="modal fade" id="8" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                              <img src="http://placemi.com/nfjhz/1000x750">
                            </div>
                              <div class="col-md-12 description">
                                <h4>This is the eighth one on my Gallery</h4>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                      <a href="#" data-toggle="modal" data-target="#9">
                        <img src="http://placemi.com/59h1p/1000x750">
                      </a>
                      <div class="modal fade" id="9" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                              <img src="http://placemi.com/59h1p/1000x750">
                            </div>
                              <div class="col-md-12 description">
                                <h4>This is the ninth one on my Gallery</h4>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                    <div class="box">
                      <a href="#" data-toggle="modal" data-target="#10">
                        <img src="http://placemi.com/lybbn/1000x750">
                      </a>
                      <div class="modal fade" id="10" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                              <img src="http://placemi.com/lybbn/1000x750">
                            </div>
                              <div class="col-md-12 description">
                                <h4>This is the tenth one on my Gallery</h4>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                      <a href="#" data-toggle="modal" data-target="#11">
                        <img src="http://placemi.com/vnatq/1000x750">
                      </a>
                      <div class="modal fade" id="11" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                              <img src="http://placemi.com/vnatq/1000x750">
                            </div>
                              <div class="col-md-12 description">
                                <h4>This is the leventh one on my Gallery</h4>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                      <a href="#" data-toggle="modal" data-target="#12">
                        <img src="http://placemi.com/wbjov/1000x750">
                      </a>
                      <div class="modal fade" id="12" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                              <img src="http://placemi.com/wbjov/1000x750">
                            </div>
                              <div class="col-md-12 description">
                                <h4>This is the 12th one on my Gallery</h4>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                      <a href="#" data-toggle="modal" data-target="#13">
                        <img src="http://placemi.com/ts4a8/1000x750">
                      </a>
                      <div class="modal fade" id="13" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                              <img src="http://placemi.com/ts4a8/1000x750">
                            </div>
                              <div class="col-md-12 description">
                                <h4>This is the 13th one on my Gallery</h4>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                      <a href="#" data-toggle="modal" data-target="#14">
                        <img src="http://placemi.com/i8yd4/1000x750">
                      </a>
                      <div class="modal fade" id="14" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                              <img src="http://placemi.com/i8yd4/1000x750">
                            </div>
                              <div class="col-md-12 description">
                                <h4>This is the 14th one on my Gallery</h4>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                      <a href="#" data-toggle="modal" data-target="#15">
                        <img src="http://placemi.com/ak6mk/1000x750">
                      </a>
                      <div class="modal fade" id="15" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                              <img src="http://placemi.com/ak6mk/1000x750">
                            </div>
                              <div class="col-md-12 description">
                                <h4>This is the 15th one on my Gallery</h4>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                      <a href="#" data-toggle="modal" data-target="#16">
                        <img src="http://placemi.com/pgco7/1000x750">
                      </a>
                      <div class="modal fade" id="16" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                              <img src="http://placemi.com/pgco7/1000x750">
                            </div>
                              <div class="col-md-12 description">
                                <h4>This is the 16th one on my Gallery</h4>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div></div>
              <div role="tabpanel" class="tab-pane" id="nature">
               <!--  <div class="row"> -->
        <!-- <div class="text-center">
            <h1>Sample Image Gallery</h1>
        </div> -->
                  <div class="row">
                      <div class="col-md-4">
                          <div class="well">
                              <img class="thumbnail img-responsive" alt="Bootstrap template" src="http://www.prepbootstrap.com/Content/images/shared/houses/h9.jpg" />
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="well">
                              <img class="thumbnail img-responsive" alt="Bootstrap template" src="http://www.prepbootstrap.com/Content/images/shared/houses/h8.jpg" />
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="well">
                              <img class="thumbnail img-responsive" alt="Bootstrap template" src="http://www.prepbootstrap.com/Content/images/shared/houses/h4.jpg" />
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                          <div class="well">
                              <img class="thumbnail img-responsive" alt="Bootstrap template" src="http://www.prepbootstrap.com/Content/images/shared/houses/h7.jpg" />
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="well">
                              <img class="thumbnail img-responsive" alt="Bootstrap template" src="http://www.prepbootstrap.com/Content/images/shared/houses/h3.jpg" />
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="well">
                              <img class="thumbnail img-responsive" alt="Bootstrap template" src="http://www.prepbootstrap.com/Content/images/shared/houses/h6.jpg" />
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                          <div class="well">
                              <img class="thumbnail img-responsive" alt="Bootstrap template" src="http://www.prepbootstrap.com/Content/images/shared/houses/h1.jpg" />
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="well">
                              <img class="thumbnail img-responsive" alt="Bootstrap template" src="http://www.prepbootstrap.com/Content/images/shared/houses/h2.jpg" />
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="well">
                              <img class="thumbnail img-responsive" alt="Bootstrap template" src="http://www.prepbootstrap.com/Content/images/shared/houses/h5.jpg" />
                          </div>
                      </div>
                  </div>
                <!-- </div> -->
              </div>
              <div role="tabpanel" class="tab-pane" id="people"></div>
              <div role="tabpanel" class="tab-pane" id="animals"></div>
              <div role="tabpanel" class="tab-pane" id="discovery"></div>
              <div role="tabpanel" class="tab-pane" id="more"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<!-- <div id="contact" class="container login">
  <div class="box-login" style="width: 80%;">
    <div class="row" style="width: 60%; border: 1px solid blue; margin-left: 10px;">
        <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-login">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-6">
                  <a href="#" class="active" id="login-form-link">Login</a>
                </div>
                <div class="col-xs-6">
                  <a href="#" id="register-form-link">Register</a>
                </div>
              </div>
              <hr>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <form id="login-form" action="http://phpoll.com/login/process" method="post" role="form" style="display: block;">
                    <div class="form-group">
                      <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group text-center">
                      <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                      <label for="remember"> Remember Me</label>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="text-center">
                            <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <form id="register-form" action="http://phpoll.com/register/process" method="post" role="form" style="display: none;">
                    <div class="form-group">
                      <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    
    </div>
  </div>
</div> -->


<!-- Footer -->
<!-- <footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p> Trang Web độc quyền sáng chế =))) <a href="" data-toggle="tooltip" title=""></a></p> 
</footer> -->
<div id = "register" class="well2 bg-secondary" style="padding-bottom: 17px;">
    <div class="container center" style="padding: 0px;">
        <div class="row">
          <div class="grid_8 preffix_2">
            <h2>Subscribe</h2>

            <form id="subscribe-form" class="subscribe-form">

              <label class="email">
                <input type="email" value="E - mail">
                <span class="error">*Invalid email.</span>
                <span class="success">Your subscription request has been sent!</span>
              </label>
              <a class="btn" data-type="submit" href="#">Subscribe</a>
            </form>
          </div>
        </div>
      </div>
</div>
 <!--========================================================
                            FOOTER
  =========================================================-->
  <footer>
    <div class="parallax" data-url="{{url('/images/parallax2.jpg')}}" data-mobile="true" data-speed="0.5 " data-direction="inverted">
      <div class="parallax_image" style="height: 599px; transform: translate3d(0px, -34.0608px, 0px); background-image: url('{{url("images/parallax2.jpg")}}');"></div>
      <div class="well4">
        <div class="container center wow fadeInUp" data-wow-delay="0.2s">
          <hr/>
          <h2>Professional web performance </h2>

          <h3>Сreating something special for each customer</h3>
          <a class="btn" href='#' style="line-height: 24px;">Get Started Now!</a>

          <div class="copyright">
            © <span id="copyright-year"></span> Your Logo. All Rights Reserved
            <!-- {%FOOTER_LINK} -->
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="well5 center">
      <div class="container">
        <a href='#'><img alt="Tempalte Monster"/></a>
      </div>
    </div> -->
  </footer>


</body>

</html>
<script type="text/javascript" src="{{url('/js/wow.js')}}"></script>
