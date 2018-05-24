  <?php
	include("../dll/config.php");
	include("../dll/mysql.php");
	extract($_POST);
	echo "<link href=\"../css/estilos-php.css\" rel=\"stylesheet\" type=\"text/css\" >"; 
	$id=$_REQUEST['id'];
	$tipo_persona[1]="Docente UTPL";
	$tipo_persona[2]="Estudiante UTPL";
	$tipo_persona[3]="Externos UTPL";

	$val_evento=100;
	$val_taller=30;
	$val_curso=0;
	$num_taller=0;
	$cal=0;
	$total=0;
	$desc=0;

	$curso_elegido[0]="No tiene cursos escogidos";
	$curso_elegido[1]="Manejo de proyectos";
	$curso_elegido[2]="Desarrollo en angular";

		$query="select distinct id_taller from registrotaller r, talleres t where r.id_registro='$id'";
		$sql_id_talleres=mysql_query($query) or die('error de sql');
		while ($taller=mysql_fetch_array($sql_id_talleres,MYSQL_ASSOC)) {
			echo $sql_id_talleres[0];
   		}


   			//Obtengo el registro consultado con el id que obtuve en la fila de la tabla seleccionada
    		$query="select * from registros where id='$id'";
    		$consulta_registro=mysql_query($query) or die('error de sql');
    		($fac_registro=mysql_fetch_array($consulta_registro,MYSQL_ASSOC));

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

	<nav>
		<a href="#">Home</a>
		<a href="internas/personas_registradas.php">Registros</a>

	</nav>

	<main>
		<section class="factura">
			<span><b>FACTURA Nro. ___<br></b></span>
			<br><b>Datos del Cliente:</b><br>
			<div class="persona">
				<b>Nombres: </b>
				<?php
					echo $fac_registro['nombres'];
				?>
				<br>
				<b>Apellidos: </b>
				<?php
					echo $fac_registro['apellidos'];
				?>
				<br>
				<b>Dirección: </b>
				<?php
					echo $fac_registro['direccion'];
				?>
				<br>
				<b>Correo: </b>
				<?php
					echo $fac_registro['correo'];
				?>
				<br>
				<b>Cédula: </b>
				<?php
					echo $fac_registro['cedula'];
				?>
				<br>
				<b>Teléfono: </b>
				<?php
					echo $fac_registro['telefono'];
				?>
				<br>
				<b>Fecha de Nacimiento: </b>
				<?php
					echo $fac_registro['fecha_nacimiento'];
				?>
				<br>
				<b>Tipo de persona: </b>
				<?php
					echo $tipo_persona[$fac_registro['tipo']];
				?>
				
			</div>
				<br><b>Datos del Curso y Talleres elegidos:</b><br>
			<div class="cursos">
				<b>Curso: </b>
				<?php
					echo $curso_elegido[$fac_registro['curso']];
				?>
				<br>
				<b>Talleres: </b>
				<?php
				$contador=0;
					$query="select distinct id_taller from registrotaller r, talleres t where r.id_registro='$id'";
					$sql_id_talleres=mysql_query($query) or die('error de sql');
					while ($row=mysql_fetch_array($sql_id_talleres,MYSQL_ASSOC)) {
							$t=$row['id_taller'];
							$query="select nombre from talleres where id='$t'";
							$sql_nom_talleres=mysql_query($query) or die('error de sql');
							
							while ($nom=mysql_fetch_array($sql_nom_talleres,MYSQL_ASSOC)) {
								$contador++;
								?>
								<span><?php echo $nom['nombre']; ?></span>
								<?php
							}
					}
				?>
					
			</div>
			<div>
			<h3 class="info"> <br>Detalles de pago:</h3>

			<?php
			//Obtenemos el valor a pagar por el curso elegido.
			if (($fac_registro['curso'])) {
				$val_curso=80;
			}else{
				$val_curso=0;
			}
			//Obtenemos el valor a pagar y el descuento correspondiente a cada tipo de persona.
			$val_taller=$contador*30;
			$cal=($val_evento+$val_curso+($contador*30));
			$dd=$cal*0.1;
			$de=$cal*0.2;
			?>

			<b>Total a pagar : </b> <?php  echo $cal; ?>
			<?php
				//Diferenciamos que tipo d epersona es para aplicar los descuentos correspondientes.
				if ($tipo_persona[$fac_registro['tipo']] == "Docente UTPL" ) {
					$total=$cal-$dd;
					$desc=$dd;
				}
				if($tipo_persona[$fac_registro['tipo']] == "Estudiante UTPL" ){
					$total=$cal-$de;
					$desc=$de;
				}
				if($tipo_persona[$fac_registro['tipo']] == "Externos UTPL" ){
					$total=$cal;
					$desc=0;
				}
			?>
			<br>
			<b>Descuento : </b> <?php  echo $desc; ?>

			<br>
			<b>Valor Total : </b> <?php  echo $total; ?>



			</div>
		</section>
	</main>
	<footer>
		<h6>Creado por Paul Cuenca</h6>
		<h5>pacuenca2012@gmail.com</h5>
	</footer>
</body>
</html>