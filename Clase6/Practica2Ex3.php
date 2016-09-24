
<?php
	class Contrato
	{
		public $CEmpresa="";
		public $NEmpresa="";
		public $REmpresa="";
		public $DEmpresa="";
		public $NEmpleado="";
		public $DEmpleado="";
	
		public function __construct($CEmpresa,$NEmpresa,$REmpresa,$DEmpresa,$NEmpleado,$DEmpleado)
		{
			$this->CEmpresa=$CEmpresa;
			$this->NEmpresa=$NEmpresa;
			$this->REmpresa=$REmpresa;
			$this->DEmpresa=$DEmpresa;
			$this->NEmpleado=$NEmpleado;
			$this->DEmpleado=$DEmpleado;
		}
	}

	$CE=$_POST["CEmpresa"];
	$NE=$_POST["NEmpresa"];
	$RE=$_POST["REmpresa"];
	$DE=$_POST["DEmpresa"];
	$NF=$_POST["NEmpleado"];
	$DF=$_POST["DEmpleado"];


	// Validamos la accion
	if(isset($_POST['enviar']))
	{
		//Instancia
		$individuo=new Contrato($CE, $NE, $RE, $DE, $NF, $DF);
		echo '<p>'.'En la ciudad de '.$individuo->CEmpresa.', se acuerda entre la empresa '.$individuo->NEmpresa.' representada por el Sr. '.$individuo->REmpresa.' en su caracter de apoderado, con domicilio en la calle '.$individuo->DEmpresa.' y el Sr.'.$individuo->NEmpleado.' futuro empleado con domicilio en '.$individuo->DEmpleado.', celebra el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los articulos 90, 92, 93, 94, 95 y concordantes de la ley de contrato de Trabajo No. 20.744'.'</p>';
	}
?>