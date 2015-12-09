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
| Register The main Application
|------------------------------------------------------------
|
| initialize the main application and load configurations
|
*/

Trace\Core\Register::setInstance('app', new Trace\Core\App('Trace'));

?>
