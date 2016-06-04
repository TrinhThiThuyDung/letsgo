<?php if (isset($array_data)) { ?>


 <nav id="myNav" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
   <!--  <div class="row"> -->
    <div class="navbar-header" style="/*margin-left: 3%;*/">
             <a class="navbar-brand text-uppercase logo" style="margin: auto !important; color: #04DAF1;" href="{{url('/')}}">LET'S GO</a>
              <ul class=" nav navbar-nav navbar-left menu">
            <li>
              <a href="{{url('/')}}" > TRANG CHỦ</a>
            </li>
            <li class="" style="height: 66%; text-align: center;width: 1px;background-color: #1B6E69 !important;margin: 3% 0;"></li>
            <li>
              <a href="{{url('web/photo/show/user/follow')}}">THEO DÕI </a>
            </li>
            <li>
              <a href="{{url('web/photo/show/images/all')}}">CHÒI ẢNH </a>
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
               
                  <button style="margin: 3px;" type="button" id="upload" data-toggle="modal" data-target="#modelUpload" class="btn btn-success navbar-btn btn-circle" >Đăng Ảnh</button>
               
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
                      <span style="font-family: Architects Daughter,cursive; color: white;">Thông Báo</span>
                   </strong>
                  </a>
                  <ul class="dropdown-menu" role = "menu" style = "width: 440px;">
                   <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                          <div class="menuHeader">
                          <h3>
                            Thông Báo
                          </h3>
                        </div>
                            <div class="panel panel-default">
                                <ul class="list-group" id="contact-list" style="    overflow-y: auto; max-height: 290px;">
                                <li class="list-group-item">
                                       <div >
                                       <?php 
                                        if ( $total_noti_not_seen == 0 && $total_noti_seen == 0) { ?>
                                  <span style="font-style: italic; border-radius: none"> Bạn không có thông báo nào..</span>
                                        <?php 
                                        }
                                        else{
                                          if ($total_noti_not_seen == 0) { ?>
                                         <span style="font-style: italic; border-radius: none"> Bạn không có thông báo mới nào...</span>      
                                         <?php }
                                         else{ ?>
                                         <span style="font-style: italic; border-radius: none"> Bạn có <?php echo $total_noti_not_seen; ?> thông báo mới chưa đọc.. </span>
                                       <?php  }
                                        }
                                       }else { ?>
                                        <span style="font-style: italic; border-radius: none"> Bạn không có thông báo nào..</span>
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
                                       } ?>">
                                        <div class="col-xs-12 col-sm-3 col-md-4" style = "margin: 15px 0px; padding: 0px; width: 20%;">
                                            <img  src="<?php echo $value->user_avatar; ?>" alt="<?php echo $user_name; ?>" class="img-responsive img-circle" />
                                        </div>
                                        <div class="col-xs-12 col-sm-9 col-md-8" style = 'width: 79%;'>
                                        <a href="{{url('/web/user/profile/')}}/<?php echo $value->user_from_id; ?>" class="name"><?php echo $user_name; ?></a><br>
                                        <span style = 'display: inline-block;'> <?php 
                                            if ($value->kind === "like") {
                                              echo " đã thích ảnh của bạn!";
                                            }
                                            else if($value->kind === "comment"){
                                              echo " đã bình luận về ảnh của bạn";
                                            }
                                            else if($value->kind === "follow" ){
                                              echo " đã bắt đầu theo dõi bạn";
                                            }
                                            ?> </span>
                                           <a href="#">
                                            <?php if ($value->kind === "like" || $value->kind === "comment") { ?>

                                            <img style = 'width: 45px; float: right; position: absolute; top: 0px; right: 0; height: 50px; border-radius:3px; ' src = "<?php 
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
                                    <?php if(isset($array_data)) echo $array_data['user']->first_name." ".$array_data['user']->last_name; ?>
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
                                      Trang cá nhân </a>
                                    </li>
                                    <li >
                                      <a href="<?php  echo $href; ?>" id="like-user">
                                      <i class="glyphicon glyphicon-heart"></i>
                                    Ảnh yêu thích</a>
                                    </li>
                                    <li >
                                      <a href="<?php  echo $href; ?>" id="update-user">
                                      <i class="glyphicon glyphicon-pencil"></i>
                                       Cập nhật thông tin </a>
                                    </li>
                                    <li >
                                      <a href="<?php  echo $href; ?>" id="follow-user">
                                      <i class="glyphicon glyphicon-book"></i>
                                       Danh sách theo dõi </a>
                                    </li>
                                    <li>
                                      <a href="{{url('web/auth/logout')}}" id="signout">
                                      <i class="glyphicon glyphicon-flag"></i>
                                      Đăng xuất </a>
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
          <div class="modal-dialog" style="width: 1330px; height: 580px;">
            <!-- Modal content-->
              <div class="modal-content" style="height: 100%; background-color: #f7f8fa;">
                  <div class="modal-body">
                  <form action="{{url('/web/photo/upload')}}" method="post" name="formUpload" id="fileupload" enctype="multipart/form-data">
                      <div class="upload-area" style="height: 100%;" >
                          <span class="fileinput-button">
                              <img src="/images/icon/upload.svg" style="width: 110px;">
                              <span>Chọn Ảnh</span>
                              <input type="file" name="images[]" style="font-size: 119px;" multiple>
                            </span>
                           <p> Bạn chỉ cần upload ảnh! Những việc khác cứ để chúng tôi lo.</p>
                          </div>

                  <div class="table-addfile" style="overflow-y: auto;">
                      <!-- The table listing the files available for upload/download -->
                    <table role="presentation" class="table table-striped" style="width: 75%;">
                          <tbody class="files" style="float: left; ">
                            <tr class = 'add-more' style='width: 288px; height: 300px; display: none; background: rgba(228, 229, 231, 0.67);'> <td style="border: none;"> <span class = 'fileinput-button' ><img src = '/images/icon/add-icon.svg' style = 'width:84%;margin: 20px; position: initial;'><input type='file' name='images[]' multiple></span> </td></tr>
                          </tbody>
                            
                    </table>

                   </div>
                       <div class="right-upload" style="float: right; display: none; margin-right: 32px;">
                          <div class="fileupload-buttonbar" style="text-align: center; height: 60px; border-bottom: 1px solid #869794;">
                              <button type="submit" class="btn btn-primary start publish">
                                  <span>Bắt Đầu Upload</span>
                              </button>
                      </div>
                    
                       <div class="form-group">
                          <label for="image_kind">Chọn Loại Ảnh:</label>
                          <select class="form-control" id="image_kind" name="image_kind" form="fileupload">
                            <option value="1">All</option>
                            <option value="2">CUộc sống</option>
                            <option value="3">Động vật</option>
                            <option value="4">Thiên nhiên</option>
                          </select>
                        </div>
                       <div class="form-group">
                          <label for = "description">Viết vài lời mô tả về những bức ảnh: </label>
                          <textarea id="description"  class="form-control" name="image_describe" form="fileupload"></textarea>
                       </div>
                       <div class="form-group">
                          <label for = "localtion">Nơi chụp: </label>
                          <input type="text" id="location" name="image_location" placeholder="Cho chúng tôi biết bạn chụp ở đâu!" form="fileupload"></input>
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
       <a href = "{{url('/')}}" style = "color: #DAC4C4; font-style: italic;"> Quay lại...</a>
     </div>
    <?php } ?>