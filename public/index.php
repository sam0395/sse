<?php

/*
|------------------------------------------------------------
| Register The Composer Auto Loader
|------------------------------------------------------------
|
| Composer provides an autoloader that we can use to load all of our classes
|
*/

require_once dirname(__FILE__) . '/../bootstrap/autoload.php';

/*
|------------------------------------------------------------
| Register The Application
|------------------------------------------------------------
|
| This will initialize the application
|
*/

$app = new Trace\App\App('Trace');

echo 'welcome to <i>' . $app->getName() . '</i>, version ' . $app->getVersion();

?>