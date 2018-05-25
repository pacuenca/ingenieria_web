<?php
	include("../../dll/config.php");
	include("../../dll/mysql.php");
	extract($_POST);

	$query="Insert into talleres VALUES ('','$codigo','$nombre', '$precio', '$cupo')";
	$reg=mysql_query($query) or die('error de sql');
	

	echo '<script>alert("Datos Guardados")</script>';
	echo "<script>location.href='../crud_taller_e.php'</script>";

?>