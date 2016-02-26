<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trang chủ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{url('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('fonts/latin.css')}}">
   
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
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">BAND</a></li>
        <li><a href="#tour">TOUR</a></li>
        <li><a href="#contact">CONTACT</a></li>
         <li><a href="#contact">SIGN IN</a></li>
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
<div id="band" class="container text-center">
  <h3>LET'S GO</h3>
  <p><em>We love Go!</em></p>
  <p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
  
    
    </div>
    <div class="col-sm-4">
     
    </div>
    <div class="col-sm-4">
     
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- Nav tabs -->
        <div class="card">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                                        
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
            </ul>

            <!-- Tab panes -->
          <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home"></div>
              <div role="tabpanel" class="tab-pane" id="profile"></div>
              <div role="tabpanel" class="tab-pane" id="messages"></div>
              <div role="tabpanel" class="tab-pane" id="settings"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3>LOGIN</h3>
 
  
</div>

<div id="googleMap"></div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p> Trang Web độc quyền sáng chế =))) <a href="" data-toggle="tooltip" title=""></a></p> 
</footer>



</body>

</html>
