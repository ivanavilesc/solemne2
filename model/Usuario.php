<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author cetecom
 */
class usuario {
    private $idusuario;
    private $nombre;
    private $nomusu;
    private $clave;
    private $pref01;
    private $pref02;
    private $pref03;
    
    public function __construct($idusuario, $nombre, $nomusu, $clave, $pref01, $pref02, $pref03) {
        $this->idusuario = $idusuario;
        $this->nombre = $nombre;
        $this->nomusu = $nomusu;
        $this->clave = $clave;
        $this->pref01 = $pref01;
        $this->pref02 = $pref02;
        $this->pref03 = $pref03;
    }
    
    public function getIdusuario() {
        return $this->idusuario;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getNomusu() {
        return $this->nomusu;
    }

    public function getClave() {
        return $this->clave;
    }

    public function getPref01() {
        return $this->pref01;
    }

    public function getPref02() {
        return $this->pref02;
    }

    public function getPref03() {
        return $this->pref03;
    }

    public function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setNomusu($nomusu) {
        $this->nomusu = $nomusu;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }

    public function setPref01($pref01) {
        $this->pref01 = $pref01;
    }

    public function setPref02($pref02) {
        $this->pref02 = $pref02;
    }

    public function setPref03($pref03) {
        $this->pref03 = $pref03;
    }



}
