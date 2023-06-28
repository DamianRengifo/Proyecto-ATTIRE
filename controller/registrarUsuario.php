<?php 
if (!empty($_POST['btnregistro'])) {
    
    if (empty($_POST['tipoDoc']) || empty($_POST['docCliente']) || empty($_POST['nomCliente']) 
    || empty($_POST['apellCliente']) || empty($_POST['emailCliente']) || empty($_POST['telCliente']) 
    || empty($_POST['claveInicialCliente']) || empty($_POST['claveConfirmCliente'])) {

        $mensaje = '<div class = "alerta">Uno de los campos esta vacio</div>';
        echo $mensaje;
    }


    else{
    $p_nombreUsuario = $_POST['nomCliente'];
    $p_apellidosUsuario = $_POST['apellCliente'];
    $p_tipoDocumento =  $_POST['tipoDoc'];
    $p_numDocumento = $_POST['docCliente'];
    $p_email = $_POST['emailCliente'];
    $p_telefono = $_POST['telCliente'];
    $p_claveInic = $_POST['claveInicialCliente'];
    $p_claveConf = $_POST['claveConfirmCliente'];

    $stmt = $conexion->prepare("CALL PA_registrarUsuario(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt ->execute([$p_nombreUsuario, $p_apellidosUsuario ,$p_tipoDocumento, $p_numDocumento, $p_email, $p_telefono, $p_claveInic, $p_claveConf]);
    $mensajeExito = '<div class = "sucess">Registro con exito</div>';
    
    echo $mensajeExito;
    }
    ?>
    <script>
        history.replaceState(null,null,location.pathname);
    </script>
<?php
}

?>