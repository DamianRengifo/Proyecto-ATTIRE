<?php 
    
if (!empty($_POST['btnRegistrar'])) {
    
    if (empty($_POST['nomEmpresa']) || empty($_POST['contraseña']) || empty($_POST['CEOEmpresa']) 
    || empty($_POST['descEmpresa']) || empty($_POST['email']) || empty($_POST['telefono']) 
    || empty($_FILES['logoEmpresa'])) {
        
        $mensaje = '<div class = "alerta">Uno de los campos esta vacio</div>';
        echo $mensaje;
    }


    else{
    $p_nomEmpresa = $_POST['nomEmpresa'];

    //configuracion de la imagen
    //capturamos el nombre de la imagen
    $imagen = $_FILES["logoEmpresa"]["name"];
    //capturamos el nombre para luego mandarlo a la carpeta de IMG_PerfilesBD
    $nombreImagen = $_FILES["logoEmpresa"]["tmp_name"];
    //$tipoImagen= strtolower(pathinfo($nombreImagen, PATHINFO_EXTENSION));
    $carpeta = "../controller/IMG_PerfilesBD/" ;
    $p_fotoEmpresa = $carpeta . $imagen;
    move_uploaded_file($nombreImagen, $carpeta . $imagen);   

    $p_CEOEmpresa = $_POST['CEOEmpresa'];
    $p_descEmpresa =  $_POST['descEmpresa'];
    $p_email = $_POST['email'];
    $p_telefono = $_POST['telefono'];
    $p_claveInic = $_POST['contraseña'];
    $p_claveConf = $p_claveInic;

    $stmt = $conexion->prepare("CALL PA_registrarEmpresa(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt ->execute([$p_nomEmpresa, $p_fotoEmpresa ,$p_CEOEmpresa, $p_descEmpresa, $p_email, $p_telefono, $p_claveInic, $p_claveConf]);

    $mensajeExito = '<div class = "sucess">Registro con exito</div>';
    
    echo $mensajeExito;
    }
}

?>