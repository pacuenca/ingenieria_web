<?php
	include("../dll/config.php");
	include("../dll/mysql.php");
	extract($_POST);


	$query="insert into registros values('', '$nombres', '$apellidos', '$direccion', '$correo', '$cedula', '$telefono', '$fecha_nacimiento', '$tipo', '$curso', '')";

	$result=mysql_query($query) or die ('error de sql');

	$sql2="select max(id) from registros";
	$result2=mysql_query($sql2) or die ('error de id max');

	//para obtener el id del ultimo registro
	while ($line=mysql_fetch_array($result2)) {
		$id_registro=$line[0];
	}

	//inserto en la tabla de muchos a muchos registro taller
	for ($i=0; $i < count($taller) ; $i++) { 
		$sql3="insert into registrotaller values('', '$id_registro', '$taller[$i]')";
		$result3=mysql_query($sql3) or die ('error de registro talleres');
	}

	echo '<script>alert("Datos Guardados")</script>';
	//echo "<script>location.href='../internas/personas_registradas.php'</script>";
	echo "<script>location.href='personas_registradas.php'</script>";
?>