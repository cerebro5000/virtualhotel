<?php 
/**
* 
*/
class UsuarioModel
{
	
	public function __construct(){
	}
	public $id;
	public $usuario;
	public $nombre;
	public $apellido;
	public $telefono;
	public $email;
	

	public function guardarUsuario($value='')
	{
		# code...
	}

	public function recuperarUsuario($usuario, $contrasena)
	{
		$conexion = new Conexion();
		$mysqli = $conexion->conectar();

		if($result = $mysqli->query("SELECT * FROM usuarios where usuario = '{$usuario}' and contrasena = '{$contrasena}'")){
			$row_cnt = $result->num_rows;
			if($row_cnt === 1){
				while($fila = $result->fetch_assoc()){
					$this->id = $fila['id_usuario'];
					$this->usuario = $fila['usuario'];
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
		
	
		$result = $mysqli->query("SELECT * FROM datos_personales where id_usuario = {$this->id} and habilitado = 1");
		$row_cnt = $result->num_rows;
		if($row_cnt === 1){
			while($fila = $result->fetch_assoc()){
				$this->nombre = $fila['nombres'];
				$this->apellido = $fila['apellidos'];
				$this->email = $fila['email'];
				$this->telefono = $fila['telefono'];
			}
		}

		$conexion->desconectar($mysqli);
		return true;
		

	}
}
 ?>