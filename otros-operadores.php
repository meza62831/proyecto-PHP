<?php

// Operadores de asignación
/* $edad_de_jaimito = ($edad_de_pepito = 18) + 5;

echo "La edad de pepito es " . $edad_de_pepito . "\n";
echo "La edad de jaimito es " . $edad_de_jaimito ; */

// Operadores de incremento
$contador = 1;

# $contador = $contador + 1;
# $contador += 1;
# $contador++;

/* 

+=
-=
*=
/=

*/

/* $nombre = "Carlos";
# $nombre = $nombre . " " . "Santana";
$nombre .= " " . "Santana";

echo $nombre; */

$contador = 1;
++$contador;                            // 2

$resultado = ++$contador;               // $contador = 2, $resultado = 2
$resultado = $contador++;               // $contador = 2, $resultado = 1

echo $resultado;

echo "\n";