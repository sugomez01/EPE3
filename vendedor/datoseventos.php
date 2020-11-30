<?php

header('Content-Type: application/json');

session_start();

require("../conexion/conexion2.php");

$conexion = retornarConexion();

switch ($_GET['accion']) {
    case 'listar':
        $datos = mysqli_query($conexion, "select desc_empresa as Empresa,
                                                desc_ciudad as Ciudad,
                                                desc_servicio as Descripcion_servicio,
                                                s.desc_fono as Telefono,
                                                desc_email as Correo,
                                                desc_pag_url as Pagina_web,
                                                fecha_ini as Fecha_inicio,
                                                fecha_fin as Fecha_fin,
                                                hora_ini as Hora_inicio,
                                                hora_fin as Hora_fin,
                                                desc_mapa as URL_mapa,
                                                stock as Stock,
                                                valor as Valor,
                                                zona as ID_zona,
                                                tip_ser as IDTipo_servicio,
                                                s.id_user as Usuario
                                                from servicio s
                                                inner join user u on u.id_user=s.id_user
                                                where u.desc_user='$_SESSION[usuario]'");

        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;

    case 'agregar':
        $respuesta = mysqli_query($conexion,"insert into servicio
                                            (desc_empresa,desc_ciudad,desc_servicio,desc_fono,desc_email,desc_pag_url,
                                            fecha_ini,fecha_fin,hora_ini,hora_fin,desc_mapa,stock,valor,zona,tip_ser,id_user) 
                                     values ('$_POST[desc_empresa]','$_POST[desc_ciudad]','$_POST[desc_servicio]',
                                            '$_POST[desc_fono]','$_POST[desc_email]','$_POST[desc_pag_url]',
                                            '$_POST[fecha_ini]','$_POST[fecha_fin]','$_POST[hora_ini]','$_POST[hora_fin]',
                                            '$_POST[desc_mapa]','$_POST[stock]','$_POST[valor]','$_POST[zona]',
                                            '$_POST[tip_ser]','$_SESSION[usuario]')");
        
        echo json_encode($respuesta);
        break;


}
?>