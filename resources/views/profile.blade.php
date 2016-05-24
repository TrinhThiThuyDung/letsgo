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
    <link rel="stylesheet" href="{{url('/css/albums.css')}}">
  <!--    <link rel="stylesheet" href="{{url('/css/transitions.css')}}"> -->
      
  
    <!-- ========================= JS ======================== -->
  

    <script type="text/javascript" src="{{url('/js/albums.js')}}"></script>
    <script type="text/javascript" src="{{url('js/api/action.js')}}"></script>
     <script type="text/javascript" src="{{url('js/api/main.js')}}"></script>

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
    		<img src="<?php if(isset($array_data)) $avatar = $array_data['user']->avatar; echo $avatar; ?>">
         <img src="/images/icon/photo-camera.svg" style="width: 55px; height: 101px;    position: absolute; left: 48%; top: 81px;" data-toggle="modal" data-target="#changeAvatar">
       <!--  <span>
          <form action="{{}}" method="post" enctype="multipart/form-data">
            <div class="upload-area" style="height: 100%; position: absolute; top: 39px; width: 155px; left: 43.5%;" >
                <span class="fileinput-button">
                  <img src="/images/icon/photo-camera.svg" style="width: 55px; height: 101px;">
                      <input type="file" name="avatar">
                </span>
                         
            </div>
          </form>
        </span> -->
    </div>
    <!-- Modal -->
