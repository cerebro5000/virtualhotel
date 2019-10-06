<?php 
require_once "modelos/inicio.php";

	class InicioController
	{	
		private $model;
		public function __construct(){
			$this->model = new Inicio();
		}
		public function inicio(){
			require_once('vistas/header.php');
			require_once('vistas/menu.php');
			require_once('vistas/inicio/inicio.php');
			require_once('vistas/footer.php');
		}

		public function contactenos(){
			require_once('vistas/inicio/contacto.php');
		}
		public function registro(){
			require_once('vistas/header.php');
			require_once('vistas/menu.php');
			require_once('vistas/inicio/registro.php');
			require_once('vistas/footer.php');
		}
		public function error(){
			require_once('vistas/inicio/error.php');
		} 
	}
?>