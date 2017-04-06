<?php

/**
 * Description of PicoPlaca
 *
 * @author Kevin Atiencia
 */
class Vehiculo {
    //clase pricipal
    public function predecir($numPlaca, $fecha, $hora) {
        date_default_timezone_set('America/Guayaquil');//zona horaria
        $dia = date("w", strtotime($fecha));// determinar el dia 1 Lunes 2 Martes 3 Miecoles 4 Jueves 5 Viernes
        $ultimoDigito = $numPlaca[2];//obtener el ultimo digito de la placa
        $j = 1;//contador impar
        $k = 2;//contadores par
        $contador=1;//contador
        $arrayRespuesta = array('restriccion'=>'No');//por defecto no hay restriccion
        $dias = array('Lunes', 'Martes', 'Miercoles', 'Jueves');//dias de la semana
        //se determina en base al ultimo digito de la placa que dia corresponde la restriccion
        for ($i = 0; $i < 4; $i++) {
            if ($ultimoDigito == 0 || $ultimoDigito == 9) {//si el ultimo digito corresponde el dia viernes
                if($dia == 5){//si la fecha corresponde al mismo dia, existe restriccion 
                    $arrayRespuesta['restriccion'] = "Si";
                }
                $arrayRespuesta['dia'] = "Viernes";
            } else {
                if ($ultimoDigito == $j || $ultimoDigito == $k) {
                    $arrayRespuesta['dia'] = $dias[$i];
                    if($dia == $contador){
                        $arrayRespuesta['restriccion'] = "Si";
                    }
                }
            }
            $contador=$contador+1;//incremento de contadores
            $j = $j + 2;
            $k = $k + 2;
        }
        if ($arrayRespuesta['restriccion'] != "Si") {//si no existe restriccion
            if ($dia != 6 && $dia != 0) {//controlar si la fecha es sabado o domingo
                //controlar si existe la restriccion en las horas
                if ($hora >= "07:00" && $hora <= "09:30") {
                    $arrayRespuesta['restriccion'] = "Si";
                } else {
                    if ($hora >= "16:00" && $hora <= "19:30") {
                        $arrayRespuesta['restriccion'] = "Si";
                    } else {
                        $arrayRespuesta['restriccion'] = "No";
                    }
                }
            } else {
                $arrayRespuesta['restriccion'] = "No";
            }
        }
        $arrayRespuesta['numPlaca'] = $numPlaca;
        $arrayRespuesta['fecha'] = $fecha;
        $arrayRespuesta['hora'] = $hora;
        return $arrayRespuesta;
    }

}
