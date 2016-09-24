<?php
	include_once('ClassConex.php');

	Class Estudiante
	{
		private $id;
		private $cedula;
		private $nombre;
		private $apellido;
		private $telefono;
		private $edad;
		private $promedio;
		private $fecha;

		private $con;

		public function __construct()
		{
			$this->con=new Conexion();
		}

		// Funciones de utileria
		//Ej: set("edad",19)
		public function set($atributo,$contendido)
		{
			$this->atributo=$contendido;
		}

		//Ej: get(edad)
		public function get($atributo)
		{
			return $this->atributo;
		}


		//CRUD : Create, Read, U, Delete
		//Ej: get(edad)

		public function listartodo()
		{
			$sql="SELECT * FROM estudiantes";
			$resultado=$this->con->consultaretorno($Sql);
		}

		public function crear()
		{
			//Verifica el numero de cedula
			$sql2="Select * from estudiantes where cedula='{$this->cedula)}'";
			$resultado=$this->con->consultaretorno($sql2);
			$num=mysql_num_rows($sql2);
			//Validar cantidad de elementos que coinciden
			if($num!=0)
			{
				return false;
			}
			else
			{
				$sql="INSERT into estudiantes(cedula, nombre, apellido, telefono, edad, promedio, fecha) VALUES('{$this->cedula}','{$this->nombre}','{$this->apellido}','{$this->telefono}','{$this->edad}','{$this->promedio}',NOW())";
				$this->con->consultasimple($Sql);
				return true;
			}
		}

		public function eliminar()
		{
			$sql="DELETE FROM estudiantes Where ID='{this->id}'";
			$this->con->consultasimple($Sql);
		}


		public function ver()
		{
			// mysql_fetch_row()			// 0 .. cant columnas -1
			// mysql_fetch_assoc()			// Cedula
			// mysql_fetch_array()			// 
			// Solo va a permitir que regrese un registro
			$sql="SELECT * FROM estudiantes where id='{$this->id}' LIMIT 1";
			$resultado=$this->con->consultaretorno($Sql);
			$row=mysql_fetch_assoc(resultado);

			//Set
			$this->id=$row['id'];
			$this->cedula=$row['cedula'];
			$this->nombre=$row['nombre'];
			$this->apellido=$row['apellido'];
			$this->telefono=$row['telefono'];
			$this->edad=$row['edad'];
			$this->promedio=$row['promedio'];
			$this->fecha=$row['fecha'];
		}

		public function editar()
		{
			$sql="UPDATE estudiantes SET nombre='{$this->nombre}',apellido='{$this->apellido}',telefono='{$this->telefono}',edad='{$this->edad}',promedio='{$this->promedio}' WHERE id='{$this->id}'";
			$this->con->consultasimple($Sql);
		}
	}
?>
