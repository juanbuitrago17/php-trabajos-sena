<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA</title>
</head>
<body style="background-color: #45FFCA">
    <h1 style="color:#0E21A0">CALCULADORA</h1>
    <h2 style="color:#793FDF">Ingrese los datos de las tablas</h2>
    <form name="form1" method="post">
    <label num="num">Ingrese el numero de la primera tabla </label>
    <input type="text" name="num" id="num" placeholder="Numero"><br><br>    
    <label inicio="inicio">Ingrese el numero con el cual quiere que empieze su tabla </label>
    <input type="text" name="inicio" id="inicio" placeholder="Numero inicial"><br><br>
    <label fin="fin">Ingrese el numero con el cual quiere que termine su tabla</label>
    <input type="text" name="fin" id="fin" placeholder="Numero final"><br><br>
    <label num2="num2">Ingrese el numero de la segunda tabla </label>
    <input type="text" name="num2" id="num2" placeholder="Numero"><br><br>   
    <label inicio2="inicio2">Ingrese el numero con el cual quiere que empieze su segunda tabla </label>
    <input type="text" name="inicio2" id="inicio2" placeholder="Numero inicial"><br><br>
    <label fin2="fin2">Ingrese el numero con el cual quiere que termine su segunda tabla</label>
    <input type="text" name="fin2" id="fin2" placeholder="Numero final"><br><br>
    <input type="submit" value="Enviar" name="form1"><br>
    </form>
            
    <?php
        function tabla($num,$i){
            static $resultado;
            $resultado = $num * $i;
            echo $num. " * ". $i. " = ". $resultado."<br>";
        }
        echo "<br>";
        echo "<h2 style=color:#793FDF>TABLA #1</h2>";
        echo "<br>";
        if (isset($_POST["form1"])) {
            $inicio= $_POST["inicio"]; 
            $fin = $_POST["fin"]; 
            $num = $_POST["num"]; 
        }

        if ($inicio<$fin) {
            for ($i=$inicio; $i <=$fin ; $i++) { 
                tabla($num,$i);
            }
        }
        else{
            echo " UPS!!. Escribiste un numero mal. Esto es porque el numero donde inicia la tabla es mas alto que donde termina.<br>";
        }
        echo "<br>";
        echo "<h2 style=color:#793FDF>TABLA #2</h2>";
        echo "<br>";
        if (isset($_POST["form1"])) {
            $inicio2= $_POST["inicio2"]; 
            $fin2 = $_POST["fin2"]; 
            $num2 = $_POST["num2"]; 
        }

        if ($inicio2<$fin2) {
            for ($i=$inicio2; $i <=$fin2 ; $i++) { 
                tabla($num2,$i);
            }
        }
        else{
            echo " UPS!!. Escribiste un numero mal. Esto es porque el numero donde inicia la tabla es mas alto que donde termina.<br>";
        }
    ?>     
</body>
</html>