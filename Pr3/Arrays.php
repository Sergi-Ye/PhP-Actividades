<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act1</title>
</head>
<body>
    
<div style="border: 1px solid black; width: 15%">
    <h1><b>Ejercicio 1</b></h1>
    
    <?php
    $datos = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => 23, "ciudad" => "bcn");

    $contador = 1;
    foreach ($datos as $value) {
        echo "dato $contador:  $value<br>";
        $contador++;
    }
    ?>
</div><br>

<div style="border: 1px solid black; width: 15%">
    <h1><b>Ejercicio 2</b></h1>

    <?php
    $datos = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => 23, "ciudad" => "bcn");
    
    foreach ($datos as $key => $value) {
        echo "$key: $value <br>";
    }
    ?>
</div><br>

<div style="border: 1px solid black; width: 15%">
    <h1><b>Ejercicio 3</b></h1>

    <?php

    $datos = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => 23, "ciudad" => "bcn");
    
    $datos['edad'] = 24;

    $contador = 1;
    foreach ($datos as $value) {
        echo "dato $contador:  $value<br>";
        $contador++;
    }

    ?>
</div><br>

<div style="border: 1px solid black; width: 50%">
    <h1><b>Ejercicio 4</b></h1>

    <?php
    $datos = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => 23, "ciudad" => "bcn");
    $datos['edad'] = 24;

    unset($datos["ciudad"]);
    var_dump($datos);
    ?>
</div><br>

<div style="border: 1px solid black; width: 15%">
    <h1><b>Ejercicio 5</b></h1>

    <?php

    $letters = "a,b,c,d,e,f";
    $arrayExploded = explode(",", $letters);
    
    for($i = sizeOf($arrayExploded); $i >0; $i--){
        echo "letter $i º: " . $arrayExploded[$i-1] . "<br>";
    }
    ?>
</div><br>

<div style="border: 1px solid black; width: 40%">
    <h1><b>Ejercicio 6</b></h1>

    <?php

    $notas = array("Miguel" => 5, "Luís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe"=> 1);
    arsort($notas);

    echo "Notas de los estudiantes: ";
    foreach($notas as $i => $j){
        echo "$i: $j ";
    }
    ?>
</div><br>

<div style="border: 1px solid black; width: 25%">
    <h1><b>Ejercicio 7</b></h1>

    <?php

    $notas = array("Miguel" => 5, "Luís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe"=> 1);
    arsort($notas);
    $suma = 0;

    echo "Notas de los estudiantes: ";
    foreach($notas as $i => $j){
        $suma+= $j;
    }

    $media = number_format($suma/count($notas), $decimals = 2);
    echo "Media de las notas: $media<br>";

    echo "Alumnos con nota por encima de la media:<br>";
    foreach($notas as $i => $j){
        if($j > $media){
            echo $i . "<br>";
        }
    }
    ?>
</div><br>

<div style="border: 1px solid black; width: 25%">
    <h1><b>Ejercicio 8</b></h1>

    <?php
    $notas = array("Miguel" => 5, "Luís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe"=> 1);
    
    asort($notas);
    $alta = 0;
    $nombre;
    
    foreach($notas as $i => $j){
        if($j > $alta){
            $alta = $j;
            $nombre = $i;
        }
    }
    echo "La nota mas alta es $alta y el mejor alumno es $nombre";
    ?>
</div><br>

</body>
</html>