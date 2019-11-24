<?php 
//variable uri
define('URI', $_SERVER['REQUEST_URI']);

//vcariables de configuracion de base de datos
define('HOST', "localhost");
define('DB', 'virtualhotel');
define('USER', 'root');
define('PASSWORD', '');
define('CHARSET', 'UTF-8');

//variables de rutas de clases
define('CORE', 'system/');
define('CONTROLLERS', 'controlador/');
define('MODELS', 'modelos/');
define('VIEWS', 'vistas/');
define('ROOT', $_SERVER['DOCUMENT_ROOT']);


//ruta de librerias
define('LIBS', 'lib/');

//ruta de archivos subidos
define('UPLOAD', 'uploads/');
 ?>