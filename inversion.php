<?php include 'includes/templates/header.php' ?>



<div class="banner-inversion parallax">

</div>


<section class="inversiones">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="" class="form-inversion">
                    <div class="cuadro-inversion">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="c-blue">
                                    <label for="">Invierte</label>
                                    <div class="botones-i">
                                        <input type="text" class="form-control" value="20000">
                                        <a href="#" class="b-menos">-</a>
                                        <a href="#" class="b-mas">+</a>
                                    </div>

                                    <div class="resultado">
                                        <p>Recibe anualmente</p>
                                        <h3>S/ 10.000</h3>
                                        <p>Tasa fija</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 c-info">
                                <h4 class="text-center">Obtén un retorno del 24% anual</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Nombre</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Apellido</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Correo</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Teléfono</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <input type="submit" value="Solicitar Revisión" class="btn btn-datos">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>




<section class="valores-inv">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="img/escudo.png" alt="" class="img-fluid">
                <h3 class="text-center">INVERSIÓN SEGURA</h3>
                <p class="text-center">Tu inversión está respaldada por una garantía hipotecaria bajo un contrato inscrito a tu nombre en Registros Públicos.</p>
            </div>
            <div class="col-md-4">
                <img src="img/apreton-de-manos (1).png" alt="" class="img-fluid">
                <h3 class="text-center">ASESORÍA DE INICIO A FIN</h3>
                <p class="text-center">Gestionamos tu inversión hasta el levantamiento de la hipoteca, siempre de manera personalizada.</p>
            </div>
            <div class="col-md-4">
                <img src="img/dinero (1).png" alt="" class="img-fluid">
                <h3 class="text-center">RENTABILIDAD DEL 24%</h3>
                <p class="text-center">Prestando directamente tus ahorros accederás a tasas de retorno atractivas.</p>
            </div>
        </div>
    </div>
</section>






<?php 
    include 'includes/templates/suscripcion.php'; 
    include 'includes/templates/footer.php' ?>