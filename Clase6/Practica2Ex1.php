
<?php
	class Persona
	{
		public $Nombre="";
		public $Edad=0;
	
		public function __construct($Nombre,$Edad)
		{
			$this->Nombre=$Nombre;
			$this->Edad=$Edad;
		}
		public function Validar($Ed)
		{
			if ($this->Edad<18)
			{
				return '<h1>'.'Aun no tienes 18 años'.'</h1>';
			}
			else
			{
				If ($this->Edad>21)
				{return '<h1>'.'Eres ciudadano'.'</h1>';
				}
				else
				{
					return '<h1>'.'Eres legalmente adulto'.'</h1>';
				}
			}
		}
	}

	$N=$_POST["Nombre"];
	$E=$_POST["Edad"];


	// Validamos la accion
	if(isset($_POST['enviar']))
	{
		//Instancia
		$individuo=new Persona($N, $E);
		echo $individuo->Validar($individuo->Edad);
	}
?>