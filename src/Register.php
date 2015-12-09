<?php
namespace Trace\Core;

class Register
{
	private static $instances = array();

	private function __construct()
	{
		// Prevent Construct
	}

	private function __clone()
	{
		// Prevent Clone
	}

	public static function getInstance($key, $default = null)
	{
		if (isset(self::$instances[$key])) {
			return self::$instances[$key];
		}

		return $default;
	}

	public static function setInstance($key, $instance = null)
	{
		self::$instances[$key] = $instance;
	}

	public static function erase($key)
	{
		unset(self::$instances[$key]);
	}
}
?>