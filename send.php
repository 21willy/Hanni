<?php

error_reporting(0);
$nombre = $_POST['nombre'];
$correo_electronico= $_POST['email'];
$problema = $_POST['problema'];
$comentario=$_POST['comentario'];


$header = 'From: ' . $correo_electronico ."\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $correo_electronico . " \r\n";
$mensaje .= "sexo" . $_POST['GrupoOpciones1'] . " \r\n";
$mensaje .= "problema " . $problema . " \r\n";
$mensaje .= "¿Cual es tu problema?" . $comentario . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'Hanni.company@gmail.com';
$asunto = 'Comentario Hanni';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'mensaje enviado correctamente';

?>