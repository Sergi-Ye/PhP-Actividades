<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>


    <?php
    // Comprueba si var name se ha recibido
    // Php permite solo modificar ?datos? antes del cliente??????? javascript ns
    if (isset($_GET['name'])) {
    
        $name = htmlspecialchars($_GET['name']);
        $surname = htmlspecialchars($_GET['Surname']);
        $num1 = htmlspecialchars($_GET['Num1']);
        $num2 = htmlspecialchars($_GET['Num2']);

        $suma = $num1+$num2;

        echo "<h3>Hello, $name $surname !</h3>";
        echo "La suma de " . $num1 . " y " . $num2 . " = " . $suma;

    }
    ?>

<h2>Simple Greeting Form</h2>

<form method="get">
    Name: <input type="text" name="name"> <br>
    Surname: <input type="text" name="Surname"> <br>
    Num1: <input type="text" name="Num1"> <br>
    Num2: <input type="text" name="Num2"> <br>
    
    <input type="submit" value="Submit">
</form>
    
</body>
</html>