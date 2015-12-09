<?php
namespace Trace\Core;

class Cache
{
	
	/**
	* Path to cache folder
	*
	* @var String
	*/
	private $_path = 'bootstrap/cache';

	/**
	* Cache file name
	*
	* @var String
	*/
	private $_name = 'default';

	/**
	* Cache extension
	*
	* @var String
	*/
	private $extension = '.cache';

	/**
	* Construct cache class
	*
	* @return void
	*/
	public function __construct()
	{
		//do nothing
	}

	/**
	* Store cache
	*
	* @param string $key
	* @param string|array $data
	* @param integer [optional] $expiration  
	*/
	public function store($key, $data, $expiration = 0)
	{
		$data = array(
			'time'       => time(),
			'expiration' => $expiration,
			'data'       => $data
		);

		$cache = $this->loadCache();
	}

	/**
	* load the cache file
	*
	*/
	public function loadCache()
	{

	}

	/**
	* Get the cache direcotry
	*
	*
	*/
	public function _getChacheDir()
	{

	}
}