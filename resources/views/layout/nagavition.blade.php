<?php if (isset($array_data)) { ?>


 <nav id="myNav" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
   <!--  <div class="row"> -->
    <div class="navbar-header" style="/*margin-left: 3%;*/">
             <a class="navbar-brand text-uppercase logo" style="margin: auto !important; color: #04DAF1;" href="{{url('/')}}">LET'S GO</a>
              <ul class=" nav navbar-nav navbar-left menu">
            <li>
              <a href="{{url('/')}}" > HOME </a>
            </li>
            <li class="" style="height: 66%; text-align: center;width: 1px;background-color: #1B6E69 !important;margin: 3% 0;"></li>
            <li>
              <a href="{{url('web/photo/show/user/follow')}}">FOLLOW </a>
            </li>
            <li>
              <a href="{{url('web/photo/show/images/all')}}"> PHOTO BY KIND </a>
            </li>
          </ul>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
          
          
<!--           <form action="" class="search-form">
                <div class="form-group has-feedback" style="margin-top: 1%; margin-right: 4%;">
                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </form> -->
             <ul class="nav navbar-nav navbar-right user-detail" id="nav-user"  style="  /*  margin-right: 8px;*/">
            
              <li>
               
                  <button style="margin: 3px;" type="button" id="upload" data-toggle="modal" data-target="#modelUpload" class="btn btn-success navbar-btn btn-circle" >Upload Photo</button>
               
              </li>
               
                <li class="dropdown detail-hover">
                <?php   if (isset($array_data['noti'])) { 

                                          $total_noti_seen    = count($array_data['noti']['noti_seen']);
                                          $total_noti_not_seen = count($array_data['noti']['noti_not_seen']);
                                          $total_noti = ($total_noti_seen + $total_noti_seen);
                                         
                                         ?>
                  <?php if( $total_noti_not_seen > 0) { ?><span class = "totalNotSeen"><?php echo $total_noti_not_seen; ?></span> <?php } ?>
                  <a href="#"  class="dropdown-toggle" data-toggle="dropdown">
                   <strong>
                   <img src="{{url('/images/user_alerts.png')}}">
                      <span style="font-family: Architects Daughter,cursive; color: white;">Notification</span>
                   </strong>
                  </a>
                  <ul class="dropdown-menu" role = "menu" style = "width: 440px;">
                   <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                          <div class="menuHeader">
                          <h3>
                            Notification
                          </h3>
                        </div>
                            <div class="panel panel-default">
                                <ul class="list-group" id="contact-list" style="    overflow-y: auto; max-height: 500px;">
                                <li class="list-group-item">
                                       <div >
                                       <?php 
                                        if ( $total_noti_not_seen == 0 && $total_noti_seen == 0) { ?>
                                  <span style="font-style: italic; border-radius: none"> BYou have no notification..</span>
                                        <?php 
                                        }
                                        else{
                                          if ($total_noti_not_seen == 0) { ?>
                                         <span style="font-style: italic; border-radius: none"> You have no notification not seen...</span>      
                                         <?php }
                                         else{ ?>
                                         <span style="font-style: italic; border-radius: none"> You have <?php echo $total_noti_not_seen; ?> notification not seen.. </span>
                                       <?php  }
                                        }
                                       }else { ?>
                                        <span style="font-style: italic; border-radius: none"> You have no notification..</span>
                                         <?php } ?>
                                       </div>
                                        
                                        <div class="clearfix"></div>
                                    </li>
                                    <?php 
                                    if ( isset( $array_data['noti'] )) {
                                      $noti_not_seen = $array_data['noti']['noti_not_seen'];
                        
                                      $noti_seen = $array_data['noti']['noti_seen'];

                                      $noti = array_merge($noti_not_seen, $noti_seen);
                                   foreach ($noti as $key => $value) {
                                        $user_name = $value->user_lastname." ".$value->user_firstname;
                                      ?>
                                       <li class="list-group-item <?php if ($value->seen == 0) { echo "noti"; } ?>" data-noti_id = "<?php echo $value->id; ?>" data-url = "{{url('/web/notication/setSeen')}}" style = "<?php if ($value->seen == 0) {
                                         echo "background: rgb(235, 245, 245);";
                                       } if($value->kind === "follow" ) echo "height: 74px;"; ?>">
                                        <div class="col-xs-12 col-sm-3 col-md-4" style = " padding: 0px; width: 16%;">
                                            <img  src="<?php echo $value->user_avatar; ?>" alt="<?php echo $user_name; ?>" class="img-responsive img-circle" />
                                        </div>
                                        <div class="col-xs-12 col-sm-9 col-md-8" style = 'width: 79%; <?php if($value->kind === "follow" ) echo "margin-top: 13px;"; ?>'>
                                        <a href="{{url('/web/user/profile/')}}/<?php echo $value->user_from_id; ?>" class="name"><?php echo $user_name; ?></a>
                                        <span style = 'display: inline-block;'> <?php 
                                            if ($value->kind === "like") {
                                              echo " like your photo!";
                                            }
                                            else if($value->kind === "comment"){
                                              echo " comment your photo!";
                                            }
                                            else if($value->kind === "follow" ){
                                              echo " start follow you!";
                                            }
                                            ?> </span>
                                           <a href="#">
                                            <?php if ($value->kind === "like" || $value->kind === "comment") { ?>

                                            <img style = 'width: 45px; float: right; position: absolute; top: 0px; right: 0; height: 37px; border-radius:3px; ' src = "<?php 
                                              echo $value->image_url;
                                          ?> ">
                                          <?php }?>
                                            </a><br/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                   <?php } 
                                   } ?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div>
                  </ul>
                  </li>
              
                <li class="dropdown detail-hover">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="padding: 5px;">
                    <strong>
                      <img class="ava-img" src="<?php if(isset($array_data)){ echo $array_data['user']->avatar; } ?>">
                      <span style="font-family: Architects Daughter,cursive; color: white; "><?php if(isset($array_data)){ echo $array_data['user']->last_name." ".$array_data['user']->first_name; } ?></span>
                    </strong>
                  </a>
                   <ul class="dropdown-menu" role = "menu" style="width: 340px;">
                        <div class="container">
                            <div class="row profile-row">
                            <div class="col-md-12">
                              <div class="profile-sidebar">
                                <!-- SIDEBAR USERPIC -->
                                <div class="profile-userpic">
                                  <img src="<?php if(isset($array_data)){ echo $array_data['user']->avatar; } ?>" class="img-responsive" alt="">
                                </div>
                             
                                <div class="profile-usertitle">
                                  <div class="profile-usertitle-name">
                                    <?php if(isset($array_data)) echo $array_data['user']->last_name." ".$array_data['user']->first_name; ?>
                                  </div>
                                  <div class="profile-usertitle-job">
                                    <?php if(isset($array_data)) echo $array_data['user']->position; ?>
                                  </div>
                                </div>
                             
                                <!-- END SIDEBAR BUTTONS -->
                                <!-- SIDEBAR MENU -->
                                <?php $href = "/web/user/profile/".$array_data['user']->user_id; ?>
                                <div class="profile-usermenu">
                                  <ul class="nav">
                                    <li class="active">
                                      <a href="<?php  echo $href; ?>">
                                      <i class="glyphicon glyphicon-user"></i>
                                      Profile </a>
                                    </li>
                                    <li >
                                      <a href="<?php  echo $href; ?>" id="like-user">
                                      <i class="glyphicon glyphicon-heart"></i>
                                    Photo Love </a>
                                    </li>
                                    <li >
                                      <a href="<?php  echo $href; ?>" id="update-user">
                                      <i class="glyphicon glyphicon-pencil"></i>
                                       Update Information Profile </a>
                                    </li>
                                    <li >
                                      <a href="<?php  echo $href; ?>" id="follow-user">
                                      <i class="glyphicon glyphicon-book"></i>
                                       Follow </a>
                                    </li>
                                    <li>
                                      <a href="{{url('web/auth/logout')}}" id="signout">
                                      <i class="glyphicon glyphicon-flag"></i>
                                      Sing Out </a>
                                    </li>
                                  </ul>
                                </div>
                                <!-- END MENU -->
                              </div>
                            </div>
                          </div>
                        </div>
                        </ul>
                      </li>
      
                  </ul>
        </div>
   <!--  </div> -->
  </div>
  </nav>
   <!-- Modal -->
      <div id="modelUpload" class="modal fade" role="dialog" style="overflow-y: hidden;">
          <div class="modal-dialog" style="width: 99%; height: 96%; margin-top: 17px;">
            <!-- Modal content-->
              <div class="modal-content" style="height: 100%; background-color: #f7f8fa;">
                  <div class="modal-body" style = "border-radius: 6px;">
                  <form action="{{url('/web/photo/upload')}}" method="post" name="formUpload" id="fileupload" enctype="multipart/form-data" style = "">
                      <div class="upload-area" style="height: 100%;" >
                          <span class="fileinput-button">
                              <img src="/images/icon/upload.svg" style="width: 110px;">
                              <span>Select Photo</span>
                              <input type="file" name="image" style="font-size: 119px;" id = "upload-img">
                            </span>
                           <p> You only just upload photo! Other things let we do.</p>
                          </div>

                  <div class="table-addfile" style="overflow-y: auto; height: 100%; background-color: #2b2727; display: none;">
                      <!-- The table listing the files available for upload/download -->

                    <div style="width: 75%; height: 100%;    border-radius: 4px;">
                      <div id = "photo" class="files" style="text-align: center; padding: 4%;">
                           <div style = "display: inline-block;">
                             <a href = "#" data-toggle="tooltip" title="Change another image!"><span class = "change-img"></span></a>
                           </div>
                      </div>
                      <div id="filterContainer">
                        <ul id="filters">
                          <li> <a href="#" id="normal">Normal</a> </li>
                          <li> <a href="#" id="vintage">Vintage</a> </li>
                          <li> <a href="#" id="lomo">Lomo</a> </li>
                          <li> <a href="#" id="clarity">Clarity</a> </li>
                          <li> <a href="#" id="sinCity">Sin City</a> </li>
                          <li> <a href="#" id="sunrise">Sunrise</a> </li> 
                          <li> <a href="#" id="crossProcess">Cross Process</a> </li>
                          <li> <a href="#" id="orangePeel">Orange Peel</a> </li>
                          <li> <a href="#" id="love">Love</a> </li>
                          <li> <a href="#" id="grungy">Grungy</a> </li>
                          <li> <a href="#" id="jarques">Jarques</a> </li>
                          <li> <a href="#" id="pinhole">Pinhole</a> </li>
                          <li> <a href="#" id="oldBoot">Old Boot</a> </li>
                          <li> <a href="#" id="glowingSun">Glowing Sun</a> </li>
                          <li> <a href="#" id="hazyDays">Hazy Days</a> </li>
                          <li> <a href="#" id="herMajesty">Her Majesty</a> </li>
                          <li> <a href="#" id="nostalgia">Nostalgia</a> </li>
                          <li> <a href="#" id="hemingway">Hemingway</a> </li>
                          <li> <a href="#" id="concentrate">Concentrate</a> </li>
                        </ul>
                      </div>
                    </div>
                   </div>
                   <div class="right-upload" style="float: right; display: none;">
                          <div class="fileupload-buttonbar" style="text-align: center; height: 60px; border-bottom: 1px solid #869794;">
                              <button class="btn btn-primary start publish" id = "button-upload">
                                  <span>Start Upload</span>
                              </button>

                      </div>
                    <div class="form-group" style = "margin-top: 15px;">
                          <label for = "description">Your caption: </label>
                          <textarea id="description"  class="form-control" name="image_describe" form="fileupload" placeholder = "Your feelings"></textarea>
                       </div>
                       <div class="form-group" >
                          <label for="image_kind">Kind of photo:</label>
                          <select class="form-control" id="image_kind" name="image_kind" form="fileupload">
                            <option value="1">Any</option>
                            <option value="2">Life</option>
                            <option value="3">Nature</option>  
                            <option value="2">People</option>
                            <option value="3">Pets</option>
                            <option value="4">Discovery</option>
                          </select>
                        </div>
                       
                       <div class="form-group">
                          <label for = "localtion">Location: </label>
                          <input type="text" id="location" name="image_location" placeholder="Tell us where did you take photo?" form="fileupload"></input>
                       </div>

                     </div> 
                </div>
                   </div>
                    </form>  
               </div>
          </div>
     </div>
   <!--   </div> -->
   <?php }else{ ?>
     <div class = "back" style = "    position: absolute; top: -35px; left: 25px;">
       <a href = "{{url('/')}}" style = "color: #DAC4C4; font-style: italic;"> Back...</a>
     </div>
    <?php } ?>