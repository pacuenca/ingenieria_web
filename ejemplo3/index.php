<?php
	include("dll/config.php");
	include("dll/mysql.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $site_name; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<h1>1er Congreso de Software 2018</h1>
	</header>
	<nav>
		<a href="">Home</a>
		<a href="">Evento</a>
		<a href="">Registro</a>
		<a href="">Contactos</a>
		<a href="">Sistema</a>
	</nav>
	<main>
		<h2>Formulario de Registro</h2>
	<form method="post" action="internas/procesar2.php">
		<div class="form-group">
		    <label for="nombres">Nombres</label>
		    <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Enter name">
		</div>
		<div class="form-group">
		    <label for="apellidos">Apellidos</label>
		    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Enter last name">
		</div>
		<div class="form-group">
		    <label for="telefono">Teléfono</label>
		    <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Enter phone number">
		</div>
		<div class="form-group">
		    <label for="correo">Correo</label>
		    <input type="email" class="form-control" id="correo" name="correo" placeholder="Enter email">
		</div>
		<div class="form-group">
		    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
		    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Enter bird date">
		</div>
		<div class="form-group">
		    <label for="cedula">Cédula</label>
		    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Enter DNI">
		</div>
		<div class="form-group">
		    <label for="direccion">Dirección</label>
		    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Enter dirección">
		</div>
		<div class="form-group">
		    <label for="tipo_user">Tipo de usuario</label>
		    <select class="form-control" id="tipo_user" name="tipo">
				<option value="1">Profesor</option>
				<option value="2">Estudiante</option>
				<option value="3">Otro</option>
			</select>
		</div>
		<div class="form-group">
		    <label for="curso">Curso</label>
		    <select class="form-control" id="curso" name="curso">
				<option></option>
				<option value="1">Manejo de proyectos</option>
				<option value="2">Desarrollo en angular</option>
			</select>
		</div>
		<div class="form-group">
		    <label for="taller">Taller</label>
		    <select class="form-control" id="taller" name="taller[]" multiple>
		    	<?php 
		    		$query="select * from talleres";
		    		$talleres=mysql_query($query) or die('error de sql');
		    		while ($taller=mysql_fetch_array($talleres,MYSQL_ASSOC)) {
				?>
				<option value="<?php echo $taller['id'];?>"><?php echo $taller['nombre'];?></option>
				<?php
		    		}
		    	?>
			</select>
		</div>
		<br><button>Guardar</button><br><br>
	</form>
	</main>
	<footer>
		<h6>Derechos Reservados UTPL 2018</h6>
	</footer>
</body>
</html>