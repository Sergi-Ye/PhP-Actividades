<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$suma = 0;
$rep = 0;
$par = 0;
$impar = 0;

do{

    $num1 = rand(0, 20);
    $suma+= $num1;
    $rep++;

    if ($num1 % 2 == 0){
        $par++;
    }
    else {
        $impar++;
    }

    echo $num1 . ", ";

 
}while($suma < 100);

echo "<br>";

echo "The sum total is " . $suma;

echo "<br>";

echo "There were " . $rep . " numbers";

echo "<br>";

echo "There were " . $par . " pares";

echo "<br>";

echo "There were " . $impar . " impares";


?>

</body>
</html>