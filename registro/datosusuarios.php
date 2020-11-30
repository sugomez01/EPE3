<?php
header('Content-Type: application/json');

require("../conexion/conexion2.php");

$conexion = retornarConexion();

switch ($_GET['accion']) {
  case 'agregar':
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombrenuevo']);
    $clave = mysqli_real_escape_string($conexion, $_POST['clave1']);
    $mail = mysqli_real_escape_string($conexion, $_POST['mail']);
    $fono = mysqli_real_escape_string($conexion, $_POST['fono']);

    $respuesta = mysqli_query($conexion, "insert into user(desc_user,pass,desc_mail,desc_fono,tip_user) values ('$nombre','$clave','$mail','$fono',3)");
    echo json_encode($respuesta);
    break;
  case 'existe':
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombrenuevo']);
    $respuesta = mysqli_query($conexion, "select desc_user from user where desc_user='$nombre'");
    $cantidad = mysqli_num_rows($respuesta);
    if ($cantidad == 1)
      echo '{"resultado":"repetido"}';
    else
      echo '{"resultado":"norepetido"}';
    break;
}

?>