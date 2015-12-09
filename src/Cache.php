<?php
namespace Trace\Core;

class Cache
{
	
	/**
	* Path to cache folder
	*
	* @var String
	*/
	private $_path = 'bootstrap/cache/';

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
	private $_extension = '.json';

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

		$cacheData = json_encode($data);
	    file_put_contents($this->getCacheDir(), $cacheData);
	    return $this;
	}

	/**
	* load the cache file
	*
	*/
	public function loadCache()
	{
		if (file_exists($this->getCacheDir())) {
			return json_decode(file_get_contents($this->getCacheDir()));
		}
		return false;
	}

	/**
	* Get the cache direcotry
	*
	* 
	*/
	private function getCacheDir()
	{
		$filename = $this->getName();
		
		$filename = preg_replace('/[^0-9a-z\.\_\-]/i', '', strtolower($filename));
		
		return $this->getPath() . $this->hash($filename) . $this->getExtension();
	}

	/**
	* Hash a string
	*
	* @return string
	*/
	private function hash($string)
	{
		return sha1($string);
	}

	/**
	* Get the cache directory
	*
	* @return string 
	*/
	public function getPath()
	{
		return $this->_path;
	}

	/**
	* Get the cache name
	*
	* @return string
	*/
	public function getName()
	{
		return $this->_name;
	}

	/**
	* Get the cache extension
	*
	* @return string
	*/
	public function getExtension()
	{
		return $this->_extension;
	}
}