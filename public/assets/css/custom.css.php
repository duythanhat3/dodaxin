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
header("Content-type: text/css");?>
/* Add here all your css styles (customizations) */
.navbar-brand > .logo{width:130px!important;margin-top:-7px}.footer-v4 img.footer-logo{width:260px!important}.who li{margin-bottom:6px}.who li i{color:#72c02c;font-size:13px;min-width:15px;margin-right:8px;text-align:center;position:relative}.who li:hover i,.who li:hover a{color:#777}.who li:hover a:hover{text-decoration:none}.map{width:100%;height:350px;border-top:solid 1px #eee;border-bottom:solid 1px #eee}.map img{max-width:none}.map-box{height:250px}.map-box-space{margin-top:15px}.map-box-space1{margin-top:7px}.sky-changes-3.sky-form,.sky-changes-3.sky-form footer{border:none}.sky-changes-3.sky-form footer,.sky-changes-3.sky-form fieldset{padding:0;background:none}.sky-form .sky-space-20{margin-bottom:20px}.sky-form .sky-space-30{margin-bottom:30px}.header-fixed .header-v5.header-fixed-shrink{height:auto;margin-top:auto}.header-fixed .header-v5.header-fixed-shrink .navbar-nav > li > a{margin-top:0}.footer-v4 .footer{padding:30px 0}