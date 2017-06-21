<?php
/**
 * Created by PhpStorm.
 * User: manhdung
 * Date: 5/22/16
 * Time: 3:23 PM
 */
 ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />

    <title> @section('title') Tadu @show </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="TaduSoft" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href=" {{ asset('backend/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css') }}" rel="stylesheet" />
    <link href=" {{ asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/animate.min.css')  }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/style-responsive.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/theme/default.css') }}" rel="stylesheet" id="theme" />
    <link href="{{ asset('backend/assets/my/my_custom.css') }}" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="{{ asset('backend/assets/plugins/bootstrap-datepicker/css/datepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/noty/animate.css') }}" rel="stylesheet" />


    @yield('style')
    <link href="{{ asset('backend/assets/plugins/parsley/src/parsley.css') }}" rel="stylesheet" />

    <!-- ================== END PAGE LEVEL STYLE ================== -->



    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('backend/assets/plugins/pace/pace.js') }}"></script>

    <script src="{{ asset('backend/assets/plugins/jquery/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jquery/jquery-migrate-1.1.0.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--[if lt IE 9]>
    <script src="{{ asset('backend/assets/crossbrowserjs/html5shiv.js') }}"></script>
    <script src="{{ asset('backend/assets/crossbrowserjs/respond.min.js') }}"></script>
    <script src="{{ asset('backend/assets/crossbrowserjs/excanvas.min.js') }}"></script>
    <![endif]-->
    <script src="{{ asset('backend/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-cookie/jquery.cookie.js') }}"></script>
    <!-- ================== END BASE JS ================== -->

</head>
<body>
<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
    <!-- begin #header -->
    @include('partials.backend.banner')
    <!-- end #header -->

    <!-- begin #sidebar -->
    @include('partials.backend.nav')
    <!-- end #sidebar -->


    <!-- begin #content -->
    @yield('content')

    <!-- end #content -->

    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
</div>
<!-- end page container -->





<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{ asset('backend/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

<script src="{{ asset('backend/assets/plugins/parsley/dist/parsley.js') }}"></script>
<script src="{{ asset('backend/assets/my/js/jquery.form.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/gritter/js/jquery.gritter.js') }}"></script>
<script src="{{ asset('backend/assets/my/js/my_custom.js') }}"></script>
<script src="{{ asset('backend/assets/my/js/bootbox.js') }}"></script>

<script src="{{ asset('backend/assets/plugins/noty/packaged/jquery.noty.packaged.js') }}"></script>


@yield('script')
<script src="{{ asset('backend/assets/js/apps.js') }}"></script>


<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
</body>
</html>

