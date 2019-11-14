<?php include 'includes/templates/header.php' ?>

    <div class="banner-inicio">
        <div class="container">
            <div class="row">
                <div class="col-md-6 slide-banner">
                        
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <h2> Sacale Provecho<br> a tu propiedad</h2>
                                <p>Prestamos con garatía inmobiliaria</p>   
                            </div>
                            <div class="item">
                                <h2>Te ayudamos a cumplir tus metas</h2>
                                <p>Asesoría y gestión para conseguir el financiamiento que deseas</p> 
                            </div>
                            <div class="item">
                                <h2>Obtén hasta 500 mil soles</h2>
                                <p>Sin demostrar ingresos o estando en INFOCORP</p>
                            </div>
                        </div>
                        <!-- <h2>Construye <br>para ti</h2>
                                        <p>Para alquilar y/o vender</p> -->
                    <!-- <div class="bd-example">
                         
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    
                                    <div class="carousel-caption">
                                    <h2> Sacale Provecho<br> a tu propiedad</h2>
                                        <p>Prestamos con garatía inmobiliaria</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h2>Contruye para ti</h2>
                                        <p>Para alquilar y/o vender</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h2>Consigue <br> tu credito al 100%</h2>
                                        <p>Que tus finanzas no te limiten</p>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div> -->
                    
                </div>
                <div class="col-md-6">
                    <div class="formulario-inicio">
                        <h3 class="titulo-form">Solicita tu prestamo</h3>
                        <form action="solicitud.php" class="form-prestamo">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Quiero</label>
                                    <div class="contador">
                                        <input type="text" name="monto" class="form-control" value="20000"><span class="botones" ><a href="" class="c-suma">+</a><a href="" class="c-resta">-</a></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">En un plazo de</label>
                                    <select name="plazo" class="custom-select" id="">
                                        <option value="">1 año</option>
                                        <option value="">1 año y medio</option>
                                        <option value="">2 años</option>
                                        <option value="">2 años y medio</option>
                                        <option value="">3 años</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Para</label>
                                    <select name="motivo" id="" class="custom-select">
                                        <option value="">Negocio</option>
                                        <option value="">Construcción</option>
                                        <option value="">Pago de Deudas</option>
                                        <option value="">Mejoramiento del Hogar</option>
                                    </select>
                                    
                                </div>
                                <div class="col-md-6">
                                        <label for="">Pagando con</label>
                                    <select name="cuota" class="custom-select" id="">
                                        <option value="">Cuotas Fijas</option>
                                        <option value="">Solo Intereses</option>
                                    </select>
                                    
                                </div>
                                <div class="col-md-6">
                                    <label for="">Nombre y Apellido</label>
                                    <input type="email" class="form-control" name="nombre" id="">
                                    
                                </div>
                                <div class="col-md-6">
                                    <label for="">Teléfono</label>
                                    <input type="text" name="telefono" class="form-control">
                                    
                                </div>
                                
                                <div class="col-12">
                                    <input type="submit" class="btn btn-datos" value="Solicitar">
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <section class="funcionamiento">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="t-green">¿Como funciona?</h2>
                    <p>Nosotros nos dedicamos a asesorar y gestionar prestamos con garantía inmobiliaria a personas que no pueden acceder al sistema financiero tradicional y que buscan que buscan financimiento para negocios, construcción, mejoramiento del hogar, pagar deudas, etc.</p>
                    <p>Solicita tu prestamo con nosotros y obtén un financimiento flexible a tus necesidades.  Para aplicar a la garantía inmobiliaria el bien debe estar en Lima Metropolitana y libre de cargas legales. En el caso de tener hipoteca, el préstamo debe tener la finalidad de cancelarla. No se acepta ningún otro tipo de garantía. Tampoco se aceptan garantías que pertenezcan a personas jurídicas como empresas.</p>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-req">
                                    <h3>¿Cuáles son los requisitos?</h3>
                                    <img class="img-fluid" src="img/lista.png" alt="">

                                    <div class="datos-req">
                                        <div class="row info px-3">
                                            <ul class="col-md-6">
                                                <li><i class="fas fa-check"></i> Copia Literal de la propiedad en garantía (SUNARP)</li>
                                                <li><i class="fas fa-check"></i> Hoja Resumen (HR) (municipalidad).</li>
                                            </ul>
                                            <ul class="col-md-6">
                                                <li><i class="fas fa-check"></i> Predio Urbano (PU) (municipalidad).</li>
                                                <li><i class="fas fa-check"></i> DNI del solicitante y de los propietarios del inmueble en garantía.</li>
                                            </ul>

                                        </div>
                                    </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="box-req">

                                <h3>¿Hasta cuanto prestan?</h3>
                                <img class="img-fluid" src="img/presta.png" alt="">
                                <div class="datos-req">
                                        <div class="row info px-3">
                                           <div class="col-12">
                                                <p>Brindamos financiamiento desde S/. 20.000 hasta el 30% del valor de la propiedad </p>
                                           </div>
                                            

                                        </div>
                                    </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="box-req">

                                <h3>¿Aplico si estoy en INFOCORP?</h3>
                                <img class="img-fluid" src="img/documento.png" alt="">
                                <div class="datos-req">
                                        <div class="row info px-3">
                                            <p class="text-center">Si, ya que nuestra evaluación es en base a la propiedad y no a la persona.</p>

                                        </div>
                                    </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="box-req">
                                <h3>¿Cómo y cuando recibo mi préstamo?</h3>
                                <img class="img-fluid" src="img/banco.png" alt="">
                                <div class="datos-req">
                                        <div class="row info px-3">
                                            <p>Se entrega mediante un cheque de gerencia a la firma de la escritura pública.</p>

                                        </div>
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="testimonios">
        <div class="container">
            <div class="row testimoniales">
                <div class="col-md-6">
                    <h3>Testimonios</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi illo, cumque rem ex quo facilis. Eaque quaerat quae laudantium ut iure amet est, rerum, impedit nobis vero aut, ratione repudiandae!</p>
                    <p>-Patricia Quispe</p>
                </div>
                <div class="col-md-6">
                    <img src="img/testimonio.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>

    

<?php 
include 'includes/templates/suscripcion.php'; 
include 'includes/templates/footer.php' ?>