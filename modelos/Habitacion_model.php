<?php 
/**
* 
*/
class HabitacionModel extends Model
{
	public $tipo_habitacion = array();
	public $tipo_cama = array();
	public $num_cama = array();
	public $precio = array();
	public $imagen = array();

	function __construct()
	{
	}
	public $servicios;

	public function getserviciosTotales()
	{
		$conecion = new Conexion();
		$mysqli = $conecion->conectar();
		$result = $mysqli->query("SELECT * from servicios where disponibilidad_hab = 1");
		$datos = array();
		while($row = $result->fetch_assoc()){
			$datos[] = ['id_servicios' =>$row['id_servicios'], 'nombre' => $row['nombre']];
		}
		return $datos;
	}

	public function gettipohabitaciontotal()
	{
		$coneccion = new Conexion();
		$mysqli = $coneccion->conectar();
		$result = $mysqli->query("SELECT * from tipo_habitacion");
		$datos = array();
		while($row = $result->fetch_assoc()){
			$datos[] = ['id_tipo' =>$row['id_tipo'], 'descripcion' => $row['descripcion']];
		}
		return $datos;
	}

	public function gettipo_habitacion()
	{
		return $this->tipo_habitacion;
	}

	public function gettipo_cama()
	{
		return $this->tipo_cama;
	}
	public function getprecio()
	{
		return $this->precio;
	}
	public function getnum_cama()
	{
		return $this->num_cama;
	}
	public function getimagen()
	{
		return $this->imagen;
	}
	
	public function settipo_habitacion($tipo_habitacion)
	{
		$this->tipo_habitacion[] = $tipo_habitacion;
	}

	public function settipo_cama($tipo_cama)
	{
		$this->tipo_cama[] = $tipo_cama;
	}
	public function setprecio($precio)
	{
		$this->precio[] = $precio;
	}
	public function setnum_cama($num_cama)
	{
		$this->num_cama[] = $num_cama;
	}
	public function setimagen($imagen)
	{
		$this->imagen = $imagen;
		$this->guardarimagen();
	}

	public function guardarimagen()
	{
		foreach ($this->imagen as $key => $value) {
			$ruta = UPLOADHABI . $this->imagen[$key]['name'];
			move_uploaded_file($this->imagen[$key]['tmp_name'], $ruta);
		}
		
	}

	public function validartipo_habitacion($tipo_habitacion)
	{
		if ($tipo_habitacion !== '') {
			if (is_numeric($tipo_habitacion)) {
				return true;
			}
		}
		return false;
	}

	public function validartipo_cama($tipo_cama)
	{
		if ($tipo_cama !== '') {
			if (is_numeric($tipo_cama)) {
				return true;
			}
		}
		return false;
	}
	public function validarprecio($precio)
	{
		if ($precio !== '') {
			if (is_numeric($precio)) {
				return true;
			}
			if (is_real($precio)) {
				return true;
			}
		}
		return false;
	}
	public function validarnum_cama($num_cama)
	{
		if ($num_cama !== '') {
			if (is_numeric($num_cama)) {
				return true;
			}
		}
		return false;
	}
	public function validarimagen($imagen)
	{
		$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
		$limite_mb = 10;
		$error = 0 ;

		foreach ($imagen as $key => $value) {
			if (!in_array($imagen[$key]['type'], $permitidos) && !($imagen[$key]['size'] <= (($limite_mb * 1024) * 1024))){
				$error = 1;
			}
		}
		if($error == 0){
			return true;
		}
		return false;
	}

	
	public function guardarHabitaciones($id)
	{
		$conexion = new Conexion();
		$mysqli = $conexion->conectar();
		$error = 0;
		for ($i=0; $i < count($this->gettipo_habitacion()) ; $i++) { 
			$sql = "INSERT INTO habitaciones (id_hotel, tipo_habitacion, num_cama, precio) VALUES ('{$id}', '{$this->tipo_habitacion[$i]}', '{$this->num_cama[$i]}', '{$this->precio[$i]}')";
			if ($mysqli->query($sql)) {
				$idhab = $mysqli->insert_id;
			}
			else{
				$error = 3;
			}
		}
		foreach ($this->imagen as $key => $value) {
			$sqlimagen = "INSERT INTO imagenes_hotel (id_habitacion , ruta_imagen) values ('{$idhab}', '".UPLOADHABI."{$value['name']}')";
			if ($mysqli->query($sqlimagen)) {
			}else{
				$error = 4;
			}
		}
		return $error;
	}
}
 ?>