<?php

namespace azucar\model;

use azucar\myConfig\myConfig as config;

/**
 * Description of model
 *
 * @author julianlasso
 */
class model {

  static private $instancia = null;

  /**
   * Obtiene la instancia de la conexión a la base de datos
   * @return \PDO
   */
  static protected function getConexion() {
    if (self::$instancia === null) {

      // para usar conexiones persistentes
      $opciones = array(
          \PDO::ATTR_PERSISTENT => true
      );

      // crea la instancia de la conexión
      self::$instancia = new \PDO(config::getDSN(), config::getDbUser(), config::getDbPassword(), $opciones);

      // asignación de atributos para el manejo de errores
      self::$instancia->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    return self::$instancia;
  }

}
