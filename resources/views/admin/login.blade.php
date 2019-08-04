<!DOCTYPE html>
<html>

<head>
    <title>Login | Josh Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{asset('assets/css/app_auth.css')}}" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <!-- end of page level css -->
</head>

<body>
<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
            <div id="container_demo">

                <a class="hiddenanchor" id="toregister"></a>
                <a class="hiddenanchor" id="tologin"></a>
                <a class="hiddenanchor" id="toforgot"></a>
                <div id="wrapper">

                    <div id="login" class="animate form">
                        {{--<form action="http://joshmaterial.lorvent.in/index.html" id="authentication" autocomplete="on" method="post">--}}
                        {{Form::open(['url'=>'admin/doLogin','method'=>'post'])}}
                            <h3 class="black_bg">

                                <br>LOG IN</h3>
                        @if(count($errors)>0)
                            hello
                        @endif
                            <div class="form-group label-floating">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="material-icons">email</i></span>
                                    {{--<label class="control-label" for="username">E- mail</label>--}}
                                    {{Form::label('email','E- mail',['class'=>'control-label'])}}
                                    {{Form::text('email','',['class'=>'form-control','required'=>'true','id'=>'username'])}}
                                    {{--<input id="username" name="username" required type="text" class="form-control">--}}
                                </div>
                            </div>
                            <div class="form-group label-floating">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="material-icons">vpn_key</i></span>
                                    {{--<label for="password1" class="youpasswd control-label">Password</label>--}}
                                    {{Form::label('password1','Password',['class'=>'youpasswd control-label'])}}
                                    {{Form::password('password',['class'=>'form-control','id'=>'password1'])}}
                                    {{--<input id="password1" name="password" required type="password" class="form-control" />--}}
                                </div>
                            </div>
                            <div class="checkbox keeplogin">
                                <label>
                                    <input type="checkbox"> &nbsp;Keep me logged in
                                </label>
                            </div>
                            <div class="form-group login button">
                                {{Form::submit('Log in',['class'=>'btn btn-raised btn-success btn-block'])}}
                                {{--<button type="submit" class="btn btn-raised btn-success btn-block">Log in</button>--}}
                            </div>
                            <p class="change_link">
                                <a href="#toforgot" class="btn btn-raised btn-responsive botton-alignment btn-warning btn-sm">Forgot password
                                </a>
                                <a href="#toregister" class="btn btn-raised btn-responsive botton-alignment btn-success btn-sm pull-right">Sign up
                                </a>
                            </p>
                        {{--</form>--}}
                        {{Form::close()}}
                    </div>
                    <div id="register" class="animate form">
                        <form action="http://joshmaterial.lorvent.in/index.html" id="register_here" autocomplete="on" method="post">
                            <h3 class="black_bg">
                                <img src="img/logo.png" alt="josh logo">
                                <br>SIGN UP</h3>
                            <div class="form-group label-floating">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="material-icons">person</i></span>
                                    <label class="control-label" for="fname">First Name</label>
                                    <input id="fname" name="first_name" required type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group label-floating">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="material-icons">person</i></span>
                                    <label class="control-label" for="lname">Last Name</label>
                                    <input id="lname" name="last_name" required type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group label-floating">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="material-icons">email</i></span>
                                    <label class="control-label" for="email1">E-mail</label>
                                    <input id="email1" name="email" required type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group label-floating">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="material-icons">email</i></span>
                                    <label class="control-label" for="cemail">Confirm E-mail</label>
                                    <input id="cemail" name="confirm_email" required type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group label-floating">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="material-icons">vpn_key</i></span>
                                    <label for="password2" class="youpasswd control-label">Password</label>
                                    <input id="password2" name="password" required type="password" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group label-floating">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="material-icons">vpn_key</i></span>
                                    <label for="cpassword" class="youpasswd control-label">Confirm Password</label>
                                    <input id="cpassword" name="cpassword" required type="password" class="form-control" />
                                </div>
                            </div>
                            <p class="signin button">
                                <input type="submit" class="btn btn-raised btn-success btn-block" value="Sign up" />
                            </p>
                            <p class="change_link">
                                <a href="#tologin" class="btn btn-raised btn-responsive botton-alignment btn-warning btn-sm to_register">Back
                                </a>
                            </p>
                        </form>
                    </div>
                    <div id="forgot" class="animate form">
                        <form action="http://joshmaterial.lorvent.in/index.html" id="reset_pw" autocomplete="on" method="post">
                            <h3 class="black_bg">
                                <img src="img/logo.png" alt="josh logo">
                                <br>FORGOT PASSWORD</h3>
                            <p>
                                Enter your email address below and we'll send a special reset password link to your inbox.
                            </p>
                            <div class="form-group label-floating">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="material-icons">mail</i></span>
                                    <label class="control-label youmai" for="username2"> E-mail</label>
                                    <input id="username2" name="username2" required type="text" class="form-control">
                                </div>
                            </div>
                            <p class="login button reset_button">
                                <input type="submit" value="Reset Password" class="btn btn-raised btn-success btn-block" />
                            </p>
                            <p class="change_link">
                                <a href="#tologin" class="btn btn-raised btn-responsive botton-alignment btn-warning btn-sm to_register">Back
                                </a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- page level js -->
<script type="text/javascript" src='js/pages/login.js'></script>
</body>
</html>
