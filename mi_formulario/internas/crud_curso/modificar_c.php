<?php
	include("../../dll/config.php");
	include("../../dll/mysql.php");
	extract($_POST);
	$query="update cursos set nombre='$nombre', precio='$precio', cupo='$cupo' where id='$id'";
	$result=mysql_query($query) or die ('error de sql');

	echo '<script>alert("Datos Guardados")</script>';
	//echo "<script>location.href='../internas/personas_registradas.php'</script>";
	echo "<script>location.href='../crud_curso_e.php'</script>";

?>
