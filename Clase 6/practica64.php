<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Practica 6.4</title>
	<!--Verifica contraseña-->
</head>
<body>
<?php
	class Persona
	{
		public $Nombre="";
		public $Correo="";
		public $Clave="";
		public $VClave="";

		public function __construct($Nombre,$Correo,$Clave,$VClave)
		{
			$this->Nombre=$Nombre;
			$this->Correo=$Correo;
			$this->Clave=$Clave;
			$this->CClave=$VClave;
		}
		public function Validar($P)
		{
			if ($this->Clave===$VClave)
			{
				return true;
			}
			else
			{
				return false;
			}
	}

	$N=$_POST["Nombre"];
	$C=$_POST["Correo"];
	$P=$_POST["Clave"];
	$V=$_POST["VClave"];

	// Validamos la accion
	if(isset($_POST['enviar']))
	{
		//Instancia
		$individuo=new Persona($N, $C, $P, $V);
		echo $individuo->Nombre;
		echo "<br>";
		echo $individuo->Correo;
		echo "<br>";
		echo $individuo->Clave;
		echo "<br>";
		echo $individuo->VClave;
		echo "<br>";
		echo $individuo->Validar($individuo->Clave);

	}
?>
	<form name="Persona" action="practica64.php" method="POST">
		Nombre: <input type="text" name="Nombre">
		<br>
		Direccion de correo electronico: <input type="text" name="Correo">
		<br>
		Ingrese su contraseña: <input type="password" name="Clave">
		<br>
		Reingrese su contraseña: <input type="password" name="VClave">
		<br>
		<input type="submit" value="Enviar" name="enviar" class="btn btn-info">
		<br>
</body>
</html>