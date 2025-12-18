<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 7</title>
    <style>
        body {
            background-color: #f0f0f0;
        }
        header {
            padding: 10px;
            text-align: center;
            vertical-align: middle;
        }
        #Principal {
            background-color: white;
            text-align: center;
            border-radius: 20px;
        }
        #jugadores>div {
            display: inline-block;
            text-align: left;
            background-color: #f0f0f0;
            margin: 20px;
            padding: 20px;
            padding-right: 50px;
            padding-left: 50px;
            border-radius: 20px;
            width: 300px;
        }
        #jugadores div input {
            width: 250px;
        }
        #rondas {
            padding: 15px;
        }
        #php {
            text-align: center;
        }
        #php div{
            display: inline-block;
            text-align: center;
            padding-left: 100px;
            padding-right: 100px;
        }
        #php img{
            width: 100px;
        }
        #php table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align: center;
        }
        #php th, td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>

</head>

<body>

    <header>
        <h1><b>Ejercicio 7</b></h1>
    </header>

    <div id="Principal">

        <form action="" method="post">

            <div id="jugadores">

                <div class="j1">

                    <h4><b>Jugador 1</b></h4>

                    <div style="padding-bottom: 10px;">
                        Luchador:<br>
                        <input list="luchador1" name="luch1">
                        <datalist id="luchador1">
                            <option value="Doraemon">
                            <option value="Nobita">
                        </datalist>
                        <br>
                    </div>

                    <div>
                        Objeto:<br>
                        <input list="objeto1" name="obj1">
                        <datalist id="objeto1">
                            <option value="Sarten">
                            <option value="Dorayaki">
                        </datalist>
                        <br>
                    </div>

                </div>

                <div class="j2">


                    <h4><b>Jugador 2</b></h4>

                    <div style="padding-bottom: 10px;">
                        Luchador:<br>
                        <input list="luchador2" name="luch2">
                        <datalist id="luchador2">
                            <option value="Doraemon">
                            <option value="Nobita">
                        </datalist>
                        <br>
                    </div>

                    <div>
                        Objeto:<br>
                        <input list="objeto2" name="obj2">
                        <datalist id="objeto2">
                            <option value="Sarten">
                            <option value="Dorayaki">
                        </datalist>
                        <br>
                    </div>


                </div>

            </div>

            <div id="rondas">

                Rondas(1-10):<br>
                <input type="text" name="rondas" style="width: 500px">
                <br><br>
                <input type="submit" value="¡Luchar!" name="submit">


            </div>
        </form>
    </div>

    <div id="php">
        <?php

        if (isset($_POST["submit"])) {

            $jugador1 = $_POST["luch1"];
            $jugador2 = $_POST["luch2"];
            $obj1 = $_POST["obj1"];
            $obj2 = $_POST["obj2"];
            $rondas = $_POST["rondas"];
            $nWin1 = 0;
            $nWin2 = 0;
            $nEmpate = 0;

            echo "<h2><b>RESULTADOS POR RONDA</b></h2>";

            echo "
            <table>
                <tr>
                    <th>Ronda</th>
                    <th>Jug 1: $jugador1</th>
                    <th>Jug 2: $jugador2</th>
                    <th>Resultado</th>
                </tr>
            ";

            for ($i = 1; $i <= $rondas; $i++) {
                if ($obj1 == "Sarten") {
                    $daño1 = rand(1, 8);
                } else {
                    $n1 = rand(1, 4);
                    $n2 = rand(1, 4);
                    $daño1 = $n1 + $n2;
                }
                if ($obj2 == "Sarten") {
                    $daño2 = rand(1, 8);
                } else {
                    $n3 = rand(1, 4);
                    $n4 = rand(1, 4);
                    $daño2 = $n3 + $n4;
                }

                if($daño1 > $daño2){
                    $ganador = $jugador1;
                    $nWin1++;
                }else if($daño1 < $daño2){
                    $ganador = $jugador2;
                    $nWin2++;
                }else{
                    $ganador = "Empate";
                    $nEmpate++;
                }

                if($ganador == $jugador1){
                    $color = "Green";
                }else if($ganador == $jugador2){
                    $color = "Blue";
                }else{
                    $color = "grey";
                }

                echo "
                    <tr>
                        <td>$i</td>
                        <td>$daño1</td>
                        <td>$daño2</td>
                        <td style='color: $color'>Ganador: $ganador</td>

                    </tr>
                ";
            }

            echo "</table>";

            if($nWin1 > $nWin2){
                echo "<h3><b>🏆 Ha ganado  $jugador1</b></h3><br>";
            }else if($nWin1 < $nWin2){
                echo "<h3><b>🏆 Ha ganado  $jugador2</b></h3><br>";
            }else{
                echo "<h3><b>Ha sido Empate</b></h3><br>";
            }

            if($jugador1 == "Doraemon"){
                $victDora = $nWin1;
                $victNobi = $nWin2;
            }else{
                $victDora = $nWin2;
                $victNobi = $nWin1;
            }

            echo "
                <div>
                    <p>Victorias: $victDora</p>
                    <img src='doraemon.png'>
                </div>

                <div>
                    <p>Empates: $nEmpate</p>
                    <img src='vs.png'>
                </div>

                <div>
                    <p>Victorias: $victNobi</p>
                    <img src='nobita.png'>
                </div>
            ";

        }

        ?>
    </div>

</body>

</html>