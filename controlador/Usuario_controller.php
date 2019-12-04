<?php 

	class UsuarioController extends Controller
	{	
		public $session;
		public $habitacion;
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
			$this->session = $_SESSION['session'];
			$user = $this->session;
			$this->hotel = new HotelModel();
			$hoteles = $this->hotel->getHotelesTotales();
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
			$this->session = $_SESSION['session'];
			$user = $this->session;
			
			require_once('vistas/header.php');
			require_once('vistas/usuario/menu.php');
			require_once('vistas/usuario/preferencias.php');
			require_once('vistas/footer.php');
		}

		public function cuenta()
		{
			if (!isset($_SESSION['session'])) {
				header("Location: index.php?controller=inicio&action=inicio");
				exit();
			}
			$this->session = $_SESSION['session'];
			$user = $this->session;
			
			require_once('vistas/header.php');
			require_once('vistas/usuario/menu.php');
			require_once('vistas/usuario/micuenta.php');
			require_once('vistas/footer.php');
			
		}	
		
		public function reservaciones()
		{
			if (!isset($_SESSION['session'])) {
				header("Location: index.php?controller=inicio&action=inicio");
				exit();
			}
			$this->session = $_SESSION['session'];
			$user = $this->session;
			
			require_once('vistas/header.php');
			require_once('vistas/usuario/menu.php');
			require_once('vistas/usuario/reservaciones.php');
			require_once('vistas/footer.php');
			
		}	
		
		public function registrahotel()
		{
			if (!isset($_SESSION['session'])) {
				header("Location: index.php?controller=inicio&action=inicio");
				exit();
			}
			$this->session = $_SESSION['session'];
			$user = $this->session;
			$paso1 = 'active';
			$paso2 = '';
			$paso3 = '';
			$paso4 = '';
			if(isset($_SESSION['hotel'])){
				$paso1 = '';
				$paso2 = 'active';
				$paso3 = '';
				$paso4 = '';
				if(isset($_SESSION['habitacion'])){
					$paso1 = '';
					$paso2 = '';
					$paso3 = 'active';
					$paso4 = '';
					if (!empty($_SESSION['habitacion']->imagen)) {
						$paso1 = '';
						$paso2 = '';
						$paso3 = '';
						$paso4 = 'active';
					}
				}
			}
			$this->hotel = new HotelModel();
			$variable = $this->hotel->getserviciosTotales();
			$estados = $this->hotel->getestadostotales();

			$this->habitacion = new HabitacionModel();
			$tipos = $this->habitacion->gettipohabitaciontotal();

			require_once('vistas/header.php');
			require_once('vistas/usuario/menu.php');
			require_once('vistas/usuario/registrahotel.php');
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
								}
								break;

							case 'contrasena':
								if($this->model->validarcontrasena($value , $_POST['recontrasena'])){
									$this->model->setcontraseña($value);
								}
								else{
									$error = 2;	
								}
								break;

							case 'nombre':
								if($this->model->validarnombre($value)){
									$this->model->setnombre($value);
								}
								else{
									$error = 3;
								}
								break;

							case 'apellido':
								if($this->model->validarapellido($value)){
									$this->model->setapellido($value);
								}
								else{
									$error = 4;
								}
								break;

							case 'telefono':
								if($this->model->validartelefono($value)){
									$this->model->settelefono($value);
								}
								else{
									$error = 5;
								}
								break;

							case 'email':
								if($this->model->validaremail($value)){
									$this->model->setemail($value);
								}
								else{
									$error = 6;
								}
								break;

						}
					}
					switch ($error) {
						case 0:
							if($this->model->guardarusuario()){
								echo 'datos guardados';
							}
							else{
								echo 'hubo un error revise los datos';
							}
							break;
						case 1:
							echo "usuario ya utilizado escriba otro";
							break;
						case 2:
							echo "contraseñas diferentes";
							break;
						case 3:
							echo "nombre invalido";
							break;
						case 4:
							echo "apellido invalido";
							break;
						case 5:
							echo "telefono muy largo";
							break;
						case 6:
							echo "email incorrecto escriba uno valido";
							break;
					}
				}
			}
		}

		public function mishoteles()
		{
			if (!isset($_SESSION['session'])) {
				header("Location: index.php?controller=inicio&action=inicio");
				exit();
			}
			$this->session = $_SESSION['session'];
			$user = $this->session;

			$this->hotel = new HotelModel();
			$hoteles = $this->hotel->getMyHotel($user->id);

			require_once('vistas/header.php');
			require_once('vistas/usuario/menu.php');
			require_once('vistas/usuario/mishoteles.php');
			require_once('vistas/footer.php');
			
			
		}

		public function hotel()
		{
			if (!isset($_SESSION['session'])) {
				header("Location: index.php?controller=inicio&action=inicio");
				exit();
			}
			$this->session = $_SESSION['session'];
			$user = $this->session;

			require_once('vistas/header.php');
			require_once('vistas/usuario/menu.php');
			require_once('vistas/usuario/hotel.php');
			require_once('vistas/footer.php');

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