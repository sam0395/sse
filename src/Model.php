<?php
namespace Trace\App;

/*
|------------------------------------------------------------
| Model Instance
|------------------------------------------------------------
|
| Base model for all other models extending this class
|
*/

abstract class Model
{

	/**
	* The connection used by the model
	*
	* @var obj
	*/
	protected $connection;

	/**
	* The table the model will use
	*
	* @var string
	*/
	protected $table;
}
?>