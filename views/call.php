<?php
require_once("../clases/Vehiculo.php");//requiere del archivo vehiculo
$vehiculo = new Vehiculo();//instancia un objeto
$response = $vehiculo->predecir($_POST["numPlaca"], $_POST["fecha"], $_POST["hora"]);//envio por parametros a la funcion predecir
?>
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
                <div class="row">
                    <div class="col-md-1">
                        <a href="../views/"type="button" class="btn btn-primary">Atras</a>
                    </div>
                    <div class="col-md-11">
                        <?php
                        if ($response['restriccion'] == "No") {
                            ?>
                            <p class="bg-success text-justify"> 
                                EL vehículo  con número de placa: <?php echo $response['numPlaca']; ?>, puede circular
                                libremente por la ciudad, excepto el día  <?php echo $response['dia']; ?> y el resto 
                                de la semana en el siguiente horario: desde las 7:00 a las 9:30 en la mañana y desde las 16:00 
                                hasta las 19:30 en la tarde.
                            </p>
                            <?php
                        } else {
                            ?>
                            <p class="bg-danger text-justify">
                                EL vehículo con número de placa: <?php echo $response['numPlaca']; ?>, no puede transitar
                                por la ciudad de Quito el día  <?php echo $response['dia']; ?>, además no puede circular a las  
                                <?php echo  $response['hora'].' del '.$response['fecha']; ?>,
                                lo puede hacer el resto de la semana, excepto en el siguiente horario: desde las 7:00 a las 9:30 en
                                la mañana y desde las 16:00 hasta las 19:30 en la tarde, según  la restricción de Pico y Placa
                            </p>
                        <?php } ?>
                    </div>
                    <div class="col-md-12">
                        <img src="../modelador/img/picoyplaca.jpg" alt="Smiley face" class="img-thumbnail">
                    </div>
                </div>
            </div>
    </body>
</html>