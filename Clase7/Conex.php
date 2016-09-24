<?php
	function conectar()
	{
		$user="Digitador";
		$pass="12345";
		$server="localhost";
		$db="";
		$con=mysql_connect($server,$user,$pass) or die("Error en la conexion a la BD ".mysql_error());
		mysql_select_db($db,$con);
		return $con;
	}
?>