<!--========================================================
                            NAVBAR HEADER
  =========================================================-->
<nav class="navbar navbar-default navbar-fixed-top navbar-index animation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">LET'S GO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" style="padding-right: 15px;">
        <li><a href="#myPage">TRANG CHỦ</a></li>
        <li><a href="#about">GIỚI THIỆU</a></li>
        <li><a href="#gallerry-image">HÌNH ẢNH</a></li>
        <li><a href="#" data-toggle="modal" data-target="#modelRegister">ĐĂNG KÝ</a></li>
        <li><a href="#" data-toggle="modal" data-target="#modelLogin">ĐĂNG NHẬP</a></li>
        
     
      </ul>
    </div>
  </div>
</nav>
<!-- ================ MODEL LOGIN ================= -->

  <div class="modal fade" id="modelLogin" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="middlePage" style="left: 10%;">
          <div class="page-header">
            <h1 class="logo">LET"S GO <small>Welcome to our Let's go world!</small></h1>
          </div>

                <div class="panel panel-info">
                  <div class="panel-heading">
                    <h3 class="panel-title"> Come with me !</h3>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-5" >
                        <a href="#"><img class="id" src="http://techulus.com/buttons/fb.png" /></a><br/>
                        <a href="#"><img class="id" src="http://techulus.com/buttons/tw.png" /></a><br/>
                        <a href="#"><img class="id" src="http://techulus.com/buttons/gplus.png" /></a>
                      </div>
                    <div class="col-md-7" style="border-left:1px solid #ccc;height:160px">
                      <form class="form-horizontal" method="post" action="{{url('/auth/signin')}}">
                        <fieldset>

                          <input id="textinput" name="email" type="text" placeholder="Nhập Email" class="form-control input-md">
                          <div class="spacing">
                            <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1"><small>Nhớ Đăng Nhập</small>
                          </div>


                          <input id="textinput" name="password" type="password" placeholder="Enter Password" class="form-control input-md">
                          <div class="spacing"><a href="#"><small>Bạn quên mật khẩu? Đừng lo!</small></a><br/></div>

                          <button style="width: 120px !important;" id="singlebutton" name="singlebutton" class="btn btn-info btn-sm pull-right">Đăng Nhập</button>
                        </fieldset>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<!-- ================ MODEL REGISTER=============== -->
<div class="modal fade" id="modelRegister" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="container middlePage">
          <div class="page-header">
            <h1 class="logo">LET'S GO <small>Chào mừng tới thế giới của Let's Go!</small></h1>
          </div>
          <div class="panel panel-info">
            
              <div class="panel-heading">
                <h3 class="panel-title">Đăng Ký Một Tài Khoản Mới</h3>
              </div>
              <div class="panel-body">
                <div class="stepwizard ">
                 <div class="stepwizard-row setup-panel">
                  <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    <p>Bước 1</p>
                  </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle disabled" disabled="disabled">2</a>
                    <p>Bước 2</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle disabled" disabled="disabled">3</a>
                    <p>Bước 3</p>
                </div>
              </div>
            </div>
            <form role="form" id="form-signup" method="post" action="{{url('/auth/register')}}">
                <div class="row setup-content" id="step-1">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Bước 1</h3>
                            <div class="form-group">
                                <label class="control-label">Họ của bạn</label>
                                <input name="first_name"  maxlength="100" type="text" required="required" class="form-control" placeholder=" Họ Của Bạn"  />
                            </div>
                            <div class="form-group">
                                <label class="control-label"> Tên của bạn </label>
                                <input name="last_name" maxlength="100" type="text" required="required" class="form-control" placeholder=" Tên của bạn" />
                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Tiếp Nào</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Bước 2</h3>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input name="email" maxlength="200" type="text" required="required" class="form-control" placeholder="Email" />
                            </div>
                            <!-- <div class="form-group">
                                <label class="control-label">Address</label>
                                <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
                            </div> -->
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Go On</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-3">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Bước 3</h3>
                            <div class="form-group">
                                <label class="control-label">Mật Khẩu</label>
                                <input name="password" maxlength="200" type="password" required="required" class="form-control" placeholder="Enter Password" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Xác Nhận Mật Khẩu</label>
                                <input name="confirm_password" maxlength="200" type="password" required="required" class="form-control" placeholder="Enter Confirm Password" />
                            </div>
                            <button class="btn btn-success btn-lg pull-right" type="submit">Đăng Ký!</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="or">
              <span class="signup_only">or</span>
            </div>
            <div class="rom">
            <div class="col-md-12" >
                  <a href="#" class="social"><img class="id" src="http://techulus.com/buttons/fb.png" /></a>
                  <a href="#" class="social"><img class="id" src="http://techulus.com/buttons/tw.png" /></a>
                  <a href="#" class="social"><img class="id" src="http://techulus.com/buttons/gplus.png" /></a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
