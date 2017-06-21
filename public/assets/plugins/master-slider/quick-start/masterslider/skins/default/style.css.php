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
/**
 *  Master Slider
 *  Default Skin
 */

.ms-skin-default .ms-slide .ms-slide-vpbtn,
.ms-skin-default .ms-video-btn{
	width: 50px;
	height: 51px;
	background: url(light-skin-1.png) no-repeat -14px -150px;
	top: 50%;
	left: 50%;
	margin: -25px 0 0 -25px;
}

.ms-skin-default .ms-slide .ms-slide-vcbtn {
	width: 30px;
	height: 30px;
	background: url(light-skin-1.png) no-repeat -24px -28px;
	top: 18px;
	right: 30px;
}

/* controls */

.ms-skin-default .ms-nav-next,
.ms-skin-default .ms-nav-prev {
	width: 30px;
	background: url(light-skin-1.png);
	background-position: -89px -26px;
	height: 40px;
	cursor: pointer;
	top: 50%;
	left: 30px;
	margin-top: -20px;
	position: absolute;
	z-index: 110;
}
.ms-skin-default .ms-nav-next {
	right: 30px;
	left: auto;
	background-position: -89px -103px;
}



.ms-skin-default .ms-bullet {
	width: 10px;
	height: 10px;
	background: url(light-skin-1.png) no-repeat;
	margin: 4px;
	background-position: -34px -117px;
}

.ms-skin-default .ms-bullet-selected {
	background-position: -34px -84px;
}


.ms-skin-default .ms-time-bar {
	height: 3px;
	background: #FFFFFF;
	border-top: solid 1px rgba(0, 0, 0, 0.41);
}


.ms-skin-default .ms-tooltip{
	position: absolute;
	z-index: 210;
	cursor: auto;
}

.ms-skin-default .ms-tooltip-top .ms-tooltip-arrow,
.ms-skin-default .ms-tooltip-bottom .ms-tooltip-arrow{
	border-left: solid 10px transparent;
	border-right: solid 10px transparent;
	position: absolute;
	left: 50%;
	margin-left: -10px;
}

.ms-skin-default .ms-tooltip-top .ms-tooltip-arrow{
	border-top: solid 10px;
	border-top-color: silver;
	border-top-color: rgba(240, 240, 240, 0.88);
	bottom: -10px;
}

.ms-skin-default .ms-tooltip-bottom .ms-tooltip-arrow {
	border-bottom: solid 10px;
	border-bottom-color: silver;
	border-bottom-color: rgba(240, 240, 240, 0.88);
	top: -10px;
}

.ms-skin-default .ms-tooltip-right .ms-tooltip-arrow,
.ms-skin-default .ms-tooltip-left .ms-tooltip-arrow{
	border-top: solid 10px transparent;
	border-bottom: solid 10px transparent;
	position: absolute;
	top: 50%;
	margin-top: -10px;
}

.ms-skin-default .ms-tooltip-right .ms-tooltip-arrow{
	border-right: solid 10px;
	border-right-color: silver;
	border-right-color: rgba(240, 240, 240, 0.88);
	left: -10px;
}

.ms-skin-default .ms-tooltip-left .ms-tooltip-arrow {
	border-left: solid 10px;
	border-left-color: silver;
	border-left-color: rgba(240, 240, 240, 0.88);
	right: -10px;
}

.ms-skin-default .ms-tooltip-point {cursor: pointer;}
.ms-skin-default .ms-tooltip-point .ms-point-center {
	width: 12px;
	height: 12px; 
	border-radius: 15px;
	border: solid 2px #BBB;
	background: white;
	margin: -8px 0 0 -8px;
	position: absolute;
	z-index: 105;
}

.ms-skin-default .ms-tooltip-point .ms-point-border {
	width: 22px;
	height: 22px; 
	background: black;
	background:rgba(0, 0, 0, 0.36);
	margin: -11px 0 0 -11px;
	position: absolute;
	border-radius: 15px;
	
	animation: point-anim 1.5s infinite ;
	-moz-animation: point-anim 1.5s infinite;
	-webkit-animation: point-anim 1.5s infinite;
	-o-animation: point-anim 1.5s infinite;
}

.ms-skin-default .ms-tooltip {
	max-width:200px;
}

.ms-skin-default .ms-tooltip-cont {
	padding: 10px;
	background: silver;
	background: rgba(240, 240, 240, 0.88);
	text-shadow: 0 1px 0px white;
	margin-left: -1px;
}

/* retina */
@media 
only screen and (-webkit-min-device-pixel-ratio: 2),
only screen and (   min--moz-device-pixel-ratio: 2),
only screen and (     -o-min-device-pixel-ratio: 2/1),
only screen and (        min-device-pixel-ratio: 2),
only screen and (                min-resolution: 192dpi),
only screen and (                min-resolution: 2dppx) {
	
	.ms-skin-default .ms-slide .ms-slide-vpbtn,
	.ms-skin-default .ms-video-btn,
	.ms-skin-default .ms-slide .ms-slide-vcbtn,
	.ms-skin-default .ms-nav-next,
	.ms-skin-default .ms-nav-prev,
	.ms-skin-default .ms-bullet{
		background-image:url(light-skin-1-retina.png);
		background-size: 152px 225px;
	}
	
}