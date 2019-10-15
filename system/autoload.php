<?php 
spl_autoload_register(function($clase)
{
	if (is_file(CORE."$clase.php")) {
		require_once CORE."$clase.php";
	}
	else{
		if (preg_match("/App\b/i", $clase)) {
		}
		else{
			if(preg_match("/Controller\b/i", $clase)){
				$controlador = substr($clase ,0, - strlen("Controller"));
				require_once CONTROLLERS .$controlador."_controller.php";
			}
			else{
				if(preg_match("/Model\b/i", $clase)){
					$modelo = substr($clase ,0, - strlen("Model"));
					require_once MODELS . $modelo . "_model.php";
				}
				else{
					echo "No encontro la clase $clase";
				}
			}
		}
			
	}
});
 ?>