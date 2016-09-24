<DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/hojaestilo1.css">
		<title>Ejercicio Clase 3</title>
	</head>
	<body>
		<div class="row" id="color">
			<h1>Ejercicio III</h1>
		</div>
			<?php
				$Numeros=array(5,10,15);
				$Alumnos=array("JC"=>"Verde","MB"=>"Violeta","CT"=>"Azul");
				echo $Numeros[0];
				echo "<br>";
				echo $Numeros[2]=132;
				echo "<br>";
				echo $Numeros[2];
				echo "<br>";
				echo count($Numeros);
				echo "<br>";
				echo "<br>";
				echo "<br>";
				$tam=count($Numeros);
				for ($x=0;$x<$tam;$x++)
				{
						echo $Numeros[$x]." , ";
				}
				echo "<br>";
				foreach ($Alumnos as $key => $value) {
					echo "Llave: ".$key." Color ".$value;
					echo "<br>";
				}
				//echo "JC ama el color: "$Alumnos["JC"];
			?>
			</div>
		</div>
	<!--
		Manejo de arreglos
	</body>
</html>
