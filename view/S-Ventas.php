<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/V-styles.css">
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d6c2ac0aaf.js" crossorigin="anonymous"></script>
    <title>Ventas</title>
</head>
<body>
    
    <main class="caja-principal container-fluid ">
        <div class="row h-100 col-12">
            <aside class="col-12 col-lg-2 d-flex flex-column h-100">
                <h2 class="text-white text-center mt-3">Gestion de ventas</h2>
                <hr class="w-100">
                <div class="-enlaces d-flex row-gap-4 flex-column  justify-content-between">
                    <a href="Perfil.html" class="enlaces text-white ms-3 fs-4"><i class="fa-sharp fa-solid fa-house me-3"></i>Inicio</a>
                    <a href="S-Ventas.html" class="enlaces text-white ms-3 fs-4"><i class="fa-sharp fa-solid fa-coins me-3"></i>Ventas</a>
                    <a href="" class="enlaces text-white ms-3 fs-4"><i class="fa-sharp fa-solid fa-chart-column me-3"></i>Reportes</a>
                    <a href="Index.PHP" class="enlaces text-white ms-3 fs-4"><i class="fa-sharp fa-solid fa-circle-arrow-left me-3"></i>Salir</a>
                </div>
            </aside>
            <section class="col-lg-10 h-100">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-10 d-flex justify-content-between my-5">
                        <form class="form">
                            <button>
                                <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
                                    <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                            <input class="input" placeholder="Buscar ventas" required="" type="text">
                            <button class="reset" type="reset">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </form>
                        <select class="form-select w-25" aria-label="Default select example">
                            <option selected>Filtrar Ventas</option>
                            <option value="1">Filtrar de mayor a menor cantidad</option>
                            <option value="2">Filtrar de menor a mayor cantidad</option>
                            <option value="5">Filtrar por mayor a menor cantidad vendida</option>
                            <option value="6">Filtrar por menor a mayor cantidad vendida</option>
                    
                        </select>
                    </div>
                    <table class="table table-hover col-8 mx-auto w-75">
                        <thead class="table-dark">
                          <tr>
                            <?php
                            require_once ('../model/database.php');
                            $conexion = pdo_connect_mysql();
                            ?>
                            <th scope="col">Codigo de venta</th>
                            <th scope="col">fecha de venta</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Subtotal</th>
                          </tr>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            $PA_ventas = ("CALL PA_consultasventas()");
                            $consulta = $conexion->prepare($PA_ventas);
                            $consulta->execute();
                            $resultado = $consulta->fetchAll(PDO:: FETCH_ASSOC);

                            foreach ($resultado as $datoscar ) {
                            ?>
                          <tr>
                            <td scope="row"><?php echo $datoscar['Codigo de venta'] ?></td>
                            <td scope="row"><?php echo $datoscar['fecha de venta'] ?></td>
                            <td scope="row"><?php echo $datoscar['Cantidad'] ?></td>
                            <td scope="row"><?php echo "$" . $datoscar['Subtotal'] ?></td>
                            <?php } ?>
                          </tr>
                        </tbody>
                      </table>
                    
                </div>
            </section>
        </div>
    </main>
    <footer class="col-12 d-flex justify-content-center align-items-flex-start w-100 ">
        <ul class="row col-9 text-center mt-2">
            <li class="col">AYUDA</li>
            <li class="col">CONTACTANOS</li>
            <li class="col">ACERCA DE NOSOTROS</li>
        </ul>
    </footer>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>