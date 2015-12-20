<?php

//This function allows for any html tag to be created and closed via function calls

namespace Trace\Core\Helpers;

class Html
{

    public function __construct()
    {

    }

    public function __clone()
    {

    }

	  public function CreateElement($tag, $attributes = null)
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


    public function Attributes($attributes)
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


    public function CloseElement($tag)
    {

      return print_r('</' . $tag . '>');
    }


    public function IsSpecialElement($tag)
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
