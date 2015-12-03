<?php

/*
|------------------------------------------------------------
| Register The Composer Auto Loader
|------------------------------------------------------------
|
| Composer provides an autoloader that we can use to load all of our classes
|
*/

require_once dirname(__FILE__) . '../../vendor/autoload.php';



//config array
$config = array();

//setup main app
$config['app'] = array(
	'name' => 'SSE'
);

//setup database settings
$config['db'] = array(
    'driver'   => 'mysql',
    'host'     => 'localhost',
    'port'     => '3306',
    'user'     => 'root',
    'password' => 'bbbb1111',
    'name'     => 'db_name',
);

$DB = new DB;

?>