<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    if (isset($_GET['num1'])) {
        $num1 = (string)$_GET['num1'];
        $num2 = (string)$_GET['num2'];

        if ($num1 > $num2) {
            echo "El número $num1 es más grande que el número $num2";
        } else if ($num1 < $num2) {
            echo "El número $num1 es más pequeño que el número $num2";
        } else {
            echo "El número $num1 es igual que el número $num2";
        }
    }

    ?>
    <div style="display: inline-block; border: 1px solid black; padding: 10px;">

        <p><b>Introduce Números</b></p>

        <form method="get">

            Número 1: <br>
            <input type="text" name="num1"> <br>

            Número 2: <br>
            <input type="text" name="num2"> <br>

            <input type="submit" value="Submit">


        </form>
    </div>

</body>

</html>