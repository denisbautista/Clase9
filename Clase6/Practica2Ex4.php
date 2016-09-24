
<?php
	class Ingreso
	{
		public $NUsuario="";
		public $Email="";
		public $Clave="";
		public $Verifica="";
		public $Usuario="";
		public $Registrados=0;
		public $Resultado=0;

		public function __construct($NUsuario,$Email,$Clave,$Verifica)
		{
			$this->NUsuario=$NUsuario;
			$this->Email=$Email;
			$this->Clave=$Clave;
			$this->Verifica=$Verifica;
		}
		
		public function Validaclave($Pass)
		{
			if ($this->Clave===$this->Verifica)
			{
				$cantLetras=strlen($this->Clave);
				if ($cantLetras>5)
				{
					$tienevocales=0;
					$tienenumeros=0;
					$Noes=0;
					for($x=0;$x<$cantLetras;$x++)
					{
						$estees=substr($this->Clave, $x, 1);
						switch($estees)
						{
							Case "0":
								$tienenumeros=1;
								break;
							Case "1":
								$tienenumeros=1;
								break;
							Case "2":
								$tienenumeros=1;
								break;
							Case "3":
								$tienenumeros=1;
								break;
							Case "4":
								$tienenumeros=1;
								break;
							Case "5":
								$tienenumeros=1;
								break;
							Case "6":
								$tienenumeros=1;
								break;
							Case "7":
								$tienenumeros=1;
								break;
							Case "8":
								$tienenumeros=1;
								break;
							Case "9":
								$tienenumeros=1;
								break;
							Case "a":
								$tienevocales=1;
								break;
							Case "e":
								$tienevocales=1;
								break;
							Case "i":
								$tienevocales=1;
								break;
							Case "o":
								$tienevocales=1;
								break;
							Case "u":
								$tienevocales=1;
								break;
							Case "A":
								$tienevocales=1;
								break;
							Case "E":
								$tienevocales=1;
								break;
							Case "I":
								$tienevocales=1;
								break;
							Case "O":
								$tienevocales=1;
								break;
							Case "U":
								$tienevocales=1;
								break;
							Default:
								$Noes=0;
						}
					}
					$Resultado=$tienenumeros+$tienevocales;
					switch($Resultado)
					{
						Case 2:
							echo $Resultado;
							echo '<br>';
							//if ($Resultado=2)
							//{
							//	echo 'Hay '.$Registrados.' usuarios registrados';
							//	$Usuario[$Registrados][0]=$individuo->NUsuario;
							//	$Usuario[$Registrados][1]=$individuo->Email;
							//	$Usuario[$Registrados][2]=$individuo->Clave;
							//	$Registrados=$Registrados+1;

							//	for($y=0;$y<$Registrados;$y++)
							//	{
							//		echo $Usuario[$y][0].' '.$Usuario[$y][1].' '.$Usuario[$y][2];
							//		echo '<br>';
							//	}
							//}
							return '<h1>'.'Acceso Concedido'.'</h1>';
							break;
						Case 1:
							return '<h1>'.'La clave debe tener al menos una vocal y un numero, Acceso Denegado!'.'</h1>';
						default:
							return '<h1>'.'La clave debe tener al menos una vocal y un numero, Acceso Denegado!'.'</h1>';
					}
				}
				else
				{
					return '<h1>'.'El largo de la clave debe de ser de 8, Acceso denegado!'.'</h1>';
				}
			}
			else
			{
				return '<h1>'.'Las claves no coinciden, Acceso denegado!'.'</h1>';
			}	

		}
	}
// Estos son los datos que vienen de la forma

	$U=$_POST["NUsuario"];
	$E=$_POST["Email"];
	$P=$_POST["Clave"];
	$V=$_POST["Verifica"];

	// Validamos la accion
	if(isset($_POST['enviar']))
	{
		//Instancia
		$individuo=new Ingreso($U, $E, $P, $V);
		echo $individuo->Validaclave($individuo->Clave);
	}
?>