<?php 

	class UsuarioController extends Controller
	{	
		public $session;
<<<<<<< HEAD

		public function __construct(){
			
			$this->model = new UsuarioModel();
=======
		
		public function __construct(){
			$this->user = new UsuarioModel();
>>>>>>> b42300bcebe3aefcac0420b08e5d3149c611bfee
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
<<<<<<< HEAD
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
=======
			if(!empty($_POST)){
				print_r($_POST);
				$this->user->nombre = "generico";
			}else
				$this->user->nombre = "generico";
			require_once('vistas/header.php');
			require_once('vistas/usuario/menu.php');
			require_once('vistas/usuario/preferencias.php');
			require_once('vistas/footer.php');
			
>>>>>>> b42300bcebe3aefcac0420b08e5d3149c611bfee
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