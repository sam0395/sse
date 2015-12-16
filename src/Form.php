<?php
/**
 *
 */

namespace Trace\Core;

class Form
{

  private function __construct()
  {

  }

  private function __clone()
  {

  }

  public static function open($url, $options = null)
  {
    $html = '<form action="';

    $html = $html . $url . '"';

    if(isset($options['method']))
      $html = $html . ' action="' . $options['method'] . '"';

    if(isset($options['class']))
      $$html = $html . ' class="' . $options['class'] . '"';

    $html = $html . '>';

    return print_r($html);
  }

  public static function submit($title, $options = null)
  {
    $button = '<button type="submit">';
    $button = $button . $title;
    $button = $button . '</button>';

    return print_r($button);

  }

  public static function close()
  {
    return '</form>';
  }
}

?>
