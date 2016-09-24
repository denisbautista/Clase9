//- Ejercicio de prueba acerca de funciones
<?php
	$valor01=$_GET['bypass01'];
	echo $valor01;
	$valor02=$_GET['bypass02'];
	echo $valor02;

	function Calculos($Valor01,$Valor02,$Operacion){
		echo "<br>";
		switch ($operacion) {
			case 1:
				echo "El resultado de la suma de: ".$valor01." y ".$valor02." es: ".$valor01+$valor02;
				break;
			case 2:
				echo "El resultado de la resta de: ".$valor01." y ".$valor02." es: ".$valor01-$valor02;
				break;
			case 3:
				echo "El resultado de la multiplicacion de: ".$valor01." y ".$valor02." es: ".$valor01*$valor02;
				break;
			case 4:
				echo "El resultado de la division de: ".$valor01." y ".$valor02." es: ".$valor01/$valor02;
				break;
	}
	
	Calculos($Valor01,$Valor02,1)
	Calculos($Valor01,$Valor02,2)
	Calculos($Valor01,$Valor02,3)
	Calculos($Valor01,$Valor02,4)

?>
