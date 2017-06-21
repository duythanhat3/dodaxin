<?php
/**
 * Created by PhpStorm.
 * User: manhdung
 * Date: 5/22/16
 * Time: 3:23 PM
 */
//get the last-modified-date of this very file
$lastModified=filemtime(__FILE__);
//get a unique hash of this file (etag)
$etagFile = md5_file(__FILE__);
//get the HTTP_IF_MODIFIED_SINCE header if set
$ifModifiedSince=(isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? $_SERVER['HTTP_IF_MODIFIED_SINCE'] : false);
//get the HTTP_IF_NONE_MATCH header if set (etag: unique file hash)
$etagHeader=(isset($_SERVER['HTTP_IF_NONE_MATCH']) ? trim($_SERVER['HTTP_IF_NONE_MATCH']) : false);

//set last-modified header
header("Last-Modified: ".gmdate("D, d M Y H:i:s", $lastModified)." GMT");
//set etag-header
header("Etag: $etagFile");
//make sure caching is turned on
header('Cache-Control: public, max-age=3600');
 ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />

    <title> Đồ Da Xịn</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="Welcome to dodaxin.com, Chuyên cung cấp các sản phẩm da thật 100%" name="description" />
    <meta content="TaduSoft" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<meta property="og:title" content="">--}}
    {{--<meta property="og:description" content="">--}}
    {{--<meta property="og:image" content="">--}}

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('logo.ico')}}">

    <!-- Web Fonts -->
    {{--<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>--}}

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css.php') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shop.style.css.php') }}">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="{{ asset('assets/css/headers/header-v5.css.php') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footers/footer-v4.css.php') }}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animate.css.php') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/line-icons/line-icons.css.php') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css.php') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css.php') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.css.php') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/revolution-slider/rs-plugin/css/settings.css.php') }}">

    <!-- CSS Theme -->
{{--    <link rel="stylesheet" href="{{ asset('assets/css/theme-colors/default.css.php') }}" id="style_color">--}}

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css.php') }}">
    @yield('style')
    <style>
        .statcounter{
            display: none;
        }
    </style>

</head>
<body class="header-fixed">

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="wrapper">

    <!-- begin #sidebar -->
    @include('partials.nav')
    <!-- end #sidebar -->



    <!-- begin #content -->
    @yield('content')

    <!-- end #content -->

    @include('partials.footer')
</div>


<!-- JS Global Compulsory -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js.php') }}"></script>
<script src="{{ asset('assets/plugins/jquery/jquery-migrate.min.js.php') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js.php') }}"></script>
<!-- JS Implementing Plugins -->
<script src="{{ asset('assets/plugins/back-to-top.min.js.php') }}"></script>
<script src="{{ asset('assets/plugins/smoothScroll.min.js.php') }}"></script>
<script src="{{ asset('assets/plugins/jquery.parallax.js.php') }}"></script>
<script src="{{ asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.min.js.php') }}"></script>
<script src="{{ asset('assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js.php') }}"></script>
<script src="{{ asset('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js.php') }}"></script>
<script src="{{ asset('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js.php') }}"></script>

<!-- JS Customization -->
{{--<script src="{{ asset('assets/js/custom.js.php') }}"></script>--}}
@yield('script')

<!-- JS Page Level -->
<script src="{{ asset('assets/js/shop.app.js.php') }}"></script>
<script src="{{ asset('assets/js/plugins/owl-carousel.js.php') }}"></script>
<script src="{{ asset('assets/js/plugins/revolution-slider.js.php') }}"></script>


<script>
    jQuery(document).ready(function() {
        App.init();
        App.initScrollBar();
        App.initParallaxBg();
        OwlCarousel.initOwlCarousel();
        RevolutionSlider.initRSfullWidth();
    });
</script>



<!--[if lt IE 9]>
<script src="assets/plugins/respond.js"></script>
<script src="assets/plugins/html5shiv.js"></script>
<script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
[endif]-->

<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
    var sc_project=11052051;
    var sc_invisible=0;
    var sc_security="9d253f38";
    var scJsHost = (("https:" == document.location.protocol) ?
            "https://secure." : "http://www.");
    document.write("<sc"+"ript type='text/javascript' src='" +
            scJsHost+
            "statcounter.com/counter/counter.js'></"+"script>");
</script>

<!-- End of StatCounter Code for Default Guide -->

@if($_SERVER['HTTP_HOST'] == 'dodaxin.com' || $_SERVER['HTTP_HOST'] == 'www.dodaxin.com')
    {{--<!--Start of WebCall Script--><script type="text/javascript">!function(t,e){var s=function(t){s._.push(t)},n=s.s=t.createElement(e),a=t.getElementsByTagName(e)[0];s.set=function(t){s.set._.push(t)},s._=[],s.set._=[],n.async=!0,n.setAttribute("charset","utf-8");n.src="https://my.webcall.vn/client/loader.js?code=no7awt4xyhWjFY2pXsS01u5MPZQceTRqIHKm3gbd&location=" + window.location.protocol + "//" + window.location.hostname,s.t=+new Date,n.type="text/javascript",a.parentNode.insertBefore(n,a)}(document,"script");</script><!--End of WebCall Script-->--}}

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-6288190185739890",
            enable_page_level_ads: true
        });
    </script>

@endif
</body>
</html>

