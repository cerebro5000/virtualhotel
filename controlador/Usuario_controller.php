<?php 
require_once "modelos/user.php";
	class UsuarioController
	{	
		public function __construct(){}

		public function index(){
			$user = new User();
			$user->nombre = "daniel";

			require_once('vistas/header.php');
			require_once('vistas/usuario/menu.php');
			require_once('vistas/usuario/index.php');
			require_once('vistas/footer.php');
		}

		public function register(){
			echo 'register desde UsuarioConroller';
		}

		public function update(){
			echo 'update desde UsuarioConroller';

		}

		public function delete(){
			echo 'delete desde UsuarioConroller';
		}
		
		public function error(){
			require_once('vistas/usuario/error.php');
		} 
	}
?>