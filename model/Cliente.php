<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author Ivan Aviles
 */
class Cliente {
    private $rutcli;
    private $nomcli;
    private $apecli;
    private $direcli;
    private $emailcli;
    
    public function __construct($rutcli, $nomcli, $apecli, $direcli, $emailcli) {
        $this->rutcli = $rutcli;
        $this->nomcli = $nomcli;
        $this->apecli = $apecli;
        $this->direcli = $direcli;
        $this->emailcli = $emailcli;
    }

    function getRutcli() {
        return $this->rutcli;
    }

    function getNomcli() {
        return $this->nomcli;
    }

    function getApecli() {
        return $this->apecli;
    }

    function getDirecli() {
        return $this->direcli;
    }

    function getEmailcli() {
        return $this->emailcli;
    }

    function setRutcli($rutcli) {
        $this->rutcli = $rutcli;
    }

    function setNomcli($nomcli) {
        $this->nomcli = $nomcli;
    }

    function setApecli($apecli) {
        $this->apecli = $apecli;
    }

    function setDirecli($direcli) {
        $this->direcli = $direcli;
    }

    function setEmailcli($emailcli) {
        $this->emailcli = $emailcli;
    }


    
}
