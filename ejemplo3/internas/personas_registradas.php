<?php
	include("../dll/config.php");
	include("../dll/mysql.php");
	extract($_POST);

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $site_name; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<header>
		<h1>Lista de Registrados</h1>
	</header>
	<nav>
		<a href="">Home</a>
		<a href="">Evento</a>
		<a href="">Registro</a>
		<a href="">Contactos</a>
		<a href="">Sistema</a>
	</nav>
	<main>
	<?php

//Ejemplo aprenderaprogramar.com

$query="select * from registros";
$reg=mysql_query($query) or die('error de sql');


echo "<table border=1>";
echo "<tr>";
echo "<td><strong>Nombre</strong></td>";
echo "<td><strong>Apellido</strong></td>";
echo "<td><strong>Correo</strong></td>";
echo "<td><strong>Dirección</strong></td>";
echo "<td><strong>Telefono</strong></td>";
echo "<td><strong>Detalle</strong></td>";
echo "</tr>";

while ($registros=mysql_fetch_array($reg)) {
	echo "<tr>";
	echo "<td>$registros[1]</td>";
	echo "<td>$registros[2]</td>";
	echo "<td>$registros[3]</td>";
	echo "<td>$registros[4]</td>";
	echo "<td>$registros[5]</td>";
	echo "</tr>";	
}
echo "</table>";

	//echo '<script>alert("Datos Guardados")</script>';
	//echo "<script>location.href='../index.php'</script>";
?>
</main>
	<footer>
		<h6>Derechos Reservados UTPL 2018</h6>
	</footer>
</body>
</html>

