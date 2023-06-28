<?php 
require_once ('../model/database.php');
$conexion = pdo_connect_mysql();

function consultaProductos(){
    global $conexion;
    $querytabla = ("CALL PA_consultasProductos");
    $consulta = $conexion->prepare($querytabla);
    $consulta->execute();
    $resultadosProductos = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultadosProductos;
}


?>