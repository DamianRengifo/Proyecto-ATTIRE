<?php 
require_once '../model/database.php';
$conexion = pdo_connect_mysql();

if($conexion){
    echo "conexion exitosa";
}else{
    echo "conexion fallida";
}
/*
$sql = "SELECT * FROM `empresas`";
esta instruccion va a preparar la consulta sql 
($nombredevariablenueva = $variabledeconexion->prepare($sql) )
$sentencia = $conexion->prepare($sql);
$sentencia->execute();

$resultado= $sentencia->fetchAll();

foreach ($resultado as $empresas) {
    echo $empresas['nomEmpresa']. "<br><br>";
}
*/

$query = "CALL PA_consultasProductos()";

$consulta = $conexion->prepare($query);

$consulta->execute();

$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

foreach($resultado as $empresas):
    echo $empresas['nombreProducto'];
    echo "<br>";
    echo $empresas['talla'];
    echo "<br>";
    echo $empresas['valor'];
    echo "<br>";
endforeach;

?>