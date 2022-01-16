<?php 
	session_start();

	define('BASE_URL', '/absolute-beginner/');
	if (!empty(getenv("ROOT")))
	{
		define ('ROOT', getenv("ROOT"));
	}
	else
	{
		define ('ROOT', realpath(dirname(__FILE__)));
	}

?>