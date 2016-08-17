@extends('layout/main-layout')


@section('title')
Follow
@endsection
 @section('link')

    <link rel="stylesheet" href="{{url('css/style-home.css')}}">
    <link rel="stylesheet" href="{{url('css/gallery-image.css')}}">
    <link rel="stylesheet" href="{{url('/css/albums.css')}}">

    <script type="text/javascript" src="{{url('/js/albums.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/api/main.js')}}"></script>
    <script type="text/javascript" src="{{url('js/api/action.js')}}"></script>

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
 <div id="gallerry-images" style=" margin: auto;     margin-top: 6% !important;">
    <div class="container gallerry-image" style="padding-top: 10px !important;">
        <div id="album " class="album-gal carouselGallery-col-60" style="">
<?php  if( !empty($data)){ 
	for ($i=0; $i < count($data); $i++) { 
$image = $data[$i];
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
                    <?php if ($image->location) echo "at ".$image->location; ?></span>
                    </div>

            </div>
            <div class="infor-active">
                  <span class = "icon icon-love"><?php if (isset( $image->likeTotal) ) echo count($image->likeTotal); else echo 0;  ?></span>
                  <span class = "icon comment-icon"><?php if (isset( $image->commentTotal)) echo count($image->commentTotal); else echo 0; ?></span>
                  <a href = '/web/photo/action/' data-user_id = '<?php echo $image->user_id; ?>'><button class = 'following' style = 'width: 52%;'>Following</button></a>
            </div>
            <div class = "caption" style = "margin: 4px;">
                <span> <?php if ($image->describe) echo $image->describe; ?></span>
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
                        <a href = "{{url('web/photo/action')}}" class="like" style  = "display: inline;"><span class="<?php if (isset($image->likeTotal)) {
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
                <?php   if (isset($image->commentTotal)) {
                            if (count($image->commentTotal) > 4) {
                                echo "<a href= '#' class = 'view-more' style = 'margin: 9px; display: block;'><span style = 'color: #04656f; '>View all comment</span></a>";
                            } ?>
                                <a href = "#" class = "view-less" style = "display: none;margin: 9px;"><span style = ' color: #04656f; margin: 9px;'> Hide comment </span></a>
                            <?php
                                $y = 0;
                                foreach ($image->commentTotal as $key => $value) { ?>
                                    <div class="comment" style = "<?php if ($y >= 4) echo "display: none;"; ?>">
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
	}else{ ?>
        <div class="empty-images" style = "margin-top: 20%; min-height: 262px; color: white;">
            <span>Bạn chưa theo dõi ai cả :)</span>        
        </div> 
 <?php } ?>
 </div>
    </div>
</div>

   @include('layout/footer-layout')
@endsection

@section('script')
<script type="text/javascript" src="{{url('js/api/rows.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery.lazyload.js')}}"></script>

<script type="text/javascript">
    $(function() {
    $("img.lazy").lazyload();
});
</script>
@endsection