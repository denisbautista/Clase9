<!Doctype html>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Ejercicio 2 - Clase 5</title>
</head>
<body>
<!--Codigo-->
<?php
	class Persona
	{
		public $Nombre="";
		public $Apellido="";
		public $Edad=54;
		public $pass="12345";
		//public $acceso="Acceso denegado";
		public $usuario="Temporal";
	
		public function __construct($Nombre,$Apellido)
		{
			$this->Nombre=$Nombre;
			$this->Apellido=$Apellido;
		}
		public function Validar($Us)
		{
			if ($this->usuario===$Us)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}

	$N=$_POST["Nombre"];
	$A=$_POST["Apellido"];
	$P=$_POST["password"];
	//$U=$_POST["usuario"];


	// Validamos la accion
	if(isset($_POST['enviar']))
	{
		//Instancia
		$individuo=new Persona($N, $A);
		echo $individuo->Nombre;
		echo "<br>";
		echo $individuo->Apellido;
		echo "<br>";
		echo $individuo->Edad;
		echo "<br>";

		if($individuo->Validar($Usuario))
		{

		}
		else
		{

		}

		if($individuo->pass===$P)
		{
			//$acceso="Password coincide, Bienvenido";
			echo "Password coincide, Bienvenido";
		}
		else
		{
			//$acceso="Password no coincide, Acceso denegado";
			echo "Password no coincide, Acceso denegado";	
		}

	}
?>
<!--Formulario-->
	<form name="Persona" action="ejercicio2.php" method="POST">
		Nombre: <input type="text" name="Nombre">
		<br>
		Apellido: <input type="text" name="Apellido">
		<br>
		Usuario:  <input type="text" name="usuario">
		<br>
		Password: <input type="password" value="password" name="password">
		<br>
		<input type="submit" value="Enviar" name="enviar" class="btn btn-info">
		<br>
		<!--<h1>.$acceso</h1>-->
	</form>
</body>
</html>
