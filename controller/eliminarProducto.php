<?php 

if (!empty($_POST['eliminar'])) {
    $idProductosB = $_POST['idProductos'];
    $result = $conexion->prepare("CALL PA_borrarProductos(?)"); // Agregar paréntesis y utilizar el nombre correcto
    $result->execute([$idProductosB]);        
    $mensaje = "
        <div class='alerta-exito alert alert-danger alert-dismissible fade show text-center' role='alert'>
            <h5>El producto con el codigo de {$idProductosB} ha sido eliminado</h5>  
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";

    echo $mensaje;
} ?>

    <script>
        history.replaceState(null,null,location.pathname);
    </script>
<?php
?>