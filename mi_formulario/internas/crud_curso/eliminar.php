<?php
	include("../../dll/config.php");
	include("../../dll/mysql.php");
	extract($_POST);
	$id=$_REQUEST['id'];
	//$id=$_REQUEST['idreg'];
	$q="Delete From cursos Where id='$id'";
	$delete=mysql_query($q) or die ('error al eliminar el registro');

	echo '<script>alert("Datos Eliminar")</script>';
	//echo "<script>location.href='../internas/personas_registradas.php'</script>";
	echo "<script>location.href='../crud_curso_e.php'</script>";
?>