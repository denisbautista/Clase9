<DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/hojaestilo1.css">
		<title>Hoja de datos</title>
	</head>
	<body>
		<div class="row fondonegro centrar" id="color">
			<h1>Datos personales</h1>
		</div>
		
		<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
				<?php
					$Nombres="Denis Roberto";
					$Apellidos="Bautista Interiano";
					$edad=44;
					$pasatiempo="Leer comics";
					echo "Mi nombre completo es :";
					echo "<br>";
					echo $Nombres," ",$Apellidos;
					echo "<br>";
					echo "Mi edad es:";
					echo "<br>";
					echo $edad." años";
					echo "<br>";
					echo "Mi pasatiempo es:";
					echo "<br>";
					echo $pasatiempo;
					echo "<br>";
				?>
				<img src="img\html5.png" width="300" height="300"  alt="imagen de fondo" >
			</div>
			<div class="col-sm-4">
			</div>
		</div>
		<div class="row fondogris">
			<h4>Datos - DB</h4>
			<br>
			<a href="index.php">Volver al indice</a>
		</div>
	</body>
</html>
