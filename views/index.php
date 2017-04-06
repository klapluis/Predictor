<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Predictor">
        <meta name="author" content="Kevin Atiencia">

        <title>Predictor Pico y placa</title>
        <link href="../modelador/css/bootstrap.min.css" rel="stylesheet">
        <link href="../modelador/css/bootstrap.css" rel="stylesheet">

        <script type="text/javascript" src="../modelador/js/jquery.validate.js"></script>
        <script type="text/javascript" src="../modelador/js/jquery.js"></script>
        <script type="text/javascript" src="../modelador/js/bootstrap.js"></script>
        <script type="text/javascript" src="../modelador/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container active">
            <h1 class="text-center">Predictor Pico y Placa</h1>
            <div class="well">
                <form action="call.php" method="post">
                    <div class="form-group">
                        <label for="placaVehicular">Número de Placa Vehicular</label>
                        <input type="number" min="0" max="999" maxlength="3" required class="form-control" id="numPlaca" name="numPlaca" placeholder="Número de placa">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="date" required class="form-control" name="fecha">
                    </div>
                    <div class="form-group">
                        <label for="hora">Hora</label>
                        <input type="time" required class="form-control" name="hora">
                    </div>
                    <button type="submit" class="btn btn-default">Ejecutar</button>
                </form>
            </div>
        </div>
    </body>
</html>