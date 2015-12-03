<?php 
namespace sse\App;

/*
|------------------------------------------------------------
| Application Instance
|------------------------------------------------------------
|
| Initialize a new instance of app to construct the application
|
*/

class App
{

	/**
	* The SSE framework version
	*
	* @var string
	*/
	const VERSION = "1.0";

	/**
     *	Setup variables
     *
     * @return void
     */
	public function __construct()
	{

	}

	/**
	* Get the application version
	*
	* @var string
	*/
	public function getVersion()
	{
		return static::VERSION;
	}
}

?>