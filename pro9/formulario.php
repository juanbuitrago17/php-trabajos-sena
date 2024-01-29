<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header class="head">    
<input type="button" value="Eliminar" name="borrar" onclick="paginaBorrar()" class="button button2">
<input type="button" value="Consultar" name="consultar" onclick="paginaConsultar()" class="button button2">
</header>

<main>
<h2>Crear Registro</h2>
<form method="post" action="formulario.php" name="form1">
    <table class="tabla1">
    <tr>
    <td class= "td2"><label for="documento">Documento:</label></td>
    <td><input type="text" name="documento"><br><br></td>
    </tr>
    <tr>
    <td class= "td2"><label for="nombre">Nombre:</label></td>
    <td><input type="text" name="nombre" required><br><br></td>
    </tr>
    <tr>
    <td class= "td2"><label for="apellido">Apellido:</label></td>
    <td><input type="text" name="apellido"><br><br></td>
    </tr>
    <tr>
    <td class= "td2"><label for="telefono">Teléfono:</label></td>
    <td><input type="text" name="telefono" required><br><br></td>
    </tr>
    <tr>
    <td class= "td2"><label for="direccion">Dirección:</label></td>
    <td><input type="text" name="direccion"><br><br></td>
    </tr>
    <tr>
    <td colspan="2"><input type="submit" value="Registrar" name="registrar" class="button"></td>
    </tr>
    </table>
</form>
<?php

if (isset($_POST["registrar"])) {
    include_once "conexion.php";
    $mensaje="";
    $documento = $_POST["documento"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $direccion= $_POST["direccion"];

    $sql= "INSERT INTO contactos( documento,nombre,apellido,telefono,direccion) VALUES ('$documento','$nombre','$apellido','$telefono','$direccion')";

    if (mysqli_query($conn, $sql)) {
        $mensaje = "<h2>El contacto se creo exitosamente: </h2><br>";
        $mensaje .= "<table><tr><th>Documento</th><th>Nombre</th><th>Apellido</th><th>Telefono</th><th>Direccion</th></tr>";
        $mensaje .= "<tr><td class='td'>" .$documento ."</td><td class='td'>". $nombre ."</td><td class='td'>". $apellido ."</td><td class='td'>".$telefono ."</td><td class='td'>".$direccion ."</td></tr>";
        $mensaje .="</table>";
    } else {
        echo "No se pudo registrar el contacto\n" . mysqli_error($conn);
    }

    echo "$mensaje";
    mysqli_close($conn);

}
?>
<script>
    function paginaBorrar(){
        window.location = "borrar.php";
    }
    function paginaConsultar(){
        window.location = "consulta.php";
    }
</script>
</main>
</body>
</html>