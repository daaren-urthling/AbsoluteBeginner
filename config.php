<?php 
	session_start();

	

	echo 'DOCUMENT_ROOT ' . $_SERVER['DOCUMENT_ROOT'] . "</br>";
	echo 'SERVER_NAME ' . $_SERVER['SERVER_NAME'] . "</br>";
	echo 'HTTP_REFERER ' . $_SERVER['HTTP_REFERER'] . "</br>";
	echo 'HTTP_HOST ' . $_SERVER['HTTP_HOST'] . "</br>";
	echo "SERVER_NAME +  REQUEST_URI http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']. "</br>";
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
	echo $protocol . "://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/' . "</br>";

	define ('ROOT', realpath(dirname(__FILE__)));
	define('BASE_URL', $protocol . "://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/');
?>