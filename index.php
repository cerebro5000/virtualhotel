<?php session_start();
	// la variable controller guarda el nombre del controlador y action guarda la acción por ejemplo registrar 
	//si la variable controller y action son pasadas por la url desde layout.php entran en el if
	if (isset($_GET['controller']) && isset($_GET['action'])) {
		$controller=$_GET['controller'];
		$action=$_GET['action'];
	} else {
		$controller='inicio';
		$action='inicio';
	}	
	//carga la vista layout.php
	//require_once('vistas/layout.php');
	require_once('routes.php');

/*if(!empty($_POST["section"]) or $_POST["section"] === "inicio"){
echo "hola";
}
require_once "header.php";
require_once "footer.php";
*/
 ?>
