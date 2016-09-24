
<?php
	class Persona
	{
		public $Nombre="";
		public $Fondos=0;
	
		public function __construct($Nombre,$Fondos)
		{
			$this->Nombre=$Nombre;
			$this->Fondos=$Fondos;
		}
		public function Validar($IngAnuales)
		{
			if ($this->Fondos<3000)
			{
				return '<h1>'.'Usted esta excento del pago de Impuestos'.'</h1>';
			}
			else
			{
				$Impuesto=$IngAnuales*.03;
				return '<h1>'.'Usted debe pagar un total de: '.$Impuesto.'</h1>';
			}
		}
	}

	$N=$_POST["Nombre"];
	$F=$_POST["Fondos"];


	// Validamos la accion
	if(isset($_POST['enviar']))
	{
		//Instancia
		$individuo=new Persona($N, $F);
		echo $individuo->Validar($individuo->Fondos);
	}
?>