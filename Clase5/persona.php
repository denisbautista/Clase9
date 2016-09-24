<?php
	class Persona{
		public $Nombre;
		public $Apellido;
		Public $Direccion;

		public function __construct($Nombre,$Apellido,$Direccion)
		{
			$this->Nombre=$Nombre;
			$this->Apellido=$Apellido;
			$this->Direccion=$Direccion;
		}

		public function Mensaje()
		{
			return "<h1/>Bienvenido ".$this->Nombre." ".$this->Apellido;
		}
	}

	$persona1=new Persona("Alejandra","Coto","Col. Trejo");
	echo  $persona1->Apellido;
	echo "<br/>";
	echo  $persona1->Mensaje();
?>