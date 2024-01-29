<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras condicionales</title>
</head>
<body style="background-color: #AEDEFC">
    <h1 style="color:#190482">CONDICIONALES</h1>
    <h2 style="color:#F875AA">DECLARACION IF</h2>

    <h3 style="color:#504099" >PRIMER EJEMPLO</h3>
    <h3><p>condicion que valida la edad de una persona y muesta si es de la tercera edad</p>
    <form name="form1" method="post">
    <label for="edad">Ingrese su edad </label>
    <input type="text" name="edad" id="edad" placeholder="edad"><br>
    <input type="submit" value="Enviar" name="form1"><br>
    </form><br>

    <?php
    if (isset($_POST["form1"])) {
    $edad = $_POST["edad"];  
    if($edad>= 60){
        echo "Eres una persona de la tercera edad";
    }}
    ?>

    <br>

    <h3 style="color:#504099" >SEGUNDO EJEMPLO</h3>
    <h3><p>condicion que valida un numero y muestra si este es negativo</p>
    <form name="form2" method="post">
    <label for="numero">Ingrese un numero positivo </label>
    <input type="text" name="numero" id="numero" placeholder="numero"><br>
    <input type="submit" value="Enviar" name="form2"><br>
    </form><br>

    <?php
    if (isset($_POST["form2"])) {
    $num = $_POST["numero"];
    if($num < 0 ){
        echo "El numero es negativo";
    }}
    ?></h3>
  
    <br>

    <h2 style="color:#F875AA">DECLARACION IF-ELSE</h2>  
    <h3 style="color:#504099" >PRIMER EJEMPLO</h3>
    <h3><p>condicion que valida si la persona es apta para ver una pelicula, la cual es para mayores de 15</p>
    <form name="form3" method="post">
    <label for="edad2">Ingrese la edad </label>
    <input type="text" name="edad2" id="edad2"  placeholder="edad" ><br>
    <input type="submit" value="Enviar" name=form3><br>
    </form><br>

    <?php
    if (isset($_POST["form3"])) {
    $edad2= $_POST["edad2"];
    if($edad2 >= 15 ){
        echo "Usted es apto para ver esta pelicula";
    }else{
        echo "Usted no es apto para ver esta pelicula";
    }}
    ?></h3> 
    <h3 style="color:#504099" >SEGUNDO EJEMPLO</h3>
    <h3><p>condicion que valida si dos numeros son mayores a 0 mostrando su multiplicasion, si no un mensaje que diga que es 0</p>
    <form name="form4" method="post">
    <label for="num1">Ingrese el primer numero </label>
    <input type="text" name="num1" id="num1" placeholder="primer numero"><br><br> 
    <label for="num2">Ingrese la edad </label>
    <input type="text" name="num2" id="num2" placeholder="segundo numero"><br>
    <input type="submit" value="Enviar" name=form4><br>
    </form><br>

    <?php
    if (isset($_POST["form4"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $num1 * $num2;
    if($num1 === 0 || $num2 === 0 ){
        echo "La multiplicacion de ". $num1. " * ". $num2. " es cero ";
    }else{
        echo "La multiplicacion de ". $num1. " * ". $num2. " es ". $num3;
    }}
    ?></h3>
     <br>

<h2 style="color:#F875AA">DECLARACION IF-ELSEIF-ELSE</h2>  
<h3 style="color:#504099" >PRIMER EJEMPLO</h3>
<h3><p>condicion que valida si un numero es mayor, igual o menor que 0</p>
<form name="form5" method="post">
<label for="num4">Ingrese un numero</label>
<input type="text" name="num4" id="num4" placeholder="numero"><br>
<input type="submit" value="Enviar"name=form5><br>
</form><br>

<?php
if (isset($_POST["form5"])) {
$num4 = $_POST["num4"];
if($num4 > 0 ){
    echo "el numero ". $num4. " es mayor a 0";
}elseif($num4<0){
    echo "el numero ". $num4. " es menor a 0";
}else{
    echo "el numero ". $num4. " es igual a 0";
}}
?></h3><br>

<h3 style="color:#504099" >SEGUNDO EJEMPLO</h3>
<h3><p>condicion que valida si la persona es adulto, adulto mayor o adolecente</p>
<form name="form6" method="post">
<label for="edad3">Ingrese una edad</label>
<input type="text" name="edad3" id="edad3"  placeholder="edad"><br>
<input type="submit" value="Enviar" name=form6><br>
</form><br>

<?php
if (isset($_POST["form6"])) {
$edad3 = $_POST["edad3"];

if($edad3 >= 60 ){
    echo "Eres un adulto mayor";
}elseif($edad3 >= 18){
    echo "Eres un adulto" ;
}else{
    echo "Eres un adolecente";
}}
?></h3><br>

<h2 style="color:#F875AA">DECLARACION SWITCH</h2>  
<h3 style="color:#504099" >PRIMER EJEMPLO</h3>
<h3><p>condicion que valida el mes en que estamos</p>
<form name="form7" method="post">
<label for="num5">Ingrese un numero</label>
<input type="text" name="num5" id="num5" placeholder="numero" ><br>
<input type="submit" value="Enviar" name=form7><br>
</form><br>

<?php
if (isset($_POST["form7"])) {
$mes = $_POST["num5"];
switch ($mes) {
    case '1':
        echo "El mes ".$mes. "  es enero";
    break;
    case '2':
        echo "El mes ".$mes. "  es febrero";
    break;
    case '3':
        echo "El mes ".$mes. "  es marzo";
    break;
    case '4':
        echo "El mes ".$mes. "  es abril";
        break;
    case '5':
        echo "El mes ".$mes. "  es mayo";
    break;
    case '6':
        echo "El mes ".$mes. "  es junio";
    break;
    case '7':
        echo "El mes ".$mes. "  es julio";
        break;
    case '8':
        echo "El mes ".$mes. "  es agosto";
    break;
    case '9':
        echo "El mes ".$mes. "  es septiembre";
    break;
    case '10':
        echo "El mes ".$mes. "  es octubre";
        break;
    case '11':
        echo "El mes  ".$mes. "  es noviembre";
    break;
    case '12':
        echo "El mes  ".$mes. "  es diciembre";
    break;
    default:
        echo "Ese mes ".$mes. " no lo conozco";
    break;
}}
?></h3><br>

<h3 style="color:#504099" >SEGUNDO EJEMPLO</h3>
<h3><p>condicion que valida si el color es primario o secundario</p>
<form name="form8" method="post">
<label for="color">Ingrese un color</label>
<input type="text" name="color" id="color" placeholder="color"><br>
<input type="submit" value="Enviar" name=form8><br>
</form><br>

<?php
if (isset($_POST["form8"])) {
$color = $_POST["color"];
switch ($color) {
    case 'azul':
        echo "El color  ".$color." es primario";
        break;
    case 'amarrillo':
        echo "El color ".$color."  es primario";
    break;
    case 'rojo':
        echo "El color ".$color."  es primario";
    break;
    case 'verde':
        echo "El color ".$color."  es secundario";
    break;
    case 'naranja':
        echo "El color  ".$color." es secundario";
    break;
    case 'violeta':
        echo "El color ".$color." es secundario";
    break;
    default:
        echo "El color ".$color." no es ni primario ni secundario";
    break;
}}
?></h3><br>

</body>
</html>