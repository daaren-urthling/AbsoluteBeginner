<?php 
	session_start();

    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
	define ('ROOT', realpath(dirname(__FILE__)));
	define('BASE_URL', "//".$_SERVER['HTTP_HOST'].dirname($_SERVER["REQUEST_URI"].'?')."/");
?>