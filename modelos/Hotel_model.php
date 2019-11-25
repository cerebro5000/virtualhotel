<?php 
/**
* 
*/
class HotelModel extends Model
{
	public function __construct()
	{
	}

	public $nombre;
	public $direccion;
	public $colonia;
	public $cp;
	public $email;
	public $telefono;
	public $estado;
	public $imagen;
	public $servicios;

	public function validarestado($estado)
	{
		if ($estado !== '') {
			if (is_numeric($estado)) {
				return true;
			}
		}
		return false;
	}

	public function validarcp($cp)
	{
		if ($cp !== '') {
			if (strlen($cp) <= 5) {
				if (is_numeric($cp)) {
					return true;
				}
			}
		}
		return false;
	}
	public function validarnombre($nombre)
	{
		if ($nombre !== '') {
			if (is_string($nombre)) {
				if (strlen($nombre) < 100) {
					return true;
				}
			}
		}
		return false;
	}
	public function validarservicios($value)
	{
		if ($value != '') {
			if (is_numeric($value)) {
				return true;
			}
			
		}
		return false;
	}
	public function validardireccion($direccion)
	{
		if ($direccion !== '') {
			if (is_string($direccion)) {
				if (preg_match("/[0-9]+/", $direccion)) {
					return true;
				}
			}
		}
		return false;
	}

	public function validarcolonia($colonia)
	{
		if ($colonia !== '') {
			if (is_string($colonia)) {
				return true;
			}
		}
		return false;
	}

	public function validartelefono($telefono)
	{
		if ($telefono !== '') {
			if (strlen($telefono) <= 20) {
				if (is_numeric($telefono)) {
					return true;
				}
			}
		}
		return false;
	}

	public function validaremail($email)
	{
		return filter_var($email, FILTER_VALIDATE_EMAIL);
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

	public function getserviciosTotales()
	{
		$coneccion = new Conexion();
		$mysqli = $coneccion->conectar();
		$result = $mysqli->query("SELECT * from servicios where disponibilidad_hot = 1");
		$datos = array();
		while($row = $result->fetch_assoc()){
			$datos[] = ['id_servicio' =>$row['id_servicio'], 'nombre' => $row['nombre']];
		}
		$mysqli->close();
		return $datos;
	}

	public function getestadostotales()
	{
		$coneccion = new Conexion();
		$mysqli = $coneccion->conectar();
		$result = $mysqli->query("SELECT * from estado");
		$datos = array();
		while($row = $result->fetch_assoc()){
			$datos[] = ['id_estado' =>$row['id_estado'], 'nombre' => $row['nombre']];
		}
		$mysqli->close();
		return $datos;
	}

	public function getnombre()
	{
		return $this->nombre;
	}
	public function getdireccion()
	{
		return $this->direccion;
	}

	public function getcolonia()
	{
		return $this->colonia;
	}
	public function getcp()
	{
		return $this->cp;
	}
	public function getemail()
	{
		return $this->email;
	}
	public function gettelefono()
	{
		return $this->telefono;
	}
	public function getestado()
	{
		return $this->estado;
	}
	public function getservicios()
	{
		return $this->servicios;
	}

	public function setnombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function setdireccion($direccion)
	{
		$this->direccion = $direccion;
	}

	public function setcolonia($colonia)
	{
		$this->colonia = $colonia;
	}
	public function setcp($cp)
	{
		$this->cp = $cp;
	}
	public function setemail($email)
	{
		$this->email = $email;
	}
	public function settelefono($telefono)
	{
		$this->telefono = $telefono;
	}
	public function setestado($estado)
	{
		$this->estado = $estado;
	}
	public function setservicios($servicios)
	{
		if (empty($servicios)) {
			$this->servicios = $servicios;
		}
		else{
			$this->servicios[] = $servicios;
		}
	}

	public function getimage()
	{
		return $this->imagen;
	}

	public function setimagen($imagen)
	{
		$this->imagen = $imagen;
		$this->guardarimagen();
		
	}

	public function guardarimagen()
	{
		foreach ($this->imagen as $key => $value) {
			$ruta = UPLOADHOTEL . $this->imagen[$key]['name'];
			move_uploaded_file($this->imagen[$key]['tmp_name'], $ruta);
		}
		
	}

	public function getid()
	{
		$conexion = new Conexion();
		$mysqli = $conexion->conectar();
		$result = $mysqli->query("SELECT * FROM hotel where nombre = '{$this->getnombre()}' and direccion = '{$this->getdireccion()}'");
		$row = $result->fetch_assoc();
		$mysqli->close();
		return $row['id_hotel'];
	}

	public function guardarhotel()
	{
		$conexion = new Conexion();
		$mysqli = $conexion->conectar();
		$sql = "INSERT INTO hotel (nombre, direccion, email, telefono, id_estado) VALUES ('{$this->getnombre()}', '{$this->getdireccion()}', '{$this->getemail()}', '{$this->gettelefono()}', '{$this->getestado()}')";
		if ($mysqli->query($sql)) {
			$id = $this->getid();
			$error = 0;
			foreach ($this->getservicios() as $key => $value) {
				$sqlservicio = "INSERT INTO hotel_servicios_rel (id_hotel, id_servicio) values ('{$id}','{$value}')";
				if ($mysqli->query($sqlservicio)) {
				}else{
					$error = 1;
				}
			}
			foreach ($this->imagen as $key => $value) {
				$sqlimagen = "INSERT INTO imagenes_hotel ( id_hotel, ruta_imagen) values ('{$id}','".UPLOADHOTEL."{$value['name']}')";
				if ($mysqli->query($sqlimagen)) {
				}else{
					$error = 2;
				}
			}
		}
		$mysqli->close();
		return $error;

	}
}
 ?>