<?php
include('../model/Db.php');
include('../model/VehiculoDAO.php');

echo '<script>alert();</script>';
$patente = $_POST["patenteABuscar"];

$DAO = new VehiculoDAO();
//$DAO->insertaVehiculo($patente,$tipoveh,$marcaveh,$modeloveh,$valarriendoveh);
$result = null;
if($result = $DAO->getVehiculoPorPatente($patente)){    
    echo '<pre>';
    var_dump($result);    
    echo '</pre>';    
    $_SESSION['DatosVehiculo'] = serialize($result);
    header('Location: ../view/buscarvehiculo.php');
}else{
    $_SESSION["Vehiculo"] = "Vehiculo no fue encontrado";
    header('Location: ../view/buscarvehiculo.php');

}