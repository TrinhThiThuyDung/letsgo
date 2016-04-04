@extends('layout/main-layout')

@section('title','Tiểu Long Hoàng')


@section('link')

    <link rel="stylesheet" href="{{url('css/style-home.css')}}">
      <link rel="stylesheet" href="{{url('css/gallery-image.css')}}">


    <link rel="stylesheet" href="{{url('/css/albumize.css')}}">
     <link rel="stylesheet" href="{{url('/css/transitions.css')}}">
  
    <!-- ========================= JS ======================== -->
  

    <script type="text/javascript" src="{{url('/js/albumize.js')}}"></script>
  
    <script type="text/javascript" src="{{url('/js/jquery.collagePlus.min.js')}}"></script>
 
     <script type="text/javascript" src="{{url('/js/jquery.removeWhitespace.min.js')}}"></script>

<style type="text/css">
  body{
    background-color: #fff !important;
  }
</style>
@endsection

@section('content')
  @include('layout/nagavition')
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
  @include('layout/footer-layout')
@endsection

@section('script')
<script type="text/javascript">
	
        $(document).ready(function(){
            $('.Collage').collagePlus();
        });
    
</script>
@endsection