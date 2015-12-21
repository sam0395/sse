<?php
/**
 *
 */

namespace Trace\Core;

class Form
{

  protected $html;

  public function __constructH(Html $html)
  {
    $this->html = $html;
  }

  public function __clone()
  {

  }

  public static function createLogin($url, $options = null)
  {

    $options['action'] = $url;

    $this->html->CreateElement('form', $options);

    return 0;
  }

  public static function input($options = null)
  {
    $this->html->CreateElement('input', $options);

    return 0;
  }

  public static function submit($options = null)
  {

    $options['type'] = 'submit';

    $this->html->CreateElement('input', $options);

    return 0;

  }

  public static function close()
  {
    $this->html->CloseElement('form');

    return 0;
  }
}

?>
