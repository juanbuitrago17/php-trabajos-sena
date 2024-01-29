<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html y php</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <header class="head"> 
        <img class="logo" src="imagenes/logo.png" alt= "logo del sena"/>
        <h1 class="text">SERVICIO NACIONAL DE APRENDIZAJE - SENA</h1>
    </header>
    <main class="main container">
        <table>
            <tr>
                <th><h2>TIPO DE DATOS</h2></th>
                <th><h2>SINTEXIS</h2></th>
                <th><h2>EJERCICIOS</h2></th>
            </tr>

            <tr> 
                <td rowspan="2">String-cadena</td>
                <td>Nombre = "Juan"</td>
                <td>
                    <?php
                        $nombre = "Juan";
                        echo "Su nombre es: $nombre <br>";  
                    ?>
                </td>
            </tr>
            <tr>
                <td>Apellido= "Buitrago"</td>
                 <td>
                    <?php
                        $apellido= "Buitrago";
                        echo "Su apellido es: $apellido";
                    ?>
                </td>
            </tr>

            <tr>
                <td rowspan="2">Integer-entero</td>
                <td>Numero = 17</td>
                <td>
                    <?php
                        $numero = 17;
                        var_dump($numero);    
                    ?>
                </td>
            </tr>
            <tr>
                <td>Numero2 = 30</td>
                <td>
                    <?php
                        $numero2 = 30;
                        var_dump($numero2);
                    ?>
                </td>
            </tr>

            <tr>
                <td rowspan="2">Float</td>
                <td>Numero = 23.678</td>
                <td>
                    <?php
                        $numero = 23.678;
                        var_dump($numero);
                    ?>
                </td>
            </tr>
            <tr>
                <td> Numero2 = 50.456</td>
                <td>
                    <?php
                        $numero2 = 50.456;
                        var_dump($numero2);
                    ?>
                </td>
            </tr>

            <tr>
                <td rowspan="2">>Boolean-Booleano</td>
                <td>Tipo = true</td>
                <td>
                    <?php
                        $tipo = true;
                        var_dump($tipo);
                    ?>
                </td>
            </tr>
            <tr>
                <td>Tipo2 = false </td>
                <td>
                    <?php
                        $tipo2 = false;
                        var_dump($tipo2);
                    ?>
                </td>
            </tr>


            <tr>
                <td rowspan="2">Array-Matriz</td>
                <td>Fruta = array("Fresa","Pera")</td>
                <td>
                    <?php
                        $fruta = array("Fresa","Pera");
                        var_dump($fruta);
                    ?>
                </td>
            </tr>
            <tr>
            <td>Color = array("Azul","Rojo") </td>
                <td>
                    <?php
                        $color = array("Azul","Rojo");
                        var_dump($color);
                    ?>
                </td>
            </tr>

            <tr>
            <td rowspan="2">Object-Clases y objetos</td>
                <td>Class Frut{ $color function _construct($color){$this->color}}</td>
                <td>
                    <?php
                        Class Frut{public $color; 
                            function __construct($color){
                                $this->color = $color;}
                            function fruta(){
                                return "La fresa es de color ". $this->color;
                            }
                        }
                        $myFrut = new Frut("rojo");
                        echo $myFrut -> fruta();
                    ?>
                </td>
            </tr>
            <tr>
                <td>Class Platos{ $comida function _construct($color){$this->comida}}</td>
                <td>
                    <?php
                        Class Platos{public $comida; 
                            function __construct($comida){
                                $this->comida = $comida;}
                            function comida(){
                                return "El plato tipico de medellin es ". $this->comida;
                            }
                        }
                        $plato = new Platos("bandeja paisa");
                        echo $plato -> comida();
                    ?>
                </td>
            </tr>

            <tr>
            <td rowspan="2">Valor Null</td>
                <td>Letra = null  </td>
                <td>
                    <?php
                        $letra = null;
                        var_dump($letra);
                    ?>
                </td>
            </tr>
            <tr>
                <td>Letra2 =2<br>letra2 = null  </td>
                <td>
                    <?php
                        $letra2 = 2;
                        $letra2 = null;
                        var_dump($letra);
                    ?>
                </td>
            </tr>

            <tr>
                <td rowspan="2">Longitud-Strlen</td>
                <td>echo strlen("Hola mundo") </td>
                <td>
                    <?php
                        echo strlen("Hola mundo");
                    ?>
                </td>
            </tr>
            <tr>
                <td>echo strlen("Hola a toda la gente") </td>
                <td>
                    <?php
                        echo strlen("Hola mundo a toda la gente");
                    ?>
                </td>
            </tr>

            <tr>
                <td rowspan="2">Contar palabras-Str_word_count</td>
                <td>echo str_word_count("Hola personas del sena") </td>
                <td>
                    <?php
                        echo str_word_count("Hola personas del sena");
                    ?>
                </td>
            </tr>
            <tr>
                <td>echo str_word_count("La programacion es divertida") </td>
                <td>
                    <?php
                        echo str_word_count("La programacion es divertida");
                    ?>
                </td>
            </tr>

            <tr>
                <td rowspan="2">Invertir una cadena-Strrev</td>
                <td>echo strrev("Juan Pablo Buitrago") </td>
                <td>
                    <?php
                        echo strrev("Juan Pablo Buitrago");
                    ?>
                </td>
            </tr>
            <tr>
                <td>echo strrev("SERVICIO NACIONAL DE APRENDIZAJE") </td>
                <td>
                    <?php
                        echo strrev("SERVICIO NACIONAL DE APRENDIZAJE");
                    ?>
                </td>
            </tr>

            <tr>
            <td rowspan="2">Busca un texto-Strpos</td>
                <td>echo strpos("Buscara una palabra la cual es: palabra","palabra") </td>
                <td>
                    <?php
                        echo strpos("Buscara una palabra la cual es: palabra","palabra");
                    ?>
                </td>
            </tr>
            <tr>
                <td>echo strpos("La casa de las brujas","brujas") </td>
                <td>
                    <?php
                        echo strpos("La casa de las brujas","brujas");
                    ?>
                </td>
            </tr>
            
            <tr>
            <td rowspan="2">Remplazar texto-Str_replace</td>
                <td>echo Str_replace("hola","Buenos dias","Hola a todos") </td>
                <td>
                    <?php
                        echo Str_replace("Hola","Buenos dias","Hola a todos");
                    ?>
                </td>
            </tr>
            <tr>
                <td>echo Str_replace("Perdedor","Ganador","El es el Perdedor") </td>
                <td>
                    <?php
                        echo Str_replace("Perdedor","Ganador","El es el Perdedor");
                    ?>
                </td>
            </tr>
            


        </table>
    </main>
    <footer class="foo"><h3>© Copyright SENA 2023 - Juan Pablo Buitrago</h3></footer>
    
</body>
</html>