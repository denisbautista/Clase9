<?php
	class conexion
	{
		Private $host;
		Private $user;
		Private $pass;
		Private $db;

		public function __construct()
		{
			$this->host="localhost";
			$this->user="root";
			$this->pass="";
			$this->bd="curso";

			$con=mysql_connect($this->host,$this->user,$this->pass)
			if($con)
				mysql_select_db($this->bd,$con);
		}

		public function ConsultaSimple($sql)
		{
			mysql_query($sql);
		}

		public function ConsultaRetorno($sql)
		{
			$Consulta=mysql_query($sql);
			return $Consulta;0
		}
	}


?>