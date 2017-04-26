<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

<header>
<figure class="imagen pull-right">
    <img src="../img/alian.png" class="img-responsive" alt="">
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
                        <li><a href="../index.php" class=""><i class="fa fa-home" aria-hidden="true"></i>&nbsp;INICIO</a></li>
                        <li><a href="nosotros.php"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;QUIENES SOMOS</a></li>
                        <li><a href="servicios.php" class=""><i class="fa fa-suitcase" aria-hidden="true"></i>&nbsp;SERVICIOS</a></li>
                        <li class="active"><a href="contacto.php"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;CONTACTO</a></li> 
                    </ul>
                </div>
            </div>
        </nav>
    </div>
<!-- </div> -->
</header>

<article class="bannerc">
  <p>CONTACTO</p>
</article>
<br>
<section class="contactform">
        <span class="ir-arriba icon-arrow-bold-up"></span>

<h3 id="con">Contacto</h3><br><br>
<div id="te">Para más información, por favor contáctenos usando este formulario y nosotros nos comunicaremos con usted lo más pronto posible.</div>

    <article class="contenedorformdirec">
    <form id="contacto" action="envia.php" method="POST">
    <label class="ema">Nombre (s):</label><br>
    <input class="emai" type="text" name="txtnombre" size="60" maxlength="40" placeholder="Nombre completo" required/><br><br><br>

    <label class="ema">Apellidos:</label><br>
    <input class="emai" type="text" name="txtapellido" size="60" maxlength="40" placeholder="Apellidos" required/><br><br>

    <div id="cote">
        <div class="izq">
            <label class="ema">Correo electronico:</label><br>
            <input class="emai" type="email" name="txtcorreo" size="30" maxlength="40" placeholder= "ejemplo@correo.com" required/>
        </div>
        <div class="der">
           <label class="ema">Teléfono:</label><br>
           <input class="emai" type="text" name="txttelefono" size="30" maxlength="10"  placeholder="Numero Telefónico" required/>
        </div>
    </div> <br>

    <label class="ema">Escríbenos tu comentario:</label><br>
    <textarea id="areac" class="emai"  name="txtcomentario" rows="" cols="" placeholder="Escríbenos tus comentarios" required/></textarea><br>
     <input  id="enviar2" class="enviar" type="submit" value="ENVIAR">
    </form>

    <article class="direcgcp">
        <h3 id="direcgcp2">Alianconsultores.</h3>
            <p class="direcp">Teléfono:&nbsp;Pendiente</p>
            <p class="direcp">Correo:&nbsp;info@alianconsultores.com</p>
            <p class="direcp">Horario: Lun-Vie de 9 am a 6 pm</p>
    </article>

    </article>



</section>

    
	
<a class="go-top" href="#">Ir arriba</a>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>

</body>
</html>