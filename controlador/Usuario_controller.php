<?php 

	class UsuarioController extends Controller
	{	
		public $user;
		public $session;
		
		public function __construct(){
			$this->user = new UsuarioModel();
			$this->session = new Session();
		}

		public function inicio(){
			$this->session->destruirsesion();
			print_r($_SESSION);
			require_once('vistas/header.php');
			require_once('vistas/usuario/menu.php');
			require_once('vistas/usuario/index.php');
			require_once('vistas/footer.php');
		}

		public function preferencias(){
			$user = $this->user;
			$user->nombre = "daniel";
			require_once('vistas/header.php');
			require_once('vistas/usuario/menu.php');
			require_once('vistas/usuario/preferencias.php');
			require_once('vistas/footer.php');
		}

		public function login()
		{
			if(!empty($_POST)){
				print_r($_POST);
				$this->user->nombre = "generico";
			}else
				$this->user->nombre = "generico";
			require_once('vistas/header.php');
			require_once('vistas/usuario/menu.php');
			require_once('vistas/usuario/preferencias.php');
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