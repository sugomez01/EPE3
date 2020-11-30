<?php
	session_start();
	include_once '../conexion/conexion.php';
	$nombre = $_POST['txtNom'];
	$apellido = $_POST['txtApe'];
	$correo = $_POST['txtMail'];
	$telefono = $_POST['txtFono'];
	$mensaje = $_POST['mensaje'];

error_reporting(0);

$header = 'From: ' . $correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ", ".$apellido." \r\n";
$mensaje .= "Su e-mail es: " . $correo . " \r\n";
$mensaje .= "Teléfono de contacto: " . $telefono . " \r\n";
$mensaje .="Mensaje: ". $mensaje . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'contacto@pruebaepe.info';
$asunto = 'Contacto - Turismo S.A.';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo '<script type="text/javascript">
				alert("Mensaje enviado exitosamente!");
				window.location.href="../index.php";
				</script>';

?>




