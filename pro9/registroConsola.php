<?php
include_once "conexion.php";
echo "\nRegistrar 5 contactos\n";

for($i = 1; $i <=5; $i++){
    echo "\nRegistro del $i conctacto\n\n";
    
    echo "Documento: ";
    $documento = trim(fgets(STDIN));

    echo "Nombre: ";
    $nombre = trim(fgets(STDIN));

    echo "Apellido: ";
    $apellido = trim(fgets(STDIN));

    echo "Teléfono: ";
    $telefono = trim(fgets(STDIN));

    echo "Dirección: ";
    $direccion = trim(fgets(STDIN));

    $sql= "INSERT INTO contactos( documento,nombre,apellido,telefono,direccion) VALUES ('$documento','$nombre','$apellido','$telefono','$direccion')";

    if (mysqli_query($conn, $sql)) {
        echo "Se registro los contactos exictosamente ";
    } else {
        echo "No se pudo registrar el contacto\n" . mysqli_error($conn);
    }

}
mysqli_close($conn);
?>