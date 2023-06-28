<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/inventario.css">
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d6c2ac0aaf.js" crossorigin="anonymous"></script>
    <title>Mis productos</title>
</head>
<body>
    <header class="d-flex align-items-center justify-content-center">
      <a href="Perfil.html" class="enlaces text-white ms-3 fs-4"><i class="fa-sharp fa-solid fa-circle-arrow-left me-3"></i>Salir</a>
        <div class="mx-auto">
          <h1 class="text-center fw-semibold mt-2 text-white">Mis productos</h1>
        </div>
    </header>
    <main>
        <section class="container-fluid my-5">
        <?php 
          require_once ('../model/database.php');
          $conexion = pdo_connect_mysql();
        ?>                
            <div class="row">
                <div class="col-12 d-flex justify-content-between flex-wrap">
                    <nav class="navbar bg-body-tertiary flex-grow-2">
                        <div class="container-fluid">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar nombre" aria-label="Search">
                            <button class="btn btn-outline-light btn-dark" type="submit">Buscar</button>
                        </form>
                        </div>
                    </nav>
                    <form action="" class="w-25 d-flex align-items-center" method="POST">
                    <select class="form-select w-75 me-2" aria-label="Default select example" name="consultas">
                      <?php  
                        $p_valor = [1, 2 ,3 ,4 ,5 ,6, 7, 8];
                        ?>
                        <option selected>Filtrar productos</option>
                        <option value="<?php echo $p_valor[0] ?>">Filtrar por Nombre A-Z</option>
                        <option value="<?php echo $p_valor[1] ?>">Filtrar por Nombre Z-A</option>
                        <option value="<?php echo $p_valor[2] ?>">Filtrar por categoria A-Z</option>
                        <option value="<?php echo $p_valor[3] ?>">Filtrar por categoria Z-A</option>
                        <option value="<?php echo $p_valor[4] ?>">Filtrar por cantidad</option>
                        <option value="<?php echo $p_valor[5] ?>">Filtrar por menor cantidad</option>
                        <option value="<?php echo $p_valor[6] ?>">Filtrar por menor precio</option>
                        <option value="<?php echo $p_valor[7] ?>">Filtrar por mayor precio</option><?php

                        ?>
                    </select>
                    <input type="submit" value="Aplicar" class="btn btn-primary btn-outline-info rounded-pill w-25 h-75 text-white" name="filtros">
                    </form>
                </div>
            </div>
                
        </section>
        <section class="container-fluid">
            <div class="col-12 col-lg-12 mt-3 mx-auto my-3">
                <div class="wrap row gap-4 justify-content-center">
                    <div class="butones col-10 d-flex justify-content-between flex-wrap">
                        <button class="btn px-5 col-5 mx-auto rounded-pill fs-5"  data-bs-toggle="modal" data-bs-target="#modalAgregar">
                          <i class="fa-sharp fa-solid fa-plus me-2"></i>
                          Agregar
                        </button>
                    </div>
                    
                    <!---Configuracion de la ventana emergente para registrar productos-->
                    <div class="modal fade" id="modalAgregar" >
                      <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-tittle mx-auto fw-bold">Registrar productos</h5>
                          </div>
                          <div class="modal-body">

                              <form action="" enctype="multipart/form-data" class="w-50 mx-auto" method="post">
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="nombreProducto">
                                  <label for="floatingInput">Nombre del producto</label>
                                </div>
                                
                                <div class="form-floating mb-3">
                                  <input type="file" class="form-control" id="floatingPassword" placeholder="Password" name="fotoProducto">
                                  <label for="floatingPassword">Imagen del producto</label>
                                </div>

                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="talla">
                                  <label for="floatingPassword">Talla</label>
                                </div>
              
                                <div class="form-floating mb-3">
                                  <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com" name="valorProducto">
                                  <label for="floatingInput">Precio del producto</label>
                                </div>
              
                                <div class="form-floating mb-3">
                                  <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com" name="Cantidad">
                                  <label for="floatingTextarea2">Cantidad del producto</label>
                                </div>

                                <select class="form-select w-100 mx-auto" aria-label="Default select example" name="categorias">
                                  <option selected>Categoria del producto</option>
                                  <?php 
                                    $query = "SELECT * FROM categorias ORDER BY nomCategoria ASC;";
                                    $resultado = $conexion->prepare($query);
                                    $resultado -> execute();
                                    $datos = $resultado->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($datos as $categorias) : ?>
                                      <option value="<?php echo $categorias['idCategoria'] ?>"><?php echo $categorias['nomCategoria'] ?></option>
                                    <?php endforeach;
                                    
                                  ?>
                                </select>

                                <hr>
                                <input name="registrarProducto" type="submit" value="Registrarse" class="btn btn-warning w-100 mb-5" id="submit-form">
                              </form>
                          </div>
                          <div class="modal-footer">
                            <button class="btn-cancelar btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button class="btn-guardar btn btn-primary" data-bs-dismiss="modal">Guardar</button>
                           </div>
                        </div>
                      </div>
                    </div>
                    <!--Configuracion de la ventana emergente de registrar productos-->

                    <?php 
                      require('../controller/registrarproductos.php');
                      require('../controller/editarProducto.php');
                      require('../controller/eliminarProducto.php');
                    ?>
                    <table class="table table-hover col-lg-12 mx-auto">
                      <thead class="table-dark">
                        <tr>
                          <th scope="col" class="text-center">Codigo de Producto</th>
                          <th scope="col" class="text-center">Nombre de Producto</th>
                          <th scope="col" class="text-center">Categoria</th>
                          <th scope="col" class="text-center">Precio de Producto</th>
                          <th scope="col" class="text-center">Cantidad Total</th>
                          <th scope="col-2" class="text-center">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php   
                          $querytabla = ("CALL PA_consultaTablaProductos()");
                          $consulta = $conexion->prepare($querytabla);
                          $consulta->execute();
                          $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);

                          foreach ($resultados as $datostabla) { ?>
                            <tr>
                          <th scope="row"><?php echo $datostabla['idProductos']  ?></th>
                          <td class="text-center fw-bold"> <?php echo $datostabla['nombreProducto']  ?> </td>
                          <td class="text-center fw-bold"> <?php echo $datostabla['nomCategoria']  ?>  </td>
                          <td class="text-center fw-bold"> <?php echo "$" . $datostabla['valor']  ?> </td>
                          <td class="text-center fw-bold"> <?php echo $datostabla['Cantidad']  ?> </td>
                          <td class="d-flex justify-content-center gap-1">
                            <button class="btn btn-outline-info rounded-circle" data-bs-toggle="modal" data-bs-target="#modalConsultarvista<?php echo $producDatos['idProductos'] ?>">
                              <i class="fa-solid fa-eye"></i>
                            </button>
                            <button class="btn btn-success rounded-circle" data-bs-toggle="modal" data-bs-target="#modalEditar<?php echo $datostabla['idProductos']?>">
                              <i class="fa-sharp fa-solid fa-pencil "></i>
                            </button>
                            <button class="btn btn-danger rounded-circle" data-bs-toggle="modal" data-bs-target="#modalBorrar<?php echo $datostabla['idProductos'] ?>">
                              <i class="fa-sharp fa-solid fa-trash"></i>
                            </button>
                          </td>
                        </tr>
                        
                        <!--Configuracion de ventana emergente para editar producto-->
                     <div class="modal fade" id="modalEditar<?php echo $datostabla['idProductos'] ?>">
                      <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                          <div class="modal-header header-editar">
                            <h5 class="modal-tittle mx-auto fw-bold">Editar productos</h5>
                          </div>
                          <div class="modal-body w-50 mx-auto">
                              <form action="" class="w-50 mx-auto" enctype="multipart/form-data"  method="post">
                                <input type="hidden" value="<?php echo $datostabla['idProductos'] ?>" name="idProductos">
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="floatingInput" 
                                  placeholder="name@example.com" value="<?php echo $datostabla['nombreProducto'] ?>"  name="nombreProductoAC">
                                  <label for="floatingInput"><?php echo "Nombre actual del producto es:  " . $datostabla['nombreProducto'] ?></label>
                                </div>
                                
                                <div class="form-floating mb-3">
                                  <input type="file" value="<?php echo "xd" ?>" class="form-control" id="floatingPassword" placeholder="Password" name="fotoProducto">
                                  <label for="floatingPassword">Imagen del producto</label>
                                </div>

                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="floatingPassword" 
                                  placeholder="Password" value="<?php echo $datostabla['talla'] ?>" name="tallaAC">
                                  <label for="floatingPassword"><?php echo "Talla actual del producto es " . $datostabla['talla'] ?></label>
                                </div>
              
                                <div class="form-floating mb-3">
                                  <input type="number" class="form-control" id="floatingInput" 
                                  placeholder="name@example.com" value="<?php echo $datostabla['valor'] ?>"  name="valorAC">
                                  <label for="floatingInput"><?php echo "El precio actual del producto es " . $datostabla['valor'] ?></label>
                                </div>
              
                                <div class="form-floating mb-3">
                                  <input type="number" class="form-control" id="floatingInput" 
                                  placeholder="name@example.com" value="<?php echo $datostabla['Cantidad'] ?>"  name="CantidadAC">
                                  <label for="floatingTextarea2"><?php echo "El producto tiene una cantidad de " . $datostabla['Cantidad'] ?></label>
                                </div>

                                <select class="form-select w-100 mx-auto" aria-label="Default select example" name="CategoriaAC">
                                  <?php 
                                    $query = "SELECT * FROM categorias ORDER BY nomCategoria ASC;";
                                    $resultado = $conexion->prepare($query);
                                    $resultado -> execute();
                                    $datos = $resultado->fetchAll(PDO::FETCH_ASSOC);
                                    
                                    ?><option selected value="<?php echo $categorias['idCategoria'] ?>"><?php echo $datostabla['nomCategoria'] ?></option> <?php
                                    foreach ($datos as $categorias) : ?>
                                      <option value="<?php echo $categorias['idCategoria'] ?>"><?php echo $categorias['nomCategoria'] ?></option>
                                    <?php endforeach;
                                    
                                  ?>
                                </select>

                                <hr>
                                <input type="submit" value="Actualizar" class="btn btn-warning w-100 mb-5" id="submit-form" name="btnEditar">
                              </form>
                          </div>
                          <div class="modal-footer">
                            <button class="btn-cancelar btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button class="btn-guardar btn btn-primary" data-bs-dismiss="modal">Guardar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Final ventana emergente de editar producto-->
                    <!--Modal para confirar la eliminacion de un producto-->
                    <div class="modal fade" id="modalBorrar<?php echo $datostabla['idProductos'] ?>">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header bg-danger">
                            <h5 class="modal-tittle mx-auto fw-bold text-white">Borrar produto</h5>
                          </div>
                          <div class="modal-body">
                              <div class="emojis w-75 mx-auto d-flex justify-content-center mt-3 mb-4">
                                <p class="emoji display-3">😰</p>
                                <i class="fa-solid  fa-trash display-3 mt-2"></i>
                              </div>
                                <p class="borrarProducto text-center  display-6 mb-3 fw-bold">¿Seguro que quieres borrar este producto?</p>
                                <div class="buttons d-flex justify-content-center">
                                  <button class="btn-cancelar btn btn-primary rounded-pill px-5 py-2 me-3" data-bs-dismiss="modal">Cancelar</button>
                                    <form action="" method="post" class="d-flex justify-content-evenly">
                                      <input type="hidden" value="<?php echo $datostabla['idProductos'] ?>" name="idProductos">
                                      <input name="eliminar" type="submit" value="confirmar" class="btn-guardar btn btn-danger rounded-pill px-5 py-2 ms-3">
                                    </form>
                                </div>
                      
                        </div>
                      </div>
                    </div>
                </div>
                <!--Final modal de eliminar producto-->

                          <?php 
                            $queryvista = ("CALL PA_consultasProductos()");
                            $consulta = $conexion->prepare($querytabla);
                            $consulta->execute();
                            $productos = $consulta->fetchAll(PDO::FETCH_ASSOC);
                          
                          foreach ($resultados as $datostabla) : ?>
                            <div class="modal fade" id="modalConsultarvista<?php echo $datostabla['idProductos'] ?>">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-tittle">Revisar mi producto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="cajas-productos col-11 col-lg-4 col-sm-11 col-xxl-5 mx-auto mt-3" data-bs-toggle="modal" data-bs-target="#mimodal">
                              <div class="imagen-producto mx-2 my-2">
                                <img src="<?php echo $datostabla['fotoproducto']?>" alt="" class="w-100 h-100">
                              </div>
                              <div class="imagen-empresa mt-5 mb-2 ms-2">
                                <a href="Perfil.html"><img src="<?php echo $datostabla['fotoEmpresa']?>" alt="" class="img-empresa"></a>
                              </div>
                              <p class="nombre-producto fs-4 mx-2 text-center"><?php echo $datostabla['nombreProducto'] ?></p>
                              <p class="precios-productos fs-4 mx-2"><?php echo "$" . $datostabla['valor'] ?></p>
                              <div class="buttons d-flex justify-content-between mb-1 ms-2 me-2">
                                <i class="fa-solid fa-heart fs-3" id="corazon"></i>
                              <button class="agregaralcarrito btn btn-dark text-white rounded-pill">
                                codigo: 1
                              </button>
                              </div>
                            </div>
                          </div>
                           <div class="modal-footer">
                             <button class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                             <button class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
                           </div>
                        </div>
                      </div>
                    </div>
                          <?php endforeach;
                          
                          ?>
                          <?php }
                        ?>
                        
                      </tbody>
                    </table>

                    
                    <!--Configuracion de ventana emergente para la vista de los productos-->
                    
                     <!--Configuracion de ventana emergente para la vista de los productos-->
            </div>
        </section>
      
    </main>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>