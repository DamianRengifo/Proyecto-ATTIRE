<?php 
$mensaje = '';

if(!empty($_POST['btnEditar'])){
    $idproductosAC = $_POST['idProductos'];
    $nombreProductoAC = $_POST['nombreProductoAC'];
    $tallaAC = $_POST['tallaAC'];
    $valorAC = $_POST['valorAC'];
    $CantidadAC = $_POST['CantidadAC'];
    $CategoriaAC = $_POST['CategoriaAC'];
    //proceso para guardar imagen 
    $imagen = $_FILES["fotoProducto"]["name"];
    $nombreImagen = $_FILES["fotoProducto"]["tmp_name"];
    //$tipoImagen= strtolower(pathinfo($nombreImagen, PATHINFO_EXTENSION));
    $carpeta = "../controller/IMG_BD/" ;
    $fotoProductoAC = $carpeta . $imagen;
    move_uploaded_file($nombreImagen, $carpeta . $imagen);  

    $stmtAC = $conexion->prepare("CALL PA_actualizarProducto(?, ?, ?, ?, ?, ?, ?)");
    $stmtAC->execute([$idproductosAC, $nombreProductoAC, $fotoProductoAC, $tallaAC, $valorAC, $CantidadAC, $CategoriaAC]);


    $mensaje = '
    <div class="alerta-exito alert alert-success alert-dismissible fade show text-center" role="alert">
        <h5>¡La actualizacion del producto ha sido un exito!</h5>  
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    
    echo $mensaje; ?>
    <script>
        history.replaceState(null,null,location.pathname);
    </script>
<?php
}
?>