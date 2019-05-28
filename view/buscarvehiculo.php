<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include('../config/constantes.php'); ?>
        <?php include('../model/Vehiculo.php'); ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>    
    </head>
    
    <body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <div id="toplogout">
            <p class="text-right"> <a  href="<?= URLBASE ?>/controller/logout.php" style="color: #f5f5f5">Cerrar sesión&nbsp;</a> </p>
        </div>
        
        <div id="titulo">
            <h3 class="text-center"> Sistema Rent-a-Car</h3>
        </div>
        <div id="menu">
            <div class="list-group">
                    <a href="<?=URLBASE?>" class="list-group-item list-group-item-action">Inicio</a>
                    <a href="<?=URLBASE?>/view/ingresoarriendo.php" class="list-group-item list-group-item-action">Ingresar un arriendo</a>
                    <a href="<?=URLBASE?>/view/reportes.php" class="list-group-item list-group-item-action">Reportes</a>
                    <a href="<?=URLBASE?>/view/listadoarriendos.php" class="list-group-item list-group-item-action">Listar Arriendos</a>
                    <a href="<?=URLBASE?>/view/mantenedorvehiculos.php" class="list-group-item list-group-item-action">Mantenedor Vehiculos</a>
                    <a href="<?=URLBASE?>/view/buscarvehiculo.php" class="list-group-item list-group-item-action">Buscar un Vehiculo</a>
            </div>
        </div>
        <div id="contenido">

            <h4 class="text-center">DETALLE DATOS VEHICULO</h4>

            <form id="formBuscarPatente" class="needs-validation" method="POST" action="../controller/findVehiculo.php" >

                <div class="form-group col-md-6"
                     <label>Patente</label>
                    <input id="patenteABuscar" class="form-control" name="patenteABuscar" type="text" placeholder="Escriba una Patente a buscar" required>
                    <div class="invalid-feedback">Debe escribir una Patente</div>
                </div>               

                <div class="form-group col-md-6">
                    <button type="submit" id="btnenviar" class="btn btn-primary">Consultar Patente</button>                
                </div>                                

            </form>  <!-- ###### FIN FORM ############################################### -->

            <?php
            
            if (isset($_SESSION['DatosVehiculo'])) {
                //$objVehiculo = new Vehiculo;
                //include('../model/Vehiculo.php');
                $objVehiculo = unserialize($_SESSION['DatosVehiculo']);
                $_SESSION['DatosVehiculo'] = null;
                $oUsr = new Vehiculo(
                        $objVehiculo->getPatente(),
                        $objVehiculo->getTipoveh(),
                        $objVehiculo->getMarcaveh(),
                        $objVehiculo->getModeloveh(),
                        $objVehiculo->getValarriendoveh(),
                        $objVehiculo->getNomarchivo(),
                        $objVehiculo->getArchivo());

                echo '<div class="form-group col-md-6"';
                echo '<label>Tipo de Vehiculo</label>';
                echo '<input id="tipoveh" class="form-control" value="'.$oUsr->getTipoveh().'" name="tipoveh" type="text">';
                echo '</div>';                

                echo '<div class="form-group col-md-6"';    
                     echo '<label>Marca</label>';
                    echo '<input id="marcaveh" class="form-control" value="'.$oUsr->getMarcaveh().'" name="marcaveh" type="text">';                 
                echo '</div>';

            echo '<div class="form-group col-md-6"';
                 echo '<label>Modelo</label>';
                echo '<input id="modeloveh" class="form-control" value="'.$oUsr->getModeloveh().'" name="modeloveh" type="text">';
            echo '</div>';

            echo '<div class="form-group col-md-3">';
                echo '<label>Valor de Arriendo</label>';
                echo '<input id="valarriendoveh" class="form-control"  value="'.$oUsr->getValarriendoveh().'" name="valarriendoveh" type="text">';
            echo '</div>';

            echo '<div class="form-group col-md-3">';
                echo '<label>Imagen del vehiculo</label>';
                
            echo '</div>';               
                
                echo "<script type='text/javascript'>";
                echo "var patentevehiculo = '".$oUsr->getPatente()."';";
                echo "document.getElementById('patenteABuscar').value = patentevehiculo;";                
                echo "</script>"; 
                
            }
            
            if (isset($_SESSION["Vehiculo"])) {
                echo '<div class="alert alert-danger" role="alert">';
                echo '<strong>' . $_SESSION["Vehiculo"] . '</strong>';
                echo '</div>';
                unset($_SESSION["Vehiculo"]);
                unset($_SESSION["DatosVehiculo"]);
            }
            ?>
            <div class="form-group col-md-6">
            <img src="<?=URLBASE."/img/usuario/".$oUsr->getArchivo()?>" class="avatar img-circle img-thumbnail" alt="avatar">
            </div>


            <div id="mensaje"></div>

            <script>

                $("#btnenviar").click(function (event) {
                    var form = $("#formBuscarPatente");

                    if (form[0].checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    } else {
                        //cargadatos();
                        //$('#myModal').modal('show'); 
                    }
                    form.addClass("was-validated");

                });                
  
                function cargarBusqueda(){
                var patentevehiculo = "<?php echo $oUsr->getPatente(); ?>";
                var tipovehiculo = "<?php echo $oUsr->getTipoveh(); ?>";
                var marcavehiculo = "<?php echo $oUsr->getMarcaveh(); ?>";
                var modelovehiculo = "<?php echo $oUsr->getModeloveh(); ?>";
                var valarriendovehiculo = "<?php echo $oUsr->getValarriendoveh(); ?>";

                //Setea en los elementos identificados, los valores obtenidos desde las variables.
                document.getElementById("patente").value = patentevehiculo;
                document.getElementById("tipoveh").value = tipovehiculo;
                document.getElementById("marcaveh").value = marcavehiculo;
                document.getElementById("modeloveh").value = modelovehiculo;                
                document.getElementById("valarriendoveh").value = valarriendovehiculo;        
            };

            </script>


        </div>
    </body>
</html>
