<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ley
 *
 * @author cetecom
 */
class Ley {
    
    private $idley;
    private $numley;
    private $fecpublicacion;
    private $fecpromulgacion;
    private $titulo;
    private $fechahora;
    private $nomarchivo;
    private $archivo;
    
    public function __construct($idley, $numley, $fecpublicacion, $fecpromulgacion, $titulo, $fechahora, $nomarchivo, $archivo) {
        $this->idley = $idley;
        $this->numley = $numley;
        $this->fecpublicacion = $fecpublicacion;
        $this->fecpromulgacion = $fecpromulgacion;
        $this->titulo = $titulo;
        $this->fechahora = $fechahora;
        $this->nomarchivo = $nomarchivo;
        $this->archivo = $archivo;
    }
    
    function getIdley() {
        return $this->idley;
    }

    function getNumley() {
        return $this->numley;
    }

    function getFecpublicacion() {
        return $this->fecpublicacion;
    }

    function getFecpromulgacion() {
        return $this->fecpromulgacion;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getFechahora() {
        return $this->fechahora;
    }

    function getNomarchivo() {
        return $this->nomarchivo;
    }

    function getArchivo() {
        return $this->archivo;
    }

    function setIdley($idley) {
        $this->idley = $idley;
    }

    function setNumley($numley) {
        $this->numley = $numley;
    }

    function setFecpublicacion($fecpublicacion) {
        $this->fecpublicacion = $fecpublicacion;
    }

    function setFecpromulgacion($fecpromulgacion) {
        $this->fecpromulgacion = $fecpromulgacion;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setFechahora($fechahora) {
        $this->fechahora = $fechahora;
    }

    function setNomarchivo($nomarchivo) {
        $this->nomarchivo = $nomarchivo;
    }

    function setArchivo($archivo) {
        $this->archivo = $archivo;
    }



    
}
