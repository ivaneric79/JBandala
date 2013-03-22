<!DOCTYPE HTML>
<html  lang="en">
<head>   
	<meta name="viewport" content="width=device-width,minimum-scale=1.0, maximum-scale=1.0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 
<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$empresa = $_POST['telefono'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",
 su numero telefónico " . $empresa . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'direccion@jbandala.com';
$asunto = 'Contacto de JBANDALA';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>
</head>
<body bgcolor="#000000">
<a href="http://www.jbandala.com"><img src="logo2.png" width="100%"></a>
</body>
</html>