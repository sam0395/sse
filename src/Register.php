<?php
namespace Trace\Core;

class Register
{

	/**
	* Holds all of the class instances
	*
	* @var array
	*/
	private static $instances = array();

	/**
	* Prevent construct
	*
	* @return void
	*/
	private function __construct()
	{

	}

	/**
	* Prevent clone
	*
	* @return void
	*/
	private function __clone()
	{

	}

	/**
	* Get instance of class
	*
	* @param string $key
	* @param string [optional] $default
	* @return $default
	*/
	public static function getInstance($key, $default = null)
	{
		return self::has($key) ? self::$instances[$key] : $default;
	}

	/**
	* Get instance
	*
	* @param string $key
	* @param object [optional] $instance
	* @return void
	*/
	public static function setInstance($key, $instance = null)
	{
		self::$instances[$key] = $instance;
	}

	/**
	* Destroy instance
	*
	* @param string $key
	* @return void
	*/
	public static function destroy($key)
	{
		unset(self::$instances[$key]);
	}

	/**
	* check if instance exists
	*
	* @param string $key
	* @return boolean
	*/
	private static function has($key)
	{
		return isset(self::$instances[$key]);
	}
}
