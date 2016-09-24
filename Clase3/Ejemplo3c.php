<!--
		Ejercicio de formas parte de php
		se pued utilizar POST o REQUEST, siempre en mayusculas ya que son palabras reservadas
		en el caso de GET
		utilizar GET en lugar de POST, pero en la parte de html, debera especificarse que es GET
	 -->
<?php
	$nota1=$_REQUEST['clase1'];
	$nota2=$_REQUEST['clase2'];
	$nota3=$_REQUEST['clase3'];
	$nota4=$_REQUEST['clase4'];
	$Promedio=($nota1+$nota2+$nota3+$nota4)/4;

	echo "<h1>Calificaciones</h1>";
	echo "Clase 1:".$nota1;
	echo "<br>";
	echo "Clase 2:".$nota2;
	echo "<br>";
	echo "Clase 3:".$nota3;
	echo "<br>";
	echo "Clase 4:".$nota4;
	echo "<br>";
	echo "El promedio final es: ".$Promedio;
	echo "<br>";

	If($Promedio<60)
	{
		echo "Reprobado";
	}
	elseif($Promedio<70)
	{
	echo "Bueno";
	}
	elseif($Promedio<80)
	{
	echo "Muy Bueno";
	}
	elseif($Promedio<=100)
	{
	echo "Excelente";
	}
?>