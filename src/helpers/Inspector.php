<?php
namespace Trace\App;

use Trace\App\Strings as Strings;
use Trace\App\Arrays as Arrays;

/*
|------------------------------------------------------------
| Inspector
|------------------------------------------------------------
|
| Doc Parser for metadata
|
*/

class Inspector
{

	/**
	* The class we want to parse
	*
	* @var class
	*/
	protected $_class;

	/**
	* The metadata for that class
	*
	* @var array
	*/
	protected $_meta = array(
		"class"      => array(),
		"properties" => array(),
		"parameters" => array()
	);

	/**
	* The properties of array
	*
	* @var array
	*/
	protected $_properties = array();

	/**
	* The methods of array
	*
	* @var array
	*/
	protected $_methods = array();


    /**
	* Construct the class parser
	*
	* @param  Class
	*/
	public function __construct($class)
	{
		$this->_class = $class;
	}

	/**
	* Get the comments of the class
	*
	* @return Class comments
	*/
	protected function _getClassComments()
	{
		$reflection = new \ReflectionClass($this->_class);

		return $reflection->getDocComment();
	}

	/**
	* Get the properties of the class
	*
	* @return Class properties
	*/
	protected function _getClassProperties()
	{
		$reflection = new \ReflectionClass($this->_class);

		return $reflection->getProperties();
	}


	/**
	* Get the methods of the class
	*
	* @return Class methods
	*/
	protected function _getClassMethods()
	{
		$reflection = new \ReflectionClass($this->_class);

		return $reflection->getMethods();
	}

	/**
	* Get the comments of a property
	*
	* @return Property comments
	*/
	protected function _getPropertyComment($property)
	{
		$reflection = new \ReflectionClass($this->_class, $property);

		return $reflection->getDocComment();
	}

	/**
	* Get the comments of a method
	*
	* @return Method comments
	*/
	protected function _getMethodComment($method)
	{
		$reflection = new \ReflectionMethod($this->_class, $method);

		return $reflection->getDocComment();
	}

	/**
	* Parse the comments
	*
	* @return string
	*/
	protected function _parse($comment)
    {
        $meta = array();
        $pattern = "(@[a-zA-Z]+\s*[a-zA-Z0-9, ()_]*)";
        $matches = Strings::match($comment, $pattern);
        
        if ($matches != null)
        {
            foreach ($matches as $match)
            {
                $parts = Arrays::clean(
                   Arrays::trim(
                        Strings::split($match, "[\s]", 2)
                    )
                );
                
                $meta[$parts[0]] = true;
                
                if (sizeof($parts) > 1)
                {
                    $meta[$parts[0]] = Arrays::clean(
                        Arrays::trim(
                            Strings::split($parts[1], ",")
                        )
                    );
                }
            }
        }
        
        return $meta;
    }

	/**
	* Get class comment
	*
	* @return comment
	*/
	public function getClassMeta()
	{
		if (!isset($meta['class'])) 
		{
			$comment = $this->_getClassComments();
			
			$x = $comment ? $meta['class'] = $this->_parse($comment) : $meta['class'] = NULL;
		}
		return $meta['class'];
	}

	/**
	* Get the class properties 
	*
	* @return properties
	*/
	public function getClassProperties()
    {
        if (!isset($_properties))
        {
            $properties = $this->_getClassProperties();
            
            foreach ($properties as $property)
            {
                $_properties[] = $property->getName();
            }
        }
        
        return $_properties;
    }

    /**
    * Get the class methods
    *
    * @return methods
    */
    public function getClassMethods()
    {
        if (!isset($_methods))
        {
            $methods = $this->_getClassMethods();
            

            foreach ($methods as $method)
            {
                $_methods[] = $method->getName();
            }
        }
        
        return $_methods;
    }

    /**
    * Get the comment from property
    *
    * @param property
    * @return property comment 
    */
    public function getPropertyMeta($property)
    {
        if (!isset($_meta["properties"][$property]))
        {
            $comment = $this->_getPropertyComment($property);
            
            if (!empty($comment))
            {
                $_meta["properties"][$property] = $this->_parse($comment);
            }
            else
            {
                $_meta["properties"][$property] = null;
            }
        }
        
        return $_meta["properties"][$property];
    }

    /**
    * Get comment from function
    *
    * @param function
    * @return method comment
    */
    public function getMethodMeta($method)
    {    
        if (!isset($_meta["actions"][$method]))
        {
            $comment = $this->_getMethodComment($method);
            
            if (!empty($comment))
            {
                $_meta["methods"][$method] = $this->_parse($comment);
            }
            else
            {
                $_meta["methods"][$method] = null;
            }
        }
        
        return $_meta["methods"][$method];
    }
}
?>