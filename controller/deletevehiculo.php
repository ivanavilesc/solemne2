<?php
include('../model/Db.php');
include('../model/VehiculoDAO.php');

$patente = $_POST["patente"];

$DAO = new VehiculoDAO();
//$DAO->insertaVehiculo($patente,$tipoveh,$marcaveh,$modeloveh,$valarriendoveh);

if($DAO->deleteVehiculo($patente)){
    header('Location: ../view/mantenedorvehiculos.php');
}