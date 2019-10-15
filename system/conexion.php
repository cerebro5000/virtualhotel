<?php 
	class Database
	{
		private $host;
		private $db;
		private $user;
		private $password;
		private $charset;
		
		private function __construct(){
			$this->host = constant('HOST');
			$this->db = constant('DB');
			$this->user = constant('USER');
			$this->password = constant('PASSWORD');
			$this->charset = constant('CHARSET');
		}
		
		public function conectar(){
			try {
				$coneccion = "mysql:host=" . $this->host . ";dbname=" . $this->db .";charset=" . $this->charset;
				$optiones =[
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_EMULATE_PREPARES => false,
				];
				return new PDO($coneccion,$this->user,$this->password,$optiones);
			} catch (PDOException $e) {
				print_r("error de coneccion " . $e->getMessage());
			}
		}
	}
 ?>