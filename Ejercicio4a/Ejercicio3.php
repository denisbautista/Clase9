<?php
	$zonaventas=$_GET['tiene'];
	echo $zonaventas;
	switch ($zonaventas) {
		case 1:
			echo "La comision es de: 10%";
			break;
		case 2:
			echo "La comision es de: 15%";
			break;
		case 3:
			echo "La comision es de: 20%";
			break;
		case 4:
			echo "La comision es de: 25%";
			break;
		case 5:
			echo "La comision es de: 30%";
			break;
		default:
			echo "No esta en el rango";
			break;
	}


?>
