<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <?php
        //Referencia a la controller, desde este formulario invoco el metodo que genera el listado de vehiculos.
        include('../controller/listLeyes.php'); 
        ?>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <script>
            function updateley() {
                // Esta función se activa cuando el formulario del mantenedor, trae un valor POST["patente"] seteado, vale decir
                // cuando presionamos el boton modificar de un registro, dentro de la tabla que lista los vehiculos
                
                document.getElementById("titulopagina").innerHTML = "<span style=\"color:red\"> <h3>Modificando una Ley</h3>"+ "</span>";

                //pone en variables los valores obtenidos desde POST
                
                //idley, numley, fecpublicacion, fecpromulgacion, titulo, fechahora, nomarchivo, archivo
                
                var idley = "<?php echo $_POST['idley']; ?>";
                var numley = "<?php echo $_POST['numley']; ?>";
                var fecpublicacion = "<?php echo $_POST['fecpublicacion']; ?>";
                var fecpromulgacion = "<?php echo $_POST['fecpromulgacion']; ?>";
                var titulo = "<?php echo $_POST['titulo']; ?>";
                var fechahora = "<?php echo $_POST['fechahora']; ?>";
                //var nomarchivo = "<?php echo $_POST['nomarchivo']; ?>";
                
                    
                //Setea en los elementos identificados, los valores obtenidos desde las variables.
                document.getElementById("patente").value = patenteveh;
                document.getElementById("modeloveh").value = modelovehiculo;
                document.getElementById("valarriendoveh").value = valarriendovehiculo;
                
                //Quita el atributo selected a una opcion de SELECT que haya sido escogida.
                if ($('#marcaveh option:selected').length > 0) {
                    $('#marcaveh option:selected').removeAttr("selected");
                }
                
                //Aqui chequea una opcion que contenga el valor de la variable marcavehiculo
                //luego setea el atributo SELECTED a esa opcion.
                $("#marcaveh option:contains(" + marcavehiculo +
                        ")").attr('selected', 'selected');

                //En caso de que cambiando el atributo 'selected' no cambia el dropdown
                //se usa el .prop
                $("#marcaveh option:contains(" + marcavehiculo +
                        ")").prop('selected', true);
                //##############################################################################################
                ////################### VALIDACIONES PARA DROP DOWN LIST         ###############################
                ////##############################################################################################                    
                
                //Quita el atributo selected a una opcion de SELECT que haya sido escogida.
                if ($('#tipoveh option:selected').length > 0) {
                    $('#tipoveh option:selected').removeAttr("selected");
                }
                //Aqui chequea una opcion que contenga el valor de la variable tipovehiculo
                //luego setea el atributo SELECTED a esa opcion.
                $("#tipoveh option:contains(" + tipovehiculo +
                        ")").attr('selected', 'selected');

                //En caso de que cambiando el atributo 'selected' no cambia el dropdown
                //se usa el .prop
                $("#tipoveh option:contains(" + tipovehiculo +
                        ")").prop('selected', true);
                
                //Oculta el boton enviar, Desoculta el boton modificar y setea al formulario el action para ir al formulario
                document.getElementById("btnmodificar").hidden = false;
                document.getElementById("btnenviar").hidden = true;
                document.forms['formIngresoVehiculo'].action = "../controller/updatevehiculo.php";
                //document.getElementById("patente").disabled = true;
            }

        </script>
    </head>
    <body>
        <?php // include('../model/Vehiculo.php'); ?>
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
            <!-- ########################### INGRESO DE VEHICULO ######################################## -->
            <!-- ########################## ########################################################### -->
            <div id="titulopagina">
                <h4>Mantenedor de Leyes</h4>
            </div>
            <div class="card">
                <div class="card-body " style="background-color: honeydew"> 
                
                    <form id="formIngresoLey" class="needs-validation" method="POST" enctype="multipart/form-data" action="<?= URLBASE ?>/controller/newley.php">

                        <div class="form-group col-md-3">
                            <label>Numero Ley</label>
                            <input class="form-control" id="numley" name="numley" type="text" placeholder="Ingrese Numero Ley" required>
                            <div class="invalid-feedback">Debe ingresar nro ley</div>
                        </div>
                        
                        <div class="form-group col-md-6"
                             <label>Fecha Publicacion</label>
                            <input id="fecpublicacion" class="form-control" name="fecpublicacion" type="text" placeholder="Escriba una fecha valida" required>
                            <div class="invalid-feedback">Debe escribir fecha valida</div>
                        </div>
                        
                        <div class="form-group col-md-6"
                             <label>Fecha Promulgacion</label>
                            <input id="fecpromulgacion" class="form-control" name="fecpromulgacion" type="text" placeholder="Escriba una fecha valida" required>
                            <div class="invalid-feedback">Debe escribir fecha valida</div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Titulo</label>
                            <input class="form-control" id="titulo" name="titulo" type="text" placeholder="Ingrese Titulo" required>
                            <div class="invalid-feedback">Debe ingresar un titulo</div>
                        </div>
                        
                        <div class="form-group col-md-3">
                            <label>Fecha y Hora</label>
                            <input class="form-control" id="fechahora" name="fechahora" type="text" placeholder="Ingrese Fecha y Hora" required>
                            <div class="invalid-feedback">Debe ingresar fecha y hora/div>
                        </div>
                        
                        //idley, numley, fecpublicacion, fecpromulgacion, titulo, fechahora, nomarchivo, archivo
                        
                        <div class="form-group col-md-6">
                            <label>Subir un documento</label>
                            <input class="form-control" id="imgusuario" name="imgusuario" type="file" placeholder="Busca el documento a subir" >                            
                            <input class="form-control" id="archivo" name="archivo" value="<?php echo $_POST['archivo'];?>" type="hidden" >
                            <input class="form-control" id="nomarchivo" name="nomarchivo" value="<?php echo $_POST['nomarchivo'];?>" type="hidden" >
                            <div class="invalid-feedback">Debes subir un archivo</div>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <br> 
                            <button type="submit" id="btnenviar" class="btn btn-primary btn-lg">Registrar Ley</button>     
                            <button type="submit" id="btnmodificar" class="btn btn-warning btn-lg btn-block" hidden >Modificar</button>
                        </div>
                        
                    </form>
                </div> <!-- FIN CARD BODY -->
            </div> <!-- FIN DIV CLASS CARD  -->
            
            <?php
            // Si el atributo de SESSION Vehiculo, está seteado es porque se hizo algún tipo de cambio en los datos 
            // hay un mensaje de feedback por mostrar.
            
            if (isset($_SESSION["Ley"])) {
                echo '<div class="alert alert-success" role="alert">';
                echo '<strong>' . $_SESSION["Ley"] . '</strong>';
                echo '</div>';
                unset($_SESSION["Ley"]);
            }
            
            //Si el atributo de SESSION Patente, está seteado, es porque se envió una solicitud de modificar un vehiculo
            //dentro de este mismo formulario, asi que se ejecuta la funcion updatevehi().
            
            if (isset($_POST['idley'])) {                
                echo "<script type='text/javascript'>updateley();</script>";                
            }
            
            ?>
            <!-- #################################### LISTADO ######################################## -->
            <!-- ##################################################################################### -->
            
            //idley, numley, fecpublicacion, fecpromulgacion, titulo, fechahora, nomarchivo, archivo
            
            
            <table class="table">
                <thead>
                    <th>ID Ley</th>
                    <th>Num Ley</th>
                    <th>Fec.Public.</th>
                    <th>Fec.Promulg.</th>
                    <th>Titulo</th>
                    <th>FechaHora</th>
                    <th>Documento</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    <?php                    
                    //$dao = New VehiculoDAO();
                    //$result = $dao->getAllVehiculos();
                    
                    //Se instancia la clase ListVehiculos y se invoca el metodo getList ubicado en la controller.
                    $listaVehiculos = new ListVehiculos();
                    $result = $listaVehiculos->getListVehiculos();
                    foreach ($result as $row) {
                        echo "<tr>";
                        echo "<td>" . $row['patente'] . "</td>";
                        echo "<td>" . $row['tipoveh'] . "</td>";
                        echo "<td>" . $row['marcaveh'] . "</td>";
                        echo "<td>" . $row['modeloveh'] . "</td>";
                        echo "<td>" . $row['valarriendoveh'] . "</td>";
                        echo "<td>" . $row['nomarchivo'] . "</td>";
                        echo "<form name='frmUpdateVehiculo' method='POST' >";
                        echo "<td>" . "<button class='btn btn-warning'>Modificar</button>" . "</td>";
                        echo "<input type='hidden' name='patente' value=" . $row["patente"] . ">";
                        echo "<input type='hidden' name='tipoveh' value=" . $row["tipoveh"] . ">";
                        echo "<input type='hidden' name='marcaveh' value=" . $row["marcaveh"] . ">";
                        echo "<input type='hidden' name='modeloveh' value=" . $row["modeloveh"] . ">";
                        echo "<input type='hidden' name='valarriendoveh' value=" . $row["valarriendoveh"] . ">";
                        echo "<input type='hidden' name='archivo' value=" . $row["archivo"] . ">";
                        echo "<input type='hidden' name='nomarchivo' value=" . $row["nomarchivo"] . ">";
                       
                        echo '</td>';
                        echo '</form>';

                        echo "<form name='frmDeleteVehiculo' method='POST' action='../controller/deletevehiculo.php'>";
                        echo "<td>" . "<button type='submit' class='btn btn-danger'>Eliminar</button>" . "</td>";
                        echo "<input type='hidden' name='patente' value=" . $row["patente"] . ">";
                        echo '</td>';
                        echo '</form>';
                    }
                    ?>
                </tbody>
            </table> 

            <div id="mensaje"></div>

        </div>

        <script>
            
            $("#btnenviar").click(function (event) {
                var form = $("#formIngresoVehiculo");

                if (form[0].checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    cargadatos();
                    //$('#myModal').modal('show'); 
                }
                form.addClass("was-validated");
            });

            $("#btnmodificar").click(function (event) {
                var form = $("#formIngresoVehiculo");

                if (form[0].checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    cargadatos();
                    //$('#myModal').modal('show'); 
                }
                form.addClass("was-validated");
            });

            function cargadatos() {
                var fecha = $("#fecha").val();
                var nombre = $("#nombre").val();
                var apellido = $("#apellido").val();
                var email = $("#email").val();
                var check = $("#chkbox").val();

                $("#mensaje").load('controller/cargadatos.php',
                        {"fecha": fecha,
                            "nombre": nombre,
                            "apellido": apellido,
                            "email": email

                        });
            }
        </script>
    </body>
</html>
