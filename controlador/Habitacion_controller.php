<?php 

/**
* 
*/
class HabitacionController extends Controller
{
	public $session;
	function __construct()
	{
		$this->model = new HabitacionModel();
		$this->session = new Session();
	}

	public function inicio()
	{
		if(isset($_POST)){
			if (isset($_POST['tipohabitacion']) && isset($_POST['tipocama'])  && isset($_POST['numcama']) && isset($_POST['precio'])) {
				$error = array('tipo' => 0, 'lugar' => 0);

				foreach ($_POST as $key => $value) {
					switch ($key) {
						case 'tipohabitacion':
							for ($i=0; $i < count($value) ; $i++) { 
								if ($this->model->validartipo_habitacion($value[$i])) {
									$this->model->settipo_habitacion($value[$i]);
								}
								else{
									$error = array('tipo' => 1, 'lugar' => $i+1);
								}
							}
							break;
						case 'tipocama':
							for ($i=0; $i < count($value) ; $i++) { 
								if ($this->model->validartipo_cama($value[$i])) {
									$this->model->settipo_cama($value[$i]);
								}else{
									$error = array('tipo' => 2, 'lugar' => $i+1);
								}
							}
							break;
						case 'numcama':
							for ($i=0; $i < count($value) ; $i++) { 
								if ($this->model->validarnum_cama($value[$i])) {
									$this->model->setnum_cama($value[$i]);
								}else{
									$error = array('tipo' => 3, 'lugar' => $i+1);
								}
							}
							break;
						case 'precio':
							for ($i=0; $i < count($value) ; $i++) { 
								if ($this->model->validarprecio($value[$i])) {
									$this->model->setprecio($value[$i]);
								}else{
									$error = array('tipo' => 4, 'lugar' => $i+1);
								}
							}
							break;
					}
				}

				switch ($error['tipo']) {
					case 0:
						$this->session->addtosession('habitacion', $this->model);
						echo "true";
						break;
					case 1:
						echo "verifique el tipo de habitacion en la habitacion No.{$error['lugar']}";
						break;
					case 2:
						echo "verifique el tipo de cama en la habitacion No.{$error['lugar']}";
						break;
					case 3:
						echo "verifique el numero de camas en la habitacion No.{$error['lugar']}";
						break;
					case 4:
						echo "verifique precio en la habitacion No.{$error['lugar']}";
						break;
				}
			}
		}
	}

	public function imagen()
	{
		$actual = $this->session->getSession();
		$this->model = $actual['habitacion'];
		if ($_FILES != '') {
			if ($this->model->validarimagen($_FILES)) {
				$this->model->setimagen($_FILES);
				$this->session->addtosession('habitacion',$this->model);
				echo 'true';
			}
			
		}
		else{
			echo 'false';
		}
	}

	public function error()
	{
		# code...
	}
}
 ?>