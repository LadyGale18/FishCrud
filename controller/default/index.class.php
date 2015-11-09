<?php

use Fish\controller\controller;
use Fish\view\view;

/**
 * Description of index
 *
 * @author JohanaGale <ladyjkaulitz@hotmail.com>
 */
class index extends controller {

    public function execute() {

       
        view::defineView('Fish', 'index', NULL, 'html');
    }

}
