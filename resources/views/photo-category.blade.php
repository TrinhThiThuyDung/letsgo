@extends('layout/main-layout')


@section('title')
Chòi Ảnh
@endsection
 @section('link')

    <link rel="stylesheet" href="{{url('css/style-home.css')}}">
    <link rel="stylesheet" href="{{url('css/gallery-image.css')}}">
 @endsection

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
                <li style="margin-left: 8%;" role="presentation" class="category <?php if($category_name == "all") echo "active"; ?>"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">Tất cả</a></li>
                  <li role="presentation" class="category <?php if($category_name == "moment") echo "active"; ?> "><a href="#moment" aria-controls="moment" role="tab" data-toggle="tab">Cuộc sống</a></li>
                <li role="presentation" class="category <?php if($category_name == "nature") echo "active"; ?> " ><a  href="#nature" aria-controls="nature" role="tab" data-toggle="tab">Thiên nhiên </a></li>
                                        
                <li role="presentation" class="category <?php if($category_name == "people") echo "active"; ?> " ><a  href="#people" aria-controls="people" role="tab" data-toggle="tab">Con người</a></li>
                <li role="presentation" class="category <?php if($category_name == "animals") echo "active"; ?> "><a  href="#animals" aria-controls="animals" role="tab" data-toggle="tab">Động vật</a></li>
                <li role="presentation" class="category <?php if($category_name == "discovery") echo "active"; ?>"><a  href="#discovery" aria-controls="discovery" role="tab" data-toggle="tab">Khám phá</a></li>
            </ul>
           
        </div>
            <!-- Tab panes -->
          <div class=" row tab-content">
           <div role="tabpanel" class="tab-pane active" id="all" style=" text-align: center;">
           <?php 
           if (!empty( $image)) {
            $i = 0;
            foreach ($image as $key => $value) {
            $url = $value->url."/".$value->resize_1;
            $user_name = $value->user_lastname." ".$value->user_firstname;
           ?>
               
                          <div class="well" style = "max-width: 386px; display: inline-block; min-width: 365px; ">
                              <img style = "width: 100%; height: 100%;" class="thumbnail img-responsive" alt="Bootstrap template" src="<?php echo $url; ?>" />
                              <div class="name" style="color: rgb(236, 108, 108); margin-left: 15px; font-style: italic; font-size: 17px;">
                        <span>Bức ảnh của <?php echo $user_name; ?></span>
                    </div>
                          </div>
                   
           <?php  
            }
           
           ?>
           </div>
              <div role="tabpanel" class="tab-pane" id="moment" style=" text-align: center;">
               
            </div>
              <div role="tabpanel" class="tab-pane" id="nature" style=" text-align: center;">
         
              </div>
              <div role="tabpanel" class="tab-pane" id="people" style=" text-align: center;">
          </div>
              <div role="tabpanel" class="tab-pane" id="animals" style=" text-align: center;">
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