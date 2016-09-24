<!Doctype html>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Practica 6.2</title>
</head>
<body>
<?php
	class Persona
	{
		public $Nombre="";
		public $Apellido="";
		public $Ingresos=0;

		public function __construct($Nombre,$Apellido,$Ingresos)
		{
			$this->Nombre=$Nombre;
			$this->Apellido=$Apellido;
			$this->Ingresos=$Ingresos;
		}
		public function Validar()
		{
			if ($individuo->Ingresos>3000)
			{
				$impuesto=$individuo->Ingresos*.01;
				return "Usted debe de pagar: ".$impuesto." Lps. de ISR";
			}
			else
			{
				$impuesto=0;
				return "Usted esta excento del ISR";
			}
				
		}
	}

	$N=$_POST["Nombre"];
	$A=$_POST["Apellido"];
	$I=$_POST["Ingresos"];
	// Validamos la accion
	if(isset($_POST['enviar']))
	{
		//Instancia
		$individuo=new Persona($N, $A, $I);
		echo $individuo->Nombre;
		echo "<br>";
		echo $individuo->Apellido;
		echo "<br>";
		echo $individuo->Ingresos;
		echo "<br>";
		echo $individuo->Validar();

	}
?>
	<form name="Persona" action="practica62.php" method="POST">
		Nombre: <input type="text" name="Nombre">
		<br>
		Apellido: <input type="text" name="Apellido">
		<br>
		Ingresos: <input type="text" name="Ingresos">
		<br>
		<input type="submit" value="Enviar" name="enviar" class="btn btn-info">
		<br>
</body>
</html>