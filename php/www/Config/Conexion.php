<?php

    $host = "database";
    $user = "root";
    $pass = "Diego.2020";
    $db = "loginbd";

    $conexion = new mysqli($host, $user, $pass, $db);

    if(!$conexion) {
        echo "Conexion fallida";
    }
    