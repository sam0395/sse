<?php 
namespace Trace\App;

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
	const VERSION = "0.0.1";

	/**
	* The name of the application
	*
	* @var string
	*/
	protected $name;

	/**
     *	Setup variables
     *
     * @return void
     */
	public function __construct($name)
	{
		self::setName($name);
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

	/**
	* Get the application name
	*
	* @var string
	*/
	public function getName()
	{
		return $this->name;
	}

	/**
	* Set the application name
	*
	* @var string
	*/
	public function setName($name)
	{
		return $this->name = $name;
	}		
}

?>