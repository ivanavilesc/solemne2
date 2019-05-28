<?php

include('../model/Db.php');
include('../model/VehiculoDAO.php');

class ListVehiculos{
    
    function getListVehiculos(){
        $DAO = new VehiculoDAO();
        //$DAO->insertaVehiculo($patente,$tipoveh,$marcaveh,$modeloveh,$valarriendoveh);
        $result = null;
        if($result = $DAO->getAllVehiculos()){
            return $result;
            //header('Location: ../view/mantenedorvehiculos.php');
        }
        
    }
    
}


