<?php

function url_for($script_path) {
    //add the leading '/' if not present
    if($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}

//This function is basically to rename the function urlencode and we don't have to type the whole name every time
function u($string="") {
    return urlencode($string);
}

function raw_u($string="") {
    return rawurlencode($string);
}

//So we don't have to type the function name a lot. This helps prevent attacks where users post code the browser executes.
function h($string=""){
    return htmlspecialchars($string);
}

function error_404(){
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    exit();
}

function error_500() {
    header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
    exit();
}

function redirect_to($location) {
    header("Location: " . $location);
    exit;
}

function is_post_request(){
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request(){
    return $_SERVER['REQUEST_METHOD'] == "GET";
}

?>