<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <div style="display: inline-block; vertical-align: top;">
        <?php

        if (isset($_GET['num1']) && isset($_GET['num2'])) {
            $num1 = (int)$_GET['num1'];
            $num2 = (int)$_GET['num2'];

            if ($num1 > 20 || $num2 > 20) {
                echo "<p>Error: Los numeros no deben ser mayores que 20</p>";
            } else {
                echo "<b>Lista de menor a mayor:</b><br>";

                if ($num1 < $num2) {
                    for ($valor1 = $num1; $valor1 <= $num2; $valor1++) {
                        echo "<ul><li style='color: red;'>$valor1</li></ul>";
                    }
                } else if ($num1 > $num2) {
                    for ($valor2 = $num2; $valor2 <= $num1; $valor2++) {
                        echo "<ul><li style='color: red;'>$valor2</li></ul>";
                    }
                }

                echo "<b>Lista de mayor a menor:</b><br>";

                if ($num1 < $num2) {
                    for ($valor1 = $num2; $valor1 >= $num1; $valor1--) {
                        echo "<ul><li style='color: blue;'>$valor1</li></ul>";
                    }
                } else if ($num1 > $num2) {
                    for ($valor2 = $num1; $valor2 >= $num2; $valor2--) {
                        echo "<ul><li style='color: blue;'>$valor2</li></ul>";
                    }
                }
            }
        }

        ?>
    </div>

    <div style="display: inline-block; border: 1px solid black; padding: 10px; vertical-align: top;">
        <p><b>Introduce números entre 0 y 20</b></p>
        <form method="get">
            Número 1:
            <input type="text" name="num1"> <br>

            Número 2:
            <input type="text" name="num2">
            <br>

            <input type="submit" value="Submit">

        </form>
    </div>

</body>

</html>
