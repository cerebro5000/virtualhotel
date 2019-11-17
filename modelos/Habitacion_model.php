<?php 
/**
* 
*/
class HabitacionModel extends Model
{
	public $conecion;
	function __construct()
	{
		$this->conecion = new Conexion();
	}
	public $servicios;

	public function getserviciosTotales()
	{
		$mysqli = $this->conecion->conectar();
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
}
 ?>