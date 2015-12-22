<?php

namespace Trace\Core;
  /**
   *
   */
  class Model
  {

    protected $_table = 'Test';

    protected $_primaryKey;

    private $_query;

    private $_type;

    private $_clause = array();

    function __construct($id = null)
    {
      if($id)
      {
        $this->where($this->_primaryKey,'=', $id);
      }
    }

    public function where($field, $opr, $value)
    {
      $this->_clause = array(
        'field' => $field,
        'opr' => $opr,
        'value' => $value
      );

      return print_r($this);
    }

    public function find()




  }

?>
