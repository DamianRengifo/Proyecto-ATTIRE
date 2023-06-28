<?php
require_once('../model/database.php');
$conexion = pdo_connect_mysql();
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/styles-pqrs.css">
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d6c2ac0aaf.js" crossorigin="anonymous"></script>
    <title>Reportar</title>
</head>
<body>
    <main class="container-fluid">
        <div class=" row flex-column align-items-center">
            <div class="caj-form border border-black bg-light rounded col-lg-6 mx-auto
                position-absolute top-50 start-50 translate-middle">
                <center>          
                    <h1 class="mt-5">¿Que desea realizar?</h1>
                </center>
                
                <center>
                    <form action="">
                    <br><br>
                <input type="checkbox" class="sugerencia" id="sugerencia">
                <label for="sugerencia" class=" fs-4 me-3">Sugerencia</label>
                <input type="checkbox" name="reclamo" id="reclamo">
                <label for="reclamo" class=" fs-4 me-3">Reclamo</label>
                <input type="checkbox" name="peticion" id="peticion">
                <label for="peticion" class=" fs-4 me-3">Peticion</label>
                <input type="checkbox" name="queja" id="queja">
                <label for="queja" class=" fs-4 me-3">Queja</label>

                </center>
                <br><br>
                <center>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripcion:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                
                </center>
                <br><br>
                <center>
                <button class="btn btn-outline-light btn-dark py-2 col-lg-4 fs-4 mb-3" type="submit">enviar</button>
                </center>
                </form>

            </div>
        </div>
    </main>
</body>
</html>