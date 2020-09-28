<?php 

$para = 'CORREO ELECTRONICO, OTRO CORREO TAMBIEN SE PUEDE';

$asunto = "Mensaje desde DOMINIO";
$mailheader = "From: ".$_POST["email"]."\r\n";
$mailheader .= "Reply-to: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=utf-8\r\n;
$MESSAGE_BODY = "Nombre: ".$_POST["name"]."\n";
$MESSAGE_BODY .= "\n<br>Nombre: ".$_POST["email"]."\n";
$MESSAGE_BODY .= "\n<br>Mensaje: ".n12br$_POST["message"]."\n";

mail($para. $asunto. $MESSAGE_BODY, $mailheader) or die("Error al enviar email");

header('Location: http//METERDOMINIO')






 ?>