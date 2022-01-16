<?php 
	session_start();

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', '/absolute-beginner/');
	if (!empty(getenv("ROOT")))
	{
		define ('ROOT', getenv("ROOT"));
	}
	else
	{
		define ('ROOT', "/absolute-beginner");
	}

?>