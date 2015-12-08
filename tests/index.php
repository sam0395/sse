<?php

use Trace\Core;

class AppTest extends PHPUnit_Framework_TestCase {
	
	public function testApp()
	{
		$app = new Trace\Core\App;

		echo $app->env;
	}
}

?>