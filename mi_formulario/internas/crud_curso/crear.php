<?php
	include("../../dll/config.php");
	include("../../dll/mysql.php");
	extract($_POST);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Crud-Cursos</title>
	<meta	charset="utf8">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<meta name="author" content="UTPL by pacuenca201@gmail.com">		
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>

</head>
<body>

<header>
<h1>Evento SISTEMAS-LOJA-2018</h1>
<h5>CRUD de Cursos</h5>
</header>

<nav>
	<a href="../registro.php">Home</a>
	<a href="#">Registro</a>
</nav>
<main>
<section>

	<form action="registro.php" method="POST">
		<label for="">Nombre:</label>
		<input type="text" name="nombre"><br>
		<label for="">Precio:</label>
		<input type="text" name="precio"><br>
		<label for="">Cupo:</label>
		<input type="text" name="cupo"><br>

		<button>Guardar</button>
	</form>



</section>
</main>
	<footer>
		<h6>Derechos Reservados UTPL 2018</h6>
	</footer>
</body>
</html>