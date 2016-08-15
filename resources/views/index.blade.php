@extends('layout/main-layout')

@section('title','Index')


@section('link')

  
    <link rel="stylesheet" href="{{url('css/login.css')}}">
    <link rel="stylesheet" href="{{url('css/gallery-image.css')}}">
   
    <link rel="stylesheet" type="text/css" href="{{url('css/sweetalert.css')}}">

    <script src="{{url('js/api/signUp.js')}}"></script>
     <script src="{{url('js/api/signIn.js')}}"></script>

    <script src="{{url('js/jquery.rd-parallax.js')}}"></script>

    <script src="{{url('js/jquery.validate.min.js')}}"></script>   
    <script src="{{url('js/additional-methods.min.js')}}"></script>
    <script src="{{url('js/ajaxsubmit.js')}}"></script>

    <script type="text/javascript" src="{{url('js/sweetalert.min.js')}}"></script>

@endsection

@section('content')
  @include('layout/nagavition-index')
<!--========================================================
                            CAROUSEL SLIDE IMAGE
  =========================================================-->
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
        <img src="{{url('/images/header-image/header-1.jpg')}}" alt="New York" style="height: 636px;">
        <div class="carousel-caption">
          <h3>LET'S GO</h3> <br> 
          <h4> 

          </h4>
         <!--  <p>The atmosphere in New York is lorem ipsum.</p> -->
        </div>      
      </div>

      <div class="item">
        <img src="{{url('/images/header-image/header-2.jpg')}}" alt="Chicago" style="height: 636px;">
        <div class="carousel-caption">
          <h3>Let Us Show You the Way to Success</h3>
          <!-- <p>Thank you, Chicago - A night we won't forget.</p> -->
        </div>      
      </div>
    
      <div class="item">
        <img src="{{url('/images/header-image/header-3.jpg')}}" alt="Los Angeles" style="height: 636px;">
        <div class="carousel-caption">
          <h3>Let Us Show You the Way to Success</h3>
         <!--  <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p> -->
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="height: 100% !important;">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="height: 100% !important;">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!--========================================================
                            ABOUT WEB
  =========================================================-->
<div id="about" class="container text-center about-content" style="margin: 6px 0;">
 
  <div class="row" style="/*margin-right: -6px;*/">
    <div class="col-sm-4">
      <div class="about-img">
        <img src="{{url('/images/header-background.jpeg')}}">
      </div>
      <div class="about-text">
       <h3>LET'S GO</h3>
        <p><em>We love Go!</em></p>
        <p>Hãy cùng đứng dậy và đi đến những miền đất mới, chụp những bức ảnh đẹp, lưu giữ lại những khoảnh khắc của cuộc sống này và thu nó lại trong tầm tay bạn!</p>
        <br>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="about-img">
        <img src="https://drscdn.500px.org/photo/142115879/q%3D80_m%3D1500/01d6cc31145600e760d6049d0f952da5">
      </div>
      <div class="about-text">
       <h3>LET'S GO</h3>
        <p><em>We love Share!</em></p>
        <p>Hãy cùng chia sẻ những bức ảnh đẹp, những gì bạn đã nhìn thấy trên con đường của mình!</p>
        <br>
      </div>
    </div>
    <div class="col-sm-4">
     <div class="about-img">
        <img src="https://drscdn.500px.org/photo/142148445/q%3D80_m%3D1500/30154086377288684116c20b6fd2cbf0">
     </div>
      <div class="about-text">
       <h3>LET'S GO</h3>
        <p><em>We love Photos!</em></p>
        <p>Những bức ảnh thật đẹp được bạn lưu giữ lại và hãy cùng chia sẻ nó cho mọi người! Những bức ảnh thật đẹp!</p>
        <br>
      </div>
    </div>
  </div>
</div>

<!--========================================================
                            GALLERY IMAGE
  =========================================================-->
