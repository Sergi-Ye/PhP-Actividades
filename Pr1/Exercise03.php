<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//1

$num1 = 12;
$num2 = 15;

//2

for ($bucle1=0; $bucle1 <= $num1 ; $bucle1++) { 


    $par = $bucle1 % 2;

    if ($par == 0) {
        echo $bucle1 . ", ";
    }


}
echo "<br>";

//3

$bucle2 = $num2;

while($bucle2>=0) {
    
    echo $bucle2 . ", ";

    $bucle2--;

}
echo "<br>";

//4 
$var1 = $num1;
$var2 = $num2;

if ($var1 > $var2) {
    echo $var1;
}
else {
    do {
    echo $var1 . ", ";
    $var1++;

    } while ($var1 <= $var2);
}

?>


    
</body>
</html>