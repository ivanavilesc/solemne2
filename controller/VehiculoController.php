<?php

include('../model/VehiculoDAO.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VehiculoController
 *
 * @author Ivan Aviles
 */
class VehiculoController {
    
    function getCountSUV(){
        $vehiculoDAO = new VehiculoDAO();
        $countsuv = $vehiculoDAO->getCountSUV();        
        return $countsuv;                
    }
    
    function getSedan(){
        $vehiculoDAO = new VehiculoDAO();
        $countsedan = $vehiculoDAO->getCountSEDAN();      
        return $countsedan;                
    }
    
    function getTotalVehiculos(){
        $vehiculoDAO = new VehiculoDAO();
        $counttotal = $vehiculoDAO->getTotalVehiculos();        
        return $counttotal;                
    }
    
}
