<script>
$('#myModal').modal('show');
</script>
    



<div id="myModal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Carga de Datos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           
                            <table class="table">
                                
                                <tbody>
                                    <tr>
                                        <td>Fecha</td>
                                        <td><?php echo $_POST["fecha"];?></td>
                                    </tr>
                                    <tr>
                                        <td>Nombre</td>
                                        <td><?php echo $_POST["nombre"];?></td>
                                    </tr>
                                    <tr>
                                        <td>Apellido</td>
                                        <td><?php echo $_POST["apellido"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Correo electrónico</td>
                                        <td><?php echo $_POST["email"]; ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div> <!-- ############## FIN MODAL #################### -->
