<?php 
/**
* 
*/
class HabitacionModel extends Model
{

	public $tipo_habitacion;
	public $tipo_cama;
	public $num_cama;
	public $precio;
	public $imagen;

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

	public function gettipo_habitacion($tipo_habitacion)
	{
		return $this->tipo_habitacion;
	}

	public function gettipo_cama($tipo_cama)
	{
		return $this->tipo_cama;
	}
	public function getprecio($precio)
	{
		return $this->precio;
	}
	public function getnum_cama($num_cama)
	{
		return $this->num_cama;
	}
	public function getimagen($imagen)
	{
		return $this->imagen;
	}
	
}
 ?>