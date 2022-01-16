<?php 
	session_start();

	// hosted on Heroku servers
	if ($_SERVER['DOCUMENT_ROOT'] == "/app") { 
		define ('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
		define('ROOT_URL', "//".$_SERVER['HTTP_HOST']."/");
	}
	// running on localhost 
	else {
		define ('ROOT_PATH', realpath(dirname(__FILE__)));
		define('ROOT_URL', "//" . $_SERVER['HTTP_HOST'] . '/' . pathinfo(ROOT_PATH, PATHINFO_BASENAME) . "/");
	}
	// if (!str_ends_with(ROOT_URL, ''))
	// echo '__FILE__ ' . __FILE__ . "</br>";
	// echo 'ROOT_PATH ' . ROOT_PATH . "</br>";
	// define('ROOT_URL', "//".$_SERVER['SERVER_NAME']."/");
?>