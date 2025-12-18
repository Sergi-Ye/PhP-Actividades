<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

if(isset($_GET['nombre'])){
    $nombre = (string)$_GET['nombre'];
    $num1 = (string)$_GET['num1'];
    $num2 = (string)$_GET['num2'];
    $valor1 = "impar";
    $valor2 = "impar";
    $menor = $num1;
    $mayor = $num2;

    if($num1 % 2 == 0){
        $valor1= "par";
    }
    if($num2 % 2 == 0){
        $valor2= "par";
    }
    if($num2 < $num1){
        $menor = $num2;
        $mayor = $num1;
    }

    echo "<b>Hola $nombre!</b><br>"; 
    echo "$num1 es $valor1 y $num2 es $valor2<br>";

    if(($num1<0 || $num1>15)){
        echo "Error " . $num1 . " fuera de rango<br>";
    }else if(($num2<0 || $num2>15)){
        echo "Error " . $num2 . " fuera de rango<br>";
    }else{
        for($i = $menor; $i<=$mayor; $i++){
            if($i % 2 ==0){
                echo "<p style='color: green'>$i</p>";
            }else{
                echo "<p style='color: orange'>$i</p>";
            }
        }
    }

}

?>

<div style="border: 1px solid; display: inline-block; padding: 5px;">

    <p><b>Datos Personales</b></p>

    <form method="get" style="display: inline-block;">
        Nombre: <br>
        <input type="text" name="nombre"><br>

        Numero 1:
        <input type="text" name="num1">
        <br>
        Numero 2:
        <input type="text" name="num2">
        <br>
        <input type="submit" value="Enviar">

    </form>


</div>


</body>
</html>