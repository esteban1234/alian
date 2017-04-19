<!DOCTYPE html>
<?php include 'vistas/encabezado.php' ?>
<body>

<header>
<figure class="imagen pull-right">
    <img src="img/alian.png" class="img-responsive" alt="">
  </figure>
  <!-- <div class="navbar-wrapper hola"> -->
    <div class="container-fluid ">
        <nav class="navbar hola">
            <div class="container">
                <div class="navbar-header pull-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php" class=""><i class="fa fa-home" aria-hidden="true"></i>&nbsp;INICIO</a></li>
                        <li><a href="vistas/nosotros.php"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;QUIENES SOMOS</a></li>
                        <li><a href="vistas/servicios.php" class=""><i class="fa fa-suitcase" aria-hidden="true"></i>&nbsp;SERVICIOS</a></li>
                        <li><a href="vistas/contacto.php"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;CONTACTO</a></li> 
                    </ul>
                </div>
            </div>
        </nav>
    </div>
<!-- </div> -->
</header>

<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1">
                <div class="row"><div class="container">
                    <div class="col-md-3 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="img/calculadora.png">
                    </div>
                    <div class="col-md-9 text-left">
                        <h3 data-animation="animated bounceInDown">Servicios de contabilidad</h3>
                        <h4 data-animation="animated bounceInUp">para empresas</h4>           
                     </div>
                </div></div>
             </div> 
            <!-- Item 2 -->
            <div class="item slide2">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">Servicios de Planificación y </h3>
                        <h4 data-animation="animated bounceInUp">Preparación de Impuestos</h4>
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/sp11uneml/rack_server_unlock.png">
                    </div>
                </div></div>
            </div>
            <!-- Item 3 -->
            <div class="item slide3">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">Servicios de</h3>
                        <h4 data-animation="animated bounceInUp">Administración de nominas</h4>
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="img/nomina3.png">
                    </div>     
                </div></div>
            </div>
            <!-- Item 4 -->
            <div class="item slide4">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">Servicios de</h3>
                        <h4 data-animation="animated bounceInUp">Auditoria legal</h4>
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="img/legal2.png">
                    </div>  
                </div></div>
            </div>
            <!-- End Item 4 -->
    
        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>

<h2 class="text-center">Algunos de nuestros servicios</h2>
<hr>
<br>
<section class="wrapper">

    <div class="container-big">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="carbox">
                            <a class="img-carbox" href="vistas/contacto.php">
                            <img src="img/estrategiafiscal.jpg" />
                          </a>
                            <div class="carbox-content">
                                <h4 class="carbox-title">
                                    <a href="vistas/contacto.php"> ESTRATEGIA FISCAL
                                  </a>
                                </h4>
                                <p class="">
                                    Son las acciones de orden preventivo que se han organizado en la planeación de los negocios y empresas para lograr que el cumplimiento de las obligaciones tributarias sea oportuno, apegado a la ley y al menor costo alternativo posible.
                                </p>
                            </div>
                            <div class="carbox-read-more">
                                <a href="vistas/contacto.php" class="btn btn-link btn-block">
                                    Contáctanos
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="carbox">
                            <a class="img-carbox" href="vistas/contacto.php">
                            <img src="img/derecho.jpg" />
                          </a>
                            <div class="carbox-content">
                                <h4 class="carbox-title">
                                    <a href="vistas/contacto.php"> DERECHO CORPORATIVO
                                  </a>
                                </h4>
                                <p class="">
                                    El derecho corporativo es la rama del derecho empresarial que estudia y regula la gran empresa y su incidencia en las ramas del derecho.
                                </p>
                            </div>
                            <div class="carbox-read-more">
                                <a href="vistas/contacto.php" class="btn btn-link btn-block">
                                    Contáctanos
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="carbox">
                            <a class="img-carbox" href="vistas/contacto.php">
                            <img src="img/auditoria.jpg" />
                          </a>
                            <div class="carbox-content">
                                <h4 class="carbox-title">
                                    <a href="vistas/contacto.php">AUDITORÍA FINANCIERA
                                  </a>
                                </h4>
                                <p class="">
                                    La auditoría financiera examina a los estados financieros y a través de ellos las operaciones financieras realizadas por el ente contable, con la finalidad de emitir una opinión técnica y profesional.
                                </p>
                            </div>
                            <div class="carbox-read-more">
                                <a href="vistas/contacto.php" class="btn btn-link btn-block">
                                    Contáctanos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<p class="boton2"><a href="vistas/servicios.php">Servicios</a></p>

<article class="agende">
        <h2>Agende una Consulta</h2>
        <h3>Complete el formulario y déjenos saber cómo lo podemos ayudar.</h3>
        <p class="boton3"><a href="vistas/servicios.php">Contactános</a></p>
    </article>


<!-- <footer>
    <div class="container">
        <div class="col-md-10 col-md-offset-1 text-center">
            
            <h6>Coded with <i class="fa fa-heart red" style="color: #BC0213;"></i> by <a href="http://hashif.com" target="_blank">Hashif</a></h6>
        </div>   
    </div>
</footer> -->















    <!-- <p class="boton2"><a href="vistas/contacto.php">Contáctanos</a></p> -->

<!-- <a class="go-top" href="#">Ir arriba</a> -->
<?php include 'vistas/pie.php' ?>
<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script src="js/arriba.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/slide.js"></script>
</body>
</html>