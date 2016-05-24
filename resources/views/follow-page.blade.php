@extends('layout/main-layout')


@section('title')
Theo dõi
@endsection
 @section('link')

    <link rel="stylesheet" href="{{url('css/style-home.css')}}">
    <link rel="stylesheet" href="{{url('css/gallery-image.css')}}">
 <link rel="stylesheet" href="{{url('/css/albums.css')}}">
  <script type="text/javascript" src="{{url('/js/albums.js')}}"></script>
    <script type="text/javascript" src="{{url('js/api/main.js')}}"></script>
 @endsection

@section('content')
  
  @include('layout/nagavition')
<?php if( !empty($data[0]->image)){ 
	foreach ($data as $key => $value) {
		$username = $value->user_lastname." ".$value->user_firstname;
		$image = $value->image;
		$avatar = $value->user_avatar;
	?>
     <div class = "follow">
     	<div class = "userFollow">
     	<a href = "{{url('web/user/profile/')}}/<?php echo $value->user_followed_id; ?>" >
     		<img src = "<?php echo $avatar; ?>" >
     		<span class = "name"><?php echo $username; ?></span>
     		</a>
     	</div>
     	<div class="carouselGallery-col-60" style=" margin-top: 22px; border-radius: 2px;float: none; text-align: left; background: rgb(242, 243, 238);"> 
     	<?php $i = 0; 
     	foreach ($image as $key => $photo) {
     		
     	?>
     	
          	<div style = "max-width: 350px; height: 250px;display: inline-block; margin: 40px 10px; text-align: center;" class = "photo carouselGallery-col-1 carouselGallery-carousel" data-avatar = "<?php  echo $avatar; ?>"  data-index="<?php echo ++$i; ?>" data-id = "<?php echo $photo->id; ?>" data-username="<?php echo $username; ?>" data-imagetext="<?php echo $photo->describe; ?>" data-location="<?php echo $photo->location; ?>" data-imagepath="<?php echo $photo->url."/".$photo->name; ?>" >
                    <a href = "#" class = "photo-link"> 
                        <img style = "width: 100%; object-fit: cover;height: 100%;" src="<?php echo $photo->url."/".$photo->resize_1; ?>"   style="height: 254px;"> </img>
                    </a>
            </div> 
    
     <?php } ?> 
      </div>
     </div>
    
 <?php } 
	}else{ ?>
       <div class="empty-images" style = "margin-top: 20%; min-height: 262px; color: white;">
            <span>Bạn chưa theo dõi ai cả :)</span>        
        </div> 
 <?php } ?>
   @include('layout/footer-layout')
@endsection