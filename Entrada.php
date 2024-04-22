<!DOCTYPE html>
<html lang="en">

<style>
    .box {
        border: 2px black;
        border-radius: 5px;
        border-style: inset;
        padding: 2%;
        margin-top: 5%;
        width: 400px;
        margin-left: 35%;
        align-items: center;
        background-color: blueviolet;
        color: black;
    }

    h1 {
        text-align: center;
        color: white;
    }

    body{
        background-image: url(./Images/Fondo\ 2.jpg);
        background-repeat: no-repeat;
        background-size: 1600px;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="box text-center">
        <h1><b>Ingrese Jugadores</b></h1>
        <form action="./Tablero.php" method="post">
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text bg-secondary">Jugador 1</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="jugador1" placeholder="Juan">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text bg-secondary">Jugador 2</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="jugador2" placeholder="Pedro">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text bg-secondary">Jugador 3</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="jugador3" placeholder="María">
            </div>
            <button type="submit" class="bg-success rounded">Enviar</button>
        </form>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>