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
.owl-carousel .owl-wrapper:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0}.owl-carousel{display:none;position:relative;width:100%;-ms-touch-action:pan-y}.owl-carousel .owl-wrapper{display:none;position:relative;-webkit-transform:translate3d(0px,0px,0px)}.owl-carousel .owl-wrapper-outer{overflow:hidden;position:relative;width:100%}.owl-carousel .owl-wrapper-outer.autoHeight{-webkit-transition:height 500ms ease-in-out;-moz-transition:height 500ms ease-in-out;-ms-transition:height 500ms ease-in-out;-o-transition:height 500ms ease-in-out;transition:height 500ms ease-in-out}.owl-carousel .owl-item{float:left}.owl-controls .owl-page,.owl-controls .owl-buttons div{cursor:pointer}.owl-controls{-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-tap-highlight-color:rgba(0,0,0,0)}.grabbing{cursor:url(grabbing.png) 8 8,move}.owl-carousel .owl-wrapper,.owl-carousel .owl-item{-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0)}.owl-origin{-webkit-perspective:1200px;-webkit-perspective-origin-x:50%;-webkit-perspective-origin-y:50%;-moz-perspective:1200px;-moz-perspective-origin-x:50%;-moz-perspective-origin-y:50%;perspective:1200px}.owl-fade-out{z-index:10;-webkit-animation:fadeOut .7s both ease;-moz-animation:fadeOut .7s both ease;animation:fadeOut .7s both ease}.owl-fade-in{-webkit-animation:fadeIn .7s both ease;-moz-animation:fadeIn .7s both ease;animation:fadeIn .7s both ease}.owl-backSlide-out{-webkit-animation:backSlideOut 1s both ease;-moz-animation:backSlideOut 1s both ease;animation:backSlideOut 1s both ease}.owl-backSlide-in{-webkit-animation:backSlideIn 1s both ease;-moz-animation:backSlideIn 1s both ease;animation:backSlideIn 1s both ease}.owl-goDown-out{-webkit-animation:scaleToFade .7s ease both;-moz-animation:scaleToFade .7s ease both;animation:scaleToFade .7s ease both}.owl-goDown-in{-webkit-animation:goDown .6s ease both;-moz-animation:goDown .6s ease both;animation:goDown .6s ease both}.owl-fadeUp-in{-webkit-animation:scaleUpFrom .5s ease both;-moz-animation:scaleUpFrom .5s ease both;animation:scaleUpFrom .5s ease both}.owl-fadeUp-out{-webkit-animation:scaleUpTo .5s ease both;-moz-animation:scaleUpTo .5s ease both;animation:scaleUpTo .5s ease both}@-webkit-keyframes empty{0%{opacity:1}}@-moz-keyframes empty{0%{opacity:1}}@keyframes empty{0%{opacity:1}}@-webkit-keyframes fadeIn{0%{opacity:0}100%{opacity:1}}@-moz-keyframes fadeIn{0%{opacity:0}100%{opacity:1}}@keyframes fadeIn{0%{opacity:0}100%{opacity:1}}@-webkit-keyframes fadeOut{0%{opacity:1}100%{opacity:0}}@-moz-keyframes fadeOut{0%{opacity:1}100%{opacity:0}}@keyframes fadeOut{0%{opacity:1}100%{opacity:0}}@-webkit-keyframes backSlideOut{25%{opacity:.5;-webkit-transform:translateZ(-500px)}75%{opacity:.5;-webkit-transform:translateZ(-500px) translateX(-200%)}100%{opacity:.5;-webkit-transform:translateZ(-500px) translateX(-200%)}}@-moz-keyframes backSlideOut{25%{opacity:.5;-moz-transform:translateZ(-500px)}75%{opacity:.5;-moz-transform:translateZ(-500px) translateX(-200%)}100%{opacity:.5;-moz-transform:translateZ(-500px) translateX(-200%)}}@keyframes backSlideOut{25%{opacity:.5;transform:translateZ(-500px)}75%{opacity:.5;transform:translateZ(-500px) translateX(-200%)}100%{opacity:.5;transform:translateZ(-500px) translateX(-200%)}}@-webkit-keyframes backSlideIn{0%,25%{opacity:.5;-webkit-transform:translateZ(-500px) translateX(200%)}75%{opacity:.5;-webkit-transform:translateZ(-500px)}100%{opacity:1;-webkit-transform:translateZ(0) translateX(0)}}@-moz-keyframes backSlideIn{0%,25%{opacity:.5;-moz-transform:translateZ(-500px) translateX(200%)}75%{opacity:.5;-moz-transform:translateZ(-500px)}100%{opacity:1;-moz-transform:translateZ(0) translateX(0)}}@keyframes backSlideIn{0%,25%{opacity:.5;transform:translateZ(-500px) translateX(200%)}75%{opacity:.5;transform:translateZ(-500px)}100%{opacity:1;transform:translateZ(0) translateX(0)}}@-webkit-keyframes scaleToFade{to{opacity:0;-webkit-transform:scale(.8)}}@-moz-keyframes scaleToFade{to{opacity:0;-moz-transform:scale(.8)}}@keyframes scaleToFade{to{opacity:0;transform:scale(.8)}}@-webkit-keyframes goDown{from{-webkit-transform:translateY(-100%)}}@-moz-keyframes goDown{from{-moz-transform:translateY(-100%)}}@keyframes goDown{from{transform:translateY(-100%)}}@-webkit-keyframes scaleUpFrom{from{opacity:0;-webkit-transform:scale(1.5)}}@-moz-keyframes scaleUpFrom{from{opacity:0;-moz-transform:scale(1.5)}}@keyframes scaleUpFrom{from{opacity:0;transform:scale(1.5)}}@-webkit-keyframes scaleUpTo{to{opacity:0;-webkit-transform:scale(1.5)}}@-moz-keyframes scaleUpTo{to{opacity:0;-moz-transform:scale(1.5)}}@keyframes scaleUpTo{to{opacity:0;transform:scale(1.5)}}