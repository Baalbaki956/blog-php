<?php

function sanitizeString($var) {
    $var = stripslashes($var);
    $var = htmlentities($var);
    $var = strip_tags($var);
    
    return $var;
}

function redirectTo($url) {
    header("Location: " . $url);
    exit;
}

function isPostRequested() {
    return $_SERVER["REQUEST_METHOD"] == "POST";
}

function isGetRequested() {
    return $_SERVER["REQUEST_METHOD"] == "GET";
}