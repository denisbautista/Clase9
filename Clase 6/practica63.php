<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Practica 6.3</title>
	<!--Contrato-->
</head>
<body>
<?php
	class Persona
	{
		public $Ciudad="San Pedro Sula";
		public $Empresa="Seleccion Nacional de Futbol";
		public $DEmpresa="Estadio Olimpico Metropolitano de San Pedro Sula";
		public $Representante="Jorge Luis Pinto";
		public $NEmpleado="";
		public $DEmpleado="";

		public function __construct($Ciudad,$Empresa,$DEmpresa,$Representante,$NEmpleado,$DEmpleado)
		{
			$this->Ciudad=$Ciudad;
			$this->Empresa=$Empresa;
			$this->DEmpresa=$DEmpresa;
			$this->Representante=$Representante;
			$this->NEmpleado=$NEmpleado;
			$this->DEmpleado=$DEmpleado;
		}
		public function Validar()
		{
			return "En la ciudad de ".$this->Ciudad.", se acuerda entre la empresa ".$this->Empresa." representada por el Sr. ".$this->Representante.", en su caracter de apoderado, con domicilio en la calle ".$this->DEmpresa. " y el Sr. ".$this->NEmpleado.", futuro empleado con domicilio en ".$this->DEmpleado.", celebra el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los articulos 90,91,92,93,94,95 y concordantes de la ley de contrato de Trabajo No.20744";
		}
	}

	$C=$_POST["Ciudad"];
	$E=$_POST["Empresa"];
	$F=$_POST["DEmpresa"];
	$R=$_POST["Representante"];
	$N=$_POST["NEmpleado"];
	$D=$_POST["DEmpleado"];

	// Validamos la accion
	if(isset($_POST['enviar']))
	{
		//Instancia
		$individuo=new Persona($C, $E, $F, $R, $N, $D);
		echo $individuo->Ciudad;
		echo "<br>";
		echo $individuo->Empresa;
		echo "<br>";
		echo $individuo->DEmpresa;
		echo "<br>";
		echo $individuo->Representante;
		echo "<br>";
		echo $individuo->NEmpleado;
		echo "<br>";
		echo $individuo->DEmpleado;
		echo "<br>";
		echo $individuo->Validar();

	}
?>
	<form name="Persona" action="practica63.php" method="POST">
		Ciudad actual: <input type="text" name="Ciudad">
		<br>
		Empresa: <input type="text" name="Empresa">
		<br>
		Direccion de la Empresa: <input type="text" name="DEmpresa">
		<br>
		Representante legal: <input type="text" name="Representante">
		<br>
		Nombre empleado: <input type="text" name="NEmpleado">
		<br>
		Direccion actual: <input type="text" name="DEmpleado">
		<br>
		<input type="submit" value="Enviar" name="enviar" class="btn btn-info">
		<br>
</body>
</html>