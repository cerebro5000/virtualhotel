<?php 
	class UsuarioController
	{	
		public function __construct(){}

		public function index(){
			require_once('vistas/usuario/index.php');
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