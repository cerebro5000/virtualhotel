<?php 

/**
* 
*/
class HabitacionController extends Controller
{
	
	function __construct()
	{
		$this->model = new HabitacionModel();
	}

	public function inicio()
	{
		if(isset($_POST)){
			if (isset($tipohabitacion) && isset($tipocama)  && isset($numcama) && isset($precio)) {
				$error = 0;
				foreach ($_POST as $key => $value) {
					switch ($key) {
						case 'tipohabitacion':
							if ($this->model->validartipohabitacion()) {
								$this->model->settipohabitacion();
							}
							else{
								error = 1;
							}
							break;
						case 'tipocama':
							if ($this->model->validartipocama()) {
								$this->model->settipocama();
							}else{
								$error = 2;
							}
							break;
						case 'numcama':
							if ($this->model->validarnumcama()) {
								$this->model->setnumcama();
							}else{
								$error = 3;
							}
							break;
						case 'precio':
							if ($this->model->validarprecio()) {
								$this->model->setprecio();
							}else{
								$error = 4;
							}
							break;
					}
				}
				if (isset($_POST['image'])) {
					$this->model->setimage();
				}
				
				switch ($error) {
					case 1:
						echo "verifique el tipo de habitacion";
						break;
					case 2:
						echo "verifique el tipo de cama";
						break;
					case 3:
						echo "verifique el numero de camas";
						break;
					case 4:
						echo "verifique precio";
						break;
				}
			}
		}
	}

	public function error()
	{
		# code...
	}
}
 ?>