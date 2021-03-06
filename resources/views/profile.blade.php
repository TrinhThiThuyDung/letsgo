@extends('layout/main-layout')

<?php if (isset($array_data)) {
   $url = explode("/", $_SERVER['REQUEST_URI']);
   $id = (int)$url[count($url) - 1];
   $user_id = Session::get('id');

  $user_data = $data['user_all_infor'][0];
  $username = $user_data->last_name." ".$user_data->first_name;
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
<?php 
$user_id = $array_data['user']->user_id;
$user_name = $array_data['user']->last_name." ".$array_data['user']->first_name;
class TimeDate
{
  
  public function time($created_at)
{
   $end_time =  new DateTime(); 
    $start_time = new DateTime($created_at);
    $since_start = $start_time->diff($end_time);
    $end_time =  new DateTime();

    if ($since_start->y != 0) {
      return $since_start->y." year ago";
    }elseif ($since_start->m != 0) {
      return $since_start->m." months ago";
    }elseif ($since_start->d != 0) {
      return $since_start->d." day ago";
    }elseif ($since_start->h != 0) {
      return $since_start->h." hour ago";
    }elseif ($since_start->i != 0) {
      return $since_start->i." minute ago";
    }else{
      if( $since_start->s  == 0 ) 
        return "Just now";
      return $since_start->s." seconds ago";
    } 
 }
}

 ?>

@section('content')
  @include('layout/nagavition')
 <div id="header" class="profile-header" >
    <div class="cover-photo" style="background: url(/images/cover/coverphoto01.jpg) no-repeat; background-size: cover;"></div>
    <div class="profile-info">
    	<div class="profile-photo">
    		<img id = "user_avatar" src="<?php if(isset($user_data)) $avatar = $user_data->avatar; echo $avatar; ?>" class = "avatar-img">
        <?php  if ($id == $user_id) { ?>
         <div class="formUpdateAvatar" >
     <form id="formUpdateAvatar" action="{{url('web/user/profile/update/avatar')}}" method="post" style="height: 100%;" enctype="multipart/form-data">
        <span class="fileinput-button" style="padding-top: 31px;">
                 <img class = "choose-avatar" src="/images/icon/photo-camera.svg" style="width: 44px; height: 31px; left: 39%;">
                      <input id="avatar" type="file" name="avatar" style="    width: 100%; height: 100%;">
                </span>
      </form>
        </div>
        <?php } ?>
    </div>
   
    <div class="profile-name">
    	<span class="name"><?php if(isset($username)) echo  $username; ?></span>
    </div> 
    </div>            
 </div>
 <div class="tab-nav">
  	   <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist" style="width: 100%; background: #f0f7fc url(/images/form-button-white-25px.png) repeat-x top;">
                       <li class="tab-user active" style="    margin-left: 23%;"><a href="#men" role="tab" data-toggle="tab">My Photo</a></li>
                       <li><a id="like-user-tab" href="#women" role="tab" data-toggle="tab">Love Photo</a></li>
                       <li><a id="update-user-tab" href="#kids" role="tab" data-toggle="tab">Profile Infomation</a></li>
                       <li><a id="follow-user-tab" href="#sports" role="tab" data-toggle="tab">Follow List</a></li>
                    </ul>  
    				 <div class="profile-content" style="background: url(/images/ironpatern.png); background-repeat: repeat; padding: 0;">
    				    <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="men" style="background: rgb(255, 255, 255);">
                    
                          <div class="carouselGallery-col-60" style=" margin-top: 22px; border-radius: 2px;     float: none; text-align: left;"> 
              								<?php
                              if ($data['user_photo']) {
                                $i = 0;
                                 foreach ($data['user_photo'] as $key => $photo) {
                                  $date = new TimeDate();
                                  $time = $date->time($photo->created_at);
                                  ?>
                                  <div style = "max-width: 300px; height: 250px;display: inline-block; margin: 40px 10px; text-align: center;" class = "photo carouselGallery-col-1 carouselGallery-carousel" data-avatar = "<?php echo $avatar; ?>" data-index="<?php echo ++$i; ?>" data-id = "<?php echo $photo->id; ?>" data-username="<?php echo $username; ?>" data-imagetext="<?php echo $photo->describe; ?>" data-location="<?php echo $photo->location; ?>" data-imagepath="<?php echo $photo->url."/".$photo->name; ?>" data-idme = "<?php echo $user_id; ?>" data-time = "<?php echo $time; ?>" data-user_id = "<?php echo $photo->user_id; ?>">
                                  <a href = "#" class = "photo-link"> 
                                    <img class = "lazy" style = "width: 100%; object-fit: cover;height: 100%;" src="<?php echo $photo->url."/".$photo->resize_1; ?>"  style="height: 254px;"> </img>
                                   
                                  </a>
                                  <?php  if ($id == $user_id) { ?>
                                  <div class = "action" style = "background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.6) 100%);  bottom: 0px; ">
                                    
                                      <a href = "{{url('web/photo/delete/')}}/<?php echo $photo->id; ?>" class = "delete">
                                        <span class = "del-span"></span>
                                      </a>
                                   
                                  </div>
                                  <?php } ?>
                              </div>
                               <?php } ?>
                              
                             <?php }else{ ?>
              								<div class="empty-images">
                                  <span>No photo :)</span>        
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
                        <span>No photo you love!</span>        
                              </div>
               <?php   }else{ 
                $i = 1;
                foreach ($data['user_like'] as $key => $photo) { 
                  $date = new TimeDate();
                                  $time = $date->time($photo->created_at); ?>
                  <div style = "max-width: 300px; height: 250px;display: inline-block; margin: 40px 10px; text-align: center;"class = "photo carouselGallery-col-1 carouselGallery-carousel" data-avatar = "<?php echo $avatar; ?>" data-index="<?php echo ++$i; ?>" data-id = "<?php echo $photo->id; ?>" data-username="<?php echo $photo->user_lastname." ".$photo->user_firstname; ?>" data-imagetext="<?php echo $photo->describe; ?>" data-location="<?php echo $photo->location; ?>" data-imagepath="<?php echo $photo->url."/".$photo->name; ?>" data-idme = "<?php echo $user_id; ?>" data-time = "<?php echo $time; ?>" data-user_id = "<?php echo $photo->user_id; ?>">
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
                                      <dt>Full name: </dt>
                                      <dd> <?php if(isset($all_infor)) {
                                                    echo $all_infor->last_name." ".$all_infor->first_name;
                                                  }   ?></dd>
                                    </dl>
                                    <dl>
                                      <dt>Gender: </dt>
                                      <dd><?php if (isset($all_infor->gender)) {
                                        if ($all_infor->gender === "female") {
                                          echo "Nữ";
                                        }else{
                                          echo "Name";
                                        }
                                      } ?></dd>
                                    </dl>
                                    <dl>
                                      <dt>Birthday: </dt>
                                      <dd> <?php if(isset($all_infor->birthday)) {
                                                    if($all_infor->birthday != '0000-00-00'){
                                                      echo $all_infor->birthday;
                                                    }
                                                  }   ?></dd>
                                    </dl>
                                     <dl>
                                      <dt>You are: </dt>
                                      <dd> @if(isset($all_infor->position)) {{ $all_infor->position }} @endif</dd>
                                    </dl>
                                    <dl>
                                      <dt>You live in: </dt>
                                      <dd>@if(isset($all_infor->address)) {{ $all_infor->address }} @endif</dd>
                                    </dl>
                                  </div>
                                </div>
                              </div>
                             
                            </div>
                             <div class="info-active">
                             <h4 class="textHeading">Activity</h4>
                                <div class="contentActive">
                                  <dl>
                                    <dt>Joined: </dt>
                                    <dd><?php if (isset($data['user_all_infor'])) {

                                       $timer = explode("-", $data['user_all_infor'][0]->created_at);
                                       echo "Ngày ".explode(" ", $timer[2])[0]." Tháng ".$timer[1]." Năm ".$timer[0];
                                    } ?></dd>
                                  </dl>
                                  <dl>
                                    <dt>Photo uploaded: </dt>
                                    <dd><?php if(isset($data['user_activity'])) echo $data['user_activity']['images']; else 0; ?> ảnh</dd>
                                  </dl>
                                  <dl>
                                    <dt>Photo loved: </dt>
                                    <dd><?php if(isset($data['user_activity'])) echo $data['user_activity']['like']; else 0; ?> ảnh</dd>
                                  </dl>
                                </div>
                              </div>
                              </div>
                              <?php 
                            
                               
                                if ($id == $user_id) {
                              ?>
                              <div class="update-profile">
                               <h3 class="textHeading">Update profile information</h3>
                               <div class="content-info" style="text-align: left;">
                                <form  id="formUpdateProfile" action="{{url('web/user/profile/update')}}" method="post" style="margin-left: 10px;" >
                                <input type="hidden" name="user_id" value="<?php echo $array_data['user']->user_id; ?>">
                                <dl>
                                  <dt>Last name: </dt>
                                  <dd>
                                     <input type="text" name="last_name">
                                  </dd>
                                </dl>
                                <dl>
                                  <dt>Frist name: </dt>
                                  <dd>
                                      <input type="text" name="first_name">
                                  </dd>
                                </dl>
                                 <dl>
                                  <dt>Phone: </dt>
                                  <dd>
                                       <input type="tel" name="phone">
                                  </dd>
                                </dl>
                                
                                <dl>
                                  <dt>You live in: </dt>
                                  <dd>
                                      <input type="text" name="address">
                                  </dd>
                                </dl>
                                <dl>
                                  <dt>Birthday: </dt>
                                  <dd>
                                      <input type="date" name="birthday">
                                  </dd>
                                </dl>
                               
                                   <dl>
                                  <dt>Now, you are (student,...): </dt>
                                  <dd>
                                      <input type="text" name="position">
                                  </dd>
                                </dl>
                                 <dl style="width: 327px;">
                                  <dt>You are: </dt>
                                  <dd style="width: 100% !important; margin: 0px 3px; padding: 3px;">
                                  <div class="checkbox checkbox-primary">
                                      <input type="radio" name="gender" value="male"> Male<br>
                                      <input type="radio" name="gender" value="female"> Female<br>
                                      </div>
                                  </dd>
                                </dl>
                            
                               <input id="buttonUpdate" class="btn btn-info" type="submit" style="margin: 0 43px;" value = "Update"/>
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