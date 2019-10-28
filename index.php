<?php
require_once "system/config.php";
require_once "system/autoload.php";

//si la session se encuentra por que exista en el servidor iniciara automaticamente la
//sesion sino iniciara en el inicio de la web
if(isset($_SESSION)){
	$controller = 'usuario';
	$action = 'inicio';
}
else{
	// la variable controller guarda el nombre del controlador y action guarda la acción por ejemplo registrar 
	//si la variable controller y action son pasadas por la url desde layout.php entran en el if
	if (isset($_GET['controller']) && isset($_GET['action'])) {
		$controller=$_GET['controller'];
		$action=$_GET['action'];
	} else {
		$controller='inicio';
		$action='inicio';
	}	
}
require_once('routes.php');
?>
