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
header("Content-type: text/javascript"); ?>
function subtractQty(quantity_id){ 
    if(document.getElementById(quantity_id).value - 1 < 0)
        return;
    else
        document.getElementById(quantity_id).value--;
}

function subtractQty1() {
    if(document.getElementById("qty1").value - 1 < 0)
        return;
    else
        document.getElementById("qty1").value--;
}

function subtractQty2() {
    if(document.getElementById("qty2").value - 1 < 0)
        return;
    else
        document.getElementById("qty2").value--;
}

function subtractQty3() {
    if(document.getElementById("qty3").value - 1 < 0)
        return;
    else
        document.getElementById("qty3").value--;
}

function subtractQty4() {
    if(document.getElementById("qty4").value - 1 < 0)
        return;
    else
        document.getElementById("qty4").value--;
}