<?php
class MihotelModel extends Model{
	public $nombre;
	public $direccion;
	public $colonia;
	public $cp;
	public $email;
	public $telefono;
	public $estado;
	public $imagen;
	public $servicios;
	
	public function gethoteles(){
		$coneccion = new Conexion();
		$mysqli = $coneccion->conectar();
		$result = $mysqli->query("SELECT *from hotel");
		$datos = array();
		while($row = $result->fetch_assoc()){
			$datos[] = ['id_hotel' =>$row['id_hotel'], 
			'nombre' =>$row['nombre'], 'direccion' =>$row ['direccion'],
			'email' =>$row ['email'], 'telefono' =>$row ['telefono']];
		}
		$mysqli->close();
		return $datos;
	}
}
?>