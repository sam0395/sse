<?php

use sse\App;

class AppTest extends PHPUnit_Framework_TestCase {
	
	public function testApp()
	{
		$app = new App\App;

		echo $app->env;
	}
}

?>