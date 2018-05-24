<?php

	include("../dll/config.php");
	include("../dll/mysql.php");
extract($_POST);
$fecha_actual="10-05-2018";

	$tiempo = strtotime($fecha_nacimiento);
	$ahora = time();
	$edad = ($ahora-$tiempo)/(60*60*24*365.25);
	echo $edad = floor($edad);

echo "Ejemplo de php <br> Bienvenido : ".$nombres." ".$apellidos;

print "<b>Ud tiene : ".$edad." años de edad";

if ($edad >= 18) {
	echo " Usted es mayor de edad :)";
}else{
	echo " Usted es menor de edad :(";
}

for ($i=0; $i < 12; $i++) { 
	print " <br>Esto es for y va en el num:".$i."<br>";
}


$lista1[0]="Docente";
$lista1[1]="Estudiantes";
$lista1[2]="Abogado";
$lista1[3]="Ingeniero";
$lista1[4]="Doctor";
$lista1[5]="Policia";
$lista1[6]="Militar";


/*
comenta un bloque



//Es para poder presentar una lista que conocemos el tamaño
for ($i=0; $i < 6; $i++) { 
	print "Lista:".$i." ".$lista1[$i]."<br>";
}
*/

//Es para poder presentar una lista desconocidad
for ($i=0; $i < count($lista1); $i++) { 
	print "Lista:".$i." ".$lista1[$i]."<br>";
}

//codigo de la base de datos
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
	echo "<script>location.href='../registro.php'</script>";


?>