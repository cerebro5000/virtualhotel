<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['tel'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];

$destinatario = "nancy.belsua@gmail.com";
$asunto = "Contacto desde virtual hotel";

$carta = "De: $nombre \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Comentario: $comentario";


?>