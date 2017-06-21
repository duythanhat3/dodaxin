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
 * 	Core css file
 */

.master-slider{
	position: relative;
	visibility: hidden;
	-moz-transform: translate3d(0 , 0 , 0);
}

.master-slider a { 
	-webkit-transition: none;
	-o-transition: none;
	transition: none;
}
.master-slider, .master-slider * {
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
}

.master-slider.before-init{}

.master-slider.ms-fullheight{height: 100%;}

.ms-layout-partialview .ms-view {
	overflow: visible;
	background-color:transparent;
}

.ms-layout-partialview .ms-container { overflow: hidden; }

.master-slider img, .ms-slide-bgvideocont video {max-width:none;}

.ms-ie img{border:none;}
.ms-ie8 * {opacity:inherit;filter:inherit;}
.ms-ie7   {zoom:1;}

.ms-moz .ms-slide-bgcont>img { transform: translateX(0px); }

.ms-loading-container{
	position:absolute;
	width:100%;
	top:0;
}

.ms-slide-auto-height { display: table; }

.ms-loading-container .ms-loading,
.ms-slide .ms-slide-loading {
	width: 36px;
	height: 36px;
	background: url(loading-2.gif) no-repeat center white;
	border-radius: 60px;
	box-shadow: 0px 0px 3px rgba(0,0,0,0.2);
	position: absolute;
	left: 50%;
	top: 50%;
	margin: -18px;
	opacity: 0.9;
}


/* grab cursor */
.ms-no-swipe, .ms-def-cursor{cursor:auto !important;}
.ms-grab-cursor{cursor: url(grab.png), move;}
.ms-grabbing-cursor{cursor: url(grabbing.png), move;}
.ms-ie .ms-grab-cursor{cursor: move;}
.ms-ie .ms-grabbing-cursor {cursor: move;}

.ms-view { 
	margin:0px auto;
	overflow:hidden;
	background:black;
	position:relative;
	-webkit-perspective: 2000px;
	-moz-perspective: 2000px;
	-ms-perspective: 2000px;
	perspective: 2000px;
}

.ms-view .ms-slide-container{position:relative;}

.ms-slide {
	position:absolute;
	height:100%;
	-webkit-transform: translateZ(0px);
	-ms-transform: translateZ(0px);
	-o-transform: translateZ(0px);
	transform: translateZ(0px);
}

