<?php
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
header('Cache-Control: public, max-age=86400');
header("Content-type: text/css"); ?>
/*Footer-v4
------------------------------------*/
/*Footer*/
.footer-v4 .footer{padding:50px 0;background:#151515}.footer-v4 .footer p{color:#bbb;font-size:14px}.footer-v4 img.footer-logo{margin:15px 0 20px}.footer-v4 .address-list li{color:#bbb;margin-bottom:7px}.footer-v4 .address-list li i{margin-right:10px;vertical-align:middle}.footer-v4 .shop-social li i{color:#bbb;width:30px;height:30px;padding:8px;font-size:16px;text-align:center;background:#414040}.footer-v4 .shop-social li i:hover{background:#353535}.footer-v4 h2.thumb-headline{color:#ddd;font-size:16px;margin-bottom:3px;text-transform:uppercase}.footer-v4 .simple-list li{color:#bbb}.footer-v4 .simple-list a{color:#bbb;font-size:14px;font-weight:200}.footer-v4 .copyright{padding:15px 0;border-top:none;background:#191919}.footer-v4 .copyright p{color:#bbb;font-size:12px;margin-top:13px;margin-bottom:0}.footer-v4 .copyright a{color:#18ba9b}.footer-v4 .sponsors-icons{margin-bottom:0}.footer-v4 .sponsors-icons i{color:#fff;font-size:40px}@media (max-width: 991px){.footer-v4 .copyright{text-align:center}.footer-v4 .copyright p{margin-bottom:15px}.footer-v4 .sponsors-icons.pull-right{float:none!important}}
