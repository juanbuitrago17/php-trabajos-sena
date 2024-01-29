<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar contacto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header class="head">
    <input type="button" value="Registrar" name="agregar" onclick="paginaRegistro()" class="button button2">
    <input type="button" value="Eliminar" name="borrar" onclick="paginaBorrar()" class="button button2">
</header>
<main class="container">
    <h2>Consultar Registro de Contacto</h2>
    <form method="post" action="consulta.php" name="form2">
    <table class="tabla1">
    <tr>
    <td><label for="documento">Documento:</label></td>
    <td><br><input type="text" name="documento"><br><br></td>
    </tr>
    <tr>
    <td colspan="2"><input type="submit" value="Buscar" name="buscar" class="button"></td>
    </tr>
    </table>
    </form>
<?php

if (isset($_POST["buscar"])) {
    include_once "conexion.php";

    $documento = $_POST["documento"];

    $resultado = mysqli_query($conn, "SELECT * FROM contactos WHERE documento = $documento");
    if ($resultado !== false) {
        if (mysqli_num_rows($resultado) > 0) {
            echo "<h2>Registro de contacto:</h2>";
            while ($consulta = mysqli_fetch_assoc($resultado)) {
                echo "<table><tr><th>Documento </th><th> Nombre  </th><th> Apellido </th><th> Teléfono </th><th> Direccion </th></tr> 
                <tr><td class='td'>". $consulta['documento']. "</td><td class='td'>". $consulta['nombre']."</td><td class='td'>".$consulta['apellido']."</td><td class='td'>".$consulta['telefono']."</td><td class='td'>".$consulta['direccion']."</td></tr>";
                
            }
        } else {
            echo "No se encontraron registros para el documento: $documento";
        }
    } 
    else {
        echo "Error al ejecutar la consulta: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>
<script>
    function paginaRegistro(){
        window.location = "formulario.php";
    }
    function paginaBorrar(){
        window.location = "borrar.php";
    }

</script>
</main>
</body>
</html>

