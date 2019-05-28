<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include('../config/constantes.php'); ?>
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
            
            <h4 class="text-center">INGRESAR ARRIENDO</h4>
            
            <form id="formvalida" class="needs-validation">
                
                <div class="form-group col-md-3">
                    <label>Fecha de Arriendo</label>
                    <input class="form-control" id="fecha" name="fecha" type="date" placeholder="Seleccione una fecha" required>
                    <div class="invalid-feedback">Debe seleccionar una fecha</div>
                </div>
                <div class="form-group col-md-6">
                    <h4><label>Datos del Cliente</label></h4>
                </div>
                <div class="form-group col-md-6">
                    <label>Rut</label>
                    <input class="form-control" id="rut" name="rut" type="text" placeholder="Digite el Rut" required>
                    <div class="invalid-feedback">Digite un RUT correcto</div>
                </div>
                <div class="form-group col-md-6">
                    <label>Nombre</label>
                    <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Escriba el nombre" required>
                    <div class="invalid-feedback">Debe escribir un nombre correcto</div>
                </div>

                <div class="form-group col-md-6"
                     <label>Apellido</label>
                    <input id="apellido" class="form-control" name="apellido" type="text" placeholder="Escriba el Apellido" required>
                    <div class="invalid-feedback">Debe escribir un apellido correcto</div>
                </div>
                <div class="form-group col-md-6"
                     <label>Direccion</label>
                    <input id="direccion" class="form-control" name="direccion" type="text" placeholder="Escriba una Direccion" required>
                    <div class="invalid-feedback">Debe escribir una Dirección</div>
                </div>
                <div class="form-group col-md-6"
                     <label>e-mail</label>
                    <input id="email" class="form-control" name="email" type="email" placeholder="suemail@dominio.com" required>
                    <div class="invalid-feedback">Escriba un email correcto</div>
                </div>
                <div class="form-group col-md-6">
                    <h4><label>Datos del ARRIENDO</label></h4>
                </div>
                
                <div class="form-group col-md-6"
                     <label>Tipo de Vehiculo</label>
                    <select name="tipoveh">
                        <option selected>Seleccione...</option>
                        <option>Sedan</option>
                        <option>Camioneta</option>
                        <option>SUV</option>
                    </select>
                    <!-- <input id="tipoveh" class="form-control" name="tipoveh" type="text" placeholder="Seleccione tipo de vehiculo" required> -->
                    <div class="invalid-feedback">Debe seleccionar un Tipo de Vehiculo</div>
                </div>
                
                <div class="form-group col-md-6"
                     <label>Marca</label>
                    <select name="marca">
                        <option selected>Seleccione...</option>
                        <option>Nissan</option>
                        <option>Toyota</option>
                        <option>Kia</option>
                    </select>                    
                    <div class="invalid-feedback">Debe seleccionar una Marca de Vehiculo</div>
                </div>
                
                <div class="form-group col-md-6"
                     <label>Modelo</label>
                    <input id="modeloveh" class="form-control" name="modeloveh" type="text" placeholder="Escriba un Modelo de vehiculo" required>
                    <div class="invalid-feedback">Debe escribir un Modelo de Vehiculo</div>
                </div>
                
                <label>Arriendo con Seguro incluido ?</label>
                <div class="form-group custom-control custom-radio">
                    
                    <input type="radio" class="custom-control-input" id="seguroSI" name="radio-stacked" required>
                    <label class="custom-control-label" for="seguroSI">SI</label>
                </div>
                <div class="form-group custom-control custom-radio mb-3">
                    <input type="radio" class="custom-control-input" id="seguroNO" name="radio-stacked" required>
                    <label class="custom-control-label" for="seguroNO">NO</label>
                    <div class="invalid-feedback">More example invalid feedback text</div>
                </div>
                
                
                <div class="form-group col-md-6">
                    <button type="button" id="btnenviar" class="btn btn-primary">Enviar</button>                
                </div>                                
                
            </form>  <!-- ###### FIN FORM ############################################### -->
            
            <div id="mensaje"></div>
            <div id="myModal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Nombre : <?php ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div> <!-- ############## FIN MODAL #################### -->
            <script>

                $("#btnenviar").click(function (event) {
                    var form = $("#formvalida");

                    if (form[0].checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    } else {
                        cargadatos();
                        //$('#myModal').modal('show'); 
                    }
                    form.addClass("was-validated");
                });                              
                
            </script>


        </div>
    </body>
</html>
