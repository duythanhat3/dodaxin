<?php
/**
 * Created by PhpStorm.
 * User: manhdung
 * Date: 5/21/16
 * Time: 2:54 PM
 */
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>TaduSoft | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="CRM of TaduSoft" name="description" />
    <meta content="TaduSoft" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="{{ asset('backend/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/style.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/style-responsive.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/my/my_custom.css') }}" rel="stylesheet" id="theme" />

    <link href="{{ asset('backend/assets/css/theme/default.css') }}" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('backend/assets/plugins/pace/pace.min.js') }}"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade">
    <!-- begin login -->
    <div class="login bg-black animated fadeInDown">
        <!-- begin brand -->
        <div class="login-header">
            <div class="brand">
                {{--<span class="logo"></span> dodaxin.com--}}
                <img id="logo-header" src="{{ asset('backend/assets/img/logo.png') }}" class="logo" alt="Đồ Da Xịn"> dodaxin.com
                <small><a href="http://tadusoft.com">TaduSoft</a></small>
            </div>
            <div class="icon">
                <i class="fa fa-sign-in"></i>
            </div>
        </div>
        <!-- end brand -->
        <div class="login-content">
            <form class="margin-bottom-0" role="form" method="POST" action="{{ url('backend/login') }}">
                {{ csrf_field() }}

                <!--div class="form-group m-b-20 {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control input-lg" name="email" placeholder="Email Address" />
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div-->
                <div class="form-group m-b-20 {{ $errors->has('username') ? ' has-error' : '' }}">
                    <input type="text" class="form-control input-lg" name="username" placeholder="Username" />
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group m-b-20 {{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control input-lg" placeholder="Password" name="password" />
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="checkbox m-b-20">
                    <label>
                        <input type="checkbox" name="remember"/> Remember Me
                    </label>
                </div>
                <div class="login-buttons">
                    <button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
                </div>
            </form>
        </div>
    </div>
    <!-- end login -->

</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="{{ asset('backend/assets/plugins/jquery/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/jquery/jquery-migrate-1.1.0.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('backend/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/jquery-cookie/jquery.cookie.js') }}"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{ asset('backend/assets/js/apps.js') }}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
</body>
</html>

