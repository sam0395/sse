<?php
namespace Trace\Core\Helpers;

class Strings
{
	/**
	* Character used to normalize
	*
	* @var string
	*/
	private static $_deliminator = '#';

	/**
	* Normalize a string
	*
	* @param pattern
	* @return normaized string
	*
	*/
	public static function _normalize($pattern)
	{
		return self::$_deliminator . trim($pattern, self::$_deliminator) . self::$_deliminator;
	}

	/**
	* Match a string with a pattern
	*
	* @param string
	* @param pattern
	*
	* @return matched string
	*
	*/
	public static function match($string, $pattern)
	{
		preg_match_all(self::_normalize($pattern), $string, $matches, PREG_PATTERN_ORDER);

		if (!empty($matches[1]))
            {
                return $matches[1];
            }
            
        if (!empty($matches[0]))
	        {
	            return $matches[0];
	        }

        return null;
	}

	/**
	* Split a string
	*
	* @param string
	* @param pattern
	* @param limit
	*
	* @return matched string
	*
	*/
	public static function split($string, $pattern, $limit = null)
    {
        $flags = PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE;
        
        return preg_split(self::_normalize($pattern), $string, $limit, $flags);
    }
}
?>