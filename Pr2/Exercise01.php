<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    
<?php
 if (isset($_GET['name'])){

    $name = (String)$_GET['name'];
    $surname = htmlspecialchars($_GET['surname']);

     echo "<h3>Nombre: $name</h3>";
     echo "<h3>Apellido: $surname</h3>";
 }


?>
<div style="border: 1px solid black; padding: 10px; display: inline-block;">
    <p><b>Datos personales</b></p>
    <form method="get">
        Name: <br>
            <input type="text" name="name"> <br>

        Surname: <br>
            <input type="text" name="surname"> <br>

        <input type="submit" value="Submit">

    </form>
</div>

</body>
</html>