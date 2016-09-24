<?php
	$factorizar=$_GET['bypass01'];
	echo "El numero a factorizar es: ".$factorizar;
	echo "<br>";
	switch ($factorizar) {
		case 4:
			echo "Factor: 2";
			break;
		case 5:
			echo "Factor: 5";
			break;
		case 6:
			echo "Factores: 2,3";
			break;
		case 7:
			echo "Factor: 7";
			break;
		case 8:
			echo "Factor: 2";
			break;
		case 9:
			echo "Factor: 3";
			break;
		case 10:
			echo "Factores: 2,5";
			break;
		case 11:
			echo "Factor: 11";
			break;
		case 12:
			echo "Factores: 2,3";
			break;
		default:
			echo "No esta en el rango";
			break;
	}


?>
