<?php

use Fish\myConfig\myConfig as config;

include_once config:: getpath() . 'model/base/FishTableBase.class.php';

/**
 * Description of Fishtable
 *
 * @author JohanaGale <ladyjkaulitz@hotmail.com>
 */
class Fishtable extends FishTableBase {

    static public function getAll() {
        $conex = self::getConexion();
        $sql = 'SELECT  id , nombre ,raza ,peso_promedio ,precio_libra ,lugar_procedencia ,created_at , updated_at,  deleted_at  '
                . ' FROM Fish  WHERE deleted_at IS NULL ';
        $respuesta = $conex->prepare($sql);
        $respuesta->execute();
        return ($respuesta->rowCount() > 0 ) ? $respuesta->fetchll(PDO::FETCH_OBJ) : false;
    }

    static public function getById($id) {
        $conex = self::getConexion();
        $sql = 'SELECT   id , nombre ,raza ,peso_promedio ,precio_libra ,lugar_procedencia ,created_at , updated_at,  deleted_at '
                . ' FROM  fish'
                . 'WHERE deleted_at IS NULL'
                . 'id = :id';
        $param = array(
            ':id' => $id
        );
        $respuesta = $conex->prepare($sql);
        $respuesta->execute($param);
        return ($respuesta->rowCount() > 0 ) ? $respuesta->fetchll(PDO::FETCH_OBJ) : false;
    }

    public function save() {
        $conex = self::getConexion();
        $sql = 'INSERT INTO Fish (nombre ,raza ,peso_promedio ,precio_libra ,lugar_procedencia )  VALUES (:nombre , :raza , '
                . ':peso_promedio , :precio_libra , :lugar_procedencia)';
        $param = array(
            ':nombre' => $this->getNombre(),
            ':raza' => $this->getRaza(),
            ':peso_promedio' => $this->getPesoPromedio(),
            ':precio_libra' => $this->getPrecioLibra(),
            ':lugar_procedencia' => $this->getLugarProcedencia()
        );
        $respuesta = $conex->prepare($sql);
        $respuesta->execute($param);
        return $conex->lastInsertId(self::SECUENCIA);
    }

    public function update() {
        $conex = self::getConexion();
        $sql = 'UPDATE Fish SET nombre = :nombre , raza = :raza ,peso_promedio = :peso_promedio ,precio_libra = :precio_libra ,'
                . 'lugar_procedencia = :lugar_procedencia ' .
                'WHERE id = :id';
        $param = array(
            ':nombre' => $this->getNombre(),
            ':raza' => $this->getRaza(),
            ':peso_promedio' => $this->getPesoPromedio(),
            ':precio_libra' => $this->getPrecioLibra(),
            ':lugar_procedencia' => $this->getLugarProcedencia(),
            ':id' => $this->getId()
        );
        $respuesta = $conex->prepare($sql);
        $respuesta->execute($param);
        return true;
    }

    public function delete($seletelogica = true) {
        $conex = self::getConexion();
        $param = array(
            ':id' => $this->getId()
        );
        switch ($seletelogica) {
            case true:
                $sql = 'UPDATE  Fish SET deleted_at = now() WHERE id = :id';

                break;
            case false:
                $sql = 'DELETE FROM  Fish WHERE id = :id';
                break;
            default :
                throw new PDOException('Por favor ingresar datos validos para proceder al borrado logico');
        }
        $respuesta = $conex->prepare($sql);
        $respuesta->execute($param);
        return true;
    }

}
