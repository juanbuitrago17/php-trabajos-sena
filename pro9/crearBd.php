<?php
include_once "conexion.php";

$sql = "CREATE DATABASE IF NOT EXISTS directorio";
if (!mysqli_query($conn, $sql)) {
echo "\nError creating database: " . mysqli_error($conn);
}

mysqli_select_db($conn, "directorio");

$sql = "CREATE TABLE IF NOT EXISTS contactos(
    documento VARCHAR(11) PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    direccion VARCHAR(60) 
    )";

if(mysqli_query($conn,$sql)){
    echo "\nTabla contactos se creo correctamente";
}else{
    echo "\nError en crear la tabla ". mysqli_error($conn);
}

mysqli_close($conn);
?>