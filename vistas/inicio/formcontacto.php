<?php
	$errores = '';
	$enviar = '';
	if(isset($_POST['submit'])){
		nombre=$POST['nombre'];
		tel=$POST['tel'];
		correo=$POST['mail'];
		comentario=$POST['comentario'];
		
		if(!empty($comentario)){
			$nombre = trim($nombre);
			$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
		} else{
			$errores .= 'Por favor ingresa un nombre <br />';
		}
	}
	require 'contacto.php';
?>