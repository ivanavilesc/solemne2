<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Arriendo {
    
    private $fecarriendo;
    private $seguarriendo;
    private $comentarriendo;
    private $patente;
    private $rutcli;
    
    public function __construct($fecarriendo, $seguarriendo, $comentarriendo, $patente, $rutcli) {
        $this->fecarriendo = $fecarriendo;
        $this->seguarriendo = $seguarriendo;
        $this->comentarriendo = $comentarriendo;
        $this->patente = $patente;
        $this->rutcli = $rutcli;
    }

    function getFecarriendo() {
        return $this->fecarriendo;
    }

    function getSeguarriendo() {
        return $this->seguarriendo;
    }

    function getComentarriendo() {
        return $this->comentarriendo;
    }

    function getPatente() {
        return $this->patente;
    }

    function getRutcli() {
        return $this->rutcli;
    }

    function setFecarriendo($fecarriendo) {
        $this->fecarriendo = $fecarriendo;
    }

    function setSeguarriendo($seguarriendo) {
        $this->seguarriendo = $seguarriendo;
    }

    function setComentarriendo($comentarriendo) {
        $this->comentarriendo = $comentarriendo;
    }

    function setPatente($patente) {
        $this->patente = $patente;
    }

    function setRutcli($rutcli) {
        $this->rutcli = $rutcli;
    }


}
