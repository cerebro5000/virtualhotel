<?php 
/**
* 
*/
class HotelController extends Controller
{
	public $habitacion;
	public $session;

	function __construct()
	{
		$this->model = new HotelModel();
		$this->habitacion = new HabitacionModel();
		$this->session = new Session();
	}

	public function back()
	{
		
		if (isset($_POST)) {
			switch ($_POST['step']) {
				case 1:
					$this->session->unsetsesion('hotel');
					break;
				case 2:
					$this->session->unsetsesion('habitacion');
					break;
				case 3:
					$this->habitacion = $this->session->getsession()['habitacion'];
					$this->habitacion->imagen = null;
					$this->session->addtosession('habitacion', $this->habitacion);
				break;
			}
			echo 'true';
		}else{
			echo 'false';
		}
	}
	
	public function inicio()
	{
		$this->session = new Session();
		if (isset($_POST)) {
			$error = 0;
			foreach ($_POST as $key => $value) {
				switch ($key) {
					case 'nombre':
						if ($this->model->validarnombre($value)) {
							$this->model->setnombre($value);;
						}
						else
							$error = 2;
						
						break;
					case 'direccion':
						if ($this->model->validardireccion($value)) {
							$this->model->setdireccion($value);
						}
						else
							$error = 3;
						
						break;
					case 'colonia':
						if ($this->model->validarcolonia($value)) {
							$this->model->setcolonia($value);
						}
						else
							$error = 4;
						
						break;
					case 'cp':
						if ($this->model->validarcp($value)) {
							$this->model->setcp($value);
						}
						else
							$error = 5;
						
						break;
					case 'telefono':
						if ($this->model->validartelefono($value)) {
							$this->model->settelefono($value);
						}
						else
							$error = 6;
						
						break;
					case 'email':
						if ($this->model->validaremail($value)) {
							$this->model->setemail($value);
						}
						else
							$error = 7;
						
						break;
					case 'servicios':
						if ($this->model->validarservicios($value)) {
							$this->model->setservicios($value);
						}
						else
							$error = 8;
						
						break;
					case 'estado':
						if ($this->model->validarestado($value)) {
							$this->model->setestado($value);
						}
						else
							$error = 9;
						
						break;
				}
			}
			if ($this->model->validarimagen($_FILES)) {
				$this->model->setimagen($_FILES);
			}
			else
				$error = 1;

			switch ($error) {
				case 0:
					$this->session->addtosession('hotel', $this->model);
					echo 'true';
					break;
				case 1:
					echo "error imagen demasiado grande";
					break;
				case 2:
					echo 'error en nombre';
					break;
				case 3:
					echo 'error en direccion';
					break;
				case 4:
					echo 'error en colonia';
					break;
				case 5:
					echo 'error en codigo postal';
					break;
				case 6:
					echo 'error en telefono';
					break;
				case 7:
					echo 'error en correo electronico';
					break;
				case 8:
					echo 'error en servicios';
					break;
				case 9:
					echo "error en el estado";
					break;
				default:
					echo "un error ha sido causado";
					break;
			}
		}
	}

	public function publicar()
	{
		$session = $this->session->getsession();
		$this->model = $session['hotel'];
		$this->habitacion = $session['habitacion'];
		$errorhot = $this->model->guardarhotel();
		$errorhab = $this->habitacion->guardarHabitaciones($this->model->getid());
		if ($errorhot !== 0 && $errorhab !== 0) {
			echo json_encode(array('hotel' => $errorhot, 'habitacion' => $errorhab));
		}
		else{
			$this->session->unsetsesion('hotel');
			$this->session->unsetsesion('habitacion');
			echo 'true';
		}
		


		
	}
	public function error(){
		echo "un error acaba de ocurrir";
	}
}
 ?>