 <nav id="myNav" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="row">
        <div class="collapse navbar-collapse" id="navigation">
           <div class="navbar-header" style="/*margin-left: 3%;*/">
             <a class="navbar-brand text-uppercase logo" style="margin: auto !important; color: #04DAF1;" href="{{url('/')}}">LET'S GO</a>
           </div>
           <ul class=" nav navbar-nav navbar-left menu">
            <li>
              <a href="{{url('/')}}" > TRANG CHỦ</a>
            </li>
            <li class="" style="height: 66%; text-align: center;width: 1px;background-color: #1B6E69 !important;margin: 3% 0;"></li>
            <li>
              <a href="#">THEO DÕI </a>
            </li>
          </ul>
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
                  <a href="#"  class="dropdown-toggle" data-toggle="dropdown">
                   <strong>
                   <img src="{{url('/images/user_alerts.png')}}">
                      <span style="font-family: Architects Daughter,cursive; color: white;">Thông Báo</span>
                   </strong>
                  </a>
                  <ul class="dropdown-menu" role = "menu">
                   <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                        <div class="menuHeader">
                          <h3>
                            Thông Báo
                          </h3>
                        </div>
                            <div class="panel panel-default">
                                <ul class="list-group" id="contact-list">
                                <li class="list-group-item">
                                       <div >
                                         <span style="font-style: italic; border-radius: none"> Bạn không có thông báo mới nào...</span>
                                       </div>
                                        
                                        <div class="clearfix"></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-xs-12 col-sm-3 col-md-4">
                                            <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                                        </div>
                                        <div class="col-xs-12 col-sm-9 col-md-8">
                                        <a href="#">
                                            <span class="name">Scott Stevens</span></a><br/>
                                           <a href="#"><span class="">ABC đã like ảnh của bạn </span></a><br/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    
                                                        <li class="list-group-item">
                                        <div class="col-xs-12 col-sm-3 col-md-4">
                                            <img src="http://api.randomuser.me/portraits/men/25.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                                        </div>
                                        <div class="col-xs-12 col-sm-9 col-md-8">
                                           <a href="#"> <span class="name">aze e</span></a><br/>
                                           <a href=""> <span > XYZ đã chia sẻ ảnh của bạn </span> </a><br/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div>
                  </ul>
                </li>
                <li class="dropdown detail-hover">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <strong>
                      <img class="ava-img" src="<?php if(isset($array_data)){ echo $array_data['user']->avatar; } ?>">
                      <span style="font-family: Architects Daughter,cursive; color: white;"><?php if(isset($array_data)){ echo $array_data['user']->username; } ?></span>
                    </strong>
                  </a>
                   <ul class="dropdown-menu" role = "menu">
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
                                    <?php if(isset($array_data)) echo $array_data['user']->username; ?>
                                  </div>
                                  <div class="profile-usertitle-job">
                                    <?php if(isset($array_data)) echo $array_data['user']->position; ?>
                                  </div>
                                </div>
                             
                                <!-- END SIDEBAR BUTTONS -->
                                <!-- SIDEBAR MENU -->
                                <div class="profile-usermenu">
                                  <ul class="nav">
                                    <li class="active">
                                      <a href="#">
                                      <i class="glyphicon glyphicon-home"></i>
                                      Trang cá nhân </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                      <i class="glyphicon glyphicon-user"></i>
                              Cài đặt tài khoản </a>
                                    </li>
                                    <li>
                                      <a href="#" target="_blank">
                                      <i class="glyphicon glyphicon-pencil"></i>
                                      Thay đổi mật khẩu </a>
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

                      </li>
      
                  </ul>
                </li>
                <li>
                  <form action="" class="search-form">
                <div class="form-group has-feedback" style="margin-top: 1%; margin-right: 4%;">
                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </form> 
                </li>
             </ul>
        </div>
    </div>
  </div>
  </nav>
   <!-- Modal -->
      <div id="modelUpload" class="modal fade" role="dialog" style="    overflow-y: hidden;">
          <div class="modal-dialog" style="width: 1330px; height: 624px;">
            <!-- Modal content-->
              <div class="modal-content" style="height: 100%;">
                <form action="{{url('/web/photo/upload')}}" method="post" name="formUpload" id="fileupload" enctype="multipart/form-data">
                  <div class="modal-header" style="border-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="modal" style="text-align: right;">&times;</button>
                <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                <div class="fileupload-buttonbar" style="text-align: center; height: 60px; border-bottom: 1px solid #869794;">
                <span class="btn btn-success fileinput-button" style="background-color: rgb(92, 184, 92) !important; width: 191px;">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Chọn Ảnh</span>
                    <input type="file" name="images[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Bắt Đầu Upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Hủy Bỏ upload</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Xóa Ảnh đã upload</span>
                </button>
                <input type="checkbox" class="toggle">
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
           
        </div>
         <!-- The global progress state -->
            <div class="fileupload-progress fade" style="height: 30px;">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
              
            </div>
                  </div>
                  <div class="modal-body" style=" overflow-y: scroll; height: 400px;  background: url(../images/icon/images.svg) no-repeat; background-position: 34% 23%; background-size: 18%;">
               
                   <div class="table-addfile">
                      <!-- The table listing the files available for upload/download -->
                    <table role="presentation" class="table table-striped" style="width: 75%;  background-color: #DFEBF5;">
                          <tbody class="files" style=""></tbody>
                    </table>
                   </div>
                     <div class="right-upload" style="float: right;">
                     <div class="form-group">
                        <label for = "album">Tên Album: </label>
                        <input type="text" id="album" name="album_name" placeholder="Hãy nhập tên album này bạn muốn"></input>
                     </div>
                       <div class="form-group">
                          <label for="kind-album">Chọn Loại Album:</label>
                          <select class="form-control" id="kind-album" name="album_kind">
                            <option value="1">All</option>
                            <option value="2">CUộc sống</option>
                            <option value="3">Động vật</option>
                            <option value="4">Thiên nhiên</option>
                          </select>
                        </div>
                       <div class="form-group">
                          <label for = "description">Viết vài lời mô tả về album: </label>
                          <textarea id="description"  class="form-control" name="album_describe" form="fileupload"></textarea>
                       </div>
                     </div>          
                  </div>
              <div class="modal-footer close-upload" style="background: rgb(247, 248, 250);">
                  <button type="button" class="btn btn-default" data-dismiss="modal" style="background: #57ED4F;">Close</button>
              </div>
               </div>
          </div>
      </div>
