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
	public $contraseña;
	public $nombre;
	public $apellido;
	public $telefono;
	public $email;

	public function setusuario($usuario)
	{
		$this->usuario = $usuario;
	}

	public function setcontraseña($contraseña)
	{
		$this->contraseña = $contraseña;
	}

	public function setnombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function setapellido($apellido)
	{
		$this->apellido = $apellido;
	}

	public function settelefono($telefono)
	{
		$this->telefono = $telefono;
	}

	public function setemail($email)
	{
		$this->email = $email;
	}

	public function getusuario()
	{
		return $this->usuario;
	}

	public function getcontraseña()
	{
		return $this->contraseña;
	}

	public function getnombre()
	{
		return $this->nombre;
	}

	public function getapellido()
	{
		return $this->apellido;
	}

	public function gettelefono()
	{
		return $this->telefono;
	}

	public function getemail()
	{
		return $this->email;
	}

	public function guardarUsuario()
	{
		$conexion = new Conexion();
		$mysqli = $conexion->conectar();
		$sql3 = "SELECT id_usuario+1 as id from usuarios order by id_usuario desc limit 1";
		if($result = $mysqli->query($sql3)){
			$row = $result->fetch_assoc();
			$id = $row['id'];
			$sql1 = "INSERT INTO usuarios(id_usuario, usuario, contrasena) VALUES ({$id},'{$this->getusuario()}','{$this->getcontraseña()}')";
			if($result = $mysqli->query($sql1)){
				$sql2 = "INSERT INTO datos_personales(id_usuario, id_pais, nombres, apellidos, email, telefono, habilitado, fecha_creacion) VALUES ({$id},1,'{$this->getnombre()}','{$this->getapellido()}','{$this->getemail()}',{$this->gettelefono()},1,NOW())";
				if($result = $mysqli->query($sql2)){
					return true;
				}
			}
		}
			
		
		return false;
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
				$conexion->desconectar($mysqli);
				return false;
			}
		}else{
			$conexion->desconectar($mysqli);
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

	public function validarusuario($usuario)
	{
		$conexion = new Conexion();
		$mysqli = $conexion->conectar();
		$sql = "SELECT * from usuarios where usuario = '{$usuario}'";
		$result = $mysqli->query($sql);
		if($result->num_rows === 0){
			return true;
		}
		return false;
	}

	public function validarcontrasena($contrasena, $repitecontraseña)
	{

		if($contrasena === $repitecontraseña){
			return true;
		}
		return false;
	}

	public function validarnombre($nombre)
	{
		if(strlen($nombre) < 50){
			return true;
		}
		return false;
	}

	public function validarapellido($apellido)
	{
		if(strlen($apellido) < 50){
			return true;
		}
		return false;
	}

	public function validartelefono($telefono)
	{
		if (is_numeric($telefono)) {
			if(strlen($telefono) < 20){
				return true;
			}
		}
		return false;
	}

	public function validaremail($email)
	{
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			return true;
		}
		return false;
	}
}
 ?>