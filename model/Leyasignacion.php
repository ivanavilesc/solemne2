<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Leyasignacion
 *
 * @author cetecom
 */
class Leyasignacion {
    private $idleyasignacion;
    private $idley;
    private $idusuario;
    private $revisada;
    private $descripcion;
    
    public function __construct($idleyasignacion, $idley, $idusuario, $revisada, $descripcion) {
        $this->idleyasignacion = $idleyasignacion;
        $this->idley = $idley;
        $this->idusuario = $idusuario;
        $this->revisada = $revisada;
        $this->descripcion = $descripcion;
    }
    
    function getIdleyasignacion() {
        return $this->idleyasignacion;
    }

    function getIdley() {
        return $this->idley;
    }

    function getIdusuario() {
        return $this->idusuario;
    }

    function getRevisada() {
        return $this->revisada;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setIdleyasignacion($idleyasignacion) {
        $this->idleyasignacion = $idleyasignacion;
    }

    function setIdley($idley) {
        $this->idley = $idley;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setRevisada($revisada) {
        $this->revisada = $revisada;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }



    
}
