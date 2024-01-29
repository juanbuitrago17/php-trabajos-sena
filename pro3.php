<?php
echo "\n";
echo "        TIENDA DE DOÑA SEGUNDA \n";
echo "\n";
echo "Nombre: ";
$nombre = trim(fgets(STDIN));
echo "Telefono: ";
$telefono = trim(fgets(STDIN));
echo "Direccion: ";
$direccion = trim(fgets(STDIN));
echo "Género: ";
$genero = trim(fgets(STDIN));
echo "Edad: ";
$edad = trim(fgets(STDIN));
echo "Cantidad de productos: ";
$cantidad = trim(fgets(STDIN));
echo "Total de la compra: ";
$total = trim(fgets(STDIN));
switch ($edad) {
    case $edad <= 12:
       echo "Incluye alimentos azucarados: ";
       $alimenAzuca= trim(fgets(STDIN));
       if ($alimenAzuca == "No" || $alimenAzuca == "no") {
        echo "Personaje favorito: ";
        $personaje = trim(fgets(STDIN));
        echo "Nombre del acudiente: ";
        $nombreAcu= trim(fgets(STDIN));
        
       $subTotal = intval(($total * 100) /119);
       $descuento = intval($subTotal * 0.2);
       $valorFinal = $subTotal -  $descuento;
       echo " \n ";
       echo "           FACTURA\n";
       echo "\n";
       echo "Nombre: ".$nombre. "\n";
       echo "Nombre acudiente: ".$nombreAcu. "\n";
       echo "Telefono: ".$telefono."\n";
       echo "Direccion: ".$direccion. "\n";
       echo "Personaje favorito: ".$personaje. "\n";
       echo "Subtotal: COP ".$subTotal. "\n";
       echo "IVA: No aplica \n";
       echo "Descuento: COP ".$descuento. "\n";
       echo "Total factura: COP ".$valorFinal . "\n";
       echo "\n";
       exit("¡Gracias por su compra, vuelva pronto! \n");
       }
        break;
    
    case $edad >= 60:
       $subTotal = intval(($total * 100) /119);
       $descuento = intval($subTotal * 0.4);
       $valorFinal = $subTotal -  $descuento;
       echo " \n ";
       echo "           FACTURA\n";
       echo "\n";
       echo "Nombre: ".$nombre. "\n";
       echo "Telefono: ".$telefono."\n";
       echo "Direccion: ".$direccion. "\n";
       echo "Subtotal: COP ".$subTotal. "\n";
       echo "IVA: No aplica \n";
       echo "Descuento: COP ".$descuento. "\n";
       echo "Total factura: COP ".$valorFinal . "\n";
       echo "\n";
       exit("¡Gracias por su compra, vuelva pronto! \n");
       break;
}
if ($edad <= 40  && $genero =="Femenino" || $genero =="femenino" ) {
    echo "Tiene hijos: ";
    $tieneHijos = trim(fgets(STDIN));
    if ($tieneHijos == "Si" || $tieneHijos == "si"  ) {
    echo "Ingrese el año de nacimiento de su hijo: ";
    $añoHijo = trim(fgets(STDIN));
    $añoActual = date("Y");   
    $edadHijo = $añoHijo - $añoActual;
    if ($edadHijo <= 2) {
    echo "Ingrese su equipo de futbol: ";
    $equipo = trim(fgets(STDIN));
    $subTotal = intval(($total * 100) /119);
    $descuento = intval($subTotal * 0.15);
    $valorFinal = $subTotal -  $descuento;
    echo " \n ";
    echo "           FACTURA\n";
    echo "\n";
    echo "Nombre: ".$nombre. "\n";
    echo "Telefono: ".$telefono."\n";
    echo "Direccion: ".$direccion. "\n";
    echo "Equipo de futbol: ".$equipo. "\n";
    echo "Subtotal: COP ".$subTotal. "\n";
    echo "IVA: No aplica \n";
    echo "Descuento: COP ".$descuento. "\n";
    echo "Total factura: COP ".$valorFinal . "\n";
    echo "\n";
    exit("¡Gracias por su compra, vuelva pronto! \n");
    }
    }
}
echo "Representas a una empresa u organizacion: ";
$perJuridica = trim(fgets(STDIN));
if ($perJuridica =="No" || $perJuridica =="no") {
 if($cantidad >=10){
    $subTotal = intval(($total * 100) /119);
    $descuento = intval($subTotal * 0.1);
    $valorFinal = $subTotal -  $descuento;
    echo " \n ";
    echo "           FACTURA\n";
    echo "\n";
    echo "Nombre: ".$nombre. "\n";
    echo "Telefono: ".$telefono."\n";
    echo "Direccion: ".$direccion. "\n";
    echo "Subtotal: COP ".$subTotal. "\n";
    echo "IVA: No aplica \n";
    echo "Descuento: COP ".$descuento. "\n";
    echo "Total factura: COP ".$valorFinal . "\n";
    echo "\n";
    exit("¡Gracias por su compra, vuelva pronto! \n");

 }
 
}else{
    $subTotal = intval(($total * 100) /119);
    $iva = $total - $subTotal;
    echo "\n";
    echo "                    FACTURA\n";
    echo "Nombre: ".$nombre. "\n";
    echo "Telefono: ".$telefono."\n";
    echo "Direccion: ".$direccion. "\n";
    echo "Subtotal: COP ".$subTotal. "\n";
    echo "IVA: COP ".$iva. "\n";
    echo "Descuento: No aplica\n";
    echo "Total factura COP ".$total. "\n";
    exit("¡Gracias por su compra, vuelva pronto! \n");
 }
?>

