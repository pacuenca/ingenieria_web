<?php
	include("../../dll/config.php");
	include("../../dll/mysql.php");
	extract($_POST);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Crud-Taller</title>
	<meta	charset="utf8">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
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
	<a href="#">Registro</a>
</nav>
<main>
<section>

	<form action="registro.php" method="POST">
		<label for="">Id:</label>
		<input type="text" name="id"><br>
		<label for="">Codigo:</label>
		<input type="text" name="codigo"><br>
		<label for="">Nombre:</label>
		<input type="text" name="nombre"><br>
		<label for="">Precio:</label>
		<input type="number" name="precio"><br>
		<label for="">Cupo:</label>
		<input type="number" name="cupo"><br>

		<button>Guardar</button>
	</form>



</section>
</main>
	<footer>
		<h6>Derechos Reservados UTPL 2018</h6>
	</footer>
</body>
</html>