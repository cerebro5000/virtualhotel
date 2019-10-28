<?php 

	class UsuarioController extends Controller
	{	
		public $session;

		public function __construct(){
			
			$this->model = new UsuarioModel();
			$this->session = new Session();
		}

		public function inicio(){
			if (!isset($_SESSION['session'])) {
				header("Location: index.php?controller=inicio&action=inicio");
				exit();
			}
			$this->model = $_SESSION['session'];
			$user = $this->model;
			require_once('vistas/header.php');
			require_once('vistas/usuario/menu.php');
			require_once('vistas/usuario/index.php');
			require_once('vistas/footer.php');
		}

		public function preferencias(){
			if (!isset($_SESSION['session'])) {
				header("Location: index.php?controller=inicio&action=inicio");
				exit();
			}
			$this->model = $_SESSION['session'];
			$user = $this->model;
			
			require_once('vistas/header.php');
			require_once('vistas/usuario/menu.php');
			require_once('vistas/usuario/preferencias.php');
			require_once('vistas/footer.php');
		}

		public function login()
		{
			if (isset($_POST)) {
				if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
					if($this->model->recuperarUsuario($_POST['usuario'] , $_POST['contrasena'])){
						$this->session->setsession($this->model);
						echo 'true';
					}
					else{
						echo 'usuario incorrecto';
					}
				}
			}else
				echo 'false';
		}

		public function logout()
		{
			$this->session->destruirsesion();
			echo 'true';
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