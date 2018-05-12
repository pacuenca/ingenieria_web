<?php
extract($_POST);
$tipo_persona[1]="Docente UTPL";
$tipo_persona[2]="Estudiante UTPL";
$tipo_persona[3]="Externos UTPL";

$c_curso=80;
$c_taller=10;
$val_cur=0;
$num_taller=0;

$curso_elegido[0]="No tiene cursos escogidos";
$curso_elegido[1]="JAVA";
$curso_elegido[2]="ANDROID";
$curso_elegido[3]="PHP";

echo "PRECIO A PAGAR DEL CURSO Y TALLERES ELEGIDOS:";
echo "<br><br>Nombre: ".$nombres." <br>Apellido: ".$apellidos;
echo "<br>Tipo de persona: ".$tipo_persona[$tipo];
echo "<br>Cursos elegido: ".$curso_elegido[$curso];
//Obtenemos el valor  apagar por el curso elegido.
if ($curso) {
	$val_cur=80;
}else{
	$val_cur=0;
}
//Obtenemos el valor a pagar por los talleres escogidos.
if (isset($c1)) {
	$num_taller+=30;
}

if (isset($c2)) {
	$num_taller+=30;
}

if (isset($c3)) {
	$num_taller+=30;
}

if (isset($c4)) {
	$num_taller+=30;
}
//Obtenemos el valor a pagar y el descuento correspondiente a cada tipo de persona.
$cal=(100+$val_cur+$num_taller);
$dd=$cal*0.1;
$de=$cal*0.2;
echo "<br>El valor total a pagar es : ".$cal;
$total=0;

//Diferenciamos que tipo d epersona es para aplicar los descuentos correspondientes.
if ($tipo_persona[$tipo] == "Docente UTPL" ) {
	$total=$cal-$dd;
	echo "<br>El descuento por ser ".$tipo_persona[$tipo]." es : ".$dd;
	echo "<br>Valor a pagar es : ".$total;
}

if($tipo_persona[$tipo] == "Estudiante UTPL" ){
	$total=$cal-$de;	
	echo "<br>El descuento por ser ".$tipo_persona[$tipo]." es : ".$de;
	echo "<br>Valor a pagar es : ".$total;
}

if($tipo_persona[$tipo] == "Externos UTPL" ){
	echo "<br>Nota no tiene descuento por no pertenecer a UTPL";
	echo "<br>Valor a pagar es : ".$cal;
}
?>