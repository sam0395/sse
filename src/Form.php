<?php
/**
 *
 */

namespace Trace\Core;

use Trace\Core\Helpers\Html as Html;

class Form
{

  private function __construct()
  {

  }

  private function __clone()
  {

  }

  public static function CreateLogin($url, $options = null)
  {

    $options['action'] = $url;

    Html::CreateElement('form', $options);

    return 0;
  }

  public static function Input($options = null)
  {
    if(isset($options))
      Html::CreateElement('input', $options);
    else
      Html::CreateElement('input');

    return 0;
  }

  public static function submit($options = null)
  {

    $options['type'] = 'submit';

    Html::CreateElement('input', $options);

    return 0;

  }

  public static function Close()
  {
    Html::CloseElement('form');

    return 0;
  }
}

?>
