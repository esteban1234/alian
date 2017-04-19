<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

<header class="contenheader">
  <figure class="imagen pull-left">
    <img src="../img/conadsur.png" class="img-responsive" alt="">
  </figure>

  <article class="pull-right contentextmenu">
    <article class="menu">
        <ul>
          <li><a href="../index.php">INICIO</a></li>
          <li><a href="nosotros.php">QUIENES SOMOS</a></li>
          <li><a href="servicios.php">SERVICIOS</a></li>
          <li class="select"><a href="contacto.php">CONTACTO</a></li>
        </ul>
        <div id="pull" class="icon-menu">
          <i id="icon-abierto" class="fa fa-bars" aria-hidden="true"></i>
          <i id="icon-cerrado" class="fa fa-times" aria-hidden="true"></i>
        </div>
      </article>
  </article>
</header>
<article class="bannerc">
  <p>SERVICIO LAS 24 HRS</p>

  <article class="contendirecformu">
	<article class="direccion">
		<h2>Estamos a tus ordenes</h2>
		<article class="telefono">
			<div class="iconotel"><i class="fa fa-phone fa-5x" aria-hidden="true"></i></div>
			<article class="num">Pendiente</article class="num">
		</article>

		<article class="telefono">
			<div class="iconotel"><i class="fa fa-envelope-o fa-5x" aria-hidden="true"></i></div>
			<article class="num"><a href="mailto:info@conadsur.com">info@conadsur.com</a></article class="num">
		</article>

		<article class="telefono">
			<div class="iconotel"><i class="fa fa-clock-o fa-5x" aria-hidden="true"></i></div>
			<article class="num">Lunes a Viernes de 9am a 6pm</article class="num">
		</article>

		<article class="telefono">
			<div class="iconotel"><i class="fa fa-map-marker fa-5x" aria-hidden="true"></i></div>
			<article class="direc">C.Tajin #619 por esquina Tajin y Matias Romero, Col. Letran Valle, Benito Juarez, México. C.P. 03650.</article class="num">
		</article>
	</article>
	<article class="formulario">
		<h2>Estamos a tus ordenes, envianos tus comentarios</h2>


	<form action="envia.php" method="post" class="form-horizontal" >
	<br>
	<br>
			<fieldset>

			<!-- Form Name -->

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-xs-12 col-sm-12 col-md-4 text-f" for="textinput">Nombre (s)</label>  
			  <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-xs-offset-1 col-md-6 col-md-offset-0">
			  	<input id="textinput" name="nombre" type="text" placeholder="Escribe tu nombre completo" class="form-control input-md" required="">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-xs-12 col-sm-12 col-md-4 text-f" for="textinput">Correo</label>  
			  <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-xs-offset-1  col-md-6 col-md-offset-0">
			  	<input id="textinput" name="correo" type="text" placeholder="Escribe tu correo" class="form-control input-md" required="">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-xs-12 col-sm-12 col-md-4 text-f" for="textinput">Telefono</label>  
			  <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
			  	<input id="textinput" name="telefono" type="text" placeholder="Escribe tu teléfono" class="form-control input-md" required="">
			  </div>
			</div>

			<!-- Textarea -->
			<div class="form-group">
			  <label class="col-xs-12 col-sm-12 col-md-4 text-f" for="textarea">Comentario</label>
			  <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">                     
			   <textarea class="form-control" id="textarea" name="comentario" placeholder="Escríbenos tus comentarios"></textarea>
			  </div>
			</div>
			
			<br>

			<!-- Button -->
			<div class="form-group boton">
			  <div class="col-xs-12 col-md-12 center">
			    <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary btn-lg btne">ENVIAR</button>
			  </div>
			</div>
			<br>

			</fieldset>
	</form>

	</article>
</article>
</article>



    
	
<a class="go-top" href="#">Ir arriba</a>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>

</body>
</html>