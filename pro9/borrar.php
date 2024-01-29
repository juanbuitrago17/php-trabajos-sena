<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar contacto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header class="head">
    <input type="button" value="Registrar" name="agregar" onclick="paginaRegistro()" class="button button2">
    <input type="button" value="consultar" name="consultar" onclick="paginaConsultar()" class="button button2">
</header>  

<main>  
    <h2>Eliminar Registro de Contacto</h2>
    <form method="post" action="borrar.php" name="form3">
    <table class="tabla1">
    <tr>
    <td><label for="documento">Documento:</label></td>
    <td><br><input type="text" name="documento"><br><br></td>
    </tr>
    <tr>
    <td colspan="2"><input type="submit" value="Eliminar" name="eliminar" class="button"></td>
    </tr>
    </table>
    </form>
<?php

if (isset($_POST["eliminar"])) {
    include_once "conexion.php";

    $documento = $_POST["documento"];

    $sql = mysqli_query($conn,"DELETE FROM contactos WHERE documento = $documento");
    if ($sql !== false) {
        if (mysqli_affected_rows($conn) > 0) {
        echo "<h2>El contacto se borro exitosamente </h2>";
        } else {
            echo "No se puede borra el registros para el documento: ". $documento. " verifique que exista";
        }
    } else {
        echo "Error al ejecutar la consulta: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<script>
    function paginaRegistro(){
        window.location = "formulario.php";
    }
    function paginaConsultar(){
        window.location = "consulta.php";
    }
</script>

</main>
</body>
</html>