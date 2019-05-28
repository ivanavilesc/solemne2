<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include('config/constantes.php') ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <!-- ########################### INICIO DEL BODY #################################### -->
    <body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>        
        
        <!-- ########################### INICIO DEL LOGOUT #################################### -->        
        <div id="toplogout">
            <p class="text-right"> <a  href="controller/logout.php" style="color: #f5f5f5">Cerrar sesión&nbsp;</a> </p>
        </div>
        
        <!-- ########################### INICIO DEL TITULO #################################### -->
        <div id="titulo">
            <h3 class="text-center"> EL BUENO DE SAUL</h3>
        </div>
        
        <!-- ########################### INICIO DEL MENU #################################### -->
        <div id="menu">
            <div class="list-group">
                <a href="<?=URLBASE?>" class="list-group-item list-group-item-action">Inicio</a>
                <a href="<?=URLBASE?>/view/asociarley.php" class="list-group-item list-group-item-action">Asociar leyes a usuarios</a>
                <a href="<?=URLBASE?>/view/resumenes.php" class="list-group-item list-group-item-action">Resumenes</a>
                <a href="<?=URLBASE?>/view/listadoarriendos.php" class="list-group-item list-group-item-action">Listar Arriendos</a>
                <a href="<?=URLBASE?>/view/mantenedorleyes.php" class="list-group-item list-group-item-action">Mantenedor Leyes</a>
                <a href="<?=URLBASE?>/view/buscarvehiculo.php" class="list-group-item list-group-item-action">Buscar un Vehiculo</a>
            </div>
        </div> <!-- ########################### FIN DEL MENU #################################### -->  
        
        <!-- ########################### INICIO DEL CONTENIDO #################################### -->
        <div id="contenido">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Bienvenido !</h1>
                    <p class="lead">Este es el sistema del estudio de abogados <strong>El bueno de Saul</strong></p>
                </div>
            </div>
        </div>
        
        <!-- ########################### INICIO DE MENSAJE #################################### -->    
        <div id="mensaje"></div>
        
    </body>
</html>
