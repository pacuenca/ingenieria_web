<?php
extract($_POST);
echo "<link href=\"../css/estilos-php.css\" rel=\"stylesheet\" type=\"text/css\" >"; 
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
$nombretaller=" ";
$nombre_persona="";


//Obtenemos el valor  apagar por el curso elegido.
if ($curso) {
	$val_cur=80;
}else{
	$val_cur=0;
}
//Obtenemos el valor a pagar por los talleres escogidos.
if (isset($c1)) {
	$num_taller+=30;
	$nombretaller="HTML";
}

if (isset($c2)) {
	$num_taller+=30;
	$nombretaller=$nombretaller.", CSS";
}

if (isset($c3)) {
	$num_taller+=30;
	$nombretaller=$nombretaller.", Visualización";
}

if (isset($c4)) {
	$num_taller+=30;
	$nombretaller=$nombretaller.", Cocina";
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Factura de Pago</title>
	<meta	charset="utf8">
	<link rel="stylesheet" type="text/css" href="css/estilos-php.css">
</head>
<body>
	<header>
		<h1>Evento SISTEMAS-LOJA-2018</h1>
		<h5>Cursos y Talleres de innovación</h5>
	</header>

	<main>
		<section class="factura">
			<span><b>FACTURA Nro. ___<br></b></span>

			<br><b>Datos del Cliente:</b><br>

			<div class="persona">
				<b>Nombres: </b>
				<?php
				echo "".$nombres
				?>
				<br>
				<b>Apellidos: </b>
				<?php
				echo "".$apellidos;
				?>
				<br>
				<b>Tipo de persona: </b>
				<?php
				echo "".$tipo_persona[$tipo];
				?>

				<br>
				<b>Teléfono: </b>
				<?php
				echo "".$telefono;
				?>
				<br>
				<b>Correo: </b>
				<?php
				echo "".$correo;
				?>

				<br>
				<b>Fecha de Nacimiento: </b>
				<?php
				echo "".$fecha_nacimiento;
				?>

				<br>
				<b>Cédula: </b>
				<?php
				echo "".$cedula;
				?>
			</div>
			

				<br><b>Datos del Curso y Talleres elegidos:</b><br>
			
			<div class="cursos">
				<b>Curso: </b>
				<?php
				echo "".$curso_elegido[$curso];
				?>
				<br>
				<b>Talleres: </b>
				<?php
				echo "".$nombretaller;
				?>
			</div>
			<h3 class="info"> <br>Detalles de pago:</h3>
			

			<?php
			//Obtenemos el valor a pagar y el descuento correspondiente a cada tipo de persona.
			$cal=(100+$val_cur+$num_taller);
			$dd=$cal*0.1;
			$de=$cal*0.2;
			$desc=0;
			?>
			
			<div class="valor">
				<b>El valor total a pagar es : $</b>
				<?php
				echo "".$cal;
				?>
			</div>
			
			<?php
			$total=0;

			//Diferenciamos que tipo d epersona es para aplicar los descuentos correspondientes.
			if ($tipo_persona[$tipo] == "Docente UTPL" ) {
				$total=$cal-$dd;
				$nombre_persona=$tipo_persona[$tipo];
				$desc=$dd;	
			}

			if($tipo_persona[$tipo] == "Estudiante UTPL" ){
				$total=$cal-$de;	
				$nombre_persona=$tipo_persona[$tipo];	
				$desc=$de;
			}

			if($tipo_persona[$tipo] == "Externos UTPL" ){
				$total=$cal;
				$nombre_persona=$tipo_persona[$tipo];
				$desc=0;		
			}
			?>

			<div class="descuento">
					<b>El descuento por ser </b>
					<?php
					echo "".$nombre_persona;
					?>
					<b> es : $</b>
					<?php
					echo "".$desc;
					?>
				</div>

				<div class="valor">
					<b>Valor a pagar es : $</b>
					<?php
					echo "".$total;
					?>
				</div>
		</section>
	</main>
	<footer>
		<h6>Creado por Paul Cuenca</h6>
		<h5>pacuenca2012@gmail.com</h5>
	</footer>
</body>
</html>