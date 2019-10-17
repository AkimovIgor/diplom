<?php

function debug($str, $die = false){
    echo '<pre>' . print_r($str, true) . '</pre>';
    if($die) die;
}

function redirect($http = false){
    if($http){
        $redirect = $http;
    } else{
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header('Location: ' . $redirect);
    exit;
}

function hsc($str){
    return htmlspecialchars($str, ENT_QUOTES);
}




?>