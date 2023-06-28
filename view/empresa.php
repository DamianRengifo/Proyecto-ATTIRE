<?php 
  require_once('../model/database.php');
  $conexion = pdo_connect_mysql();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/login-Empresa.css">
    <title>Crear empresa</title>
</head>
<body class="d-flex justify-content-center align-items-center">
        <div id="formulario" class="rounded col-11 col-lg-6 d-flex align-items-center 
        justify-content-center regular-show bg-primary-subtle flex-direction-column pb-5 ">

            <form action="" enctype="multipart/form-data" class="col-10 col-lg-9 h-75" method="post">
                <h1 class="text-center">Crea tu empresa</h1>
                <?php include('../controller/registrar-empresa.php') ?>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="nomEmpresa">
                    <label for="floatingInput">Nombre de empresa</label>
                  </div>

                  <div class="form-group mb-3">
                    <label>Logo de la empresa</label>
                    <input type="file" class="form-control" name="logoEmpresa">
                  </div>

                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="contraseña">
                    <label for="floatingPassword">Password</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="CEOEmpresa">
                    <label for="floatingInput">Ceo de la empresa</label>
                  </div>

                  <div class="form-floating mb-3">
                    <textarea name="descEmpresa" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Descripcion de tu empresa</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">email de la empresa</label>
                  </div>


                  <div class="form-floating mb-3">
                    <input type="tel" class="form-control" id="floatingInput" placeholder="name@example.com" name="telefono">
                    <label for="floatingInput">Telefono de la empresa</label>
                  </div>

                  <hr>
                  <input type="submit" value="Registrarse" class="btn btn-warning w-100 mb-5" name="btnRegistrar">
            </form>
        </div>
<script type="text/javascript" href="Bootstrap/js/bootstrap.min.js"></script>
<script src="jquery-3.6.3.min.js"></script>
</body>
</html>