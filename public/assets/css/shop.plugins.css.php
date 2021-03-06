<?php
 /*
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
header('Cache-Control: public, max-age=86400');*/
header("Content-type: text/css"); ?>
.ms-showcase2-template{margin:0 auto;max-width:550px}.ms-showcase2-template .ms-view{background:transparent}.tp-banner-container ul li,.fullscreenbanner-container ul li{list-style:none;visibility:hidden}.tp-bullets.preview4 .bullet{border-radius:10px!important}.tp-banner-container a.btn-u,.tp-banner-container a.btn-u:hover{color:#fff;border:solid 1px transparent}.tp-banner-container a.re-btn-brd{background:none;border:solid 1px #fff}.tp-banner-container a.re-btn-brd:hover{color:#555;background:#fff}.tp-banner-container .btn-u.btn-brd{font-weight:400}.tp-banner-container{position:relative}.fullscreen-container{width:100%;position:relative;padding:0}.revolution-mch-1:after{top:0;left:0;right:0;width:100%;height:100%;content:' ';position:absolute;background:rgba(0,0,0,0.3)}.revolution-ch1{color:#fff;font-size:50px;font-weight:200;line-height:60px;padding:30px 50px;text-align:center;border:1px solid #fff;text-transform:uppercase;font-family:"Open Sans",sans-serif}.revolution-ch2{color:#fff;font-size:30px;max-width:470px;line-height:32px;position:relative;text-align:center;font-weight:400;text-transform:uppercase;font-family:"Open Sans",sans-serif}.revolution-ch2:after{left:50%;width:70px;height:2px;content:' ';bottom:-20px;background:#fff;margin-left:-35px;position:absolute}.revolution-ch3{color:#fff;font-size:50px;font-weight:200;line-height:60px;text-align:center;text-transform:uppercase;font-family:"Open Sans",sans-serif}.revolution-ch4{color:#fff;font-size:18px;max-width:300px;line-height:30px;text-align:right;position:relative;font-weight:400;font-family:"Open Sans",sans-serif}.revolution-ch5{color:#fff;font-size:50px;font-weight:200;line-height:60px;text-align:center;text-transform:uppercase;font-family:"Open Sans",sans-serif}#topcontrol{color:#fff;z-index:99;width:30px;height:30px;font-size:20px;background:#222;position:relative;right:14px!important;bottom:11px!important;border-radius:3px!important}#topcontrol:after{left:8.5px;content:"\f106";position:absolute;text-align:center;font-family:FontAwesome}#topcontrol:hover{color:#fff;background:#18ba9b;-webkit-transition:all .3s ease-in-out;-moz-transition:all .3s ease-in-out;-o-transition:all .3s ease-in-out;transition:all .3s ease-in-out}