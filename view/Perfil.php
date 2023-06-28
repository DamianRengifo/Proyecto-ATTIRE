<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/Empresa.css">
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d6c2ac0aaf.js" crossorigin="anonymous"></script>
    <title>Perfil Empresarial</title>
</head>
<body>

    <!--Inicio de la cabecera-->
    <header class="container-fluid">
        <button class="flex-grow-1 fs-3 btn btn-light rounded-circle"  type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvas" aria-controls="offcanvas" id="btn-canvas1">
            <i class="barras fa-sharp fa-solid fa-bars text-black fw-bold"></i>
          </button>
           <!--Off canvas menu-->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
      <div class="offcanvas-header d-flex">
          <h5 class="offcanvas-title text-uppercase text-center  fw-bold mb-4">Gestionar mi empresa</h5>
          
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="close"></button>
      </div>

      <div class="offcanvas-body d-flex flex-column">
        <hr class="bg-secundary mb-4">
        <ul class="list-unstyled w-100">

          <li class = "li mb-3 w-100 rounded-4 w-100 py-2">
            <a href="inventario.php" class="enlaces text-decoration-none fs-4 mb-3 ms-3">
              <i class="iconos fa-solid fa-shirt me-2 fs-4 fw-bold"></i>Gestionar mis productos
            </a>
          </li>

          <li class="li mb-3 rounded-4 w-100 py-2">
            <a href="S-Ventas.php" class="enlaces text-decoration-none fs-4 ms-3">
              <i class="iconos fa-solid fa-coins me-2 fs-4 fw-bold"></i>
              Ver mis ventas
            </a>
          </li>

          <li class="li mb-3 rounded-4 w-100 py-2">
            <a href="Index.php" class="enlaces fs-4 text-decoration-none ms-3">
              <i class="iconos fa-sharp fa-solid fa-circle-arrow-left me-3"></i>
              Salir
            </a>
          </li>
        </ul>
      </div>
  </div>
  <!--final de Off canvas menu-->
        <div class="row col-11 mx-auto d-flex align-items-centers  h-100">
            <nav class="navbar col-3 flex-grow-1">
                <div class="container-fluid">
                <form class="d-flex" role="search">
                    <input class="input-buscar form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="buscar-btn btn btn-outline-light" type="submit">Buscar</button>
                </form>
                </div>
            </nav>
            <div class="caja-img col-3 flex-grow-1 my-2 rounded">
                <img src="IMG/DALL·E 2023-03-19 17.25.07 - logotype for an online menswear store.png" alt=""
                class="w-100 h-100 rounded">
            </div>
            <!--Redes sociales-->
            <div id="redessociales" class="d-flex text-center text-white col-3 flex-grow-1 justify-content-center align-items-center">
                <ul class="d-flex flex-wrap justy-content-around gap-3 align-items-center">
                    <li class="iconos list-unstyled fs-3">
                        <a href="#"><i id="facebook" class="fa-brands fa-facebook rounded-circle text-white"></i></a>
                    </li>
                    <li class="iconos list-unstyled fs-3"><a href=""><i id="instagram" class="fa-brands fa-instagram rounded-circle text-white"></i></a></li>
                    <li class="iconos list-unstyled fs-3"><a href=""><i id="twitter" class="fa-brands fa-twitter rounded-circle text-white"></i></a></li>
                    <li class="iconos list-unstyled fs-3"><a href=""><i id="youtube" class="fa-brands fa-youtube rounded text-white"></i></a></li>
                </ul>
            </div>
            <!--fin redes sociales-->
        </div>
    </header>
    <!--Final de la cabecera-->
    <!--Inicio del contenido-->
    <main class="productos-section container-fluid container-xxl my-5">
        <section class="row">
          <aside class="col-12 col-lg-2 d-flex align-items-center flex-column justify-content-start">
            <div class=" h-100 d-flex flex-column justify-content-around">
              <h2 class="text-center text-uppercase mt-5">Categorias</h2>
              <div class="div-botones-categorias  h-50 d-flex flex-column justify-content-between align-items-center">
                <button class="hombres btn col-lg-6 mx-auto rounded-top mb-lg-3">Hombres</button>
                <button class="mujeres btn col-lg-6 mx-auto rounded-top mb-lg-3"">Mujeres</button>
                <button class="niños btn col-lg-6 mx-auto rounded-top mb-lg-3"">Niños</button>
                <button type="btn btn-dark" class="button-cat btn btn-dark w-75 mx-auto rounded-pill mb-lg-3"" data-bs-toggle="modal" data-bs-target="#mimodal">
                  Ver categorias
                </button>
              </div>
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
                          <li class="lista-pro fs-5">Jeans</li>
                          <li class="lista-pro fs-5">Pantalones cortos</li>
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

              <!--Final Modal categorias-->
            </div>
          </aside>
          <!--Productos-->
            <div class="col-12 col-lg-10 mt-3">
            <div class="wrap row gap-5 justify-content-center">
                    <div class="cajas-productos col-12 col-lg-4 rounded">
                    <div class="imagen-producto mx-2 mb-2">
                      <img src="IMG/D_NQ_NP_908582-MCO40874635056_022020-W.jpg" alt="" class="w-100 h-100">
                    </div>
                    <div class="imagen-empresa mt-5 mb-2 ms-2">
                      <a href="Perfil.html"></a><img src="IMG/DALL·E 2023-03-19 17.25.07 - logotype for an online menswear store.png" alt="" class="img-empresa">
                    </div>
                    <p class="nombre-producto fs-4 mx-2 text-center">Camisa elegante</p>
                    <p class="precios-productos fs-4 mx-2">$35.000</p>
                    <div class="buttons d-flex justify-content-between mb-1">
                      <i class="fa-solid fa-heart fs-3" id="corazon"></i>
                    <a class="agregaralcarrito btn btn-dark text-white rounded-pill">
                      <i class="fa-solid fa-cart-shopping icon-cart"></i>Agregar al carrito
                    </a>
                    </div>
                  </div>

                  <div class="cajas-productos col-12 col-lg-4 rounded">
                    <div class="imagen-producto mx-2 my-2">
                      <img src="IMG/D_NQ_NP_745038-MCO52154747108_102022-V.jpg" alt="" class="w-100 h-100">
                    </div>
                    <div class="imagen-empresa mt-5 mb-2 ms-2">
                      <a href="Perfil.html"><img src="IMG/DALL·E 2023-03-19 17.25.07 - logotype for an online menswear store.png" alt="" class="img-empresa"></a>
                    </div>
                    <p class="nombre-producto fs-4 mx-2 text-center">Buzo blanco</p>
                    <p class="precios-productos fs-4 mx-2">$50.000</p>
                    <div class="buttons d-flex justify-content-between mb-1">
                      <i class="fa-solid fa-heart fs-3" id="corazon"></i>
                    <a class="agregaralcarrito btn btn-dark text-white rounded-pill">
                      <i class="fa-solid fa-cart-shopping icon-cart"></i>Agregar al carrito
                    </a>
                    </div>
                  </div>

                  <div class="cajas-productos col-12 col-lg-4 rounded">
                    <div class="imagen-producto mx-2 my-2">
                      <a href="Perfil.html"><img src="IMG/ropa.png" alt="" class="w-100 h-100"></a>
                    </div>
                    <div class="imagen-empresa mt-5 mb-2 ms-2">
                      <img src="IMG/DALL·E 2023-03-19 17.25.07 - logotype for an online menswear store.png" alt="" class="img-empresa">
                    </div>
                    <p class="nombre-producto fs-4 mx-2 text-center">Camisa blanca</p>
                    <p class="precios-productos fs-4 mx-2">$45.000</p>
                    <div class="buttons d-flex justify-content-between mb-1">
                      <i class="fa-solid fa-heart fs-3" id="corazon"></i>
                    <a class="agregaralcarrito btn btn-dark text-white rounded-pill">
                      <i class="fa-solid fa-cart-shopping icon-cart"></i>Agregar al carrito
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!--Final productos-->
        </section>
    </main>
    <!--Final del contenido-->
    <footer class="col-12 d-flex justify-content-center align-items-flex-start w-100 h-100">
        <ul class="row col-9 text-center mt-2">
            <li class="col">AYUDA</li>
            <li class="col">CONTACTANOS</li>
            <li class="col">ACERCA DE NOSOTROS</li>
        </ul>
    </footer>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery-3.6.3.min.js"></script>
</body>
</html>