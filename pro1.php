<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer php</title>
</head>
<body style="background-color: #6AF9F9">
    <h1>Verificacion servicio militar</h1>
    <form name="servicio_militar" method="post">
        <labe for="nombre">Nombre completo</label>
        <input  type="text" name="nombre" id="nombre" placeholder="Nombre completo"/><br><br>
        <label for="edad">Edad</label>
        <input  type="text" name="edad" id="edad" placeholder="edad"/><br><br>
        <form for="nacionalidad">nacionalidad</label>
        <input  type="text" name="nacionalidad" id="nacionalidad" placeholder="pais de nacimiento"/><br><br>
        <form for="rh">RH</label>
        <input  type="text" name="rh" id="rh" placeholder="RH"/><br><br>
        <p> Seleccione su genero</p>
        <label for="masculino">Masculino</label>
        <input type="radio" name="genero" id="masculino" value="Masculino">
        <label for="femenino">Femenino</label>
        <input type="radio" name="genero" id="femenino" value="Femenino"><br><br>
        <input type="submit" value="Enviar" ><br><br><br>
        <?php
        $nombre = $_POST["nombre"];
        $edad = intval($_POST["edad"]);
        $nacionalidad = $_POST["nacionalidad"];
        $rh = $_POST["rh"];
        $genero = $_POST["genero"];
        $fechaNacimiento = 2023-$edad;
        
        if($edad>= 18 && $edad<=26 && $genero == "Masculino" && $nacionalidad == "colombiana"){
           $apto = "Usted es apto para el servivio militar";  
        } else {
            $apto = "Usted no es apto para el servivio militar";
        }

        echo "Su nombre es: ". $nombre."<br>";
        echo "Su edad es: ". $edad."<br>";
        echo "Su genero es: ". $genero."<br>";
        echo "Su año de nacimiento es: ". $fechaNacimiento."<br>";
        echo "Su nacionalidad es: ". $nacionalidad."<br>";
        echo "Su RH es: ". $rh."<br>";
        echo $apto;
        ?>
</body>
</html>