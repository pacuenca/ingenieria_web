<?php
	include("dll/config.php");
	include("dll/mysql.php");
	extract($_POST);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo de PHP</title>
	<meta	charset="utf8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<meta name="author" content="UTPL by pacuenca201@gmail.com">		
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>

</head>
<body>

<header>
<h1>Evento SISTEMAS-LOJA-2018</h1>
<h5>Cursos y Talleres de innovación</h5>
</header>

<nav>
	<a href="#">Home</a>
	<a href="internas/personas_registradas.php">Registros</a>

</nav>

<main>
	<section class="in">
		<h4>Resgistro para el evento SISTEMAS-LOJA-2018</h4>
		<p>Este evento tiene como fin de incentivar a los estudiantes de la Titulación de Ingeniería en Sistemas Informáticos y Computación y ciudadania en general, a desenvolverse en el ámbito tecnológico y emprendedor, dictando cursos en diferentes lenguajes de programación los cuales son usados muy frecuentemente para el desarrollo de aplicaciones de diferentes plataformas y talleres en los cuales se impartira todo lo refenrente a temas en aúge. <br><br>Si desea participar del evento debera llenar el formulario correspondiente, en el evento contaremos con cursos y talleres que estarana a su disposición.<br><br>Valor del evento: $100<br>Valor de curso: $80<br>Valor de taller: $30</p>
	</section>

	<section class="da">
		<form method="post" action="internas/procesar2.php">
			<div class="datos">
				<label class="label" for="">Nombres: *</label>
				<input type="text" name="nombres" placeholder="Nombres"><br>
				<label class="label" for="">Apellidos: *</label>
				<input type="text" name="apellidos" placeholder="Apellidos"><br>
				<label class="label" for="">Teléfono:</label>
				<input type="number" name="telefono" placeholder="Teléfono"><br>
				<label class="label" for="">Correo: *</label>
				<input type="email" name="correo" placeholder="Correo" required=""><br>
				<label class="label" for="">Fecha de nacimiento: *</label>
				<input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento"><br>
				<label class="label" for="">Cédula: *</label>
				<input type="text" name="cedula" placeholder="Cédula"><br>
				<label class="label" for="">Dirección: *</label>
				<input type="text" name="direccion" placeholder="direccion"><br>
			</div>
			<div class="tipo_per">
				<label for="">Persona: *</label>
				<select name="tipo" id=""><br>
					<option value="1">Docente UTPL</option>
					<option value="2">Estudiante UTPL</option>
					<option value="3">Externos</option>
				</select><br>
			</div>

			<div class="curso">
				<label for="">Cursos:</label>	
				<select name="curso" id=""><br>
					<option value="1">Manejo de proyectos</option>
					<option value="2">Desarrollo en angular</option>
					<option value="0">Ninguno</option>
				</select><br>
			</div>
			
			<div class="taller">
				<label for="">Talleres:</label>	
				<select name="taller[]" id="taller" multiple=""><br>
					<?php 
		    		$query="select * from talleres";
		    		$talleres=mysql_query($query) or die('error de sql');
		    		while ($taller=mysql_fetch_array($talleres,MYSQL_ASSOC)) {
					?>
					<option value="<?php echo $taller['id'];?>"><?php echo $taller['nombre'];?></option>
					<?php
			    		}
			    	?>
				</select><br>	
			
			</div>
			
			<div class="guardar">
				<button>Guardar Información</button>
			</div>

		</form>

	</section>
</main>


<footer>
	<h6>Creado por Paul Cuenca</h6>
	<h5>pacuenca2012@gmail.com</h5>
</footer>
</body>

</html>