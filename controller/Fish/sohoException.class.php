<?php

use Fish\controller\controller;
use Fish\view\view;

/**
 * Description of exception
 *
 * @author JohanaGale <ladyjkaulitz@hotmail.com>
 */
class sohoException extends controller {

  public function execute() {
    $variables = array(
        'title' => 'Ocurrio un error en el sistema',
        'exc' => $this->exc
    );
    view::defineView('Fish', 'exception', $variables, 'html');
  }

}
