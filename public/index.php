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

echo "<b>Get the metadata (return param) for App class:</b><br>";
var_dump($class->getClassMeta());
echo "<br>";
echo '<b>Get the metadata for the method getVersion:</b><br>';
var_dump($class->getMethodMeta('getVersion'));
echo '<br>';
?>