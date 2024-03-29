<?php include 'includes/templates/header.php' ?>



<section class="solicitud">

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div  class="form-prestamo f-solicitud">
                            
                                <div class="form-group">
                                    <label for="">Quiero</label>
                                    <div class="contador">
                                        <input type="text" name="monto" class="form-control" value="20000"><span class="botones" ><a href="" class="c-suma">+</a><a href="" class="c-resta">-</a></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">En un plazo de</label>
                                    <select name="plazo" class="custom-select" id="">
                                        <option value="12">1 año</option>
                                        <option value="18">1 año y medio</option>
                                        <option value="24">2 años</option>
                                        <option value="30">2 años y medio</option>
                                        <option value="36">3 años</option>
                                        <option value="42">3 años y medio</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Para</label>
                                    <select name="motivo" id="" class="custom-select">
                                        <option value="negocio">Negocio</option>
                                        <option value="construccion">Construcción</option>
                                        <option value="adelanto">Adelanto por venta</option>
                                        <option value="otros">Otros</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group">
                                        <label for="">Pagando con</label>
                                    <select name="cuota" class="custom-select" id="">
                                        <option value="fija">Cuotas Fijas</option>
                                        <option value="interes">Solo Intereses</option>
                                        <option value="puente">Préstamos puente</option>
                                    </select>
                                    
                                </div>
                           
                        </div>
            </div>
            <div class="col-md-8">
                <form action="datos.php" class="form-solicitud" method="post">
                    <div class="paginacion-datos">
                       <div class="page act-page" id="page-1">
                            <p class="seccion">Paso 1 a 2</p>


                            <h3>Datos personales</h3>
                            <p>De la persona que solicita el préstamo</p>

                            <div class="form-group">
                                <label for="dni">DNI</label>
                                <input type="text" name="dni" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nombres">Nombres y Apellidos</label>
                                <input type="text" name="nombres" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="telefono">Teléfono de contacto</label>
                                <input type="text" name="telefono" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo electrónico</label>
                                <p>Coloca un correo electrónico vigente</p>
                                <input type="text" name="correo" class="form-control">
                            </div>
                            <a href="#" class="btn btn-datos" id="next">Siguiente paso</a>
                       </div>
                        <!-- page-1  -->

                       <div class="page" id="page-2">
                            <p class="seccion">Paso 2 a 2</p>


                            <h3>Datos de la Propiedad</h3>
                            <p>Coloca los datos de la propiedad que pondrás en garantía</p>

                            <div class="form-group">
                                <label for="ubicacion">Ubicación</label>
                                <select name="ubicacion" id="ubicacion" class="form-control">
                                    <option value="0">Selecciona el distrito</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="propiedad">Tipo de propiedad</label>
                                <p>Seleccione una propiedad</p>
                                <div class="row my-4 text-center cuadros-propiedades">
                                    <div class="col-6 col-md-2">
                                        <input type="radio" name="tipo_propiedad[]" id="casa" value="casa">
                                        <label for="casa">
                                            <img src="img/casa.png" alt="" class="img-fluid">
                                            Casa
                                        </label>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <input type="radio" name="tipo_propiedad[]" id="departamento" value="departamento">
                                        <label for="departamento">
                                            <img src="img/departamento.png" alt="" class="img-fluid">
                                            Departamento
                                        </label>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <input type="radio" name="tipo_propiedad[]" id="terreno" value="terreno">
                                        <label for="terreno">
                                            <img src="img/terreno.png" alt="" class="img-fluid">
                                            Terreno
                                        </label>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <input type="radio" name="tipo_propiedad[]" id="edificio" value="edificio">
                                        <label for="edificio">
                                            <img src="img/edificio.png" alt="" class="img-fluid">
                                            Edificio
                                        </label>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <input type="radio" name="tipo_propiedad[]" id="negocio" value="negocio">
                                        <label for="negocio">
                                            <img src="img/tienda.png" alt="" class="img-fluid">
                                            Negocio
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="telefono">¿Esta inscrita en la Sunarp?</label>
                                <div class="opciones">
                                    <label for="op_si"><input type="radio" name="sunarp" id="op_si" value="si"> Si</label>
                                    <label for="op_no"><input type="radio" name="sunarp" id="op_no" value="no"> No</label>
                                    <label for="op_nose"><input type="radio" name="sunarp" id="op_nose" value="nose"> No sé</label>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label for="telefono-2">Dueño/s de la propiedad</label>
                                <select name="ubicacion" id="ubicacion" class="form-control">
                                    <option value="0">Quien es el dueño de la propiedad</option>
                                    <option value="propia">Solo yo</option>
                                    <option value="conjunto">Otras personas y yo</option>
                                    <option value="otras">Otras personas</option>
                                </select>
                            </div>
                            
                           

                            <div class="form-group">
                                <button type="button" class="btn btn-datos">Enviar Datos <i class="far fa-paper-plane"></i></button>
                            </div>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    
    </div>

</section>












<?php 
   
    include 'includes/templates/footer.php' ?>