<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Practica 6.1</title>
	<!--Verificacion de Edad mayor de 18 años y/o ciudadano-->
</head>
<body>
<?php
	class Persona
	{
		public $Nombre="";
		public $Apellido="";
		public $Edad=18;
		public $rangoedad="a";

		public function __construct($Nombre,$Apellido,$Edad)
		{
			$this->Nombre=$Nombre;
			$this->Apellido=$Apellido;
			$this->Edad=$Edad;
		}
		public function Validar()
		{
			if ($individuo->Edad>20) {
				$rangoedad='c';
				return "Usted es ciudadano";
			} else {
				if ($individuo->Edad>17) {
					$rangoedad='b';
					return "Usted es mayor de edad";
				} else {
					$rangoedad='a';
					return "Usted es menor de edad";
				}
				
			}
		}
	}

	$N=$_POST["Nombre"];
	$A=$_POST["Apellido"];
	$E=$_POST["Edad"];
	// Validamos la accion
	if(isset($_POST['enviar']))
	{
		//Instancia
		$individuo=new Persona($N, $A, $E);
		echo $individuo->Nombre;
		echo "<br>";
		echo $individuo->Apellido;
		echo "<br>";
		echo $individuo->Edad;
		echo "<br>";
		echo $individuo->rangoedad;
		echo $individuo->Validar();

	}
?>
	<form name="Persona" action="practica61.php" method="POST">
		Nombre: <input type="text" name="Nombre">
		<br>
		Apellido: <input type="text" name="Apellido">
		<br>
		Edad: <input type="text" name="Edad">
		<br>
		<input type="submit" value="Enviar" name="enviar" class="btn btn-info">
		<br>
</body>
</html>