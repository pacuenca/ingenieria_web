<?php
	include("../dll/config.php");
	include("../dll/mysql.php");
	extract($_POST);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Crud-Taller</title>
	<meta	charset="utf8">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<meta name="author" content="UTPL by pacuenca201@gmail.com">		
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>

</head>
<body>

<header>
<h1>Evento SISTEMAS-LOJA-2018</h1>
<h5>CRUD de Taller</h5>
</header>

<nav>
	<a href="../registro.php">Home</a>
	<a href="personas_registradas.php">Registro</a>
</nav>
<main>
<section>

<?php
	$query="select * from talleres";
	$reg=mysql_query($query) or die('error de sql');
	echo "<table border=1 name='bd'>";
	echo "<tr>";
	echo "<td><strong>Id</strong></td>";
	echo "<td><strong>Codigo</strong></td>";
	echo "<td><strong>Nombre</strong></td>";
	echo "<td><strong>Precio</strong></td>";
	echo "<td><strong>Cupos</strong></td>";
	echo "<td><strong>Modificar</strong></td>";
	echo "<td><strong>Eliminar</strong></td>";
	echo "</tr>";

	while ($registros=mysql_fetch_array($reg)) {
		echo "<tr>";
		echo "<td>$registros[0]</td>";
		echo "<td>$registros[1]</td>";
		echo "<td>$registros[2]</td>";
		echo "<td>$registros[3]</td>";
		echo "<td>$registros[4]</td>";
		echo "<td><a href='crud_taller/editar.php?id=$registros[0]'>Modificar</a></td>";
		echo "<td><a href='crud_taller/eliminar.php?id=$registros[0]'>Eliminar</a></td>";
		echo "</tr>";
		}
	echo "</table>";	
?>
<button><a href='crud_taller/crear.php'>Crear</a></button>

</section>
</main>
	<footer>
		<h6>Derechos Reservados UTPL 2018</h6>
	</footer>
</body>
</html>

