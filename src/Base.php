<?php
namespace Trace\Core;

use Trace\Core\Helpers\Inspector as Inspector;

class Base
{
	private $_inspector;

	public function __construct($options = array())
	{
		$this->_inspector = new Inspector($this);

		if (is_array($options) || is_object($options))
        {
            foreach ($options as $key => $value)
            {
                $key = ucfirst($key);
                $method = "set{$key}";
                $this->$method($value);
            }
        }
	}
}
?>