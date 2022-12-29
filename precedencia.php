<?php

/* $contador = 1;
$resultado = $contador++;

echo $resultado; */

// Tiene asociatividad de izquierda
// echo 1 - 2 - 3 - 4;

// Tiene asociatividad de derecha
/* $b = 5;
$c = 10;
$a = $b = $c;

echo $a; */

// Revisión de experimento
$michis_4_patas = true;
$michis_programan = false;

// Precedencia de derecha en el igual, primero hacer resultado igual a true
# $resultado = $michis_4_patas and $michis_programan;

// Corrección
$resultado = ($michis_4_patas and $michis_programan);

var_dump($resultado);

echo "\n";