<div id="changeAvatar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="height: 554px; width: 662px;">
     
      <div class="modal-body">
        <form action="" method="post" id="formChangeAvatar" enctype="multipart/form-data">
            <div class="upload-area" style="height: 100%;" id="areaUpload">
                <span class="fileinput-button">
                  <img src="/images/icon/upload.svg" style="left: 41%;">
                      <input type="file" name="avatar" style="    width: 631px; height: 187px;">
                </span>
                         
            </div>
            <button id="btnChange" type="submit" for = "formChangeAvatar" class="btn btn-infor" style="display:none;">Thay đổi</button>
          </form>
      </div>
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Thay đổi</button>
      </div> -->
    </div>

  </div>
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
                              	<!-- <button type="button" class="btn btn-primary btn-upload">Đăng ảnh</button> -->
                              </div>
                            	
                            </div>
                          <div class="carouselGallery-col-60" style=" margin-top: 22px; border-radius: 2px;     float: none; text-align: left;"> 
              								<?php
                              if ($data['user_photo']) {
                                $i = 0;
                                 foreach ($data['user_photo'] as $key => $photo) {
                                  ?>
                                  <div style = "max-width: 300px; height: 250px;display: inline-block; margin: 40px 10px; text-align: center;"class = "photo carouselGallery-col-1 carouselGallery-carousel" data-avatar = "<?php echo $avatar; ?>" data-index="<?php echo ++$i; ?>" data-id = "<?php echo $photo->id; ?>" data-username="<?php echo $username; ?>" data-imagetext="<?php echo $photo->describe; ?>" data-location="<?php echo $photo->location; ?>" data-imagepath="<?php echo $photo->url."/".$photo->name; ?>" >
                                  <a href = "#" class = "photo-link"> 
                                    <img style = "width: 100%; object-fit: cover;height: 100%;" src="<?php echo $photo->url."/".$photo->resize_1; ?>"  style="height: 254px;"> </img>
                                  </a>
                              </div>
                               <?php } ?>
                              
                             <?php }else{ ?>
              								<div class="empty-images">
                                  <span>Bạn chưa upload bức ảnh nào! Hãy cùng upload ảnh ngay nào :)</span>        
                              </div>
              						<?php } ?>
                          </div>
                        </div>
              <div class="tab-pane" id="women" style="background: rgb(255, 255, 255);">
                               <!--  <div class="container gal-container"> -->
               <div class="container">
              <div class="row" >
              	 	<div class="carouselGallery-col-60" style="text-align: left;">
                  <?php if (!$data['user_like']) { ?>
                  <div class="empty-images">
                        <span>Bạn chưa có ảnh nào thích!</span>        
                              </div>
               <?php   }else{ 
                $i = 1;
                foreach ($data['user_like'] as $key => $photo) { ?>
                  <div style = "max-width: 300px; height: 250px;display: inline-block; margin: 40px 10px; text-align: center;"class = "photo carouselGallery-col-1 carouselGallery-carousel" data-avatar = "<?php echo $avatar; ?>" data-index="<?php echo ++$i; ?>" data-id = "<?php echo $photo->id; ?>" data-username="<?php echo $photo->user_lastname." ".$photo->user_firstname; ?>" data-imagetext="<?php echo $photo->describe; ?>" data-location="<?php echo $photo->location; ?>" data-imagepath="<?php echo $photo->url."/".$photo->name; ?>" >
                          <a href = "#" class = "photo-link"> 
                            <img style = "width: 100%; object-fit: cover;height: 100%;" src="<?php echo $photo->url."/".$photo->resize_1; ?>"  style="height: 254px;"> </img>
                        </a>
                      </div>
                       <?php  }
                       } ?>
                    </div>
                  </div> 
                 
                  </div>
              </div>
              <!--  </div>
                          </div> -->
                          <div class="tab-pane" id="kids" style="width: 100%; height: 100%; background: rgb(255, 255, 255);">
                           <div class="container">
                             <div class="row">
                             <div class="user" style="height:292px; margin-bottom: 100px;">
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
                                    <dd><?php if (isset($data['user_all_infor'])) {

                                       $timer = explode("-", $data['user_all_infor'][0]->created_at);
                                       echo "Ngày ".explode(" ", $timer[2])[0]." Tháng ".$timer[1]." Năm ".$timer[0];
                                    } ?></dd>
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
                              <?php 
                            
                                $url = explode("/", $_SERVER['REQUEST_URI']);
                                $id = (int)$url[count($url) - 1];
                                $user_id = Session::get('id');
                                if ($id == $user_id) {
                              ?>
                              <div class="update-profile">
                               <h3 class="textHeading">Cập nhật thông tin cá nhân</h3>
                               <div class="content-info" style="text-align: left;">
                                <form  id="formUpdateProfile" action="{{url('web/user/profile/update')}}" method="post" style="margin-left: 10px;" >
                                <input type="hidden" name="user_id" value="<?php echo $array_data['user']->user_id; ?>">
                                <dl>
                                  <dt>Họ: </dt>
                                  <dd>
                                     <input type="text" name="last_name">
                                  </dd>
                                </dl>
                                <dl>
                                  <dt>Tên: </dt>
                                  <dd>
                                      <input type="text" name="first_name">
                                  </dd>
                                </dl>
                                 <dl>
                                  <dt>Số điện thoại: </dt>
                                  <dd>
                                       <input type="tel" name="phone">
                                  </dd>
                                </dl>
                                
                                <dl>
                                  <dt>Bạn sống ở: </dt>
                                  <dd>
                                      <input type="text" name="address">
                                  </dd>
                                </dl>
                                <dl>
                                  <dt>Ngày sinh: </dt>
                                  <dd>
                                      <input type="date" name="birthday">
                                  </dd>
                                </dl>
                               
                                   <dl>
                                  <dt>Hiện bạng đang là: </dt>
                                  <dd>
                                      <input type="text" name="position">
                                  </dd>
                                </dl>
                                 <dl style="width: 327px;">
                                  <dt>Bạn là: </dt>
                                  <dd style="width: 100% !important; margin: 0px 3px; padding: 3px;">
                                  <div class="checkbox checkbox-primary">
                                      <input type="radio" name="gender" value="male"> Nam<br>
                                      <input type="radio" name="gender" value="female"> Nữ<br>
                                      </div>
                                  </dd>
                                </dl>
                            
                               <input id="buttonUpdate" class="btn btn-info" type="submit" style="margin: 0 43px;" value = "Cập Nhật"/>
                                   <dl>
                                  <dt id ="result" style = "color: rgba(228, 45, 45, 0.78);"> </dt>
                                </dl>
                                </form>
                                
                                </div>
                              </div>
                              <?php } ?>
                             </div>
                           </div>
                          </div>
                          <div class="tab-pane" id="sports" style="background: rgb(255, 255, 255);">
                            <ul class="nav-list list-inline">
                            <?php if(isset($data['user_follow'])){
                                foreach ($data['user_follow'] as $key => $value) { ?>
                                  <li><a href="/web/user/profile/<?php echo $value->id; ?>">
                                      <img src="<?php echo $value->avatar; ?>">
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

@endsection