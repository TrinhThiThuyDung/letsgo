@extends('layout/main-layout')

@section('title','Nhà Ảnh')


@section('link')

  <link rel="stylesheet" href="{{url('css/style-home.css')}}">
  <link rel="stylesheet" href="{{url('css/gallery-image.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('css/albums.css')}}">

  <script src="{{url('js/albums.js')}}"></script>
  <script type="text/javascript" src="{{url('js/api/action.js')}}"></script>
  <script type="text/javascript" src="{{url('js/api/main.js')}}"></script>
   
@endsection


@section('content')

    <!-- ==================== HEADER LAYOUT ==================== -->
   <div id="header" class="welcome" style="height: 300px;">
        <div class="container">
          <div class="row">
       
          <div class="welcome-content">
           <div class="wel-img">
             <img src="{{url('/images/cat-logo1.png')}}">
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
     <div class="pageContent">
     
       <div id="gallerry-images">
          <div class="container gallerry-image" >
            <div id="album " class="album-gal carouselGallery-col-60">
             
             <?php 

              if (!empty($photos)) {
                $photos_total = count($photos);
                for ($i = 0; $i < $photos_total; $i++) { 
                  $remain = $photos_total - $i;
                  if ($remain >= 3) {
                    $item = rand(1, 3);
                    if ($item == 1) {
                      $image = $photos[$i];
                      $image_url = $image->url."/".$image->name;
                      $image_user_by = $image->user_firstname." ".$image->user_lastname; ?>
                       <div class=" wrap-images  item-1 ">
                      <div class="box-1">
                        <div class="photo full carouselGallery-col-1 carouselGallery-carousel" data-index="<?php echo $i; ?>" data-id = "<?php echo $image->id; ?>" data-username="<?php echo $image_user_by; ?>" data-imagetext="<?php echo $image->describe; ?>" data-location="<?php echo $image->location; ?>" data-imagepath="/<?php echo $image_url; ?>" >
                            <a class="photo-link" href="#"><img src="/<?php echo $image_url; ?>"></a>
                              <div class="action">
                                <div class="view">
                                  <a href="{{url('web/photo/action')}}" class="like">
                                    <span class="icon <?php if ($image->like_id) {
                                      echo "icon-love";
                                    }else{ echo "icon-like"; } ?>"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                      <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                    <div class="info">
                                      <div class="inside">
                                        <div class="about-img">
                                          <span class="about-img">
                                            <a href="" class="title-img"> Photo </a>
                                            by
                                            <a href="" class="by"><?php echo $image_user_by; ?></a>
                                          </span>
                                        </div>
                                        <time>
                                          <span class="hour" data-bind = "hour"><?php echo $image->created_at; ?></span>
                                          <span class="t-detail" data-bind = "t-detail">tại <?php echo $image->location; ?></span>
                                        </time>
                                      </div>
                                    </div>
                           </div>
                        </div>

                </div>
              </div>
                    <?php  }elseif ($item == 2) { 
                      $image_1 = $photos[$i];
                      $image_1_url = $image_1->url."/".$image_1->name;
                      $image_1_user_by = $image_1->user_firstname." ".$image_1->user_lastname;
                      $image_1_width = (int)explode("x", $image_1->size)[0];

                      $image_2 = $photos[++$i];
                      $image_2_url = $image_2->url."/".$image_2->name;
                      $image_2_user_by = $image_2->user_firstname." ".$image_2->user_lastname;
                      $image_2_width = (int)explode("x", $image_2->size)[1];

                       if ( ($image_1_width < 500 && $image_2_width < 500) || ($image_1_width > 650 && $image_2_width > 650 )) {
                        $image_1_size = $image_2_size = "item-same";
                      }elseif($image_1_width > 500 && $image_2_width < 500 ){
                        $image_1_size = "item-big";
                        $image_2_size = "item-small";
                      }elseif($image_1_width < 500 && $image_2_width > 500 ){
                        $image_1_size = "item-small";
                        $image_2_size = "item-big";
                      }else{
                        $image_1_size = $image_2_size = "item-same";
                      }
                       ?>
                      <div class=" wrap-images item-2">
                   <div class="<?php  echo $image_1_size; ?>">
                    <div class="box-1">
                       <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="<?php echo $i; ?>" data-id = "<?php echo $image_1->id; ?>" data-username="<?php echo $image_1_user_by; ?>" data-imagetext="<?php echo $image_1->describe; ?>" data-location="<?php echo $image_1->location; ?>" data-imagepath="/<?php echo $image_1_url; ?>" >
                    <a class="photo-link"  href="#"><img src="/<?php echo $image_1_url; ?>">
                    </a>
                    <div class="action">
                              <div class="view">
                                  <a href="{{url('web/photo/action')}}" class="like">
                                     <span class="icon <?php if ($image_1->like_id) {
                                      echo "icon-love";
                                    }else{ echo "icon-like"; } ?>"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Photo </a> by
                                    <a href="" class="by"><?php echo $image_1_user_by; ?></a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour"></span>
                                      <span class="t-detail" data-bind = "t-detail">tại <?php echo $image_1->location; ?></span>
                                  </time>
                                </div>
                              </div>
                          </div>
                  </div>
                    </div>
                   </div>
                    <div class="<?php  echo $image_2_size; ?>">
                    <div class="box-1">
                      <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="<?php echo $i; ?>" data-id = "<?php echo $image_2->id; ?>"  data-username="<?php echo $image_2_user_by; ?>" data-imagetext="<?php echo $image_2->describe; ?>" data-location="<?php echo $image_2->location; ?>" data-like data-imagepath="/<?php echo $image_2_url; ?>">
                        <a class="photo-link" href="#"><img src="/<?php echo $image_2_url; ?>">
                        </a>
                        <div class="action">
                              <div class="view">
                                  <a href="{{url('web/photo/action')}}" class="like">
                                   <span class="icon <?php if ($image_2->like_id) {
                                      echo "icon-love";
                                    }else{ echo "icon-like"; } ?>"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                 
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Photo </a> by
                                    <a href="" class="by">by <?php echo $image_2_user_by; ?></a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                      </div>
                    </div>
                 </div>
                </div>
                     <?php }else{ 
                      $image_1 = $photos[$i];
                      $image_1_index = $i;
                      $image_1_url = $image_1->url."/".$image_1->name;
                      $image_1_user_by = $image_1->user_firstname." ".$image_1->user_lastname;

                      $image_2 = $photos[++$i];
                      $image_2_index = $i;
                      $image_2_url = $image_2->url."/".$image_2->name;
                      $image_2_user_by = $image_2->user_firstname." ".$image_2->user_lastname;

                      $image_3 = $photos[++$i];
                      $image_3_index = $i;
                      $image_3_url = $image_3->url."/".$image_3->name;
                      $image_3_user_by = $image_3->user_firstname." ".$image_3->user_lastname;

                      $rand = rand(0,1);
                      if ($rand == 0) { ?>
                         <div class="wrap-images item-3">
                  <div class="item-big">
                    <div class="box-1">
                      <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="<?php echo $image_1_index; ?>" data-username="<?php echo $image_1_user_by; ?>" data-imagetext="<?php echo $image_1->describe; ?>" data-location="<?php echo $image_1->location; ?>" data-imagepath="<?php echo $image_1_url; ?>" data-id = "<?php echo $image_1->id; ?>">
                        <a class="photo-link" href="#"><img src="/<?php echo $image_1_url; ?>"></a>
                         <div class="action">
                              <div class="view">
                                  <a href="{{url('web/photo/action')}}" class="like">
                                     <span class="icon <?php if ($image_1->like_id) {
                                      echo "icon-love";
                                    }else{ echo "icon-like"; } ?>"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Photo </a> by
                                    <a href="" class="by">by <?php echo $image_1_user_by; ?></a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">tại <?php echo $image_1->location; ?></span>
                                  </time>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
                 <div class="item-small">
                    <div class="small-1">
                      <div class="box-1">
                        <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="<?php echo $image_2_index; ?>" data-username="<?php echo $image_2_user_by; ?>" data-imagetext="<?php echo $image_2->describe; ?>" data-location="<?php echo $image_2->location; ?>" data-imagepath="<?php echo $image_2_url; ?>" data-id = "<?php echo $image_2->id; ?>">
                             <a class="photo-link" href="#"><img src="/<?php echo $image_2_url; ?>">
                             </a>
                              <div class="action">
                              <div class="view">
                                  <a href="{{url('web/photo/action')}}" class="like">
                                    <span class="icon <?php if ($image_2->like_id) {
                                      echo "icon-love";
                                    }else{ echo "icon-like"; } ?>"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img">Photo </a> by
                                    <a href="" class="by">by <?php echo $image_2_user_by; ?></a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="small-2">
                    <div class="box-1">
                      <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="<?php echo $image_3_index; ?>" data-username="<?php echo $image_3_user_by; ?>" data-imagetext="<?php echo $image_3->describe; ?>" data-location="<?php echo $image_3->location; ?>" data-imagepath="<?php echo $image_3_url; ?>" data-id = "<?php echo $image_3->id; ?>" >
                          <a class="photo-link" href="#"><img src="/<?php echo $image_3_url; ?>">
                          </a>
                          <div class="action">
                              <div class="view">
                                  <a href="{{url('web/photo/action')}}" class="like">
                                    <span class="icon <?php if ($image_3->like_id) {
                                      echo "icon-love";
                                    }else{ echo "icon-like"; } ?>"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Photo </a> by
                                    <a href="" class="by">by <?php echo $image_3_user_by; ?></a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">chụp ở <?php echo $image_3->location; ?> </span>
                                  </time>
                                </div>
                              </div>
                          </div>
                      </div>
                    
                    </div>
                  </div>
                 </div>
              </div>
                      <?php }else{ ?>
              <div class="wrap-images item-3" style="height: 300px;">

                <div class="medium m1">
                  <div class="box-1">
                     <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="<?php echo $image_1_index; ?>" data-username="<?php echo $image_1_user_by; ?>" data-imagetext="<?php echo $image_1->describe; ?>" data-location="<?php echo $image_1->location; ?>" data-imagepath="<?php echo $image_1_url; ?>" data-id = "<?php echo $image_1->id; ?>">
                    <a class="photo-link" href="#"><img src="/<?php echo $image_1_url; ?>">

                    </a>
                    <div class="action">
                              <div class="view">
                                  <a href="{{url('web/photo/action')}}" class="like">
                                      <span class="icon <?php if ($image_1->like_id) {
                                      echo "icon-love";
                                    }else{ echo "icon-like"; } ?>"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Bức ảnh của </a> by
                                    <a href="" class="by"> <?php echo $image_1_user_by; ?></a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">chụp ở <?php echo $image_1->location; ?></span>
                                  </time>
                                </div>
                              </div>
                          </div>
                  </div>
                  </div>
                </div>
                 <div class="medium m2">
                  <div class="box-1">
                     <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="<?php echo $image_2_index; ?>" data-username="<?php echo $image_2_user_by; ?>" data-imagetext="<?php echo $image_2->describe; ?>" data-location="<?php echo $image_2->location; ?>" data-imagepath="<?php echo $image_2_url; ?>" data-id = "<?php echo $image_2->id; ?>">
                    <a class="photo-link" href="#"><img src="/<?php echo $image_2_url; ?>">
                    </a>
                    <div class="action">
                              <div class="view">
                                  <a href="{{url('web/photo/action')}}" class="like">
                                     <span class="icon <?php if ($image_2->like_id) {
                                      echo "icon-love";
                                    }else{ echo "icon-like"; } ?>"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Bức ảnh của </a> by
                                    <a href="" class="by"><?php echo $image_2_user_by; ?></a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">chụp ở <?php echo $image_2->location; ?></span>
                                  </time>
                                </div>
                              </div>
                          </div>
                  </div>
                  </div>
                </div>
                 <div class="medium m3">
                  <div class="box-1">
                     <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="<?php echo $image_3_index; ?>" data-username="<?php echo $image_3_user_by; ?>" data-imagetext="<?php echo $image_3->describe; ?>" data-location="<?php echo $image_3->location; ?>" data-imagepath="<?php echo $image_3_url; ?>" data-id = "<?php echo $image_3->id; ?>" >
                    <a class="photo-link"  href=""><img src="/<?php echo $image_3_url; ?>">
                    </a>
                    <div class="action">
                              <div class="view">
                                  <a href="{{url('web/photo/action')}}" class="like">
                                    <span class="icon <?php if ($image_3->like_id) {
                                      echo "icon-love";
                                    }else{ echo "icon-like"; } ?>"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Bức ảnh của </a> by
                                    <a href="" class="by"><?php echo $image_3_user_by; ?></a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">chụp ở <?php echo $image_3->location; ?></span>
                                  </time>
                                </div>
                              </div>
                          </div>
                  </div>
                  </div>
                </div>
              </div>
                     <?php }
                      } 
                  }
                  else{
                    if ($remain == 1 ) { 
                      $image = $photos[$i];
                      $image_url = $image->url."/".$image->name;
                      $image_user_by = $image->user_firstname." ".$image->user_lastname;
                     ?>
                      <div class=" wrap-images  item-1 ">
                      <div class="box-1">
                        <div class="photo full carouselGallery-col-1 carouselGallery-carousel" data-index="<?php echo $i; ?>" data-id = "<?php echo $image->id; ?>" data-username="<?php echo $image_user_by; ?>" data-imagetext="<?php echo $image->describe; ?>" data-location="<?php echo $image->location; ?>" data-imagepath="/<?php echo $image_url; ?>" >
                            <a class="photo-link" href="#"><img src="/<?php echo $image_url; ?>"></a>
                              <div class="action">
                                <div class="view">
                                  <a href="{{url('web/photo/action')}}" class="like">
                                    <span class="icon <?php if ($image->like_id) {
                                      echo "icon-love";
                                    }else{ echo "icon-like"; } ?>"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                      <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                    <div class="info">
                                      <div class="inside">
                                        <div class="about-img">
                                          <span class="about-img">
                                            <a href="" class="title-img"> Photo </a>
                                            by
                                            <a href="" class="by"><?php echo $image_user_by; ?></a>
                                          </span>
                                        </div>
                                        <time>
                                          <span class="hour" data-bind = "hour"><?php echo $image->created_at; ?></span>
                                          <span class="t-detail" data-bind = "t-detail">tại <?php echo $image->location; ?></span>
                                        </time>
                                      </div>
                                    </div>
                           </div>
                        </div>

                </div>
              </div>
                    <?php }elseif ($remain == 2) { 
                   
                      $image_1 = $photos[$i];
                      $image_1_url = $image_1->url."/".$image_1->name;
                      $image_1_user_by = $image_1->user_firstname." ".$image_1->user_lastname;
                      $image_1_width = (int)explode("x", $image_1->size)[0];

                      $image_2 = $photos[++$i];
                      $image_2_url = $image_2->url."/".$image_2->name;
                      $image_2_user_by = $image_2->user_firstname." ".$image_2->user_lastname;
                      $image_2_width = (int)explode("x", $image_2->size)[1];

                      if ( ($image_1_width < 500 && $image_2_width < 500) || ($image_1_width > 650 && $image_2_width > 650 )) {
                        $image_1_size = $image_2_size = "item-same";
                      }elseif($image_1_width > 500 && $image_2_width < 500 ){
                        $image_1_size = "item-big";
                        $image_2_size = "item-small";
                      }elseif($image_1_width < 500 && $image_2_width > 500 ){
                        $image_1_size = "item-small";
                        $image_2_size = "item-big";
                      }else{
                        $image_1_size = $image_2_size = "item-same";
                      }
                      ?>

                    <div class=" wrap-images item-2">
                   <div class="<?php echo $image_1_size; ?>">
                    <div class="box-1">
                       <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="<?php echo $i; ?>" data-id = "<?php echo $image_1->id; ?>" data-username="<?php echo $image_1_user_by; ?>" data-imagetext="<?php echo $image_1->describe; ?>" data-location="<?php echo $image_1->location; ?>" data-imagepath="/<?php echo $image_1_url; ?>" >
                    <a class="photo-link"  href="#"><img src="/<?php echo $image_1_url; ?>">
                    </a>
                    <div class="action">
                              <div class="view">
                                  <a href="{{url('web/photo/action')}}" class="like">
                                     <span class="icon <?php if ($image_1->like_id) {
                                      echo "icon-love";
                                    }else{ echo "icon-like"; } ?>"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Photo </a> by
                                    <a href="" class="by"><?php echo $image_1_user_by; ?></a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour"></span>
                                      <span class="t-detail" data-bind = "t-detail">tại <?php echo $image_1->location; ?></span>
                                  </time>
                                </div>
                              </div>
                          </div>
                  </div>
                    </div>
                   </div>
                    <div class="<?php echo $image_2_size; ?>">
                    <div class="box-1">
                      <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="<?php echo $i; ?>" data-id = "<?php echo $image_2->id; ?>"  data-username="<?php echo $image_2_user_by; ?>" data-imagetext="<?php echo $image_2->describe; ?>" data-location="<?php echo $image_2->location; ?>" data-like data-imagepath="/<?php echo $image_2_url; ?>">
                        <a class="photo-link" href="#"><img src="/<?php echo $image_2_url; ?>">
                        </a>
                        <div class="action">
                              <div class="view">
                                  <a href="{{url('web/photo/action')}}" class="like">
                                   <span class="icon <?php if ($image_2->like_id) {
                                      echo "icon-love";
                                    }else{ echo "icon-like"; } ?>"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                 
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Photo </a> by
                                    <a href="" class="by">by <?php echo $image_2_user_by; ?></a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                      </div>
                    </div>
                 </div>
                </div>
                    <?php }
                  }
                }
              }
              ?>   
            </div>
          </div>
        </div>  
    </div>
  </div>
  @include('layout/footer-layout')

  @endsection

  @section('script')
  

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

@endsection