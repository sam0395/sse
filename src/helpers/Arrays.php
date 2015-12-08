<?php
namespace Trace\Core\Helpers;

class Arrays
{
    
    /**
    * Clean the provied array
    *
    * @param array
    * @return cleaned array
    */
	public static function clean($array)
    {
        return array_filter($array, function($item) {
            return !empty($item);
        });
    }
    
    /**
    * Trim the provided array
    *
    * @param array
    * @return trimmed array
    *
    */
    public static function trim($array)
    {
        return array_map(function($item) {
            return trim($item);
        }, $array);
    }
}
?>