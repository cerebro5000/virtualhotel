<?php 
/**
* 
*/
class Controller
{
	
	function __construct(argument)
	{
		# code...
	}
	function cargarmodelo($model){
		$url = "models/" . $model . 'model.php';
		if (file_exists($url)) {
			require_once $url;
			$nombremodelo = $model."Model";
			$this->model =new $nombremodelo();
		}

	}
}
 ?>