<div id="gallerry-image" class="bg-1">
  <div class="container gallerry-image">
    <div class="row" style="background-color: #f7f8fa; margin-top: 15px; margin-bottom: 30px;">
      <div class="col-md-12">
        <!-- Nav tabs -->
        <div class="card">
        
            <ul class="nav nav-tabs" role="tablist">
                <li style="margin-left: 8%;" role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">Tất cả</a></li>
                  <li role="presentation"><a href="#moment" aria-controls="moment" role="tab" data-toggle="tab">Cuộc sống</a></li>
                <li role="presentation"><a href="#nature" aria-controls="nature" role="tab" data-toggle="tab">Thiên nhiên </a></li>
                                        
                <li role="presentation"><a href="#people" aria-controls="people" role="tab" data-toggle="tab">Con người</a></li>
                <li role="presentation"><a href="#animals" aria-controls="animals" role="tab" data-toggle="tab">Động vật</a></li>
                <li role="presentation"><a href="#discovery" aria-controls="discovery" role="tab" data-toggle="tab">Khám phá</a></li>
                <!-- <li role="presentation"><a href="#more" aria-controls="more" role="tab" data-toggle="tab">Xem nhiều hơn </a></li> -->
            </ul>
           
        </div>
            <!-- Tab panes -->
          <div class=" row tab-content">
           <div role="tabpanel" class="tab-pane active" id="all">
           <?php  if ($photo['all']) {
            $all = $photo['all'];
             for ($i = 0; $i < count($all); $i+=3) { 
              if (isset($all[$i])) {
               
              ?>
           
             <div class="row">
             <?php for ($j = $i; $j < $i+3; $j++) { 
               if (isset($all[$j])) {
                $user_name = $all[$j]->user_lastname." ".$all[$j]->user_firstname;
                $url = $all[$j]->url."/".$all[$j]->resize_1; 
                $name = $all[$j]->name; ?>
           
             <div class="col-md-4">
                <div class="well">
                    <img class="thumbnail img-responsive" style="margin:auto;" alt="<?php echo $name; ?>" src="<?php echo $url; ?>" />
                    <div class="name" style="color: rgb(236, 108, 108); margin-left: 15px; font-style: italic; font-size: 17px;">
                        <span>Bức ảnh của <?php echo $user_name; ?></span>
                    </div>
                </div>          
              </div> 
             <?php  }
           } ?>
             </div>
              <?php
              }
               }
           } ?>
           </div>
              <div role="tabpanel" class="tab-pane" id="moment">
                  <?php  if ($photo['life']) {
            $all = $photo['life'];
             for ($i = 0; $i < count($all); $i+=3) { 
              if (isset($all[$i])) {
               
              ?>
           
             <div class="row">
             <?php for ($j = $i; $j < $i+3; $j++) { 
               if (isset($all[$j])) {
                $user_name = $all[$j]->user_lastname." ".$all[$j]->user_firstname;
                $url = $all[$j]->url."/".$all[$j]->resize_1; 
                $name = $all[$j]->name; ?>
           
             <div class="col-md-4">
                <div class="well">
                    <img class="thumbnail img-responsive" style="margin:auto;" alt="<?php echo $name; ?>" src="<?php echo $url; ?>" />
                    <div class="name" style="color: rgb(236, 108, 108); margin-left: 15px; font-style: italic; font-size: 17px;">
                        <span>Bức ảnh của <?php echo $user_name; ?></span>
                    </div>
                </div>          
              </div> 
             <?php  }
           } ?>
             </div>
              <?php
              }
               }
           } ?>
            </div>
              <div role="tabpanel" class="tab-pane" id="nature">
               <?php  if ($photo['nature']) {
            $all = $photo['nature'];
             for ($i = 0; $i < count($all); $i+=3) { 
              if (isset($all[$i])) {
               
              ?>
           
             <div class="row">
             <?php for ($j = $i; $j < $i+3; $j++) { 
               if (isset($all[$j])) {
                $user_name = $all[$j]->user_lastname." ".$all[$j]->user_firstname;
                $url = $all[$j]->url."/".$all[$j]->resize_1; 
                $name = $all[$j]->name; ?>
           
             <div class="col-md-4">
                <div class="well">
                    <img class="thumbnail img-responsive" style="margin:auto;" alt="<?php echo $name; ?>" src="<?php echo $url; ?>" />
                    <div class="name" style="color: rgb(236, 108, 108); margin-left: 15px; font-style: italic; font-size: 17px;">
                        <span>Bức ảnh của <?php echo $user_name; ?></span>
                    </div>
                </div>          
              </div> 
             <?php  }
           } ?>
             </div>
              <?php
              }
               }
           } ?>
              </div>
              <div role="tabpanel" class="tab-pane" id="people">
            <?php  if ($photo['people']) {
            $all = $photo['people'];
             for ($i = 0; $i < count($all); $i+=3) { 
              if (isset($all[$i])) {
               
              ?>
           
             <div class="row">
             <?php for ($j = $i; $j < $i+3; $j++) { 
               if (isset($all[$j])) {
                $user_name = $all[$j]->user_lastname." ".$all[$j]->user_firstname;
                $url = $all[$j]->url."/".$all[$j]->resize_1; 
                $name = $all[$j]->name; ?>
           
             <div class="col-md-4">
                <div class="well">
                    <img class="thumbnail img-responsive" style="margin:auto;" alt="<?php echo $name; ?>" src="<?php echo $url; ?>" />
                    <div class="name" style="color: rgb(236, 108, 108); margin-left: 15px; font-style: italic; font-size: 17px;">
                        <span>Bức ảnh của <?php echo $user_name; ?></span>
                    </div>
                </div>          
              </div> 
             <?php  }
           } ?>
             </div>
              <?php
              }
               }
           } ?>
              </div>
              <div role="tabpanel" class="tab-pane" id="animals">
                    <?php  if ($photo['animal']) {
            $all = $photo['animal'];
             for ($i = 0; $i < count($all); $i+=3) { 
              if (isset($all[$i])) {
               
              ?>
           
             <div class="row">
             <?php for ($j = $i; $j < $i+3; $j++) { 
               if (isset($all[$j])) {
                $user_name = $all[$j]->user_lastname." ".$all[$j]->user_firstname;
                $url = $all[$j]->url."/".$all[$j]->resize_1; 
                $name = $all[$j]->name; ?>
           
             <div class="col-md-4">
                <div class="well">
                    <img class="thumbnail img-responsive" style="margin:auto;" alt="<?php echo $name; ?>" src="<?php echo $url; ?>" />
                    <div class="name" style="color: rgb(236, 108, 108); margin-left: 15px; font-style: italic; font-size: 17px;">
                        <span>Bức ảnh của <?php echo $user_name; ?></span>
                    </div>
                </div>          
              </div> 
             <?php  }
           } ?>
             </div>
              <?php
              }
               }
           } ?>
              </div>
              <div role="tabpanel" class="tab-pane" id="discovery">
                <?php  if ($photo['discovery']) {
            $all = $photo['discovery'];
             for ($i = 0; $i < count($all); $i+=3) { 
              if (isset($all[$i])) {
               
              ?>
           
             <div class="row">
             <?php for ($j = $i; $j < $i+3; $j++) { 
               if (isset($all[$j])) {
                $user_name = $all[$j]->user_lastname." ".$all[$j]->user_firstname;
                $url = $all[$j]->url."/".$all[$j]->resize_1; 
                $name = $all[$j]->name; ?>
           
             <div class="col-md-4">
                <div class="well">
                    <img class="thumbnail img-responsive" style="margin:auto;" alt="<?php echo $name; ?>" src="<?php echo $url; ?>" />
                    <div class="name" style="color: rgb(236, 108, 108); margin-left: 15px; font-style: italic; font-size: 17px;">
                        <span>Bức ảnh của <?php echo $user_name; ?></span>
                    </div>
                </div>          
              </div> 
             <?php  }
           } ?>
             </div>
              <?php
              }
               }
           } ?>
                </div>
             <!--  <div role="tabpanel" class="tab-pane" id="more"></div> -->
             <div class="see-more" style="    float: right; margin: 10px 0;
    width: 122px;
    font-size: 18px;
    font-style: italic;"><a href = "{{url('web/photo/show/images/')}}" id="see-more"> Xem tiếp...</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 <!--========================================================
                            FOOTER
  =========================================================-->
  <footer>
    <div id="register" class="parallax" data-url="{{url('/images/content-image/parallax.jpg')}}" data-mobile="true" data-speed="0.5 " data-direction="inverted">
      <div class="well4">
        <div class="container center wow fadeInUp" data-wow-delay="0.2s">
          
          <h2>ĐĂNG KÝ LET'S GO</h2>

          <h3 style="text-transform: uppercase;">để cùng lưu giữ lại những giây phút đẹp của bạn qua những bức ảnh</h3>
          <a class="btn" href='{{url("/auth/register")}}' style="line-height: 24px; font-size: 18px; color: white;">ĐĂNG KÝ NGAY</a>

          <div class="copyright">
            © <span id="copyright-year"></span> BACH KHOA HA NOI - HEDSPI
            <!-- {%FOOTER_LINK} -->
          </div>
        </div>
      </div>
    </div>
   <div class="well5 center">
      <div class="container">
        <div>
          <span style="color: red;">Design By </span> TrinhThiThuyDung<span class="glyphicons glyphicons-cat"></span> </div>
      </div>
    </div>
  </footer>
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $('#see-more').click(function(event){
      var href = $(this).attr("href");
     if( $('.tab-pane').hasClass("active") ){
      var category = $('.tab-pane.active').attr("id");
      href += "/"+category;
      $(this).attr("href", href);
     }
    });
  });
</script>
@endsection