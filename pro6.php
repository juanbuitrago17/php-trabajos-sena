<?php
$integrantes = " ";
function familia($apellido){
    echo "\n";
    echo "Ingrese su nombre: ";
    $nombre= trim(fgets(STDIN));
    echo "Ingrese su año de nacimiento: ";
    $ano= trim(fgets(STDIN));
    $anoActual = date("Y");
    $edad = $anoActual - $ano;
    return "Nombre: ".$nombre."\nApellido: ".$apellido."\nEdad: ".$edad ." años\n";
}

echo "\n";
echo "Ingrese el apellido de la familia: ";
$apellido= trim(fgets(STDIN));

for ($i = 1; $i <= 3; $i++) {
    echo "\nIngrese los datos del ". $i ." integrante de la familia";
    echo "\n";
    //!.=¡ concatena los datos en integrantes
    $integrantes .= "\nEstos son los datos del ". $i. " integrante\n\n". familia($apellido);
}

echo "\n------Datos de la familia-----\n";
echo $integrantes;
?>