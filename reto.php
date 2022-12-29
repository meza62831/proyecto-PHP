<?php

$time = readline("Ingrese la hora en formato (hh:mm:ss):  ");   // Solicita las horas, minutos y segundos.

$array_time = explode(':',$time);                               // Divide el input de acuerdo al doble punto.

$seconds = (int) $array_time[0]*3600;                           // Convierte las horas en segundos.
$seconds += (int) $array_time[1]*60;                            // Convierte y suma los minutos en segundos.
$seconds += (int) $array_time[2];                               // Suma los segundos.


echo "En total son $seconds segundos.";                         // Muestra el resultado de la operación.

echo "\n";