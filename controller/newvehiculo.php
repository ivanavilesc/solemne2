<?php
include('../model/Db.php');
include('../model/VehiculoDAO.php');
include('./uploadfile.php');

$patente = $_POST["patente"];
$tipoveh = $_POST["tipoveh"];
$marcaveh = $_POST["marcaveh"];
$modeloveh = $_POST["modeloveh"];
$valarriendoveh = $_POST["valarriendoveh"];
//$imgusuario = $_POST["imgusuario"];

// ############################################################################
// ############## VAMOS A PROBAR LA SUBIDA DESDE EL NEW  !!!!!!! ################
// ############################################################################

if (!is_dir(DIRBASE."/img/vehiculos/")){
    if(!mkdir(DIRBASE."/img/vehiculos/", 0777, true)) {
        die('Fallo al crear las carpetas...');
    }
}

$idusuario=$_POST["patente"];
$upd=0;

echo '<pre>';
echo 'Patente : '.$patente;
echo 'Upd : '.$upd;
echo '$_FILES : '.$_FILES;
echo '</pre>';

if (isset($_FILES["imgusuario"]) && $_FILES["imgusuario"]["name"]!="" ){
    //Instancia de la clase Uploadfile()
    $upd=new Uploadfile();
    
    //Deja en la variable sArchivo, lo que retorna el metodo getfilename
    //NOMBRE FORMATEADO DE ACUERDO AL ID + extensión (ej : Patente LE3453 -> LE3453.jpg)
    $sArchivo = $upd->getfilename($_FILES["imgusuario"]["name"], $idusuario);
    
    //Deja en la variable sDirArchivo, la ruta local del archivo que se está subiendo
    $sDirArchivo=DIRBASE."/img/usuario/".$sArchivo;

    /*Nombre original*/
    $sNomArchivo=$_FILES["imgusuario"]["name"];

    /*Cambio de ubicación archivo temporal*/
    move_uploaded_file($_FILES["imgusuario"]["tmp_name"], $sDirArchivo);

    /*
    echo '<pre>';
    echo 'Patente : '.$patente;
    //echo 'Upd : '.$upd;
    //echo 'ArrFILE : '.$arrfile;
    echo 'sArchivo : '.$sArchivo;
    echo 'sDirArchivo : '.$sDirArchivo;
    echo 'sNomArchivo : '.$sNomArchivo;
    echo '</pre>';
     * 
     */

    }else{
        echo '<script>alert("Nos fuimos a la B");</script>';
        $sNomArchivo = $_POST["nomarchivo"];
        $sArchivo = $_POST["archivo"];
    }


// ############################################################################
// ############## !!!!!!!!!!!         FIN              !!!!!!! ################
// ############################################################################


//include('uploading.php');



$DAO = new VehiculoDAO();
//$DAO->insertaVehiculo($patente,$tipoveh,$marcaveh,$modeloveh,$valarriendoveh,$nomarchivo,$archivo);

if($DAO->insertaVehiculo($patente, $tipoveh, $marcaveh, $modeloveh, $valarriendoveh, $sNomArchivo, $sArchivo)){
    header('Location: ../view/mantenedorvehiculos.php');
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

