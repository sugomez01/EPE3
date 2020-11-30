<?php

include "../conexion/conexion.php";

$serv = $_POST['id_servicio'];
$user = $_POST['user_compra'];
$valor = $_POST['valor'];

//aqui se agrega el servicio a filtrar por base de datos
$sentencia0 = $bd->query("update servicio set stock=stock-1 where id_ser='$serv';");
$sentencia = $bd->query("INSERT INTO compra values ('',CURDATE(),1,'$valor','$user','$serv')");
// insert into compra values ("",getday(),1,)
$date = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($date);


if ($date == FALSE) {
    echo '<script type="text/javascript">
            alert("Compra realizada exitosamente!");
            window.location.href="./index.php";
            </script>';
} 
else{

    echo '<script type="text/javascript">
    alert("Error, no se ha podido procesar el pago.");
    window.location.href="./compra.php";
    </script>';

        }
?>
