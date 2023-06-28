<?php 
if (!empty($_POST["btnEmpresa"])) {
    if (empty($_POST["usuario"]) and empty($_POST["contraseña"])) {
        echo '<div style="text-align: center; background-color: rgba(221, 47, 105, 0.397); border-radius: 15px; font-size: 20px; width: 80%; padding: 10px;">Los campos estan vacios</div>';
    } else {
        $p_email=$_POST["email"];
        $p_claveInic=$_POST["contraseña"];

        $query = "CALL PA_iniciarSesionEmpresa(?, ?)";
        $stmt = $conexion->prepare($query);
        $stmt->execute([$p_email, $p_claveInic]);

        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($resultado)) {
            header("location: ../view/Index.php");
        } else {
            echo '<div style="text-align: center; background-color: rgba(221, 47, 105, 0.397); border-radius: 15px; font-size: 20px; width: 80%; padding: 10px;">Acceso Denegado</div>';
        }
        
    }
    
}

?>