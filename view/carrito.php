<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/carrito.css">
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d6c2ac0aaf.js" crossorigin="anonymous"></script>
    <title>Carrito de compras</title>
</head>
<body>
    <header class="d-flex align-items-center bg-black">
        <a href="Index.php" class="enlaces text-white ms-3 fs-4 fs-sm-6">
            <i class="fa-sharp fa-solid fa-circle-arrow-left me-3"></i>
            Salir
        </a>

        <div id="caja-img" class="h-100 mx-auto col-7 col-lg-3 col-xxl-4">
            <img src="IMG/Logo-removebg-preview.png" alt="" class="h-100 col-12" id="img-empresa">
        </div>
    </header>
    
    <main class="container-fluid">
        <div class="row col-lg-12">
            <section class="col-lg-12 d-flex justify-content-between mt-3 flex-wrap">
                <!---Seccion de productos que estan en el carrito-->
                <div class="col-12 col-lg-5 d-flex flex-column mb-5">
                    <h1 class="display-4 text-uppercase pb-2">Mi cesta</h1>
                    <hr class="mb-3">
                    <div class="div-productos w-100 border border-1 border-secondary d-flex flex-column justify-content-center">
                        <div class="icons mx-auto my-2">
                            <i class="fa-solid fa-face-frown display-3"></i>
                            <i class="fa-solid fa-cart-shopping display-3"></i>
                        </div>
                        <h2 class="text-center w-100 fw-bold display-5 my-2">Tu Cesta esta vacia</h2>
                        <a href="Index.html" class="boton-carrito btn rounded-pill
                        mb-3 w-75 mx-auto ">Ir a la tienda</a>
                    </div>
                </div>
                <!--Seccion de precios-->
                <div class="col-12 col-lg-4 d-flex flex-column">
                    <h4 class="text-uppercase display-5">subTotal:</h4>
                    <p class="fs-2">0.000$</p>
                    <button class="btn1"> Comprar ahora
                    </button>
                </div>

            </section>

        </div>

    </main>
    <script src="Bootstrap/js/bootstrap.bundle.js"></script>
    <script src="jquery-3.6.3.min.js"></script>
</body>
</html>