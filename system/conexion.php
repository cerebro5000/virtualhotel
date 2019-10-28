<?php 
	class Conexion extends mysqli
	{
		public function __construct() {
			$this->host = constant('HOST');
			$this->db = constant('DB');
			$this->user = constant('USER');
			$this->password = constant('PASSWORD');
			$this->charset = constant('CHARSET');
			parent::__construct($this->host, $this->user, $this->password, $this->db);

			if (mysqli_connect_error()) {
				die('Error de Conexión (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error());
			}
		}
		private $host;
		private $db;
		private $user;
		private $password;
		private $charset;
		
		public function conectar(){
			$mysqli = new mysqli($this->host, $this->user, $this->password, $this->db);
			return $mysqli;
		}
		public function desconectar($conexion)
		{
			return $conexion->close();
		}

		public function liberar($resultado)
		{
			return $resultado->free();
		}
	}
 ?>