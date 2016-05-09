@extends('layout/main-layout')

<?php if (isset($array_data)) {
  $username = $array_data['user']->first_name." ".$array_data['user']->last_name;
} ?>

@section('title')
 {!! $username !!} 
 @endsection


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
    <div class="cover-photo" style="background: url(/images/cover/coverphoto01.jpg) no-repeat; background-size: cover;"></div>
    <div class="profile-info">
    	<div class="profile-photo">
    		<img src="/<?php if(isset($array_data)) echo $array_data['user']->avatar; ?>">
    </div>
    <div class="profile-name">
    	<span class="name"><?php if(isset($username)) echo  $username; ?></span>
    </div> 
    </div>            
 </div>
 <div class="tab-nav">
  	   <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist" style="width: 100%; background: #f0f7fc url(/images/form-button-white-25px.png) repeat-x top;">
                       <li class="active" style="    margin-left: 23%;"><a href="#men" role="tab" data-toggle="tab">Ảnh</a></li>
                       <li><a href="#women" role="tab" data-toggle="tab">Ảnh yêu thích</a></li>
                       <li><a href="#kids" role="tab" data-toggle="tab">Thông tin cá nhân</a></li>
                       <li><a href="#sports" role="tab" data-toggle="tab">Theo dõi</a></li>
                    </ul>  
    				 <div class="profile-content" style="background: url(/images/ironpatern.png); background-repeat: repeat; padding: 0;">
    				    <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="men" style="background: rgb(255, 255, 255);">
                          <div class="upload">
                          <div class="empty">
                          	<button type="button" class="btn btn-primary btn-upload">Đăng ảnh</button>
                          </div>
                          	
                          </div>
                          <?php if ($data['user_photo']) { 
                            foreach ($data['user_photo'] as $key => $value) {
                             
                            ?>
                            <div class="album-name">Album: <?php echo $value['album_name']; ?></div>
                            <div class="albumize Collage" title="<?php echo $value['album_name']; ?>" style=" margin-top: 22px; border-radius: 2px; "> 
              								<?php
                                
                                foreach ($value[0] as $key => $photo) {
                                  ?>
                                  <a href = "/<?php echo $photo->url; ?>" title="<?php echo $photo->name; ?>"> 
                                <img src="/<?php echo $photo->url; ?>"  style="height: 254px;"> </img>
                              </a>

                               <?php } ?>
                                </div>
                             <?php } 
                            }else{ ?>
              								<div class="empty-images">
                        <span>Bạn chưa upload bức ảnh nào! Hãy cùng upload ảnh ngay nào :)</span>        
                              </div>
              						<?php } ?>
                          </div>
                          <div class="tab-pane" id="women" style="background: rgb(255, 255, 255);">
                               <!--  <div class="container gal-container"> -->
               <div class="container">
              <div class="row" >
              	 	<div class="gal-container">
                  <?php if (!$data['user_like']) { ?>
                  <div class="empty-images">
                        <span>Bạn chưa có ảnh nào thích!</span>        
                              </div>
               <?php   }else{ 
                $i = 1;
                foreach ($data['user_like'] as $key => $value) { ?>
                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                      <a href="#" data-toggle="modal" data-target="#<?php echo $i; ?>">
                        <img src="/<?php echo $value->url; ?>">
                      </a>
                      <div class="modal fade" id="<?php echo $i; $i++; ?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                            <div class="image-detail">
                              <div class="img-name">
                                Ảnh đẹp nè!
                              </div>
                              <div></div>
                            </div>
                            <div class="img">  
                              <img src="/<?php echo $value->url; ?>"> 
                              <div class="col-md-12 description">
                                <h4><?php echo $value->name; ?></h4>
                              </div>
                            </div>
                            </div>
                              
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> 
              <?php  } 
              }
                ?>
                 
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
                                  <?php if (isset($data['user_all_infor'])) {
                                    $all_infor = $data['user_all_infor'][0];
                                  } ?>
                                    <dl>
                                      <dt>Tên: </dt>
                                      <dd> <?php if(isset($all_infor)) {
                                                    echo $all_infor->first_name." ".$all_infor->last_name;
                                                  }   ?></dd>
                                    </dl>
                                    <dl>
                                      <dt>Giới tính: </dt>
                                      <dd> @if(isset($all_infor->gender)) {{ $all_infor->gender }} @endif </dd>
                                    </dl>
                                    <dl>
                                      <dt>Ngày sinh: </dt>
                                      <dd> <?php if(isset($all_infor->birthday)) {
                                                    if($all_infor->birthday != '0000-00-00'){
                                                      echo $all_infor->birthday;
                                                    }
                                                  }   ?></dd>
                                    </dl>
                                     <dl>
                                      <dt>Bạn là: </dt>
                                      <dd> @if(isset($all_infor->position)) {{ $all_infor->position }} @endif</dd>
                                    </dl>
                                    <dl>
                                      <dt>Bạn ở: </dt>
                                      <dd>@if(isset($all_infor->address)) {{ $all_infor->address }} @endif</dd>
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
                                    <dd><?php if(isset($data['user_activity'])) echo $data['user_activity']['images']; else 0; ?> ảnh</dd>
                                  </dl>
                                  <dl>
                                    <dt>Lượt thích ảnh: </dt>
                                    <dd><?php if(isset($data['user_activity'])) echo $data['user_activity']['like']; else 0; ?> ảnh</dd>
                                  </dl>
                                </div>
                              </div>
                             </div>
                           </div>
                          </div>
                          <div class="tab-pane" id="sports" style="background: rgb(255, 255, 255);">
                            <ul class="nav-list list-inline">
                            <?php if(isset($data['user_follow'])){
                                foreach ($data['user_follow'] as $key => $value) { ?>
                                  <li><a href="/web/user/profile/<?php echo $value->id; ?>">
                                      <img src="/<?php echo $value->avatar; ?>">
                                      <span><?php echo $value->first_name." ".$value->last_name; ?></span>
                                    </a>
                                </li>
                              <?php  }
                              }?>                                
                               
                                
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