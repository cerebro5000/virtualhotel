<?php 
	class InicioController
	{	
		public function __construct(){}

		public function inicio(){
			require_once('vistas/inicio/inicio.php');
		}

		public function contactenos(){
			require_once('vistas/inicio/contacto.php');
		}
		public function error(){
			require_once('vistas/usuario/error.php');
		} 
	}
?>