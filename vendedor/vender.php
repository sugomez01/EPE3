<?php

session_start();
if (!isset($_SESSION['nombre'])) {
	header('Location: ./index.php');
} elseif (isset($_SESSION['nombre'])) {
	include_once '../conexion/conexion.php';
	$desc_empresa = $_POST['nombre'];
	$desc_servicio = $_POST['desc'];
	$desc_ciudad = $_POST['ciudad'];
	$desc_fono = $_POST['fono'];
	$desc_email = $_POST['mail'];
	$desc_pag_url = $_POST['web'];
	$fecha_ini = $_POST['FechaInicio'];
	$fecha_fin = $_POST['FechaFin'];
	$hora_ini = $_POST['HoraInicio'];
	$hora_fin = $_POST['HoraFin'];
	$desc_mapa = $_POST['mapa'];
	$stock = $_POST['qty'];
	$valor = $_POST['valor'];
	$zona = $_POST['zona'];
	$tip_ser = $_POST['tip_ser'];
	$tip_user = $_SESSION['nombre'];

	$sql = $bd->query("insert into servicio(desc_empresa
									   ,desc_ciudad
									   ,desc_servicio
									   ,desc_fono
									   ,desc_email
									   ,desc_pag_url
									   ,fecha_ini
									   ,fecha_fin
									   ,hora_ini
									   ,hora_fin
									   ,desc_mapa
									   ,stock
									   ,valor
									   ,zona
									   ,tip_ser
									   ,id_user) 
							   values ('$desc_empresa'
										 ,'$desc_ciudad'
										 ,'$desc_servicio'
										 ,'$desc_fono'
										 ,'$desc_email'
										 ,'$desc_pag_url'
										 ,'$fecha_ini'
										 ,'$fecha_fin'
										 ,'$hora_ini'
										 ,'$hora_fin'
										 ,'$desc_mapa'
										 ,'$stock'
										 ,'$valor'
										 ,'$zona'
										 ,'$tip_ser'
										 ,'$tip_user')");

	if ($sql == FALSE) {
		echo '<script type="text/javascript">
				alert("Error al ingresar el servicio, favor contacte a un Administrador");
				window.location.href="./index.php";
				</script>';
	} else{
		echo '<script type="text/javascript">
				alert("Servicio ingresado exitosamente!");
				window.location.href="./index.php";
				</script>';
			}

} else {
	echo "Error en el sistema";
}
