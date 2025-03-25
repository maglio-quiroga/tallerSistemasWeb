<?php

$direccionCarpeta = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$direccionUrl = $_SERVER['REQUEST_URI'];


$url = str_replace($direccionCarpeta, '', $direccionUrl);
$url = trim($url, '/');

define('URL', $url);
    