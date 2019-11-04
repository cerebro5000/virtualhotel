<?php 

	class UsuarioController extends Controller
	{	
		public $session;
		public $hotel;

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

		public function validar(){
			if(isset($_POST)){
				if(isset($_POST['usuario']) && isset($_POST['contrasena']) && isset($_POST['recontrasena']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['telefono']) && isset($_POST['email'])){
					$error = 0;
					foreach ($_POST as $key => $value) {
						switch ($key) {
							case 'usuario':
								if($this->model->validarusuario($value)){
									$this->model->setusuario($value);
								}
								else{
									$error = 1;
									echo "usuario ya utilizado escriba otro";
								}
								break;

							case 'contrasena':
								if($this->model->validarcontrasena($value , $_POST['recontrasena'])){
									$this->model->setcontraseña($value);
								}
								else{
									$error = 1;
									echo "contraseñas diferentes";
								}
								break;

							case 'nombre':
								if($this->model->validarnombre($value)){
									$this->model->setnombre($value);
								}
								else{
									$error = 1;
									echo "usuario invalido";
								}
								break;

							case 'apellido':
								if($this->model->validarapellido($value)){
									$this->model->setapellido($value);
								}
								else{
									$error = 1;
									echo "apellido invalido";
								}
								break;

							case 'telefono':
								if($this->model->validartelefono($value)){
									$this->model->settelefono($value);
								}
								else{
									$error = 1;
									echo "telefono muy largo";
								}
								break;

							case 'email':
								if($this->model->validaremail($value)){
									$this->model->setemail($value);
								}
								else{
									$error = 1;
									echo "email incorrecto escriba uno valido";
								}
								break;

						}
					}
					if($error == 0){
						if($this->model->guardarusuario()){
							echo 'datos guardados';
						}
						else{
							echo 'hubo un error revise los datos';
						}
					}
					else{	
						echo ' datos invalidos revise los datos por favor';
					}
						
				}
			}
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