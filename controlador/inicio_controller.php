<?php 
/**
* 
*/
	class InicioController extends Controller
	{	
		public function __construct(){
			$this->model = new InicioModel();
		}
		public function inicio(){
			require_once('vistas/header.php');
			require_once('vistas/menu.php');
			require_once('vistas/inicio/inicio.php');
			require_once('vistas/footer.php');
		}

		public function contacto(){
			require_once('vistas/header.php');
			require_once('vistas/menu.php');
			require_once('vistas/inicio/contacto.php');
			require_once('vistas/footer.php');
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