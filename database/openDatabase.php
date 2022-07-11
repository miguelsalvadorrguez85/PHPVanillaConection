<?php

//datos de conexión a la base de datos

$server = "localhost";
$user = "root";
$password = "";
$nameDatabase = "laspeliculasvistas";

try {
    $conexion = new PDO("mysql:host=$server; dbname=$nameDatabase", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión realizada correctamente";
}



catch(PDOException $e) {
    echo "La conexión ha fallado: " . $e->getMessage();
}