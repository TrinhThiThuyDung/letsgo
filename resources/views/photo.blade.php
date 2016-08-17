@extends('layout/main-layout')

@section('title','Home Page')


@section('link')

  <link rel="stylesheet" href="{{url('css/style-home.css')}}">
  <link rel="stylesheet" href="{{url('css/gallery-image.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('css/albums.css')}}">

  <script src="{{url('js/albums.js')}}"></script>
  <script type="text/javascript" src="{{url('js/api/action.js')}}"></script>
  <script type="text/javascript" src="{{url('js/api/main.js')}}"></script>
   
@endsection

<?php 

/**
* 
*/

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

    <!-- ==================== HEADER LAYOUT ==================== -->
   <div id="header" class="welcome" style="height: 48px;">
        <div class="container">
          <div class="row">
       
          <div class="welcome-content">
           <div class="wel-img">
             <!-- <img src="{{url('/images/cat-logo1.png')}}"> -->
           </div>
           <div class="wel-content"></div>
            </div>
      
      </div>
    </div>
 </div>
    <!-- ==================== HEADER LAYOUT ====================== -->

    <!-- ==================== CONTENT LAYOUT ==================== -->
  <div class="pageWidth">
    @include('layout/nagavition')
     <div class="pageContent" id="pageContent">
     <div class="right-photo" id = "right-photo">
     <div class="scroll">
       <div class = "user-detai">
         <a href="/web/user/profile/<?php echo $user_id; ?>"><span><?php echo $user_name; ?></span></a>
         <div class = "active-user">
           <div class = "active-post">
             <span> PHOTOS </span><br>
             <span> <?php if ($data['data-active']) {
              echo $data['data-active']['active-img'];
             } ?> </span>
           </div>
           <div class = "active-follow">
             <span> FOLLOWERS </span><br>
             <span>  <?php if ($data['data-active']) {
              echo $data['data-active']['active-follower'];
             } ?>  </span>
           </div>
           <div class = "active-follower">
             <span> FOLLOWS </span><br>
             <span id="numFollow"> <?php if ($data['data-active']) {
              echo $data['data-active']['active-follow'];
             } ?> </span>
           </div>
         </div>
         </div>
         <div class = "follow-user">
         <div style=" padding: 10px; color: #5b646d;">
          <span style="margin-left: 10px; font-weight: 700; font-size: 15px;"> Maybe you don't know :) </span>
    
         </div>
           <?php if ($data['data-active']) {

            $follow = $data['data-active']['follow'];
            if (count($follow) < 3) {
    $total = count($follow);
} else { $total = 3; }
             for ($i = 0; $i < $total; $i++) { 
                ?>

           <div class = "follow-detail">
             <div class = "follow-infor">
               <img src="<?php echo $follow[$i]->avatar; ?>" class = "ava-img">
               <a href="/web/user/profile/<?php echo $follow[$i]->user_id; ?>"><span> <?php echo $follow[$i]->user_lastname." ".$follow[$i]->user_firstname; ?> </span></a>
               <a href = "/web/photo/action/" data-user_id = "<?php echo $follow[$i]->user_id; ?>"><button style="float: right;" class="follow">Follow me</button></a>
             </div>
             <div class="follow-img">
             <?php if(isset($follow[$i]->image[0])){ ?>
               <img class = "img-show" src="<?php echo $follow[$i]->image[0]->url."/".$follow[$i]->image[0]->resize_2; ?>" style="margin-left: 11px;"> <?php } ?>
              <?php if(isset($follow[$i]->image[1])){ ?> <img class = "img-show" src="<?php echo $follow[$i]->image[1]->url."/".$follow[$i]->image[1]->resize_2; ?>"> <?php } ?>
              <?php if(isset($follow[$i]->image[2])){ ?> <img class = "img-show" src="<?php  echo $follow[$i]->image[2]->url."/".$follow[$i]->image[2]->resize_2; ?>">  <?php } ?>
              <?php if(isset($follow[$i]->image[3])){ ?> <img class = "img-show" src="<?php  echo $follow[$i]->image[3]->url."/".$follow[$i]->image[3]->resize_2; ?>"> <?php } ?>
              <?php if(isset($follow[$i]->image[4])){ ?> <img class = "img-show" src="<?php  echo $follow[$i]->image[4]->url."/".$follow[$i]->image[4]->resize_2; ?>"> <?php } ?>
              
             </div>
           </div>
            <?php
             }
           } ?>
         
         </div>
       </div>
     </div>
       <div id="gallerry-images">
          <div class="container gallerry-image" style="padding-top: 10px !important;">
            <div id="album " class="album-gal carouselGallery-col-60">
            <?php 
               if (!empty($data['photos'])) {
                $photos_total = count($data['photos']);
                for ($i = 0; $i < $photos_total; $i++) { 
                  $image = $data['photos'][$i];

                  $userNameImg = $image->user_lastname." ".$image->user_firstname;
                  $urlImg = $image->url."/".$image->name;
             ?>
             <div class="wrap-images  item">
              <div class="headerInfor" style="margin: 10px 10px; ">
                <div class="user" style="display: inline-block;">
                  <img class="ava-img" style="width: 40px; height: 40px; margin-top: -30px;" src="<?php echo $image->avatar; ?>" />
                  <div class="name" style="display: inline-block;">
                      <a href="/web/user/profile/{{{$image->user_id}}}" style="font-size: 17px; font-family: Architects Daughter,cursive;"> <?php echo $userNameImg; ?> </a><br><span>
                      <time>
                          <span class="hour" data-bind = "hour"><?php 
                                          
                            $date = new TimeDate();

                             echo $time = $date->time($image->created_at);
                                        
                            ?></span>
                      </time>
                    <?php if ($image->location) {
                        echo "at ".$image->location;
                      } ?></span></div>

                </div>
                <div class="infor-active" style = 'width: 28%;'>
                  <span class = "icon icon-love" <?php if($image->user_id == $user_id) echo "style='margin-left: 110px;'"; ?> ><?php if (isset( $image->likeTotal) ) {
                    echo count($image->likeTotal);
                  }else echo 0;  ?></span>
                  <span class = "icon comment-icon"><?php if (isset( $image->commentTotal)) {
                    echo count($image->commentTotal);
                  }else echo 0; ?></span>
                  <?php if($image->user_id != $user_id){if ($image->follow) {
                                      echo "<a href = '/web/photo/action/' data-user_id = '".$image->user_id."'><button class = 'following' style = 'width: 52%;'>Following</button></a>";
                                    }else{
                                      echo "<a href = '/web/photo/action/' data-user_id = '".$image->user_id."'><button class = 'follow' style = 'width: 52%;'>Follow me</button></a>";
                                    } }?>
                </div>
                <div class = "caption" style = "margin: 4px;">
                  <span> <?php if ($image->describe) {
                    echo $image->describe;
                  } ?></span>
                </div>
              </div>
              <div class="box">
                  <div class="photo full carouselGallery-col-1 carouselGallery-carousel" data-avatar = "<?php echo $image->avatar; ?>" data-index="<?php echo $i; ?>" data-id = "<?php echo $image->id; ?>" data-username="<?php echo $userNameImg; ?>" data-imagetext="<?php echo $image->describe; ?>" data-location="<?php echo $image->location; ?>" data-imagepath="<?php echo $urlImg; ?>" data-idme = "<?php echo $user_id; ?>" data-time = "<?php echo $time; ?>" data-user_id = "<?php echo $image->user_id; ?>">
                    <a class="photo-link" href="#"><img class = "lazy" width="787" height="565" data-original = '<?php  echo  $urlImg; ?>' src="<?php  echo  $urlImg; ?>"></a>
                    </div>
              </div>
              <div  class="active-photo">
                <div class="like-photo" data-id = "<?php echo $image->id; ?>">
                <div class = "action-love" style = "display: inline;">
                  <a href = "{{url('web/photo/action')}}" class="like" style  = "display: inline;"><span class="<?php if ($image->like_id) {
                                      echo "icon-love";
                                    }else{ echo "icon-like"; } ?>" style="display: inline-block; width: 23px; height: 23px; margin: 1px 6px -5px 3px;     background-size: 23px 23px;"></span></a>
                </div>
               <div class = "listLike" style = "display: inline-block;">
                  <?php if (isset($image->likeTotal)) {
                  foreach ($image->likeTotal as $key => $value) {
                    ?>
                    <a href="<?php echo "/web/user/profile/".$value->user_id; ?>" id = "<?php echo $value->user_id; ?>"><?php echo " ".$value->last_name." ".$value->first_name." "; ?></a>
                    <?php
                  }
                  echo " like this!!!";
                }else echo "<span class = 'empty-like'>Maybe no one has seen this =)))</span>"; ?>
               </div>
                   
                  </div>
                  <div class="comment-photo">
                    <span style = "font-style: oblique; font-weight: bold;">Do you want comment :3</span>
                   <div class = "add-comment" data-id = "<?php echo $image->id; ?>">
                    <form method="post" action="/web/photo/action/comment" id= "commentForm">
                      <textarea name="comment" class = "commentPhoto" placeholder="Comment here!!!"></textarea>
                    </form>
                  </div>
                  <?php if (isset($image->commentTotal)) {
                    if (count($image->commentTotal) > 4) {
                      echo "<a href= '#' class = 'view-more' style = 'margin: 9px; display: block;'><span style = 'color: #04656f; '>View all comment</span></a>";
                    }
      ?>
      <a href = "#" class = "view-less" style = "display: none;margin: 9px;"><span style = ' color: #04656f; margin: 9px;'> Hide comment </span></a>
      <?php
                    $y = 0;
                    foreach ($image->commentTotal as $key => $value) {
                      ?>

                       <div class="comment" style = "<?php if ($y >= 4) {
                         echo "display: none;";
                       } ?>">
                      <img class ="ava-img" src = "<?php echo $value->avatar; ?>" >
                      <a href="<?php echo "/web/user/profile/".$value->user_id; ?>"><span class = "usernameComment"><?php echo $value->last_name." ".$value->first_name; ?></span></a>
                      <span><?php echo $value->content; ?></span>
                      <br>
                      <?php if($value->user_id == $user_id){ ?>
                      <a  href="/web/photo/action/deleteComment/<?php echo $value->id;  ?>" class="remove-comment"> <span class="delete-comment" data-toggle="tooltip" title="delete comment!"> </span></a>
                      <?php } ?>
                       
                      <time>
                     <span style = "font-size: 11px; margin-left: 39px; color: #b2b7b4;"><?php 
                        $date = new TimeDate();

                          echo $date->time($value->created_at);
                      ?></span>
                      </time>
                    </div>
                      <?php
                      $y++;
                    }
                  } ?>
                 
                  </div>
                </div>
              </div>
              <?php }
              } ?>
            </div>
          </div>
        </div>  
    </div>
  </div>
  @include('layout/footer-layout')

  @endsection

  @section('script')
  
 <script type="text/javascript" src="{{url('js/api/rows.js')}}"></script>
 <script type="text/javascript" src="{{url('js/jquery.lazyload.js')}}"></script>


<script type="text/javascript">

 /* var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();*/
$(function() {
    $("img.lazy").lazyload();
});
</script>

@endsection
