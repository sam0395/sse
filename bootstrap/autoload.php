<?php

/*
|------------------------------------------------------------
| Register The Composer Auto Loader
|------------------------------------------------------------
|
| Composer provides an autoloader that we can use to load all of our classes
|
*/

if (!file_exists(dirname(__FILE__) . '/../vendor/autoload.php')) {
	echo "Please install Composer and run <b>composer install</b> in the working directory.";
	exit();
}

require_once dirname(__FILE__) . '/../vendor/autoload.php';

/*
|------------------------------------------------------------
| Create the cache
|------------------------------------------------------------
|
| Create a cache driver to store information to get faster load times
|
*/
$cache = new Trace\Core\Cache();

?>