<?php

namespace azucar\controller;

/**
 * Description of controller
 *
 * @author julianlasso
 */
abstract class controller {
  
  protected $exc;

  public function __construct(\PDOException $exc = null) {
    $this->exc = $exc;
  }

  abstract public function execute();
}
