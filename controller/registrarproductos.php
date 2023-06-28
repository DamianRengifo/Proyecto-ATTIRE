<?php
$msg = '';

if (!empty($_POST["registrarProducto"])) {
    
    $nombreProducto = isset($_POST['nombreProducto']) ? $_POST['nombreProducto'] : ' ';

    $imagen = $_FILES["fotoProducto"]["name"];
    $nombreImagen = $_FILES["fotoProducto"]["tmp_name"];
    //$tipoImagen= strtolower(pathinfo($nombreImagen, PATHINFO_EXTENSION));
    $carpeta = "../controller/IMG_BD/" ;
    $ruta = $carpeta . $imagen;
    move_uploaded_file($nombreImagen, $carpeta . $imagen);        
    

    $talla = isset($_POST['talla'])  ? $_POST['talla'] : "Sin talla especifica";
    $precioProducto = isset($_POST['valorProducto']) ? $_POST['valorProducto'] : 0;
    $Cantidad = isset($_POST['Cantidad']) ? $_POST['Cantidad'] : 0;
    $categoria = isset($_POST['categorias']) ? $_POST['categorias'] : null;

    $stmt = $conexion->prepare("INSERT INTO productos (nombreProducto, fotoProducto, talla, valor, Cantidad) VALUES (?, ?, ?, ?, ?)");
    $stmt ->execute([$nombreProducto,$ruta ,$talla, $precioProducto, $Cantidad]);
    
    //recuperamos el id del producto ya insertado
    $idProducto = $conexion->lastInsertId();
    $stmt2 = $conexion->prepare(("INSERT INTO productos_has_categorias (productos_idproductos, categorias_idCategoria) VALUES (?,?)"));
    $stmt2->execute([$idProducto, $categoria]);
    $msg = '
    <div class="alerta-exito alert alert-primary alert-dismissible fade show text-center" role="alert">
        <h5>Registro con exito</h5>  
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';

    echo $msg; ?>
    <script>
        history.replaceState(null,null,location.pathname);
    </script>
<?php }

?>

