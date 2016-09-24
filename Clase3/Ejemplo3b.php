<!--
		Ejercicio de formas parte de php
		se pued utilizar POST o REQUEST, siempre en mayusculas ya que son palabras reservadas
		en el caso de GET
		utilizar GET en lugar de POST, pero en la parte de html, debera especificarse que es GET
	 -->
<?php
	$diametro=$_POST['diam'];
	$altura=$_REQUEST['altu'];
	$resultado=$diametro*$altura;

	echo "Bienvenido";
	echo "<br>";
	echo $diametro;
	echo "<br>";
	echo $altura;
	echo "<br>";
	echo "El resultado es: ".$resultado;
?>