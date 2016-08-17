<!--========================================================
                            NAVBAR HEADER
  =========================================================-->
<nav class="navbar navbar-default navbar-fixed-top navbar-index animation" style="display: none;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand logo" style="color: #04DAF1 !important;" href="#myPage">LET'S GO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" style="padding-right: 15px;">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#gallerry-image">PHOTO</a></li>
        <li><a href="#" data-toggle="modal" data-target="#modelRegister">SIGN UP</a></li>
        <li><a href="#" data-toggle="modal" data-target="#modelLogin">SIGN IN</a></li>
        
     
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
            <h1 class="logo">LET'S GO <small>Welcome to Let's Go World!</small></h1>
          </div>

                <div class="panel panel-info" >
                  <div class="panel-heading">
                    <h3 class="panel-title"> Sign In !</h3>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                     <!--  <div class="col-md-5" >
                        <a href="#"><img class="id" src="{{url('images/content-image/facebook.png')}}" style="width: 100%; margin: 19px 0;" /></a><br/>
                  
                        <a href="#"><img class="id" src="{{url('images/content-image/google.png')}}" style="width: 100%; margin: 19px 0;" /></a>
                      </div> -->
                    <div class="col-md-12">
                      <form id="form-signin" class="form-horizontal" method="post" action="{{url('/auth/signin')}}">
                        <fieldset>

                         <div class="form-group">
                            <input id="email" name="email" minlength="6" maxlength="100" type="email" placeholder="Nhập Email" class="form-control input-md">
                         </div>
                          <div class="spacing">
                            <input type="checkbox"  name="remember_me" id="remember-me" checked="checked"><small>Remember me</small>
                          </div>

                           <div class="form-group">
                              <input id="password" minlength="6" maxlength="100" name="password" type="password" placeholder="Enter Password" class="form-control input-md">
                          </div>
                          <div class="spacing"><a href="#"><small>Forget password? Don't worry!</small></a><br/></div>

                          <button style="width: 120px !important;" id="singlebutton" type="submit" name="singlebutton" class="btn btn-info btn-sm pull-right">Sign In</button>
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
            <h1 class="logo">LET'S GO <small>Welcome to Let's Go World!</small></h1>
          </div>
          <div class="panel panel-info" style="width: 945px;">
            
              <div class="panel-heading">
                <h3 class="panel-title">Register new account</h3>
              </div>
              <div class="panel-body">
                <div class="stepwizard ">
                 <div class="stepwizard-row setup-panel">
                  <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    <p>Step 1</p>
                  </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle disabled" disabled="disabled">2</a>
                    <p>Step 2</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle disabled" disabled="disabled">3</a>
                    <p>Step 3</p>
                </div>
              </div>
            </div>
            <form role="form" id = "form-register" method="post" action="{{url('/auth/register')}}">
                <div class="row setup-content" id="step-1">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Step 1</h3>
                            <div class="form-group">
                                <label class="control-label">Last name</label>
                                <input name="last_name" minlength="1"  maxlength="100" type="text" required="required" class="form-control" placeholder=" Enter here"  />
                            </div>
                            <div class="form-group">
                                <label class="control-label"> First name </label>
                                <input  name="first_name" minlength="1" maxlength="100" type="text" required="required" class="form-control" placeholder="Enter here" />
                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Go On</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Step 2</h3>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input id="email" name="email" maxlength="200" type="email" required="required" class="form-control email" placeholder="Enter Email" />
                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-3">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Step 3</h3>
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input id="pass" name="pass" maxlength="200" type="password" required="required" class="form-control" placeholder="Enter Password" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Confirm password</label>
                                <input  id ="confirm_pass" name="confirm_password" maxlength="200" type="password" required="required" class="form-control" placeholder="Enter Confirm Password" />
                            </div>
                            <button class="btn btn-success btn-lg pull-right" type="submit">Register!</button>
                        </div>
                    </div>
                </div>
            </form>
       <!--      <div class="or">
              <span class="signup_only">or</span>
            </div>
            <div class="rom">
            <div class="col-md-12" >
                   <a href="#"><img class="id" src="{{url('images/content-image/facebook.png')}}" style="width: 48%; float: left;" /></a>
                        <a href="#"><img class="id" src="{{url('images/content-image/google.png')}}" style="width: 48%; float: right;" /></a>
            </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
</div>
</div>
