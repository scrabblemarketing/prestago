<?php include 'includes/templates/header.php' ?>



<section class="contacto">
    <div class="row">
        <div class="col-md-6 p-0 bg-contacto">
            <!-- <img src="img/contacto.png" alt="" class="img-fluid"> -->
        </div>
        <div class="col-md-6 bg-colores">
            <div class="row">
                <div class="col-md-8">
                    <h1>Déjanos tu Consulta</h1>
        
                    <form action="mail.php" class="form-consulta">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="">Nombre</label>
                                <div class="campo">

                                    <input type="text" name="nombre" class="form-control">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Apellido</label>
                                <div class="campo">
                                    
                                    <input type="text" name="apellido" class="form-control">
                                    <i class="fas fa-id-card"></i>
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="">Correo</label>
                                <div class="campo">
                                    <input type="text" name="correo" class="form-control">
                                    <i class="fas fa-at"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Teléfono</label>
                                <div class="campo">
                                    
                                    <input type="text" name="telefono" class="form-control">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="">Mensaje</label>
                                <div class="campo">
                                    <textarea name="mensaje" class="form-control"></textarea>
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-consulta" value="Enviar consulta">
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>


















<?php include 'includes/templates/footer.php' ?>