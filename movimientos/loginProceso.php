<?php
	session_start();
	include_once '../conexion/conexion.php';
	$usuario = $_POST['txtUsu'];
	$contrasena = $_POST['txtPass'];
	$sentencia = $bd->prepare('select * from user where desc_user = ? and pass = ?;');
	$sentencia->execute([$usuario, $contrasena]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);

//	print_r($datos);



	$sql= $bd->prepare('select tip_user from user where desc_user = ? and pass = ?;');
	$sql->execute([$usuario, $contrasena]);
	$res=$sql->fetchColumn();

//	print_r($res);


	if ($datos == FALSE) {
		echo '<script type="text/javascript">
		alert("Usuario o contraseña inválidos");
		window.location.href="./index.php";
		</script>';
	} elseif ($sentencia->rowCount() == 1){
		if ($res==1){
			$_SESSION['nombre'] = $datos->desc_user;
			header('Location: ../administrador/index.php');
		}elseif($res==2){
			$_SESSION['nombre'] = $datos->desc_user;
			header('Location: ../vendedor/index.php');
		}elseif($res==3){
			$_SESSION['nombre'] = $datos->desc_user;
			header('Location: ../comprador/index.php');
		}
	}
?>
