<?php

include('../model/Db.php');
include('../model/LeyDAO.php');

class ListLeyes{
    
    function getListLeyes(){
        $DAO = new LeyDAO();
        //$DAO->insertaVehiculo($patente,$tipoveh,$marcaveh,$modeloveh,$valarriendoveh);
        $result = null;
        if($result = $DAO->getAllLeyes()){
            return $result;
            //header('Location: ../view/mantenedorvehiculos.php');
        }
        
    }
    
}


