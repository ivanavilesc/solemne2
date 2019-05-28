<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php //include('../config/constantes.php'); ?>
        <?php include('../controller/VehiculoController.php'); ?>
        <?php include('../model/Db.php'); ?>
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
            <?php 
            $controller = new VehiculoController();
            $totalsuv = $controller->getCountSUV();
            $totalsedan = $controller->getSedan();
            $totalvehiculos = $controller->getTotalVehiculos();
            
            ?>
            <h4 class="text-center">REPORTES</h4>
            <p>Total de SUV en el Sistema : <?php echo $totalsuv ?> </p>
            <p>Total de SEDAN en el Sistema : <?php echo $totalsedan ?> </p>
            <p>Total Vehiculos Disponibles : <?php echo $totalvehiculos ?> </p>
        </div>


        <div id="mensaje"></div>


    </div>
    </body>
</html>
