<?php 
/**
* 
*/
abstract class Controller
{
	protected $view;
	protected $model;
	
	public function __construct(){
	}

	abstract public function inicio();
	abstract public function error();
	
	function cargarmodelo($model){
		$url = MODELS . $model . 'model.php';
		if (file_exists($url)) {
			require_once $url;
			$nombremodelo = $model."Model";
			$this->model =new $nombremodelo();
		}
	}
}
 ?>