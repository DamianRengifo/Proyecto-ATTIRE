<?php 
require_once ('../model/database.php');
$conexion = pdo_connect_mysql();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/index.css" type="text/css">
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d6c2ac0aaf.js" crossorigin="anonymous"></script>
    <title>Tienda</title>
</head>
<body>
  <!--Inicio de la cabecera-->
    <header id="header" class="col-12  w-100 shadow">
      <div id="header-wrap" class="col-11 d-flex h-100 gap-5 align-items-center justify-content-between mx-auto">
        <div class="flex-grow-1 fs-4" id="dash">
          <label class="switch-container">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
        </div>
        <div class="col-3 flex-grow-1" id="imagen-logo">
          <img src="IMG/logo.png" alt="" class="imagenlogo">
        </div>
        <!--Inicio barra de buscar-->
        <nav class="navbar bg-body-tertiary flex-grow-2">
          <div class="container-fluid">
            <form class="d-flex" role="search">
              <input class="input-buscar form-control me-2 rounded-pill" type="search" placeholder="Buscar" aria-label="Search">
              <button class="Buscar-button btn btn-outline-light btn-dark rounded-5" type="submit">Buscar</button>
            </form>
          </div>
        </nav>
        <!--Inicio barra de buscar-->
        <div id="iconos" class="d-flex gap-3 flex-grow-3 fs-4">

          <!--Seccion de iconos del header-->
          <button tabindex = "0" class="usuario" type="checkbox" data-container="body" data-bs-toggle="popover" 
          data-bs-placement="bottom" data-bs-html="true" data-bs-animation="true" 
          data-bs-trigger = "focus"  
          data-bs-content = 
          "
            <p class='text-icons fw-bold fs-4 text-center mb-3'>Tal parece que aun no has iniciado sesion 😕</p>
            <a href='Login.php' class='boton-icons btn rounded-pill mb-2'>Registrarse</a>
            <a href='Login.php' class='boton-icons btn rounded-pill mb-2'>Iniciar sesion</a>
          ">
            <i class="fa-solid fa-user"></i>
          </button>
          <button tabindex="0" type="button" class="carrito-Compras" data-container="body" data-bs-toggle="popover"
          data-bs-placement="bottom" data-bs-html="true" data-bs-animation="true" data-bs-trigger="focus"
          data-bs-content=
          "
            <div class='mt-3 w-75 mx-auto'>
              <p class='text-icons fw-bold fs-6 text-center'>Revisa los productos que tienes en tu carrito de compras</p>
              <a href='carrito.php' class='boton-icons btn rounded-pill '>Ver mi carrito de compras</a>
            </div>
          ">
            <i class="fa-solid fa-cart-shopping"></i>
          </button>
          <button tabindex="0" class="reportes" type="button" data-container="body" data-bs-toggle="popover"
          data-bs-placement="bottom" data-bs-html="true" data-bs-animation="true" data-bs-trigger="focus"
          data-bs-content=
          "
          <div class='reporte-icon mt-3 w-75 mx-auto d-flex justify-content-center flex-column'>
            <p id='reporte-p' class='fw-bold fs-5 text-center'>Revisa tus pedidos de los productos que has comprado</p>
            <a href='pedidos.php' class='boton-icons btn rounded-pill mx-auto'>Ver pedidos</a>
          </div>
          ">
          <i class="fa-solid fa-truck-fast"></i>
        </button>
          <button tabindex="0" class="reportes" type="button" data-container="body" data-bs-toggle="popover"
          data-bs-placement="bottom" data-bs-html="true" data-bs-animation="true" data-bs-trigger="focus"
          data-bs-content=
          "
          <div class='reporte-icon mt-3 w-75 mx-auto'>
            <p id='reporte-p' class='fw-bold fs-5 text-center'>¿tienes alguna queja,reclamos,sugerencia o peticion? no dudes en comentarnos tu situacion</p>
            <a href='PQRS.php' class='boton-icons btn rounded-pill ms-3'>Hacer un reporte</a>
          </div>
          "><i class="fa-solid fa-bell"></i></button>
        </div>
      </div>
    </header>
      <!--Final de la cabecera--> 
    <!--Seccion de collapse de los iconos del header-->

    <!--Collapse del boton de los usuarios-->

    <!--Collapse del boton de los usuarios-->

    <div class="mt-3 w-75 mx-auto">
      <div class="collapse" id="collapse1">
        <div class="card card-body">
          <p class="text-icons fw-bold fs-4 text-center">Revisa los productos que tienes en tu carrito de compras</p>
          <a href="carrito.php" class="boton-icons btn rounded-pill ">Ver mi carrito de compras</a>
        </div>
      </div>
    </div>
    <!--Seccion de collapse de los iconos del header-->
    
    <!--Seccion inicial-->
    <section class="caja-inicial container my-5 border">
      <div class="informacion row col-12 align-items-center my-3">
        <div class="col-6 d-flex justify-content-center align-items-center">
          <img src="IMG/imagen2.jpg" alt="" class="w-75 h-75 mx-auto">
        </div>
        <h2 class="col-6 text-center text-uppercase fw-bold lh-lg">Encuentra la mejor ropa de las mejores empresas</h2>
      </div>
    </section>
    <!--Seccion inicial final-->

    <main class="productos-section container-fluid my-5">

        <section class="row">
          <aside class="col-12 col-lg-2 d-flex align-items-center flex-column justify-content-start">
            <div class=" h-50 d-flex flex-column justify-content-between">
              <h2 class="text-center text-uppercase mt-5">Categorias</h2>
              <div class="div-botones-categorias  h-50 d-flex flex-column justify-content-between align-items-center">
                <button class="hombres btn col-lg-6 mx-auto rounded-top">Hombres</button>
                <button class="mujeres btn col-lg-6 mx-auto rounded-top">Mujeres</button>
                <button class="niños btn col-lg-6 mx-auto rounded-top">Niños</button>
                <button type="btn btn-dark" class="button-cat btn btn-dark w-75 mx-auto rounded-pill" data-bs-toggle="modal" data-bs-target="#mimodal">
                  Ver categorias
                </button>
              </div>
      

              <!--Modal categorias-->
              <div class="container py-4">
                <div class="modal fade" id="mimodal">
                  <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <div class="Usuarios d-flex flex-row justy-content-around align-items-center column-gap-5">
                          <h5 class="text-decoration-underline">Hombres</h5>
                          <div class="vr"></div>
                          <h5 class="text-decoration-underline">Niños</h5>
                          <div class="vr"></div>
                          <h5 class="text-decoration-underline">Mujeres</h5>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body d-flex column-gap-5 row-gap-5 flex-wrap">
                        <ul class="list-unstyled">
                          <h3>Caracteristicas</h3>
                          <li class="lista-pro fs-5" id="lista-pro">Menor precio</li>
                          <li class="lista-pro fs-5">Mayor precio</li>
                          <li class="lista-pro fs-5">Nombre A-Z</li>
                          <li class="lista-pro fs-5">Nombre Z-A</li>
                        </ul>
                        
                        <ul  class="list-unstyled">
                          <h3>Tipos de ropa</h3>
                          <li class="lista-pro fs-5">Ropa casual</li>
                          <li class="lista-pro fs-5">Ropa elegante</li>
                          <li class="lista-pro fs-5">Ropa deportiva</li>
                          <li class="lista-pro fs-5">Ropa de invierno</li>
                          <li class="lista-pro fs-5">Ropa de verano</li>
                          <li class="lista-pro fs-5">Pillamas</li>
                          <li class="lista-pro fs-5">Sudaderas</li>
                        </ul>
                        <ul  class="list-unstyled">
                          <h3>Tops</h3>
                          <li class="lista-pro fs-5">Camisas</li>
                          <li class="lista-pro fs-5">Camisetas</li>
                          <li class="lista-pro fs-5">Busos</li>
                          <li class="lista-pro fs-5">Sacos</li>
                          <li class="lista-pro fs-5">Chaquetas</li>
                          <li class="lista-pro fs-5">Chalecos</li>
                          <li class="lista-pro fs-5">Camisetas sin mangas</li>
                        </ul>
                        <ul  class="list-unstyled">
                          <h3>Pantalones</h3>
                          <li class="lista-pro fs-5">Jeans</li>
                          <li class="lista-pro fs-5">Pantalones cortos</li>
                          <li class="lista-pro fs-5">Pantalonetas</li>
                          <li class="lista-pro fs-5">Pantalones de sudadera</li>
                          <li class="lista-pro fs-5">Pantalones con estampados</li>
                          <li class="lista-pro fs-5">Pantalones formales</li>
                          <li class="lista-pro fs-5">faldas</li>
                        </ul>
                        <ul  class="list-unstyled">
                          <h3>Pantalones</h3>
                          <li class="lista-pro fs-5">Boxers</li>
                          <li class="lista-pro fs-5">Medias</li>
                          <li class="lista-pro fs-5">Pantalonetas</li>
                          <li class="lista-pro fs-5">Pantalones de sudadera</li>
                          <li class="lista-pro fs-5">Pantalones con estampados</li>
                          <li class="lista-pro fs-5">Pantalones formales</li>
                          <li class="lista-pro fs-5">faldas</li>
                        </ul>
                        <ul  class="list-unstyled">
                          <h3>Accesorios</h3>
                          <li class="lista-pro fs-5">Gorras</li>
                          <li class="lista-pro fs-5">Pulseras</li>
                          <li class="lista-pro fs-5">Pantalonetas</li>
                          <li class="lista-pro fs-5">Pantalones de sudadera</li>
                          <li class="lista-pro fs-5">Pantalones con estampados</li>
                          <li class="lista-pro fs-5">Pantalones formales</li>
                          <li class="lista-pro fs-5">faldas</li>
                        </ul>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-danger rounded-0 px-5 me-3" data-bs-dismiss="modal">Cancelar</button>
                        <button class="btn btn-dark rounded-0 px-5 me-3" data-bs-dismiss="modal">Aplicar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!--Final Modal categorias-->

              <!--Final categorias-->
            </div>
          </aside>
          <!--Productos-->
            <div class="col-12 col-lg-10 mt-3">
              <div class="wrap-productos row row-gap-5 column-gap-4 justify-content-center">
                  <?php 
                  $query = "CALL PA_consultasProductos()";

                  $consulta = $conexion->prepare($query);
                  
                  $consulta->execute();
                  
                  $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
                  
                  
                  foreach($resultado as $empresas): ?>
                      <div class="cajas-productos col-10 col-lg-4  col-sm-11  col-xxl-12">
                    <div class="imagen-producto mx-2 my-2">
                      <img src="<?php echo $empresas['fotoproducto']?>" alt="" class="w-100 h-100">
                    </div>
                    <div class="imagen-empresa mt-5 mb-2 ms-2">
                      <a href="Perfil.php"><img src="<?php echo $empresas['fotoEmpresa'] ?>" alt="" class="img-empresa"></a>
                    </div>
                    <p class="nombre-producto fs-4 mx-2 text-center"><?php echo $empresas['nombreProducto'] ?></p>
                    <p class="precios-productos fs-4 mx-2"><?php echo "$" . $empresas['valor'] ?></p>
                    <div class="buttons d-flex justify-content-between mb-1">
                      <i  class="fa-solid fa-heart fs-3" id="corazon"></i>
                    <a class="agregaralcarrito btn btn-dark text-white rounded-pill">
                      <i class="fa-solid fa-cart-shopping icon-cart "></i>Agregar al carrito
                    </a>
                    </div>
                  </div>
                  <?php endforeach;
                  ?>
                </div>
              </div>
            </div>
          <!--Final productos-->
        </section>
    </main>

    
      <footer class="col-12 d-flex justify-content-center align-items-flex-start w-100">
        <ul class="row col-9 text-center mt-2">
            <li class="col">AYUDA</li>
            <li class="col">CONTACTANOS</li>
            <li class="col">ACERCA DE NOSOTROS</li>
        </ul>
    </footer>



    
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="JS/popovers.js"></script>
    <script src="jquery-3.6.3.min.js"></script>
    <script src="popper.min.js"></script>
  </body>
</html>