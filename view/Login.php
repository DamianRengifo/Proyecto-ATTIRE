<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/stylelogin.css">
    <link rel="stylesheet" href="CSS/styleregistro.css">
    <title>Iniciar Sesion</title>
</head>
<body>

    <div class="marca">
        <img src="IMG/logo.png" alt="Logo Attire">
    </div>
    <div class="login d-flex flex-column">
    <button class="btn btn-primary rounded-pill fw-bold fs-5" data-bs-toggle = "modal" data-bs-target="#mimodal">
        Iniciar sesion como empresa
    </button>

    <div class="modal fade" id="mimodal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-tittle text-center mx-auto">Iniciar sesion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <form action="" method="post" class="mx-auto mt-3">
                            <div class="form-floating mb-3 w-100">
                                <input type="email" value="<?php ?>" class="form-control inputemail w-100 border-2 border-dark-subtle" id="floatingPassword" placeholder="Password" name="email" >
                                <label for="floatingPassword">Por favor digite el email de su empresa</label>
                            </div>

                            <div class="form-floating mb-3 w-100">
                                <input type="password" value="<?php  ?>" class="form-control inputcontra w-100 border-2 border-dark-subtle" id="floatingPassword" placeholder="Password" name="contraseña">
                                <label for="floatingPassword">Contraseña</label>
                            </div>

                            <input type="submit" class="btn btn-primary rounded-pill w-50" value="Iniciar sesion" name="btnEmpresa">
                        </form>
                    </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

        <div class="form">
        
            <form id="login" action="" method="post">

                <?php
                
                    //include("modelo/conexion_bd.php");
                    //include("controlador/controlador.php");

                    include("../model/database.php");
                    include("../controller/controlador-login.php");
                    require('../controller/registrarUsuario.php');
                    require('../controller/iniciarSesionEmpresa.php')

                ?>

                <input type="text" name="Usuario" id="User" placeholder="Usuario" autofocus tabindex="1">
                <input type="password" name="Contraseña" id="Password" placeholder="Contraseña" tabindex="2">
                <input type="submit" name="btnlogin" value="Iniciar Sesion" class="button">
                <a href="empresa.php" class="button w-75 rounded-pill text-center text-decoration-none" >Crear empresa</a>


                <hr>

                <div class="btn-dlg">

                    <label for="btn-registro">
                        
                        Crear cuenta nueva

                    </label>

                </div>

                <input type="checkbox" id="btn-registro">

                <div class="dlg-registro">

                    <div class="cont-modal">

                        <div class="registro">

                            <div class="formRegistro" class="modal-dialog modal-lg">
                                
                                <form id="registro" action="../controller//registrarUsuario.php" method="post">

                                    <div class="datos">

                                        <div class="InfoPers">

                                            <div class="tipoDoc">
                                                <select name="tipoDoc" id="tipoDoc">
                                                    <option value="null">Tipo de documento</option>
                                                    <option value="CC">CC</option>
                                                    <option value="CE">CE</option>
                                                </select>
                                            </div>

                                            <div class="docCliente">
                                                <input type="text" name="docCliente" placeholder="Numero de documento">
                                            </div>

                                            <div class="nomCliente">
                                                <input type="text" name="nomCliente" placeholder="Nombre">
                                            </div>

                                            <div class="apellCliente">
                                                <input type="text" name="apellCliente" placeholder="Apellidos">
                                            </div>

                                        </div>

                                        <div class="InfoCont">

                                            <div class="emailCliente">
                                                <input type="email" name="emailCliente" placeholder="Correo electronico">
                                            </div>

                                            <div class="telCliente">
                                                <input type="text" name="telCliente" placeholder="Telefono">
                                            </div>

                                            <div class="claveiniCliente">
                                                <input type="password" name="claveInicialCliente" placeholder="Contraseña">
                                            </div>

                                            <div class="claveconfCliente">
                                                <input type="password" name="claveConfirmCliente" placeholder="Confirmar contraseña">
                                            </div>


                                        </div>

                                    </div>
                                        <?php
                                            //include("modelo/conexion_bd.php");
                                            //include("controlador/controlador_registrar_usuario.php");

                                            //include("../model/database.php");
                                            //include("../controller/controlador-login.php");
                                        ?>

                                    <div id="boton">
                                        <input type="submit" name="btnregistro" value="Registrarse" class="button">
                                    </div>

                                </form>
                            </div>
                        
                        </div>
                    
                    </div>

                    <label for="btn-registro" class="cerrar-modal">

                    </label>
                
                </div>
            </form>


        </div>
    
    </div>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>