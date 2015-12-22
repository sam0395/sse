<?php

//This function allows for any html tag to be created and closed via function calls

namespace Trace\Core\Helpers;

class Html
{

    private function __construct()
    {

    }

    private function __clone()
    {

    }

	  public static function CreateElement($tag, $attributes = null)
    {

      $html = array();

      $html[] = '<'.$tag;

      if(isset($attributes))
      {

        $html[] = Html::Attributes($attributes);

        if(Html::IsSpecialElement($tag))
          $html[] = ' />';
        else
          $html[] = '>';

      }
      else if(Html::IsSpecialElement($tag))
          $html[] = ' />';
        else
          $html[] = '>';

      count($html) > 0 ? $new_element = implode('', $html) : $new_element = '';

      return print_r($new_element);
    }


    public static function Attributes($attributes)
    {
      $html = array();

      foreach ($attributes as $key => $value)
      {

        $element = $key . '="' . $value . '"';

      if($key === 'input')
        $html[] = $element . '/';
      else
        $html[] = $element;
      }

      return count($html) > 0 ? ' '.implode(' ', $html) : '';
    }


    public static function CloseElement($tag)
    {

      return print_r('</' . $tag . '>');
    }


    public static function IsSpecialElement($tag)
    {
      switch($tag)
      {
        case 'br' : return true;
                    break;
        case 'img' : return true;
                     break;
        case 'input' : return true;
                       break;
        case 'button' : return true;
                        break;
        default : return false;
      }
    }
}

?>
