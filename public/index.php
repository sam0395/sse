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

$class = new Trace\App\Inspector('Trace\App\App');

echo 'welcome to <i>' . $app->getName() . '</i>, version ' . $app->getVersion() . '<br><br>';

$base = new Trace\App\Base();
?>