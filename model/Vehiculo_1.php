<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vehiculo
 *
 * @author Ivan Aviles
 */
class Vehiculo {
    private $patente;
    private $tipoveh;
    private $marcaveh;
    private $modeloveh;
    private $valarriendoveh;
    private $nomarchivo;
    private $archivo;
    
    public function __construct($patente, $tipoveh, $marcaveh, $modeloveh, $valarriendoveh, $nomarchivo, $archivo) {
        $this->patente = $patente;
        $this->tipoveh = $tipoveh;
        $this->marcaveh = $marcaveh;
        $this->modeloveh = $modeloveh;
        $this->valarriendoveh = $valarriendoveh;
        $this->nomarchivo = $nomarchivo;
        $this->archivo = $archivo;
    }

    
    
    function getPatente() {
        return $this->patente;
    }

    function getTipoveh() {
        return $this->tipoveh;
    }

    function getMarcaveh() {
        return $this->marcaveh;
    }

    function getModeloveh() {
        return $this->modeloveh;
    }

    function getValarriendoveh() {
        return $this->valarriendoveh;
    }

    function getNomarchivo() {
        return $this->nomarchivo;
    }

    function getArchivo() {
        return $this->archivo;
    }

    function setPatente($patente) {
        $this->patente = $patente;
    }

    function setTipoveh($tipoveh) {
        $this->tipoveh = $tipoveh;
    }

    function setMarcaveh($marcaveh) {
        $this->marcaveh = $marcaveh;
    }

    function setModeloveh($modeloveh) {
        $this->modeloveh = $modeloveh;
    }

    function setValarriendoveh($valarriendoveh) {
        $this->valarriendoveh = $valarriendoveh;
    }

    function setNomarchivo($nomarchivo) {
        $this->nomarchivo = $nomarchivo;
    }

    function setArchivo($archivo) {
        $this->archivo = $archivo;
    }




}
