<?php

use Fish\model\model;

/**
 * Description of FishTableBase
 *
 * @author JohanaGale <ladyjkaulitz@hotmail.com>
 */
class FishTableBase extends model {

    private $Id;
    private $nombre;
    private $raza;
    private $pesoPromedio;
    private $precioLibra;
    private $lugarProcedencia;
    private $createdAt;
    private $updatedAt;
    private $deletedAt;

    const SECUENCIA = 'Fish_Id_seq';

    public function getId() {
        return $this->Id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getRaza() {
        return $this->raza;
    }

    public function getPesoPromedio() {
        return $this->pesoPromedio;
    }

    public function getPrecioLibra() {
        return $this->precioLibre;
    }

    public function getLugarProcedencia() {
        return $this->lugarProcedencia;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function getDeletedAt() {
        return $this->deletedAt;
    }

    public function setId($Id) {
        $this->Id = $Id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setRaza($raza) {
        $this->raza = $raza;
    }

    public function setPesoPromedio($pesoPromedio) {
        $this->pesoPromedio = $pesoPromedio;
    }

    public function setPrecioLibre($precioLibra) {
        $this->precioLibra = $precioLibra;
    }

    public function setLugarProcedencia($lugarProcedencia) {
        $this->lugarProcedencia = $lugarProcedencia;
    }

    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setDeletedAt($deletedAt) {
        $this->deletedAt = $deletedAt;
    }

}