.ms-wk .ms-slide {
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

.ms-slide.selected {}

.ms-slide .ms-slide-bgcont,
.ms-slide .ms-slide-bgvideocont{
	position: absolute;
	overflow:hidden;
	width: 100%;
}

.ms-slide .ms-slide-link { 
	display: block;
	width: 100%;
	height: 100%;
	position: absolute;
	top:0;
	z-index: 110;
}

.ms-ie .ms-slide-link {
	background: url("data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBR‌​AA7") 0 0 repeat;
}


.ms-slide .ms-slide-bgvideocont{
	z-index: 105;
	height: 100%;
}

.ms-wk .ms-slide .ms-slide-bgvideocont,
.ms-wk .ms-slide-bgvideocont>video{
	-webkit-transform: translateZ(0.3px);
	transform: translateZ(0.3px);
}

.ms-slide .ms-slide-bgvideo{
	position: absolute;
	top: 0px;
}

.ms-inner-controls-cont, .ms-container {position: relative; margin:0 auto;}
.ms-slide .ms-slide-bgcont img , .ms-container , .ms-inner-controls-cont{
	-webkit-user-select:none;
	-moz-user-select:none;
	-ms-user-select:none;
	user-select:none;
}

.ms-slide .ms-layer{position:absolute;}

.ms-slide .ms-slide-layers{
	position: absolute;
	overflow:hidden;
	width:100%;
	height: 100%;
	z-index: 109;
	top:0px;
}

.ms-slide .ms-slide-video{
	position:absolute;
	top:0;
	z-index: 111;
	background:black;
	padding:0;
	margin: 0;
	border: none;
}

.ms-parallax-layer {
	width: 100%;
	position: absolute;
	top: 0;
}

.ms-scroll-parallax-cont{
	position: absolute;
	top:0;
	width: 100%;
	height: 100%;
}

.ms-wk .ms-scroll-parallax-cont{
	-webkit-transform: translateZ(0.4px);
	transform: translateZ(0.4px);
}

/*.ms-scroll-parallax .ms-sl-selected .ms-scroll-parallax-cont,
.ms-scroll-parallax .ms-sl-selected .ms-slide-bgcont{}
.ms-scroll-parallax .ms-slide-bgcont{}*/
 
/*-----------------------------------------------------------*/
.ms-action-layer{cursor: pointer;}
.ms-btn-container{position: absolute;}
.ms-btn {
	text-decoration: none;
	display: inline-block;
	color:black;
	position: relative;
	padding: 8px 15px;
	cursor: pointer;
	white-space: nowrap;
}

.ms-default-btn{
	background: #0074A2;
	border-radius: 5px;
	color: #FFF;
}
.ms-default-btn:hover{background-color: #0098D5;}
.ms-default-btn:active{top:1px;}


.ms-btn-s{
    padding: 14px 17px;  
    font-size: 80%;
    line-height: 0;
}

.ms-btn-m{
    padding: 12px 40px;
}

.ms-btn-n{
    padding: 8px 25px;
    font-size: 95%;
}

.ms-btn-l{
    padding: 17px 50px;  
    font-size: 120%;
}

.ms-btn-box{}
.ms-btn-round{border-radius: 5px;}
.ms-btn-circle{border-radius: 100px;}
.ms-btn-outline-box{}
.ms-btn-outline-round{border-radius: 5px;}
.ms-btn-outline-circle{border-radius: 100px;}
/*-----------------------------------------------------------*/

.ms-layer.video-box{background:black;}
.ms-layer.video-box iframe{
	padding:0;
	margin: 0;
	border: none;
	position: absolute;
	z-index: 111;
}

.ms-slide .ms-slide-vpbtn , .ms-slide .ms-video-btn{
	position:absolute;
	cursor: pointer;
	z-index: 112;
}

.ms-slide .ms-slide-vcbtn{
	position:absolute;
	cursor: pointer;
	z-index: 113;
}

.ms-slide-vcbtn-mobile{
	position: relative;
	bottom: 0;
	left:0;
	width:100%;
	height: 28px;
	background-color: black;
	color: white;
	text-align: center;
	cursor: pointer;
	z-index: 113;
}

.ms-slide-vcbtn-mobile .ms-vcbtn-txt {
    text-transform: uppercase;
    font-family: sans-serif;
    font-size: 0.75em;
    display: inline-block;
    background: url(video-close-btn.png) no-repeat 0px 3px;
    padding-left: 15px;
    height: 15px;
    color: #DBDBDB;
    margin-top: 7px;
}

.ms-wk .ms-slide .ms-slide-vcbtn,
.ms-wk .ms-slide .ms-slide-layers,
.ms-wk .ms-slide .ms-slide-vpbtn,
.ms-wk .ms-slide .ms-slide-video,
.ms-wk .ms-slide-link {
	-webkit-transform: translateZ(0.44px);
	transform: translateZ(0.44px);
}

.ms-video-img{
	position:absolute;
	width:100%;
	height:100%;
	top:0;
	left:0;
}

.ms-mask-frame{
	overflow:hidden;
	position:absolute;
	float:left;
}

/* controls */

.ms-thumb-list{
	overflow:hidden;
	position:absolute;
}

.ms-thumb-list.ms-dir-h {width: 100%;}
.ms-thumb-list.ms-dir-v {height: 100%; top: 0;}
.ms-thumbs-cont{position: relative;}
.ms-thumb-frame img{width:100%;	height:auto;}
.ms-thumb-frame{
	cursor: pointer;
	float: left;
	overflow: hidden;
	opacity: 0.5;
	-webkit-transition: opacity 300ms;
	-moz-transition: opacity 300ms;
	-ms-transition: opacity 300ms;
	-o-transition: opacity 300ms;
	transition: opacity 300ms;
}
.ms-thumb-frame-selected{ opacity: 1; }

.ms-tabs .ms-thumb-frame {
	background-color: #F6f6f6;
	text-shadow: 0 1px 1px white;
	color: #222;
	border: solid 1px white;
	border-width: 0 1px 1px 0;
	overflow: visible;
	position: relative;
	opacity: 1;
	-webkit-transition: all 300ms ease-out;
    -moz-transition: all 300ms ease-out;
    -ms-transition: all 300ms ease-out;
    -o-transition: all 300ms ease-out;
    transition: all 300ms ease-out;
}

.ms-tabs.ms-dir-h .ms-thumb-frame {margin-top: 12px;}
.ms-tabs.ms-dir-v .ms-thumb-frame {margin-left: 12px;}
.ms-tabs.ms-dir-v.ms-align-left .ms-thumb-frame {margin-left: 0px;}
.ms-tabs.ms-dir-h.ms-align-top {z-index: 140;} 
.ms-tabs.ms-dir-h.ms-align-top  .ms-thumb-frame{margin-top: -12px;} 
.ms-tabs .ms-thumb{padding: 20px 20px;}
.ms-tabs .ms-thumb-frame-selected {	opacity: 1; background: #EDEDED;}
.ms-tabs .ms-thumb-frame .ms-thumb-ol {
    position: absolute;
    opacity: 0;
    -webkit-transition: all 300ms ease-out;
    -moz-transition: all 300ms ease-out;
    -ms-transition: all 300ms ease-out;
    -o-transition: all 300ms ease-out;
    transition: all 300ms ease-out;
}

.ms-tabs.ms-dir-h .ms-thumb-frame .ms-thumb-ol {
	top: 0px;
    left: 50%;
    margin-left: -12px;
	border-bottom: solid 12px #F6f6f6;
    border-left: solid 12px transparent;
    border-right: solid 12px transparent;
}

.ms-tabs.ms-dir-h.ms-align-bottom .ms-thumb-frame-selected .ms-thumb-ol{
	opacity: 1;
	top:-12px;
	border-bottom-color: #EDEDED;
}

.ms-tabs.ms-dir-h.ms-align-top .ms-thumb-frame .ms-thumb-ol {
	bottom: 0px;
	top:auto;
	border-bottom:0px;
	border-top: solid 12px #F6f6f6;
}

.ms-tabs.ms-dir-h.ms-align-top .ms-thumb-frame-selected .ms-thumb-ol{
	opacity: 1;
	bottom:-12px;
	border-top-color: #EDEDED;
}

.ms-tabs.ms-dir-v .ms-thumb-frame .ms-thumb-ol {
	top: 50%;
    left: 0;
    margin-top: -12px;
    border-right: solid 12px #EDEDED;
    border-top: solid 12px transparent;
    border-bottom: solid 12px transparent;
}

.ms-tabs.ms-dir-v.ms-align-right .ms-thumb-frame-selected .ms-thumb-ol{
	opacity: 1;
	left:-12px;
	border-right-color:#EDEDED;
}

.ms-tabs.ms-dir-v.ms-align-left .ms-thumb-frame .ms-thumb-ol {
    left: auto;
    right: 0;
    border-right: 0;
    border-left: solid 12px #EDEDED;
}

.ms-tabs.ms-dir-v.ms-align-left .ms-thumb-frame-selected .ms-thumb-ol{
	opacity: 1;
	right:-12px;
	border-left-color:#EDEDED;
}


.ms-bullet{cursor:pointer;float: left;}
.ms-bullets.ms-dir-h {
	position: absolute;
	bottom: 20px;
	right: 50%;
	width: 100px;
}

.ms-bullets.ms-dir-v {
	position: absolute;
	top:50%;
}

.ms-bullets.ms-dir-v .ms-bullet{
	float: none;
}
.ms-bullets.ms-dir-h .ms-bullets-count {
	position: relative;
	right: -50%;
}

.ms-sbar {position: absolute;}
.ms-sbar.ms-dir-h {
	left: 10px;
	right: 10px;
	top: 5px
}

.ms-sbar.ms-dir-v {
	top: 10px;
	bottom: 10px;
	right: 5px
}

.ms-sbar .ms-bar {
	height: 4px;
	background: #333;
	border-radius: 4px;
}

.ms-sbar.ms-dir-v .ms-bar {	width: 4px;}

.ms-sbar .ms-bar{
	position:relative;
	-webkit-transition: opacity 300ms;
	-moz-transition: opacity 300ms;
	-ms-transition: opacity 300ms;
	-o-transition: opacity 300ms;
	transition: opacity 300ms;
}

.ms-timerbar {
	width: 100%;
	bottom: 0px;
	position: absolute;
}

.ms-ctimer {
	position: absolute;
	top: 30px;
	left: 30px;
	cursor: pointer;
}

.ms-ctimer-bullet {}

.ms-time-bar{
	-webkit-transition: width 120ms linear;
	-moz-transition: width 120ms linear;
	-ms-transition: width 120ms linear;
	-o-transition: width 120ms linear;
	transition: width 120ms linear;

}

.ms-ie7 .ms-tooltip-arrow{
	height:0px;
}

.ms-slide-info {position: absolute;}
.ms-slide-info.ms-dir-v {top:0;}
.ms-slide-info.ms-dir-h {width:100%;}

@keyframes point-anim{
	0% 		{transform: scale(0.5); -webkit-transform: scale(0.5); -moz-transform: scale(0.5); -o-transform: scale(0.5); -ms-transform: scale(0.5);  opacity: 1; }
	100% 	{transform: scale(0.5); -webkit-transform: scale(0.5); -moz-transform: scale(1.5); -o-transform: scale(1.5); -ms-transform: scale(1.5);  opacity: 0; }
}

@-webkit-keyframes point-anim{
	0% 		{-webkit-transform: scale(0.5); opacity: 1; }
	100% 	{-webkit-transform: scale(1.5);	opacity: 0; }
}

/* In Android browser, using css animations over slider causes some crashes */
.ms-android .ms-tooltip-point .ms-point-border{
	animation:none;
	-moz-animation:none;
	-webkit-animation:none;
	-o-animation:none;
}
