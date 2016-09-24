<DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/hojaestilo1.css">
		<title>Hoja de calculos</title>
	</head>
	<body>
		<div class="row fondonegro centrar" id="color">
			<h1>Calcular</h1>
		</div>
		<div class="row fondoazul">
			<br>
		</div>
		
		<div class="row">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-10">
				<?php
					$V1=20;
					$V2=10;

					echo "Valores de entrada";
					echo "<br>";
					echo "V1: ".$V1;
					echo "<br>";
					echo "V2: ".$V2;
					echo "<br>";
					echo "<br>";
					echo "La suma ".$V1." y ".$V2." es igual a ";
					echo $V1+$V2;
					echo "<br>";
					echo "La resta ".$V1." y ".$V2." es igual a ";
					echo $V1-$V2;
					echo "<br>";
					echo "La division de ".$V1." y ".$V2." es igual a ".$V1/$V2;
					echo "<br>";
					echo "La multiplicacion de ".$V1." y ".$V2." es igual a ".$V1*$V2;
					echo "<br>";
				?>
			</div>
		</div>
		<div class="row fondogris">
			<h4>Calculos - DB</h4>
			<br>
			<a href="index.php">Volver al indice</a>
		</div>
	</body>
</html>
