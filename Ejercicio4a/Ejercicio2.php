<?php
	$edadactual=$_GET['tiene'];
	echo $edadactual;
	switch ($edadactual) {
		case 5:
			echo "Corresponde Primer grado";
			break;
		case 6:
			echo "Corresponde Primer grado";
			break;
		case 7:
			echo "Corresponde Segundo grado";
			break;
		case 8:
			echo "Corresponde Segundo grado";
			break;
		case 9:
			echo "Corresponde Tercer grado";
			break;
		case 10:
			echo "Corresponde Tercer grado";
			break;
		case 11:
			echo "Corresponde Cuarto grado";
			break;
		case 12:
			echo "Corresponde Cuarto grado";
			break;
		case 13:
			echo "Corresponde Quinto grado";
			break;
		default:
			echo "Secundaria";
			break;
	}


?>
