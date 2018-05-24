  <?php
	include("dll/config.php");
	include("dll/mysql.php");
	extract($_POST);
	echo "<link href=\"css/estilos-php.css\" rel=\"stylesheet\" type=\"text/css\" >"; 
	$id=$_REQUEST['idr'];
	$tipo_persona[1]="Docente UTPL";
	$tipo_persona[2]="Estudiante UTPL";
	$tipo_persona[3]="Externos UTPL";

	$val_evento=100;
	$val_taller=30;
	$val_curso=0;
	$num_taller=0;
	$cal=0;
	$total=0;
	$desc=0;

	$curso_elegido[0]="No tiene cursos escogidos";
	$curso_elegido[1]="Manejo de proyectos";
	$curso_elegido[2]="Desarrollo en angular";

	//Obtengo el registro consultado con el id que obtuve en la fila de la tabla seleccionada
	$query="select * from registros where id='$id'";
	$consulta_registro=mysql_query($query) or die('error de sql');
	($fac_registro=mysql_fetch_array($consulta_registro,MYSQL_ASSOC));

	//Obtenemos el valor  apagar por el curso elegido.
	if (isset($curso_elegido[$fac_registro['curso']])) {
		$val_curso=80;
	}else{
		$val_curso=0;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Factura de Pago</title>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="css/estilos-php.css">
	<meta name="author" content="UTPL by pacuenca201@gmail.com">		
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header>
		<h1>Evento SISTEMAS-LOJA-2018</h1>
		<h5>Cursos y Talleres de innovación</h5>
	</header>

	<main>
		<form method="post" action="internas/modificar.php">		
			<div class="datos">
				<label class="label" for="">Id: *</label>
				<input type="text" name="id"  value="<?php echo $fac_registro['id']; ?>"><br>
				<label class="label" for="">Nombres: *</label>
				<input type="text" name="nombres"  value="<?php echo $fac_registro['nombres']; ?>"><br>
				<label class="label" for="">Apellidos: *</label>
				<input type="text" name="apellidos" value="<?php echo $fac_registro['apellidos']; ?>"><br>
				<label class="label" for="">Teléfono:</label>
				<input type="number" name="telefono" value="<?php echo $fac_registro['telefono']; ?>"><br>
				<label class="label" for="">Correo: *</label>
				<input type="email" name="correo" value="<?php echo $fac_registro['correo']; ?>"><br>
				<label class="label" for="">Fecha de nacimiento: *</label>
				<input type="date" name="fecha_nacimiento" value="<?php echo $fac_registro['fecha_nacimiento']; ?>"><br>
				<label class="label" for="">Cédula: *</label>
				<input type="text" name="cedula" value="<?php echo $fac_registro['cedula']; ?>"><br>
				<label class="label" for="">Dirección: *</label>
				<input type="text" name="direccion" value="<?php echo $fac_registro['direccion']; ?>"><br>
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
	</main>
	<footer>
		<h6>Creado por Paul Cuenca</h6>
		<h5>pacuenca2012@gmail.com</h5>
	</footer>
</body>
</html>