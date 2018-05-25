<?php
	include("../../dll/config.php");
	include("../../dll/mysql.php");
	extract($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Numero</title>
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
	<a href="registro.php">Home</a>
	<a href="personas_registradas.php">Registro</a>
</nav>
<main>
<section>

<?php
$v1 = $_POST['variable1'];
$v2 = $_POST['variable2'];

$sql = "SELECT id, nombre FROM talleres";
$result = mysql_query($sql);
while ($registro=mysql_fetch_array($result)) {
?>
<button> <a href="calcular.php?id=$registro['id']">Personas<?php echo $registro['nombre']; ?></a> </button>

	<?php
}

$numero = mysql_num_rows($result);
?>




</section>
</main>
	<footer>
		<h6>Derechos Reservados UTPL 2018</h6>
	</footer>
</body>
</html>

