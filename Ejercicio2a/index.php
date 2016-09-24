<DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title>Practica</title>
	</head>
	<body>
		<div class="row">
			<h1>Practica clase: 2</h1>
		</div>
		
		<div class="row">
			<div class="col-sm-6">
				<img src="img\html5.png" width="250" height="250"  alt="imagen de fondo" >
			</div>
			<div class="col-sm-6">
				<?php
					$Nombres="Denis Roberto";
					$Apellidos="Bautista Interiano";
					$ejercicio=2;
					$lenguaje="Visual FoxPro";
					echo "Bienvenidos";
					echo "<br>";
					echo "Este es ejercicio # ".$ejercicio;
					echo "<br>";
					echo "Mi nombre completo es :";
					echo "<br>";
					echo $Nombres," ",$Apellidos;
					echo "<br>";
					echo "Me gusta programar en:";
					echo "<br>";
					echo $lenguaje;
				?>
			</div>
		</div>
		<div class="row centrar" id="color">
			<h3>Denis Bautista</h3>
			<h4>2016</h4>
		</div>
	</body>
</html>
