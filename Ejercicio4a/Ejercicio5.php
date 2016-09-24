<?php
	$alazar=$_GET['bypass01']%3;

	echo "La señal resultante es: ".$alazar;
	echo "<br>";
	switch ($alazar) {
		case 1:
			echo "Corresponde el color: Verde";
			break;
		case 2:
			echo "Corresponde el color: Amarillo";
			break;
		default:
			echo "Corresponde el color: Rojo";
			break;
	}


?>
