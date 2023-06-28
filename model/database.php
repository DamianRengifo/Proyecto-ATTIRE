<?php

    function pdo_connect_mysql(){

        $DATABASE_HOST = 'localhost'; //servidor en donde esta la base de datos del proyecto
        $DATABASE_USER = 'root'; //usuario de mysql
        $DATABASE_PASS = ''; //contraseña del usuario en mysql
        $DATABASE_NAME = 'bd_proyecto'; //nombre de la base de datos

        try {
            return $conexion = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
            $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exeption) {
            die('Error al conectar la base de datos: ' . $exeption->getMessage());
        }

    }

    $conexion = pdo_connect_mysql();

?>