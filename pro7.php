<?php
function familia(){
    $integrantes = " ";
    echo "\n";
    echo "Ingrese el apellido de la familia: ";
    $apellido= trim(fgets(STDIN));
    for ($i = 1; $i <= 3; $i++) {
        echo "\nIngrese los datos del ". $i ." integrante de la familia";
        echo "\n";
        echo "Ingrese su nombre: ";
        $nombre= trim(fgets(STDIN));
        echo "Ingrese su año de nacimiento: ";
        $ano= trim(fgets(STDIN));
        $anoActual = date("Y");
        $edad = $anoActual - $ano;
        //!.=¡ concatena los datos en integrantes
        $integrantes .= "\nEstos son los datos del ". $i. " integrante\n\n". "Nombre: ".$nombre."\nApellido: ".$apellido."\nEdad: ".$edad ." años\n";
    }
    return $integrantes;
}

echo familia();
echo "\n------Datos de la familia-----\n";
?>