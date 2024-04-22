<?php
function lanzarDado()
{
    $numero = rand(1, 12);
    echo "Número obtenido: $numero";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["jugador1"])) {
        $_SESSION["jugador1"] = $_POST["jugador1"];
    }
    if (isset($_POST["jugador2"])) {
        $_SESSION["jugador2"] = $_POST["jugador2"];
    }
    if (isset($_POST["jugador3"])) {
        $_SESSION["jugador3"] = $_POST["jugador3"];
    }
}

function sumarNumerosLanzados()
{
    if (isset($_SESSION['lanzamientos'])) {
        return array_sum($_SESSION['lanzamientos']);
    } else {
        return 0;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero de 10x10 con Números y 5 Colores (PHP)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .box {
            display: grid;
            grid-template-columns: repeat(10, 50px);
            padding: 3%;
            width: 583px;
            margin-left: 800px;
            margin-top: -44%;
            color: black;
        }

        .box div {
            height: 50px;
            text-align: center;
            line-height: 50px;
            font-size: 20px;
            border: 1px solid black;
            border-style: inset;
        }

        .jugador1 {
            border: 2px solid;
            border-color: black;
            width: 350px;
            padding: 1%;
            margin-left: 15%;
        }

        .jugador2 {
            border: 2px solid;
            border-color: black;
            width: 350px;
            padding: 1%;
            margin-left: 15%;
        }

        .jugador3 {
            border: 2px solid;
            border-color: black;
            width: 350px;
            padding: 1%;
            margin-left: 15%;
        }

        body {
            background-image: url(./Images/Fondo\ 3.jpg);
            background-repeat: no-repeat;
            background-size: 1600px;
            color: white;
        }
    </style>
</head>

<body>
    <img src="./Images/Serpiente-removebg-preview.png" style="z-index:2; margin-top:35px; margin-left:975px; position: absolute; width:120px; height:320px; transform: rotate(-30deg)">
    <img src="./Images/Escalera_2-removebg-preview.png" style="z-index:2; margin-top:300px; margin-left:1000px; position: absolute; width:120px; height:300px; transform: rotate(15deg)">
    <img src="./Images/Serpiente_2-removebg-preview.png" style="z-index:2; margin-top:400px; margin-left:1200px; position: absolute; width:150px; height:150px; transform: rotate(0deg)">
    <img src="./Images/Escalera-removebg-preview.png" style="z-index:2; margin-top:145px; margin-left:1175px; position: absolute; width:150px; height:100px; transform: rotate(-65deg)">
    <img src="./Images/Escalera_3-removebg-preview.png" style="z-index:2; margin-top:335px; margin-left:910px; position: absolute; width:75px; height:75px; transform: rotate(-50deg)">
    <img src="./Images/Escalera_4-removebg-preview.png" style="z-index:2; margin-top:90px; margin-left:900px; position: absolute; width:150px; height:230px; transform: rotate(30deg)">
    <img src="./Images/Serpiente_1-removebg-preview.png" style="z-index:2; margin-top: 265px; margin-left:1225px; position: absolute; width:75px; height:150px; transform: rotate(25deg)">
    <img src="./Images/Serpiente_4-removebg-preview.png" style="z-index:2; margin-top:75px; margin-left:1075px; position: absolute; width:150px; height:35px; transform: rotate(-5deg)">

    <h1 class="text-center">Serpientes y Escaleras</h1>
    <div class="jugador1">
        <?php

        if (isset($_SESSION["jugador1"])) {
            echo "Jugador 1: " . $_SESSION["jugador1"] . "<br>";
        }
        ?>

        <form method="post">
            <input type="hidden" name="jugador1" value="<?php echo isset($_SESSION["jugador1"]) ? $_SESSION["jugador1"] : ""; ?>">
            <input type="text" placeholder="Nombre del jugador 1" value="<?php echo isset($_SESSION["jugador1"]) ? $_SESSION["jugador1"] : ""; ?>" disabled>
            <button type="submit" name="lanzar">Lanzar</button>
        </form>

        <?php

        if (isset($_POST['lanzar'])) {
            lanzarDado();
        }
        ?>

        <img src="./Images/Ficha_amarilla.png" height="100px" width="175px" class="ficha" style="top: 50px; left: 50px;">
    </div><br>


    <div class="jugador2">
        <?php

        if (isset($_SESSION["jugador2"])) {
            echo "Jugador 1: " . $_SESSION["jugador2"] . "<br>";
        }
        ?>

        <form method="post">
            <input type="hidden" name="jugador2" value="<?php echo isset($_SESSION["jugador2"]) ? $_SESSION["jugador2"] : ""; ?>">
            <input type="text" placeholder="Nombre del jugador 1" value="<?php echo isset($_SESSION["jugador2"]) ? $_SESSION["jugador2"] : ""; ?>" disabled>
            <button type="submit" name="lanzar">Lanzar</button>
        </form>

        <?php

        if (isset($_POST['lanzar'])) {
            lanzarDado();
        }
        ?>
        <img src="./Images/Ficha_verde.png" height="100px" width="175px" class="ficha" style="top: 50px; left: 50px;">
    </div><br>

    <div class="jugador3">
        <?php
        if (isset($_SESSION["jugador3"])) {
            echo "Jugador 1: " . $_SESSION["jugador3"] . "<br>";
        }
        ?>

        <form method="post">
            <input type="hidden" name="jugador3" value="<?php echo isset($_SESSION["jugador3"]) ? $_SESSION["jugador3"] : ""; ?>">
            <input type="text" placeholder="Nombre del jugador 1" value="<?php echo isset($_SESSION["jugador3"]) ? $_SESSION["jugador3"] : ""; ?>" disabled>
            <button type="submit" name="lanzar">Lanzar</button>
        </form>

        <?php
        if (isset($_POST['lanzar'])) {
            lanzarDado();
        }
        ?>

        <img src="./Images/Ficha_azul.png" height="100px" width="175px" class="ficha" style="top: 50px; left: 50px;">
    </div><br>

    <div class="box">
        <?php
        $colores = array("red", "yellow", "blue", "white", "green");
        $numbers = array();
        $number = 100;
        $increment = -1;
        for ($i = 0; $i < 10; $i++) {

            $numbers[$i] = array();
            for ($j = 0; $j < 10; $j++) {

                array_push($numbers[$i], $number);
                $number += $increment;
            }

            if ($i % 2 != 0) {
                $numbers[$i] = array_reverse($numbers[$i]);
            }
        }

        foreach ($numbers as $row) {
            foreach ($row as $num) {

                $color = $colores[array_rand($colores)];

                echo '<div style="background-color:' . $color . ';">' . $num . '</div>';
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>