<!Doctype html>
<html>
	<head>
		<title>Ejercicio 2</title>
	</head>
	<body>
	<h1> Titulo 1</h1>
	<h2> Titulo 2</h2>
	<h3> Titulo 3</h3>
	<h4> Titulo 4</h4>
	<h5> Titulo 5</h5>

	<!--Comentario en html -->
	<?php
		$Entero0=2;
		$Entero1=2;
		$Entero2=0.21;
		$resultado=$Entero1+$Entero2;

		//Arreglos
		$dias[]=12;
		$dias[]=14;
		$dias[]=16;
		$dias[]=18;
		$dias[]=20;
		
		echo "<br>";
		echo count($dias);
		echo "<br>";

		$vocales[0]='a';
		$vocales[1]='e';
		$vocales[2]='i';
		$vocales[3]='o';
		$vocales[4]='u';

		echo "<br>";
		echo count($vocales);
		echo "<br>";

		$Variable="Bienvenidos";
		echo $Variable;  // Este es un comentario de una linea
		echo "<br>";
		echo "Saludos";
		echo "<br>";

		echo "La suma de ".$Entero1." y ".$Entero2." es igual a ".$resultado;
		echo "<br>";
		//echo $Entero1%$Entero2;
		echo "<br>";
		echo $Entero1*$Entero2;
		echo "<br>";
		echo $resultado."Resultado: ";
		echo "<br>";

		if ($Entero2>$Entero1)
		{
			echo $Entero2." es mayor que ".$entero1;
		}
		elseif($Entero1>0)
		{
			echo $Entero1." es mayor que 0";
		}

		echo "<br>";


		if ($Entero0==$Entero1)
		{
			echo $Entero0." es igual a ".$Entero1;
		}

	?>
	</body>
</html>