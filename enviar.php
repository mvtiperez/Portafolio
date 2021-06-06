<?php
$nombre= $_POST['nombre'];
$email= $_POST['mail'];
$mensaje= $_POST['mensaje'];

//Datos para el correo
$destinarario= "mattiperez21@gmai.com";
$asunto= "Contacto desde mi WEB"

$carta= "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje \n";

// Enviando Mensaje
mail($destinarario, $asunto, $carta);

?>