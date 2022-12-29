<?php

/* $numerito = "5";

var_dump($numerito);

$numerito = (int) $numerito;

var_dump($numerito); */

/* $dias = 5.89;
$dias = (int) $dias;

var_dump($dias); */

/* $banderita = 0;

$banderita = (bool) $banderita;

var_dump($banderita); */


//Fácil

echo "Fácil \n";

$nombre = "Carlos";                             // String
var_dump($nombre);
echo "\n";
$apellido = "Gómez";                            // String
var_dump($apellido);
echo "\n";
$edad = 18;                                     // Integer
var_dump($edad);
echo "\n";
$aprobado = true;                               // Bool
var_dump($aprobado);
echo "\n";

//Medio

echo "Medio \n";

$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;         // Float
var_dump($promedio);
echo "\n";
$nombre_completo = $nombre . " " . $apellido;   // String
var_dump($nombre_completo);
echo "\n";
$presento_examen = (bool) 1;                    // Bool
var_dump($presento_examen);
echo "\n";

//Avanzado

echo "Avanzado \n";

$numero_preguntas = 5 + "5";                    // Integer
var_dump($numero_preguntas);
echo "\n";
$numero_respuestas = "5" + 5;                   // Integer
var_dump($numero_preguntas);
echo "\n";
$promedio_maximo = $numero_respuestas / 1.0;    // Float
var_dump($promedio_maximo);
echo "\n";
// $michis = 3 + "5 michis";                       // Integer
var_dump($michis);
echo "\n";

echo "\n";