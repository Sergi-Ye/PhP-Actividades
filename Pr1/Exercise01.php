<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!--Exercise01.php
    1. Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las
    variables y los resultados de sus operaciones.
    2. Muestra cuál es mayor, cuál menor o si son iguales.
    3. Si las dos variables son valores superiores a 1,
        a. calcula el área del triángulo con base y altura igual a los valores de las
        variables.
-->

<?php

//Los comentarios puden ser con // o # en php

//Variables 

$num1 = 8;
$num2 = 2;

# Operaciones

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = $num1 / $num2;

echo "The numbers are: " . $num1 . " and " .  $num2 . "<br>";
echo "The sum of " . $num1 . " + " .  $num2 . " = " . $suma . "<br>";
echo "The substraction of " . $num1 . " - " .  $num2 . " = " . $resta . "<br>";
echo "The multiplication of " . $num1 . " * " .  $num2 . " = " . $multiplicacion . "<br>";
echo "The division of " . $num1 . " / " .  $num2 . " = " . $division . "<br>";

//mayor/menos/igual 
if ($num1 > $num2) {
    echo "The " . $num1 . " is greater than " . $num2 . "<br>";
}
else if ($num1 < $num2){
    echo "The " . $num1 . " is smaller than " . $num2 . "<br>";
}

else {
    echo "The " . $num1 . " is equal to " . $num2 . "<br>";
}

//area/altura

if ($num1 > 1 && $num2 > 1) {

    $areat = $num1 * $num2 / 2;
    echo "The triangle area is " . $areat . "<br>";

}

?>


</body>
</html>