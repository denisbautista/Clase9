<?php
	$altura=$_GET['altu'];

	switch ($altura) {
		case $altura<1:
			echo "No puede pasar, regresa el proximo año";
			break;
		case $altura<=1.5:
			echo "Disfrutelo!";
			break;
		default:
			echo "No puede pasar, Ya estas muy grande!";
			break;
	}


?>
