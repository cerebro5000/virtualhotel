<?php 
/**
* clase base que tiene los controladores de geenrar las vistas
*/
class View
{
	protected $template;
	protected $controllers_name;
	protected $params;
	
	function __construct($controllers_name = '', $params = array())
	{
		$this->controllers_name = $controllers_name;
		$this->params = $params;
		$this->render();
	}

	protected function render()
	{
		if (class_exists($this->controllers_name)) {
			$file_name = str_replace('Controller', '', $this->controllers_name);
			$this->template = $this->getContentTemplate($file_name);
			echo $this->template;
		}
		else{
			throw new Exception("Error no existe ($this->controllers_name)");
			
		}
	}
	protected function getContentTemplate($file_name)
	{
		$file_path = VIEWS . "$file_name/$file_name.php";
		if (is_file($file_path)) {
			extract($this->params);
			ob_start();
			require($file_path);
			$template = ob_get_contents();
			ob_end_clean();
			return $template;
		}
		else{
			throw new Exception("No existe $file_path");
			
		}
	}
}
 ?>