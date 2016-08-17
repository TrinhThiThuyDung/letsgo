@extends('layout/main-layout')


@section('title')
Photo by kind
@endsection
 @section('link')

    <link rel="stylesheet" href="{{url('css/style-home.css')}}">
    <link rel="stylesheet" href="{{url('css/gallery-image.css')}}">

    <link rel="stylesheet" href="{{url('/css/albums.css')}}">
    <script type="text/javascript" src="{{url('/js/albums.js')}}"></script>
 @endsection
<?php
if (Session::has('id')) {

  $user_id = $array_data['user']->user_id;
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
}
 ?>
@section('content')
  @include('layout/nagavition')
    <!--========================================================
                            GALLERY IMAGE
  =========================================================-->
<div id="gallerry-image" class="bg-1" style="margin-top: 76px;">
  <div class="container gallerry-image">
    <div class="row" style="background-color: #f7f8fa; margin-top: 15px; margin-bottom: 30px;">
      <div class="col-md-12" style="padding: 15px;">
        <!-- Nav tabs -->
        <div class="card" style="margin-bottom: 45px;">
        
            <ul class="nav nav-tabs" role="tablist" style="width: 100%;">
                <li style="margin-left: 8%;" role="presentation" class="category <?php if($category_name == "all") echo "active"; ?>"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">Any</a></li>
                  <li role="presentation" class="category <?php if($category_name == "life") echo "active"; ?> "><a href="#life" aria-controls="life" role="tab" data-toggle="tab">Life</a></li>
                <li role="presentation" class="category <?php if($category_name == "nature") echo "active"; ?> " ><a  href="#nature" aria-controls="nature" role="tab" data-toggle="tab">Nature </a></li>
                                        
                <li role="presentation" class="category <?php if($category_name == "people") echo "active"; ?> " ><a  href="#people" aria-controls="people" role="tab" data-toggle="tab">People</a></li>
                <li role="presentation" class="category <?php if($category_name == "pets") echo "active"; ?> "><a  href="#pets" aria-controls="pets" role="tab" data-toggle="tab">Pets</a></li>
                <li role="presentation" class="category <?php if($category_name == "discovery") echo "active"; ?>"><a  href="#discovery" aria-controls="discovery" role="tab" data-toggle="tab">Discovery</a></li>
            </ul>
           
        </div>
            <!-- Tab panes -->
          <div class=" row tab-content">
           <div role="tabpanel" class="tab-pane active" id="all" style=" text-align: center;">
           <?php 
          if(!Session::has('id')){
           if (!empty( $image)) {
            $i = 0;
            foreach ($image as $key => $value) {
            $url = $value->url."/".$value->resize_1;
            $user_name = $value->user_lastname." ".$value->user_firstname;
           ?>   
            <div class="well" style = "max-width: 386px; display: inline-block; min-width: 365px; ">
                <img style = "width: 100%; height: 100%;" class="thumbnail img-responsive" alt="Bootstrap template" src="<?php echo $url; ?>" />
                <div class="name" style="color: rgb(236, 108, 108); margin-left: 15px; font-style: italic; font-size: 17px;">
                    <span>This Photo of <?php echo $user_name; ?></span>
                </div>
            </div>
                   
           <?php  
            }
           
           ?>
           </div>
              <div role="tabpanel" class="tab-pane" id="life" style=" text-align: center;">
               
            </div>
              <div role="tabpanel" class="tab-pane" id="nature" style=" text-align: center;">
         
              </div>
              <div role="tabpanel" class="tab-pane" id="people" style=" text-align: center;">
          </div>
              <div role="tabpanel" class="tab-pane" id="pets" style=" text-align: center;">
              </div>
              <div role="tabpanel" class="tab-pane" id="discovery" style=" text-align: center;">
                 
              </div>
          </div>
          <?php }
          }else{ ?>
            <div class="carouselGallery-col-60" style=" margin-top: 22px; border-radius: 2px;     float: none; text-align: left;"> 
            <?php   if (!empty( $image)) { 
             $i = 0;
             foreach ($image as $key => $value) {
            $url = $value->url."/".$value->resize_1;
            $user_name = $value->user_lastname." ".$value->user_firstname;
            $date = new TimeDate();
             $time = $date->time($value->created_at);  
              ?>
              <div style = "max-width: 300px; height: 250px;display: inline-block; margin: 40px 10px; text-align: center;" class = "photo carouselGallery-col-1 carouselGallery-carousel" data-avatar = "<?php echo $value->avatar; ?>" data-index="<?php echo ++$i; ?>" data-id = "<?php echo $value->id; ?>" data-username="<?php echo $user_name; ?>" data-imagetext="<?php echo $value->describe; ?>" data-location="<?php echo $value->location; ?>" data-imagepath="<?php echo $value->url."/".$value->name; ?>" data-idme = "<?php echo $user_id; ?>" data-time = "<?php echo $time; ?>" data-user_id = "<?php echo $value->user_id; ?>">
               <a href = "#" class = "photo-link"> 
                  <img class = "lazy" style = "width: 100%; object-fit: cover;height: 100%;" src="<?php echo $url; ?>"  style="height: 254px;"> </img>
                                   
                </a>
              </div>

            <?php
              }
            } ?>
            </div>
          </div>
              <div role="tabpanel" class="tab-pane" id="life" style=" text-align: center;">
               
            </div>
              <div role="tabpanel" class="tab-pane" id="nature" style=" text-align: center;">
         
              </div>
              <div role="tabpanel" class="tab-pane" id="people" style=" text-align: center;">
          </div>
              <div role="tabpanel" class="tab-pane" id="pets" style=" text-align: center;">
              </div>
              <div role="tabpanel" class="tab-pane" id="discovery" style=" text-align: center;">
                 
              </div>
          </div>
            <?php } ?>
        </div>
      </div>
    </div>
  </div>
  </div>  
   @include('layout/footer-layout')
@endsection